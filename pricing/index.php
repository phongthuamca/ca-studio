<?php
declare(strict_types=1);

require dirname(__DIR__) . '/includes/bootstrap.php';

$pageTitle = 'Bảng giá | CÁ STUDIO';
$pageDescription = 'Các gói thu âm, sản xuất album và thuê phòng theo nhu cầu tại CÁ STUDIO.';
$pageKey = 'pricing';

require SITE_ROOT . '/includes/header.php';
require SITE_ROOT . '/pages/pricing.php';
require SITE_ROOT . '/includes/footer.php';

