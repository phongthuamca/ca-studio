<?php
declare(strict_types=1);

define('SITE_ROOT', dirname(__DIR__));

function normalize_path(string $path): string
{
    return rtrim(str_replace('\\', '/', strtolower($path)), '/');
}

function site_base_path(): string
{
    static $basePath;

    if ($basePath !== null) {
        return $basePath;
    }

    $documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
    $projectRoot = SITE_ROOT;

    if ($documentRoot === '') {
        $basePath = '';
        return $basePath;
    }

    $normalizedDocumentRoot = normalize_path($documentRoot);
    $normalizedProjectRoot = normalize_path($projectRoot);

    if (!str_starts_with($normalizedProjectRoot, $normalizedDocumentRoot)) {
        $basePath = '';
        return $basePath;
    }

    $relativePath = trim(substr($normalizedProjectRoot, strlen($normalizedDocumentRoot)), '/');
    $basePath = $relativePath === '' ? '' : '/' . $relativePath;

    return $basePath;
}

function site_url(string $path = ''): string
{
    $basePath = site_base_path();
    $cleanPath = ltrim($path, '/');

    if ($cleanPath === '') {
        return $basePath === '' ? '/' : $basePath . '/';
    }

    return ($basePath === '' ? '' : $basePath) . '/' . $cleanPath;
}

function asset_url(string $path): string
{
    return site_url('assets/' . ltrim($path, '/'));
}

$site = [
    'name' => 'CÁ STUDIO',
    'tagline' => 'Architectural Sound Design',
    'address' => 'Số 4, ngách 76, ngõ 146 đường 19/5, Văn Quán, Hà Đông, Hà Nội',
    'phone' => '0969 862 611',
    'email' => 'phongthuamca@gmail.com',
];

$navigation = [
    ['key' => 'home', 'label' => 'Trang chủ', 'href' => site_url()],
    ['key' => 'service', 'label' => 'Dịch vụ', 'href' => site_url('service/')],
    ['key' => 'artists', 'label' => 'Nghệ sĩ', 'href' => site_url('artists/')],
    ['key' => 'pricing', 'label' => 'Bảng giá', 'href' => site_url('pricing/')],
    ['key' => 'news', 'label' => 'Tin tức', 'href' => site_url('news/')],
];

