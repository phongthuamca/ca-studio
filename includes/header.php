<?php
declare(strict_types=1);

if (!isset($pageTitle, $pageDescription, $pageKey)) {
    throw new RuntimeException('Page metadata is missing.');
}

$headerVariant = $headerVariant ?? 'default';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset_url('css/app.css'); ?>">
    <link rel="stylesheet" href="<?= asset_url('css/custom.css'); ?>">
    <link rel="icon" type="image/png" href="<?= asset_url('images/logo.png'); ?>">
</head>
<body class="min-h-screen bg-[var(--surface)] text-[var(--on-surface)] antialiased">
    <header class="sticky top-0 z-50 border-b border-[color:var(--outline-variant)]/80 bg-[color:rgba(252,249,245,0.92)] backdrop-blur" data-navbar>
        <div class="site-shell flex h-20 items-center justify-between md:h-24">
            <a class="flex items-center gap-4" href="<?= site_url(); ?>">
                <img class="h-10 w-10 rounded-lg object-cover" src="<?= asset_url('images/logo.png'); ?>" alt="CÁ STUDIO logo">
                <span class="text-xl font-semibold tracking-[-0.04em] md:text-2xl"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?></span>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <?php foreach ($navigation as $item): ?>
                    <a
                        class="nav-link <?= $pageKey === $item['key'] ? 'nav-link-active' : ''; ?>"
                        href="<?= $item['href']; ?>"
                    >
                        <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <div class="hidden md:block">
                <a class="button-primary" href="https://zalo.me/0969862611">Đặt lịch ngay</a>
            </div>

            <button
                class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-[color:var(--outline-variant)] text-[var(--on-surface)] md:hidden"
                type="button"
                aria-label="Mở menu"
                aria-expanded="false"
                data-menu-toggle
            >
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>

        <div class="hidden border-t border-[color:var(--outline-variant)] bg-[var(--surface-container-lowest)] md:hidden" data-mobile-menu>
            <div class="site-shell flex flex-col gap-5 py-6">
                <?php foreach ($navigation as $item): ?>
                    <a
                        class="nav-link <?= $pageKey === $item['key'] ? 'nav-link-active' : ''; ?>"
                        href="<?= $item['href']; ?>"
                    >
                        <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                <?php endforeach; ?>
                <a class="button-primary mt-2 w-full" href="https://zalo.me/0969862611">Đặt lịch ngay</a>
            </div>
        </div>
    </header>

