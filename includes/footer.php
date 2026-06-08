<?php
declare(strict_types=1);
include 'floating-contact.php';
?>
    <footer class="mt-20 border-t border-[color:var(--outline-variant)]/80 bg-[var(--surface-container-low)]">
        <div class="site-shell grid gap-10 py-14 md:grid-cols-12">
            <div class="md:col-span-4">
                <div class="mb-4 flex items-center gap-4">
                    <img class="h-10 w-10 rounded-lg object-cover" src="<?= asset_url('images/logo.png'); ?>" alt="CÁ STUDIO logo">
                    <span class="text-2xl font-semibold tracking-[-0.04em]"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <p class="max-w-sm text-sm leading-7 text-[var(--on-surface-variant)] text-justify">
                    <?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8'); ?>. Không gian thu âm cao cấp giao thoa giữa kiến trúc tinh giản và độ chính xác tuyệt đối của âm học.
                </p>
            </div>

            <div class="md:col-span-2">
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-[0.24em] text-[var(--primary)]">Điều hướng</h3>
                <div class="flex flex-col gap-3">
                    <?php foreach ($navigation as $item): ?>
                        <a class="text-sm text-[var(--on-surface-variant)] transition-colors duration-300 hover:text-[var(--primary)]" href="<?= $item['href']; ?>">
                            <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="md:col-span-3">
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-[0.24em] text-[var(--primary)]">Liên hệ</h3>
                <div class="space-y-3 text-sm leading-7 text-[var(--on-surface-variant)]">
                    <p><?= htmlspecialchars($site['address'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <p><?= htmlspecialchars($site['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <p><?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>

            <div class="md:col-span-3">
                <h3 class="mb-4 text-xs font-semibold uppercase tracking-[0.24em] text-[var(--primary)]">Kết nối</h3>
                <div class="flex flex-col gap-3 text-sm text-[var(--on-surface-variant)]">
                    <a class="transition-colors duration-300 hover:text-[var(--primary)]" href="https://www.facebook.com/Castudiophongthuam " target="_blank">Facebook</a>
                    <a class="transition-colors duration-300 hover:text-[var(--primary)]" href="https://www.youtube.com/@Castudiomusic" target="_blank">YouTube</a>
                </div>
            </div>
        </div>

        <div class="border-t border-[color:var(--outline-variant)]/70">
            <div class="site-shell flex flex-col gap-3 py-6 text-sm text-[var(--on-surface-variant)] md:flex-row md:items-center md:justify-between">
                <p>© <?= date('Y'); ?> <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?>. All rights reserved.</p>
                <p>Ha Dong, Ha Noi.</p>
            </div>
        </div>
    </footer>

    <script src="<?= asset_url('js/app.js'); ?>"></script>
</body>
</html>

