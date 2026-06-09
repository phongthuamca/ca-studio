<?php
declare(strict_types=1);

$profiles = [
    [
        'role' => 'MEDIA / Founder',
        'name' => 'Thái Anh Dương',
        'description' => 'Người đồng hành cùng với Cá studio trong 10 năm với kinh nghiệm trong ngành media và âm nhạc. Định hình không gian âm thanh , hình ảnh giao thoa giữa truyền thống và hiện đại.',
        'cta' => 'Nghe tác phẩm',
        'slot' => 'artists-profile-1',
        'src' => 'images/artists/img02.jpg',
    ],
    [
        'role' => 'Founder / MIX AND MASTERING',
        'name' => 'Đạt Hàn',
        'description' => 'Người sáng lập với hơn 10 năm kinh nghiệm trong ngành công nghiệp âm nhạc. Định hình không gian âm thanh giao thoa giữa truyền thống và điện tử hiện đại.',
        'cta' => 'Xem hồ sơ',
        'slot' => 'artists-profile-2',
        'src' => 'images/artists/img03.jpg',
    ],
];

$collaborators = [
    ['name' => 'Thủy Lê', 'role' => 'Vocalist', 'slot' => 'artists-collab-1', 'src' => 'images/artists/img04.jpg'],
    ['name' => 'Toddy Tường', 'role' => 'Rapper', 'slot' => 'artists-collab-2', 'src' => 'images/artists/img05.jpg'],
    ['name' => 'Thái Anh Dương', 'role' => 'TAD Studio', 'slot' => 'artists-collab-3', 'src' => 'images/artists/img06.jpg'],
    ['name' => 'Công Thắng', 'role' => 'Singer', 'slot' => 'artists-collab-4', 'src' => 'images/artists/img07.jpg'],
];
?>
<main>
    <section class="site-shell py-20 md:py-28">
        <div class="grid items-center gap-12 md:grid-cols-12">
            <div class="md:col-span-7">
                <span class="section-tag">Nghệ sĩ &amp; Nhà sản xuất</span>
                <h1 class="section-title mb-8">Đồng hành cùng tài năng</h1>
                <p class="max-w-2xl text-lg leading-8 text-[var(--on-surface-variant)] text-justify">
                    Tại CÁ STUDIO, chúng tôi tin rằng thiết bị tốt nhất là những con người điều khiển chúng. Đội ngũ nghệ sĩ, nhà sản xuất và kỹ sư âm thanh của chúng tôi mang đến sự kết hợp hoàn hảo giữa kỹ thuật tinh xảo và cảm quan nghệ thuật nhạy bén.
                </p>
            </div>

            <div class="relative md:col-span-5">
                <div class="media-frame aspect-[4/5]">
                    <img
                        class="h-full w-full object-cover"
                        src="<?= asset_url('images/artists/img01.png'); ?>"
                        alt="Ảnh hero nghệ sĩ"
                        data-slot="artists-hero"
                    >
                </div>
                <div class="bg-pink-100 rounded-2xl absolute -bottom-8 -left-4 hidden w-content p-6 md:block">
                    <p class="text-center text-xs font-semibold uppercase tracking-[0.24em] text-[var(--primary)]">Như Phượng</p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-y border-[color:var(--outline-variant)]/60 bg-[var(--surface-container-lowest)] py-20 md:py-28">
        <div class="site-shell">
            <div class="mb-12 flex flex-col gap-4 border-b border-[color:var(--outline-variant)] pb-8 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 class="section-heading">Đội ngũ nòng cốt</h2>
                    <p class="mt-2 leading-8 text-[var(--on-surface-variant)]">Những kiến trúc sư âm thanh tạo nên dấu ấn của CÁ STUDIO.</p>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <?php foreach ($profiles as $profile): ?>
                    <article class="surface-card group h-full overflow-hidden transition-colors duration-500 hover:border-[color:var(--primary-container)]">
                        
                        <div class="grid h-full md:grid-cols-[2fr_3fr]">
                            
                            <div class="media-frame h-full rounded-none border-0 border-r border-[color:var(--outline-variant)]/60 md:min-h-[360px]">
                                <img
                                    class="h-full w-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0"
                                    src="<?= asset_url(htmlspecialchars($profile['src'], ENT_QUOTES, 'UTF-8')); ?>"
                                    alt="<?= htmlspecialchars($profile['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                    data-slot="<?= htmlspecialchars($profile['slot'], ENT_QUOTES, 'UTF-8'); ?>"
                                >
                            </div>
                            <div class="flex flex-col p-8">
                                <span class="section-tag"><?= htmlspecialchars($profile['role'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3 class="mb-4 text-2xl font-medium tracking-[-0.02em]"><?= htmlspecialchars($profile['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="mb-8 leading-8 text-[var(--on-surface-variant)] text-justify"><?= htmlspecialchars($profile['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="site-shell py-20 md:py-28">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-medium tracking-[-0.02em] md:text-4xl">Nghệ sĩ hợp tác</h2>
            <div class="mx-auto mt-6 h-px w-14 bg-[var(--primary)]"></div>
        </div>

        <div class="grid grid-cols-2 gap-6 md:grid-cols-4 md:gap-8">
            <?php foreach ($collaborators as $collaborator): ?>
                <article class="group text-center">
                    <div class="media-frame mb-4 aspect-square">
                        <img
                            class="h-full w-full object-cover opacity-85 transition-opacity duration-300 group-hover:opacity-100"
                            src="<?= asset_url(htmlspecialchars($collaborator['src'], ENT_QUOTES, 'UTF-8')); ?>"
                            alt="<?= htmlspecialchars($collaborator['name'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-slot="<?= htmlspecialchars($collaborator['slot'], ENT_QUOTES, 'UTF-8'); ?>"
                        >
                    </div>
                    <h3 class="text-sm font-semibold uppercase tracking-[0.22em]"><?= htmlspecialchars($collaborator['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="mt-2 text-sm text-[var(--on-surface-variant)]"><?= htmlspecialchars($collaborator['role'], ENT_QUOTES, 'UTF-8'); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

