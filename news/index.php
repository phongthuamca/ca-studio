<?php
declare(strict_types=1);

require dirname(__DIR__) . '/includes/bootstrap.php';

$pageTitle = 'Tin tức | CÁ STUDIO';
$pageDescription = 'Tạp chí âm thanh và nghệ thuật sản xuất từ đội ngũ chuyên gia tại CÁ STUDIO.';
$pageKey = 'news';

require SITE_ROOT . '/includes/header.php';
require SITE_ROOT . '/pages/news.php';
require SITE_ROOT . '/includes/footer.php';

