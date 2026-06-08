<?php
declare(strict_types=1);
?>
<main>
    <section class="site-shell py-20 md:py-24">
        <div class="max-w-3xl">
            <span class="section-tag">Studio Dispatch</span>
            <h1 class="section-title mb-6">Tạp chí âm thanh &amp; nghệ thuật sản xuất</h1>
            <p class="max-w-2xl text-lg leading-8 text-[var(--on-surface-variant)]">
                Khám phá những kỹ thuật chuyên sâu, đánh giá thiết bị mới nhất và câu chuyện hậu trường từ những chuyên gia hàng đầu tại CÁ STUDIO.
            </p>
        </div>
    </section>

    <section class="site-shell pb-20 md:pb-28">
        <div class="grid gap-10 md:grid-cols-12">
            <article class="group md:col-span-8">
                <div class="media-frame mb-6 aspect-video flex items-center justify-center">
                    <img
                        class="h-auto w-[250px] object-cover opacity-50 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                        src="<?= asset_url('images/logo.png'); ?>"
                        alt="Kỹ thuật xử lý Sub-Bass"
                        data-slot="news-feature-main"
                    >
                </div>
                <span class="section-tag">Kỹ thuật Mixing</span>
                <h2 class="mb-4 text-3xl font-medium tracking-[-0.02em] transition-colors duration-300 group-hover:text-[var(--primary)] md:text-4xl">
                    Nghệ thuật xử lý Sub-Bass: Để dải trầm sâu mà không đục
                </h2>
                <p class="mb-5 max-w-2xl leading-8 text-[var(--on-surface-variant)]">
                    Kiểm soát dải sub-bass là một trong những thách thức lớn nhất trong quá trình mixing. Bài viết này chia sẻ các kỹ thuật sidechain compression và EQ đặc biệt mà chúng tôi sử dụng để tạo ra sự tách bạch tuyệt đối giữa kick và bassline.
                </p>
                <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.22em] text-[var(--on-surface-variant)]">
                    Đọc tiếp
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                </span>
            </article>

            <div class="flex flex-col gap-10 md:col-span-4">
                <article class="group border-b border-[color:var(--outline-variant)] pb-10">
                    <div class="media-frame mb-5 aspect-[4/3] flex items-center justify-center">
                        <img
                            class="h-auto w-[250px] object-cover opacity-50 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                            src="<?= asset_url('images/logo.png'); ?>"
                            alt="Đánh giá Compressor Tube-Tech CL 1B"
                            data-slot="news-side-1"
                        >
                    </div>
                    <span class="section-tag">Review thiết bị</span>
                    <h3 class="mb-3 text-2xl font-medium tracking-[-0.02em] transition-colors duration-300 group-hover:text-[var(--primary)]">
                        Đánh giá thực tế bộ Compressor Tube-Tech CL 1B
                    </h3>
                    <p class="leading-8 text-[var(--on-surface-variant)]">
                        Tại sao CL 1B vẫn luôn là tiêu chuẩn vàng cho vocal? Cùng nghe thử những bản thu thực nghiệm tại phòng thu A.
                    </p>
                </article>

                <article class="group">
                    <div class="media-frame mb-5 aspect-[4/3] flex items-center justify-center">
                        <img
                            class="h-auto w-[250px] object-cover opacity-50 transition-all duration-700 group-hover:scale-105 group-hover:opacity-100"
                            src="<?= asset_url('images/logo.png'); ?>"
                            alt="Bên trong quá trình sản xuất Album Tĩnh"
                            data-slot="news-side-2"
                        >
                    </div>
                    <span class="section-tag">Hậu trường</span>
                    <h3 class="mb-3 text-2xl font-medium tracking-[-0.02em] transition-colors duration-300 group-hover:text-[var(--primary)]">
                        Bên trong quá trình sản xuất Album "Tĩnh"
                    </h3>
                    <p class="leading-8 text-[var(--on-surface-variant)]">
                        Những ngày làm việc miệt mài cùng nghệ sĩ indie Lân Nhã để bắt trọn những rung động tinh tế nhất của nhạc cụ mộc.
                    </p>
                </article>
            </div>
        </div>
    </section>
</main>

