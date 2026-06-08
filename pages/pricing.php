<?php
declare(strict_types=1);

$plans = [
    [
        'name' => 'Gói Thu Cơ Bản',
        'description' => 'Giải pháp hoàn hảo cho vocal, voice talent hoặc nhạc cụ đơn lẻ.',
        'price' => '300.000₫',
        'unit' => '/phút',
        'featured' => false,
        'items' => [
            'Phòng thu chuẩn acoustic',
            'Kỹ thuật viên hỗ trợ 100% thời gian',
            'Trả file raw ngay sau khi thu',
            'Thêm 1 người +100.000đ',
        ],
    ],
    [
        'name' => 'Gói Thu Âm chuyên sâu',
        'description' => 'Trọn gói từ khâu thu âm đến mastering chuyên nghiệp cho.',
        'price' => '500.000₫',
        'unit' => '/giờ',
        'featured' => true,
        'items' => [
            'Thêm 1 người +120.000đ',
            'Mix & Mastering chuyên sâu (tối đa 5 track)',
            'Chỉnh sửa pitch & timing chi tiết',
            'Lưu trữ dự án 1 năm',
            'Kỹ thuật viên hỗ trợ 100% thời gian',
        ],
    ],
    [
        'name' => 'Gói Thu Âm Chuyên Nghiệp',
        'description' => 'Dành cho nhóm đông người hoặc cá nhân làm sản phẩm thương mại.',
        'price' => '1.000.000₫',
        'unit' => '/1 giờ 30 phút',
        'featured' => false,
        'items' => [
            'Thêm 1 người +150.000đ',
            'Sử dụng toàn bộ thiết bị outboard gear',
            'Kỹ thuật viên hỗ trợ 100% thời gian',
            'Mix & Mastering chuyên nghiệp (multi track)',
            'Tư vấn về sản phẩm và định hướng âm thanh',
        ],
    ],
    [
        'name' => 'Thu theo giờ',
        'description' => 'Phù hợp với TVC , thu nhạc cụ , podcast.',
        'price' => '350.000₫',
        'unit' => '/giờ',
        'featured' => false,
        'items' => [
            'Kỹ thuật viên hỗ trợ 100% thời gian',
            'Mix and master +150.000đ',
            'Thu thêm giờ 150.000đ/30p',
        ],
    ],
];

$plans2 = [
    [
        'name' => 'BEAT AI',
        'description' => 'Phù hợp để demo ý tưởng, hát cover, luyện tập hoặc các dự án cá nhân cơ bản.',
        'price' => '500.000₫',
        'unit' => '/bài',
        'featured' => false,
        'items' => [
            'Giải pháp nhanh chóng',
            'Chi phí tối ưu',
            'Trả file raw ngay sau khi thu',
            'Phù hợp với demo',
        ],
    ],
    [
        'name' => 'BEAT CHUYÊN SÂU',
        'description' => 'Thích hợp cho các sản phẩm phát hành trên mạng xã hội và nền tảng số.',
        'price' => '2.500.000₫',
        'unit' => '/bài',
        'featured' => true,
        'items' => [
            'Sản phẩm đầu tư kĩ lưỡng',
            'Đảm bảo bố cục bài hát rõ ràng',
            'Chất lượng âm thanh tốt',
            'Mix and Master chuyên nghiệp',
        ],
    ],
    [
        'name' => 'GÓI THU ÂM CHUYÊN NGHIỆP',
        'description' => 'Sản phẩm được thiết kế riêng , tối ưu từng cung bậc cảm xúc .',
        'price' => '5.000.000₫',
        'unit' => '/bài',
        'featured' => false,
        'items' => [
            'Dịch vụ sản xuất beat CAO CẤP',
            'Phối khí độc quyền',
            'Mix and master với âm thanh chất lượng cao',
            'Thiết kế riêng để phù hợp với nghệ sĩ',
            'Đáp ứng đủ nhu cầu để phát hành thương mại',
        ],
    ],
];

$plans3 = [
    [
        'name' => 'Viết lời trên nền nhạc có sẵn',
        'description' => 'Bao gồm thu âm và sáng tác và ca sĩ.',
        'price' => '5.000.000₫',
        'unit' => '/bài',
        'featured' => false,
        'items' => [
            'Sáng tác lời  3.000.000đ',
            'Thu âm và thuê ca sĩ chuyên nghiệp 2.000.000đ',
            'Trả file từ 5-10 ngày',
        ],
    ],
    [
        'name' => 'Sáng tác nhạc mới',
        'description' => 'Bao gồm thu âm . sáng tác mới , phối beat và thuê ca sĩ chuyên nghiệp.',
        'price' => '15.000.000₫',
        'unit' => '/bài',
        'featured' => true,
        'items' => [
            'Sáng tác lời 5.000.000đ',
            'Thu âm và thuê ca sĩ chuyên nghiệp 5.000.000đ',
            'Phối beat mới 5.000.000đ',
            'Trả file sau 10-20 ngày',
        ],
    ],
    [
        'name' => 'Sáng tác để phát hành thương mại',
        'description' => 'Bao gồm sáng tác , phối beat chuyên nghiệp , thu âm chuyên nghiệp , thuê ca sĩ.',
        'price' => '30.000.000₫',
        'unit' => '/bài',
        'featured' => false,
        'items' => [
            'Sáng tác lời  10.000.000đ',
            'Phối beat chuyên nghiệp 10.000.000đ',
            'Thuê ca sĩ chuyên nghiệp 10.000.000đ',
            'Tư vấn về sản phẩm và định hướng âm thanh ',
        ],
    ],
];
?>
<main>
    <section class="site-shell relative overflow-hidden pt-20 pb-12">
        <div class="relative mx-auto max-w-4xl text-center">
            <h1 class="section-title mb-6">Bảng giá dịch vụ</h1>
            <p class="mx-auto max-w-2xl text-lg leading-8 text-[var(--on-surface-variant)]">
                Đầu tư vào chất lượng âm thanh chuyên nghiệp. <br class="max-sm:hidden">Chọn gói dịch vụ phù hợp với dự án của bạn tại CÁ STUDIO.
            </p>
        </div>
    </section>

    <section class="site-shell py-6 md:py-12">
        <h2 class="text-4xl font-bold text-center mb-16 uppercase text-[var(--primary-fixed-dim)]">Gói dịch vụ thu âm</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($plans as $plan): ?>
                <article class="surface-card relative flex h-full flex-col p-8 <?= $plan['featured'] ? 'border-[color:var(--primary-container)] bg-amber-100/30' : ''; ?>">
                    <?php if ($plan['featured']): ?>
                        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-[var(--primary-container)] px-4 py-2 text-xs font-semibold uppercase tracking-[0.24em] text-white">
                            Phổ biến nhất
                        </div>
                    <?php endif; ?>

                    <div class="mb-8 <?= $plan['featured'] ? 'mt-3' : ''; ?>">
                        <h2 class="mb-2 text-2xl font-medium tracking-[-0.02em] uppercase"><?= htmlspecialchars($plan['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="min-h-12 leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>

                    <div class="mb-8">
                        <span class="text-4xl font-medium tracking-[-0.03em]"><?= htmlspecialchars($plan['price'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="text-base text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['unit'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>

                    <ul class="mb-10 flex-1 space-y-4 text-[var(--on-surface-variant)]">
                        <?php foreach ($plan['items'] as $item): ?>
                            <li class="flex items-start gap-3 leading-8">
                                <span class="material-symbols-outlined mt-1 text-base text-[var(--primary)]">check</span>
                                <span><?= htmlspecialchars(html_entity_decode($item), ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="https://zalo.me/0969862611" class="<?= $plan['featured'] ? 'button-primary' : 'button-secondary'; ?> w-full" type="button">Đặt lịch ngay</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="site-shell py-6 md:py-12 mt-10 border-t border-[color:var(--outline-variant)]">
        <h2 class="text-4xl font-bold text-center mb-16 uppercase text-[var(--primary-fixed-dim)]">Hòa âm phối khí</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($plans2 as $plan): ?>
                <article class="surface-card relative flex h-full flex-col p-8 <?= $plan['featured'] ? 'border-[color:var(--primary-container)] bg-amber-100/30' : ''; ?>">
                    <?php if ($plan['featured']): ?>
                        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-[var(--primary-container)] px-4 py-2 text-xs font-semibold uppercase tracking-[0.24em] text-white">
                            Phổ biến nhất
                        </div>
                    <?php endif; ?>

                    <div class="mb-8 <?= $plan['featured'] ? 'mt-3' : ''; ?>">
                        <h2 class="mb-2 text-2xl font-medium tracking-[-0.02em] uppercase"><?= htmlspecialchars($plan['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="min-h-12 leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>

                    <div class="mb-8">
                        <span class="text-4xl font-medium tracking-[-0.03em]"><?= htmlspecialchars($plan['price'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="text-base text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['unit'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>

                    <ul class="mb-10 flex-1 space-y-4 text-[var(--on-surface-variant)]">
                        <?php foreach ($plan['items'] as $item): ?>
                            <li class="flex items-start gap-3 leading-8">
                                <span class="material-symbols-outlined mt-1 text-base text-[var(--primary)]">check</span>
                                <span><?= htmlspecialchars(html_entity_decode($item), ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="https://zalo.me/0969862611" class="<?= $plan['featured'] ? 'button-primary' : 'button-secondary'; ?> w-full" type="button">Đặt lịch ngay</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="site-shell py-6 md:py-12 mt-10 border-t border-[color:var(--outline-variant)]">
        <h2 class="text-4xl font-bold text-center mb-16 uppercase text-[var(--primary-fixed-dim)]">Sáng tác nhạc</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($plans3 as $plan): ?>
                <article class="surface-card relative flex h-full flex-col p-8 <?= $plan['featured'] ? 'border-[color:var(--primary-container)] bg-amber-100/30' : ''; ?>">
                    <?php if ($plan['featured']): ?>
                        <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 whitespace-nowrap rounded-full bg-[var(--primary-container)] px-4 py-2 text-xs font-semibold uppercase tracking-[0.24em] text-white">
                            Phổ biến nhất
                        </div>
                    <?php endif; ?>

                    <div class="mb-8 <?= $plan['featured'] ? 'mt-3' : ''; ?>">
                        <h2 class="mb-2 text-2xl font-medium tracking-[-0.02em] uppercase"><?= htmlspecialchars($plan['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="min-h-12 leading-8 text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>

                    <div class="mb-8">
                        <span class="text-4xl font-medium tracking-[-0.03em]"><?= htmlspecialchars($plan['price'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="text-base text-[var(--on-surface-variant)]"><?= htmlspecialchars($plan['unit'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>

                    <ul class="mb-10 flex-1 space-y-4 text-[var(--on-surface-variant)]">
                        <?php foreach ($plan['items'] as $item): ?>
                            <li class="flex items-start gap-3 leading-8">
                                <span class="material-symbols-outlined mt-1 text-base text-[var(--primary)]">check</span>
                                <span><?= htmlspecialchars(html_entity_decode($item), ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="https://zalo.me/0969862611" class="<?= $plan['featured'] ? 'button-primary' : 'button-secondary'; ?> w-full" type="button">Đặt lịch ngay</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="site-shell mt-10 border-t border-[color:var(--outline-variant)] py-20 md:py-28">
        <div class="grid items-center gap-12 md:grid-cols-2">
            <div>
                <h2 class="section-heading mb-4">Chi tiết định hình chất lượng</h2>
                <p class="leading-8 text-[var(--on-surface-variant)] text-justify">
                    Mỗi dự án tại CÁ STUDIO đều được xử lý với độ chính xác cao nhất. Báo giá trên chưa bao gồm 10% VAT. Các yêu cầu đặc biệt như session musicians, thuê nhạc cụ riêng biệt sẽ được báo giá dựa trên yêu cầu thực tế.
                </p>
            </div>
            
            <div class="rounded-lg overflow-hidden h-[300px] md:h-[400px] w-full">
                <iframe 
                    class="h-full w-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4534473005483!2d105.7840159!3d20.974452999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad00207ae70d%3A0x8f86ef303981043c!2zQ8OhIFN0dWRpbyAtIFBow7JuZyBUaHUgw4JtIEjDoCDEkMO0bmc!5e0!3m2!1svi!2s!4v1780929134432!5m2!1svi!2s"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
</section>
</main>
