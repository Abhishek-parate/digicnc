<?php

/**
 * Digi CNC – Blog Listing Page (Redesigned v3)
 * Pure Tailwind CSS — zero <style> tags.
 */
?>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="inner-hero relative overflow-hidden" style="<?= hero_background_style('assets/images/banner-about-process-clean.png', 'center right') ?>">

    <div class="relative mx-auto max-w-7xl px-4 py-14 lg:px-6 lg:py-20">

        <!-- Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="mb-5 flex items-center gap-1.5 text-xs font-bold text-slate-400">
            <a href="<?= app_url('/') ?>" class="transition-colors hover:text-white">Home</a>
            <span class="text-slate-600">/</span>
            <span class="text-slate-300">Blog</span>
        </nav>

        <p class="eyebrow text-red-300">CNC Knowledge Hub</p>

        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl">
            CNC Cutting, Materials, Design and Manufacturing Blog
        </h1>

        <div class="mt-4 flex items-center gap-2">
            <span class="block h-1 w-12 rounded-full bg-red-600"></span>
            <span class="block h-0.5 w-6 rounded-full bg-red-400 opacity-50"></span>
        </div>

        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-300">
            Practical articles for architects, interior designers, furniture manufacturers, contractors, homeowners and prototype teams planning CNC cutting or carving projects in Nagpur.
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
            <a href="<?= app_url('contact') ?>" class="btn-primary px-6 py-3 text-sm">
                <svg width="16" height="16" class="mr-2 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                </svg>
                Get a Free Quote
            </a>
            <a href="tel:+919766653376" class="btn-secondary px-6 py-3 text-sm">
                <svg width="16" height="16" class="mr-2 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.36 2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.69a16 16 0 0 0 5.89 5.89l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                Call Now
            </a>
        </div>

    </div>
</section>


<!-- ============================================================
     STATS TRUST BAR
     ============================================================ -->
<div class="bg-white border-b border-slate-100">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid grid-cols-2 divide-x divide-slate-100 md:grid-cols-4">
            <div class="px-4 py-5 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">500+</p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Projects Completed</p>
            </div>
            <div class="px-4 py-5 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">10+</p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Years CNC Experience</p>
            </div>
            <div class="px-4 py-5 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">8</p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Material Types Cut</p>
            </div>
            <div class="px-4 py-5 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">24h</p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Quote Turnaround</p>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================
     MAIN CONTENT + SIDEBAR
     ============================================================ -->
<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-8 xl:grid-cols-[minmax(0,1fr)_320px]">

            <!-- ── LEFT: Blog Grid ── -->
            <div class="min-w-0">

                <!-- CTA Banner -->
                <div class="mb-6 flex flex-wrap items-center justify-between gap-4 rounded-xl p-5" style="background:#18135f">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-red-300 mb-1">Digi CNC · Nagpur</p>
                        <p class="font-heading text-base font-extrabold text-white leading-snug">Get a Precise CNC Quote Within 24 Hours</p>
                        <p class="text-xs text-slate-400 mt-0.5">MDF · HDHMR · Acrylic · ACP · WPC · Jali · Parametric</p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <a href="<?= app_url('contact') ?>" class="inline-flex items-center gap-1.5 rounded-lg bg-red-600 px-5 text-xs font-bold text-white hover:bg-red-700 transition" style="height:38px">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="22" y1="2" x2="11" y2="13" />
                                <polygon points="22 2 15 22 11 13 2 9 22 2" />
                            </svg>
                            Free Quote
                        </a>
                        <a href="tel:+919766653376" class="inline-flex items-center gap-1.5 rounded-lg border border-white/25 bg-white/10 px-4 text-xs font-bold text-white hover:bg-white/20 transition" style="height:38px">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.36 2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.69a16 16 0 0 0 5.89 5.89l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            Call Now
                        </a>
                        <a href="https://wa.me/919766653376" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 rounded-lg border border-white/25 bg-white/10 px-4 text-xs font-bold text-white hover:bg-white/20 transition" style="height:38px">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Section header -->
                <div class="mb-6 flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <p class="eyebrow">Latest Articles</p>
                        <h2 class="mt-1 font-heading text-2xl font-extrabold leading-tight text-slate-950 lg:text-3xl">CNC Knowledge &amp; Guides</h2>
                        <span class="mt-2 block h-0.5 w-10 rounded-full bg-red-600"></span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <button class="filter-btn is-active" data-filter="all" style="height:36px;padding:0 16px;font-size:12px;border-radius:8px">All</button>
                        <button class="filter-btn" data-filter="cnc guides" style="height:36px;padding:0 16px;font-size:12px;border-radius:8px">CNC Guides</button>
                        <button class="filter-btn" data-filter="materials" style="height:36px;padding:0 16px;font-size:12px;border-radius:8px">Materials</button>
                        <button class="filter-btn" data-filter="parametric" style="height:36px;padding:0 16px;font-size:12px;border-radius:8px">Parametric</button>
                    </div>
                </div>

                <!-- Blog Cards — 1 / 2 / 3 columns -->
                <!-- Blog Cards -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3" id="blog-grid">
                    <?php foreach ($repo->blogs() as $blog): ?>
                        <article
                            class="blog-card group flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition duration-200 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl"
                            data-category="<?= e(strtolower(trim($blog['category']))) ?>">
                            <!-- Thumbnail -->
                            <div class="overflow-hidden">
                                <img
                                    class="h-44 w-full object-cover transition duration-300 group-hover:scale-105 lg:h-40 xl:h-44"
                                    src="<?= e(asset_url($blog['image'])) ?>"
                                    loading="lazy"
                                    alt="<?= e($blog['title']) ?> by Digi CNC Nagpur">
                            </div>

                            <!-- Body -->
                            <div class="flex flex-1 flex-col p-4">

                                <!-- Meta row -->
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="inline-flex items-center rounded-full bg-red-50 px-2.5 py-0.5 text-xs font-extrabold uppercase tracking-widest text-red-600">
                                        <?= e($blog['category']) ?>
                                    </span>
                                    <span class="flex items-center gap-1 text-xs font-bold text-slate-400">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10" />
                                            <polyline points="12 6 12 12 16 14" />
                                        </svg>
                                        <?= e(reading_time($blog['content'])) ?> min read
                                    </span>
                                </div>

                                <!-- Title -->
                                <h2 class="mt-2.5 font-heading text-lg font-bold leading-snug text-slate-950">
                                    <a href="<?= e(app_url('blog/' . $blog['slug'])) ?>" class="transition-colors hover:text-red-600">
                                        <?= e($blog['title']) ?>
                                    </a>
                                </h2>

                                <!-- Excerpt -->
                                <p class="mt-2 flex-1 text-sm leading-6 text-slate-600">
                                    <?= e($blog['excerpt']) ?>
                                </p>

                                <!-- Card footer -->
                                <div class="mt-4 flex items-center justify-between border-t border-slate-100 pt-3">
                                    <a
                                        href="<?= e(app_url('blog/' . $blog['slug'])) ?>"
                                        class="inline-flex items-center gap-1.5 text-sm font-bold text-red-600 transition-colors hover:text-red-700">
                                        Read article
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M5 12h14M12 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                    <button
                                        onclick="navigator.share ? navigator.share({title:'<?= e(addslashes($blog['title'])) ?>',url:'<?= e(app_url('blog/' . $blog['slug'])) ?>'}) : window.open('https://wa.me/?text=<?= urlencode($blog['title'] . ' ' . app_url('blog/' . $blog['slug'])) ?>','_blank')"
                                        class="rounded p-1.5 text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                                        aria-label="Share this article">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="18" cy="5" r="3" />
                                            <circle cx="6" cy="12" r="3" />
                                            <circle cx="18" cy="19" r="3" />
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <!-- Load More -->
                
                <div class="mt-4 -mb-8 text-center">
                    <a href="#" class="btn-primary inline-flex items-center gap-2 rounded-full px-10 py-3 text-sm">
                        Load More Articles
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14M5 12l7 7 7-7" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- /LEFT -->

        </div>
    </div>
</section>


<!-- ============================================================
     ABOUT THE BLOG SYSTEM
     ============================================================ -->

<section class="section bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.9fr_1.1fr] lg:items-center lg:px-6">
        <div>
            <p class="eyebrow">Blog System</p>
            <h2 class="mt-2 font-heading text-3xl font-extrabold leading-snug text-slate-950 lg:text-3xl">
                Built for SEO content publishing and technical education.
            </h2>

            <!-- Image heading ke niche -->
            <div class="mt-6 overflow-hidden rounded-xl shadow-sm">
                <img
                    src="<?= asset_url('assets/images/CNC.jpg') ?>"
                    alt="CNC Cutting Materials Design and Manufacturing – Digi CNC Nagpur"
                    class="h-64 w-full object-cover"
                    loading="lazy">
            </div>
        </div>

        <div class="prose-content lg:pt-4">
            <p>The Digi CNC blog is designed to support long-term organic search growth. The admin panel includes category management, SEO fields, slug generation, featured image upload, rich text content and schema support. This allows the business to publish articles around high-intent topics such as CNC cutting service in Nagpur, MDF CNC cutting, HDHMR CNC cutting, 3D CNC carving, decorative jali cutting, parametric design manufacturing, acrylic CNC cutting, ACP cutting, WPC cutting and custom CNC projects.</p>
            <p>Educational content helps conversion because CNC buyers often need guidance before they are ready to request a quote. Articles can explain file preparation, material selection, jali pattern strength, finish planning, furniture component batching, prototype workflows and cost factors. When this content links naturally to service pages and inquiry forms, the website becomes more useful for visitors and stronger for search engines.</p>
        </div>
    </div>
</section>


<!-- ============================================================
     NEWSLETTER SECTION
     ============================================================ -->
<section class="section relative overflow-hidden" style="background:linear-gradient(135deg,#050509 0%,#18135f 52%,#050509 100%);">
    <div class="relative mx-auto max-w-3xl px-4 text-center lg:px-6">
        <p class="eyebrow text-red-300">Stay Updated</p>
        <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-white lg:text-4xl">
            Get CNC Tips &amp; Industry Guides in Your Inbox
        </h2>
        <p class="mt-4 text-base leading-7 text-slate-300">
            Join architects, designers and manufacturers who receive our practical CNC cutting and materials guides — no spam, unsubscribe any time.
        </p>
        <form class="mt-6 flex flex-col gap-3 sm:flex-row" action="<?= app_url('newsletter/subscribe') ?>" method="POST" novalidate>
            <?php if (function_exists('csrf_field')) echo csrf_field(); ?>
            <input
                class="min-w-0 flex-1 rounded-lg border border-white/20 bg-white/10 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/40 focus:border-white/50 focus:ring-4 focus:ring-white/10"
                type="email" name="email" placeholder="Your email address" required aria-label="Email address">
            <button type="submit" class="btn-primary inline-flex shrink-0 items-center px-6 py-3 text-sm">
                Subscribe Free
                <svg width="16" height="16" class="ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </button>
        </form>
        <p class="mt-4 text-xs text-slate-500">We respect your privacy. Unsubscribe at any time.</p>
    </div>
</section>

<script>
    (function() {
        const buttons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.blog-card');

        buttons.forEach(function(btn) {
            btn.addEventListener('click', function() {

                // Active state toggle
                buttons.forEach(function(b) {
                    b.classList.remove('is-active');
                });
                btn.classList.add('is-active');

                var filter = btn.getAttribute('data-filter');

                cards.forEach(function(card) {
                    if (filter === 'all') {
                        card.style.display = '';
                    } else {
                        var cat = (card.getAttribute('data-category') || '').toLowerCase();
                        card.style.display = (cat === filter) ? '' : 'none';
                    }
                });
            });
        });
    })();
</script>