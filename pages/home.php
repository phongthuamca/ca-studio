<?php
declare(strict_types=1);

$spaces = [
    [
        'title' => 'Phòng Điều Khiển (Control Room)',
        'description' => 'Trung tâm não bộ với console analog cao cấp, hệ thống kiểm âm chuẩn xác, thiết kế âm học hoàn hảo.',
        'slot' => 'home-control-room',
        'src' => 'images/home/img02.png',
    ],
    [
        'title' => 'Phòng Thu Chính (Live Room)',
        'description' => 'Không gian rộng lớn với trần cao, phù hợp cho thu âm ban nhạc, dàn nhạc dây và trống acoustic.',
        'slot' => 'home-live-room',
        'src' => 'images/home/img03.png',
    ],
    [
        'title' => 'Phòng Thu Vocal (Vocal Suite)',
        'description' => 'Cách âm tuyệt đối, thiết kế ấm cúng giúp nghệ sĩ tập trung tối đa cho những màn trình diễn xuất thần.',
        'slot' => 'home-vocal-suite',
        'src' => 'images/home/img04.png',
    ],
];

$projects = [
    'Album Vàng - Nghệ sĩ A',
    'OST Phim Điện Ảnh X',
    'Single Bạch Kim - Ban nhạc B',
    'Live Session Acoustic',
];

$testimonials = [
    [
        'name' => 'Singer Thủy Lê',
        'role' => 'Ca sĩ chuyên nghiệp',
        'initial' => 'T',
        'quote' => '“Âm thanh tại CÁ STUDIO thực sự mang lại cảm hứng. Sự tĩnh lặng ở đây giúp tôi nghe được từng rung động nhỏ nhất trong giọng hát của mình.”',
        'src' => 'images/home/fb-img01.jpg',
    ],
    [
        'name' => 'Thái Anh Dương',
        'role' => 'TAD Studio',
        'initial' => 'S',
        'quote' => '“Một trong những phòng thu có thiết kế âm học chuẩn mực nhất mà tôi từng làm việc. Mix nhạc ở đây luôn chính xác khi mang ra các hệ thống khác.”',
        'src' => 'images/home/fb-img02.jpg',
    ],
];
?>
<main>
    <section class="relative overflow-hidden bg-[url('../../assets/images/home/banner01.jpg')] bg-cover bg-center">

        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/40 to-transparent z-0"></div>

        <div class="site-shell grid min-h-[90vh] items-center py-16 md:py-24">
            <div class="relative z-10">
                <span class="section-tag">Phòng thu âm hàng đầu Hà Nội</span>
                <h1 class="section-title mb-6 leading-snug">CÁ STUDIO - KIẾN TẠO<br class="max-sm:hidden"> ÂM THANH ĐẲNG CẤP</h1>
                <p class="mb-8 max-w-xl text-lg leading-8 text-[var(--on-surface-variant)] text-justify">
                    Nơi sự hoàn mỹ của kiến trúc giao thoa cùng độ chính xác tuyệt đối của âm học. Trải nghiệm không gian thu âm chuẩn quốc tế dành cho những nghệ sĩ đích thực.
                </p>
                <div class="flex flex-col gap-4 sm:flex-row">
                    <a class="button-primary" href="#contact">Đặt lịch thu âm</a>
                    <a class="button-secondary" href="<?= site_url('service/'); ?>">Xem dịch vụ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="site-shell py-20 md:py-28">
        <div class="grid items-center gap-12 md:grid-cols-10">
            <div class="md:col-span-6 text-justify">
                <h2 class="section-heading mb-6">Theo đuổi sự thuần khiết của âm thanh</h2>
                <p class="mb-6 text-base leading-8 text-[var(--on-surface-variant)]">
                    Tại CÁ STUDIO, chúng tôi tin rằng âm thanh không chỉ được nghe, mà còn được cảm nhận. Mọi chi tiết kiến trúc, từ vật liệu tán âm đến góc độ vách ngăn, đều được tính toán tỉ mỉ để tạo ra một “sự tĩnh lặng tuyệt đối” - nền tảng hoàn hảo để mọi nốt nhạc vang lên chân thực nhất.
                </p>
                <p class="mb-6 text-base leading-8 text-[var(--on-surface-variant)]">
                    Với trang thiết bị tối tân chuẩn analog và kỹ thuật số hiện đại nhất, chúng tôi cam kết mang đến chất lượng âm thanh vượt trội, đáp ứng mọi tiêu chuẩn khắt khe nhất của các dự án âm nhạc quốc tế.
                </p>
                <a class="inline-flex items-center gap-2 border-b border-[color:var(--primary-container)] pb-1 text-sm font-semibold uppercase tracking-[0.22em] text-[var(--primary)]" href="#spaces">
                    Khám phá không gian
                    <span class="material-symbols-outlined text-base">east</span>
                </a>
            </div>

            <div class="min-h-[380px] md:col-span-4">
                <img
                    class="h-full w-full object-cover rounded-t-full"
                    src="<?= asset_url('images/home/img01.jpg'); ?>"
                    alt="Khách đến thu âm tại CÁ STUDIO"
                    data-slot="home-philosophy"
                >
            </div>
        </div>
    </section>

    <section class="border-y border-[color:var(--outline-variant)]/60 bg-[var(--surface-container-low)] py-20 md:py-28" id="spaces">
        <div class="site-shell">
            <div class="mx-auto mb-12 max-w-4xl text-center">
                <h2 class="section-heading mb-4">Không gian thu âm</h2>
                <p class="leading-8 text-[var(--on-surface-variant)]">Được thiết kế chuyên biệt để đáp ứng mọi nhu cầu từ thu vocal cá nhân đến dàn nhạc giao hưởng.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                <?php foreach ($spaces as $space): ?>
                    <article class="group">
                        <div class="media-frame mb-5 aspect-[4/3]">
                            <img
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                                src="<?= asset_url(htmlspecialchars($space['src'], ENT_QUOTES, 'UTF-8')); ?>"
                                alt="<?= htmlspecialchars($space['title'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-slot="<?= htmlspecialchars($space['slot'], ENT_QUOTES, 'UTF-8'); ?>"
                            >
                        </div>
                        <h3 class="mb-3 text-2xl font-medium tracking-[-0.02em] text-justify"><?= htmlspecialchars($space['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="leading-8 text-[var(--on-surface-variant)] text-justify"><?= htmlspecialchars($space['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php if (false): ?>
    <section class="site-shell py-20 md:py-28">
        <div class="mb-12 flex items-end justify-between gap-6">
            <div>
                <span class="section-tag">Selected Projects</span>
                <h2 class="section-heading">Dự án tiêu biểu</h2>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            <?php foreach ($projects as $index => $project): ?>
                <article class="group relative overflow-hidden rounded-xl border border-[color:var(--outline-variant)]/70">
                    <img
                        class="aspect-square h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                        src="<?= asset_url('images/cover-placeholder.svg'); ?>"
                        alt="<?= htmlspecialchars($project, ENT_QUOTES, 'UTF-8'); ?>"
                        data-slot="home-project-<?= $index + 1; ?>"
                    >
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/65 via-black/10 to-transparent p-4">
                        <p class="text-sm font-medium text-white md:text-base"><?= htmlspecialchars($project, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="bg-[var(--surface-container-highest)] py-20 md:py-28">
        <div class="site-shell">
            <div class="mx-auto mb-12 max-w-2xl text-center leading-tight">
                <h2 class="section-heading mb-4">Khách hàng nói về chúng tôi</h2>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <?php foreach ($testimonials as $testimonial): ?>
                    <article class="surface-card p-8">
                        <div class="mb-5 flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[color:rgba(212,175,55,0.18)] text-lg font-semibold text-[var(--primary)]">
                                <img src="<?= asset_url(htmlspecialchars($testimonial['src'], ENT_QUOTES, 'UTF-8')); ?>" alt="<?= htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8'); ?>" class="h-full w-full rounded-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-medium"><?= htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="text-sm text-[var(--on-surface-variant)]"><?= htmlspecialchars($testimonial['role'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                        <p class="leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars($testimonial['quote'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="site-shell py-20 md:py-28" id="contact">
        <div class="grid gap-12 md:grid-cols-2">
            
            <div class="surface-card p-8 h-full flex flex-col justify-center">
                <h3 class="mb-5 text-2xl font-bold tracking-[-0.02em]">THÔNG TIN CÁ STUDIO</h3>
                <ul class="space-y-4 leading-8 text-[var(--on-surface-variant)]">
                    <a href="https://maps.app.goo.gl/Pteoi1K1yxDP5kpt7" target="_blank" class="flex items-start gap-3">
                        <span class="material-symbols-outlined mt-1 text-[var(--primary)]">location_on</span>
                        <span>Số 4, ngách 76, ngõ 146 đường 19/5, Văn Quán, Hà Đông, Hà Nội</span>
                    </a>
                    <a href="tel:0969862611" class="flex items-start gap-3">
                        <span class="material-symbols-outlined mt-1 text-[var(--primary)]">phone</span>
                        <span>0969 862 611</span>
                    </a>
                    <a href="mailto:phongthuamca@gmail.com" class="flex items-start gap-3">
                        <span class="material-symbols-outlined mt-1 text-[var(--primary)]">mail</span>
                        <span>phongthuamca@gmail.com</span>
                    </a>
                    <a href="https://www.facebook.com/Castudiophongthuam" target="_blank" class="flex items-start gap-3">
                        <svg class="mt-1.5 h-5 w-5 fill-[var(--primary)] shrink-0" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                        </svg>
                        <span class="hover:text-[var(--primary)] transition-colors">
                            Cá Studio - Phòng thu âm Hà Đông
                        </span>
                    </a>
                </ul>
            </div>

            <div class="media-frame w-full h-full min-h-[350px]">
                <iframe 
                    class="h-full w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4534473005483!2d105.7840159!3d20.974452999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad00207ae70d%3A0x8f86ef303981043c!2zQ8OhIFN0dWRpbyAtIFBow7JuZyBUaHUgw4JtIEjDoCDEkMO0bmc!5e0!3m2!1svi!2s!4v1780928490822!5m2!1svi!2s" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>
</main>

