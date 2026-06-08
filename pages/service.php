<?php
declare(strict_types=1);

$services = [
    [
        'icon' => 'mic',
        'title' => 'Thu âm (Recording)',
        'description' => 'Phòng thu âm đạt chuẩn acoustic quốc tế, trang bị hệ thống micro và preamp high-end. Không gian tĩnh lặng tuyệt đối giúp nghệ sĩ tự tin thăng hoa, bắt trọn từng sắc thái cảm xúc tinh tế nhất.',
        'cta' => 'Chi tiết',
        'layout' => 'feature-left',
        'slot' => 'service-recording',
    ],
    [
        'icon' => 'tune',
        'title' => 'Mixing &amp; Mastering',
        'description' => 'Kiểm soát dải tần và độ động với độ chính xác cao. Dịch vụ mix/master tiêu chuẩn mang lại âm thanh rõ nét, chi tiết và có chiều sâu, sẵn sàng phát hành trên mọi nền tảng số.',
        'cta' => '',
        'layout' => 'stacked',
        'slot' => 'service-mixing',
    ],
    [
        'icon' => 'piano',
        'title' => 'Sản xuất âm nhạc',
        'description' => 'Từ ý tưởng phác thảo đến bản phối hoàn chỉnh. Đội ngũ producer giàu kinh nghiệm sẽ đồng hành cùng bạn định hình phong cách, tạo ra những sản phẩm âm nhạc độc bản và chất lượng.',
        'cta' => '',
        'layout' => 'stacked',
        'slot' => 'service-production',
    ],
    [
        'icon' => 'door_open',
        'title' => 'Cho thuê phòng thu',
        'description' => 'Không gian làm việc lý tưởng cho các nhà sản xuất, nhạc sĩ tự do. Hệ thống trang thiết bị cao cấp, không gian rộng rãi, thoáng đãng, mang đến nguồn cảm hứng sáng tạo bất tận.',
        'cta' => 'Xem bảng giá',
        'layout' => 'feature-right',
        'slot' => 'service-rental',
    ],
];

$processSteps = [
    [
        'number' => '01',
        'title' => 'Tư vấn &amp; lên ý tưởng',
        'description' => 'Trao đổi trực tiếp để hiểu rõ nhu cầu, phong cách âm nhạc và định hướng nghệ thuật của dự án.',
    ],
    [
        'number' => '02',
        'title' => 'Sản xuất &amp; thu âm',
        'description' => 'Tiến hành thu âm, phối khí trong môi trường chuyên nghiệp với trang thiết bị tối tân nhất.',
    ],
    [
        'number' => '03',
        'title' => 'Hậu kỳ &amp; bàn giao',
        'description' => 'Hoàn thiện bản mix/master với độ chi tiết cao, đảm bảo chất lượng âm thanh hoàn hảo trước khi phát hành.',
    ],
];
?>
<main>
    <section class="site-shell relative overflow-hidden py-20 text-center md:py-28">
        <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 50% 30%, rgba(212,175,55,0.16), transparent 42%);"></div>
        <div class="relative mx-auto max-w-4xl">
            <h1 class="section-title mb-6">Dịch vụ chuyên nghiệp</h1>
            <p class="text-lg leading-8 text-[var(--on-surface-variant)]">
                Kiến tạo không gian âm thanh hoàn mỹ. Từ thu âm, mix &amp; master đến sản xuất âm nhạc trọn gói<br>CÁ STUDIO mang đến trải nghiệm đẳng cấp quốc tế cho những tác phẩm nghệ thuật đỉnh cao.
            </p>
            <div class="mx-auto mt-12 h-px w-24 bg-[var(--primary-container)]"></div>
        </div>
    </section>

    <section class="site-shell pb-8 md:pb-12">
        <div class="grid gap-8 md:grid-cols-12">
            <article class="surface-card relative overflow-hidden p-8 md:col-span-8 md:p-12">
                <div class="grid items-center gap-8 md:grid-cols-2">
                    <div class="media-frame aspect-square md:aspect-[4/5]">
                        <img
                            class="h-full w-full object-cover"
                            src="<?= asset_url('images/service/img01.jpg'); ?>"
                            alt="Thu âm"
                            data-slot="service-recording"
                        >
                    </div>
                    <div>
                        <h2 class="mb-4 flex items-center text-3xl font-medium tracking-[-0.02em]">Thu âm (Recording)<span class="ml-2 material-symbols-outlined text-4xl text-[var(--primary)]">mic</span></h2>
                        <p class="mb-6 leading-8 text-[var(--on-surface-variant)] text-justify"><?= htmlspecialchars(html_entity_decode($services[0]['description']), ENT_QUOTES, 'UTF-8'); ?></p>
                        <a class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.22em] text-[var(--primary)]" href="#">
                            Chi tiết
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>

            <article class="surface-card flex h-full flex-col p-8 md:col-span-4">
                <h2 class="mb-4 flex items-center text-2xl font-medium tracking-[-0.02em]">Mixing &amp; Mastering<span class="ml-2 material-symbols-outlined text-4xl text-[var(--primary)]">tune</span></h2>
                <p class="mb-6 flex-1 leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars(html_entity_decode($services[1]['description']), ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="media-frame aspect-[4/3]">
                    <img
                        class="h-full w-full object-cover"
                        src="<?= asset_url('images/service/img02.jpg'); ?>"
                        alt="Mixing và mastering"
                        data-slot="service-mixing"
                    >
                </div>
            </article>
        </div>

        <div class="py-8">
            <article class="surface-card flex h-full flex-col p-8 md:col-span-8">
                <h2 class="mb-4 flex items-center text-2xl font-medium tracking-[-0.02em]">Sản xuất âm nhạc<span class="ml-2 material-symbols-outlined text-4xl text-[var(--primary)]">music_note</span></h2>
                <p class="mb-6 flex-1 leading-8 text-[var(--on-surface-variant)] text-justify"><?= htmlspecialchars(html_entity_decode($services[2]['description']), ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="media-frame aspect-[21/9]">
                    <img
                        class="h-full w-full object-cover"
                        src="<?= asset_url('images/service/img03.jpg'); ?>"
                        alt="Sản xuất âm nhạc"
                        data-slot="service-production"
                    >
                </div>
            </article>
        </div>
    </section>

    <section class="site-shell">
        <h2 class="section-heading mb-16 text-center">Quy trình làm việc</h2>
        <div class="mx-auto max-w-4xl space-y-10">
            <?php foreach ($processSteps as $index => $step): ?>
                <article class="<?= $index < count($processSteps) - 1 ? 'border-b border-[color:var(--outline-variant)]/40 pb-10' : ''; ?> flex items-start gap-6 md:gap-10">
                    <span class="min-w-14 text-4xl font-semibold tracking-[-0.03em] text-[color:rgba(212,175,55,0.75)] md:min-w-20 md:text-6xl">
                        <?= htmlspecialchars($step['number'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                    <div>
                        <h3 class="mb-3 text-2xl font-medium tracking-[-0.02em]"><?= htmlspecialchars(html_entity_decode($step['title']), ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars($step['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

