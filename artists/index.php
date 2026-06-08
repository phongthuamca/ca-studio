<?php
declare(strict_types=1);

require dirname(__DIR__) . '/includes/bootstrap.php';

$pageTitle = 'Nghệ sĩ | CÁ STUDIO';
$pageDescription = 'Đội ngũ nghệ sĩ, producer và kỹ sư âm thanh đồng hành cùng các dự án tại CÁ STUDIO.';
$pageKey = 'artists';

require SITE_ROOT . '/includes/header.php';
require SITE_ROOT . '/pages/artists.php';
require SITE_ROOT . '/includes/footer.php';

