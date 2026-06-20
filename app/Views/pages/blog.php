<?php

/**
 * Digi CNC – Blog Listing Page (Redesigned v3)
 * Pure Tailwind CSS — zero <style> tags.
 */
?>

<!-- ============================================================
     HERO SECTION (banner image + overlapping 2-column white card)
     ============================================================ -->
<section class="relative pb-8 lg:pb-10">

    <!-- Banner image — no dark overlay -->
    <div class="h-[340px] w-full bg-cover sm:h-[440px] lg:h-[520px]"
        style="background-image:url('<?= asset_url('assets/images/banner-about-process-clean.png') ?>'); background-position:center right;">
    </div>

    <!-- Overlapping content card -->
    <div class="relative z-10 mx-auto -mt-20 max-w-7xl px-4 sm:-mt-28 lg:-mt-40 lg:px-6">
        <div class="grid gap-10 rounded-2xl border border-slate-200 bg-white p-6 shadow-2xl lg:grid-cols-[1fr_.8fr] lg:items-center lg:p-10">

            <!-- LEFT: main content -->
            <div>
                <nav aria-label="Breadcrumb" class="mb-5 flex items-center gap-1.5 text-xs font-bold text-slate-400">
                    <a href="<?= app_url('/') ?>" class="transition-colors hover:text-red-600">Home</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-slate-700">Blog</span>
                </nav>

                <p class="eyebrow">CNC Knowledge Hub</p>

                <h1 class="mt-4 max-w-xl font-heading text-3xl font-extrabold leading-tight text-slate-950 lg:text-4xl">
                    CNC Cutting, Materials, Design and Manufacturing Blog
                </h1>

                <div class="mt-4 flex items-center gap-2">
                    <span class="block h-1 w-12 rounded-full bg-red-600"></span>
                    <span class="block h-0.5 w-6 rounded-full bg-red-300 opacity-50"></span>
                </div>

                <p class="mt-6 max-w-xl text-base leading-7 text-slate-600">
                    Practical articles for architects, interior designers, furniture manufacturers, contractors, homeowners and prototype teams planning CNC cutting or carving projects in Nagpur.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="<?= app_url('contact-us') ?>" class="btn-primary px-6 py-3 text-sm">
                        <svg width="16" height="16" class="mr-2 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                        Get a Free Quote
                    </a>
                    <a href="tel:+919766653376" class="inline-flex items-center rounded border border-slate-200 bg-slate-50 px-6 py-3 text-sm font-extrabold text-slate-800 transition hover:bg-slate-100">
                        <svg width="16" height="16" class="mr-2 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.64 3.36 2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.69a16 16 0 0 0 5.89 5.89l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Call Now
                    </a>
                </div>
            </div>

            <!-- RIGHT: highlight points -->
            <div class="flex flex-col divide-y divide-slate-100 lg:border-l lg:border-slate-100 lg:pl-10">

                <div class="flex items-start gap-4 py-4 first:pt-0 lg:first:pt-0">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-indigo-50 text-indigo-600">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 12.75L11.25 15 15 9.75" />
                            <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">500+ Projects Completed</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">Real CNC work delivered for architects, manufacturers and homeowners across Nagpur.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 py-4">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-600">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v5l3 3" />
                        </svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">10+ Years CNC Experience</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">Practical production knowledge behind every article published here.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 py-4 last:pb-0 lg:last:pb-0">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-red-50 text-red-600">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z" />
                        </svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">24h Quote Turnaround</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">Have a project in mind? Get a clear answer within a day.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


<!-- ============================================================
     STATS TRUST BAR
     ============================================================ -->
<div class="relative z-20 bg-white border-b border-slate-100 py-4 lg:py-5">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid grid-cols-2 divide-x divide-slate-100 md:grid-cols-4" id="blog-stats">
            <div class="px-4 py-6 lg:py-8 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">
                    <span data-counter="500">0</span>+
                </p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Projects Completed</p>
            </div>
            <div class="px-4 py-6 lg:py-8 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">
                    <span data-counter="10">0</span>+
                </p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Years CNC Experience</p>
            </div>
            <div class="px-4 py-6 lg:py-8 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">
                    <span data-counter="8">0</span>
                </p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Material Types Cut</p>
            </div>
            <div class="px-4 py-6 lg:py-8 text-center">
                <p class="font-heading text-2xl font-extrabold text-red-600">
                    <span data-counter="24">0</span>h
                </p>
                <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-500">Quote Turnaround</p>
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        var counters = document.querySelectorAll('#blog-stats [data-counter]');
        var hasAnimated = false;

        function animateCounters() {
            if (hasAnimated) return;
            hasAnimated = true;

            counters.forEach(function(el) {
                var target = parseInt(el.getAttribute('data-counter'), 10) || 0;
                var duration = 600; // ms — fast
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var value = Math.floor(progress * target);
                    el.textContent = value;
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        el.textContent = target;
                    }
                }
                requestAnimationFrame(step);
            });
        }

        var statsSection = document.getElementById('blog-stats');
        if (statsSection && 'IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.4
            });
            observer.observe(statsSection);
        } else {
            animateCounters();
        }
    })();
</script>

<!-- ============================================================
     MAIN CONTENT (full width — sidebar removed, no reserved column)
     ============================================================ -->
<section class="relative z-10 bg-slate-50 py-8 lg:py-10">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div>

            <!-- Section header -->
            <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
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
                                <a href="<?= e(app_url('blog/' . $blog['slug'])) ?>"
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
            <div class="mt-8 text-center">
                <a href="#" class="btn-primary inline-flex items-center gap-2 rounded-full px-10 py-3 text-sm">
                    Load More Articles
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 5v14M5 12l7 7 7-7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     ABOUT THE BLOG SYSTEM
     ============================================================ -->

<section class="bg-slate-50 py-8 lg:py-10">
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
        <div class="mt-8 grid grid-cols-1 gap-10 md:grid-cols-2">
            <div class="prose-content">
            <p>The Digi CNC blog is designed to support long-term organic search growth. The admin panel includes category management, SEO fields, slug generation, featured image upload, rich text content and schema support. This allows the business to publish articles around high-intent topics such as CNC cutting service in Nagpur, MDF CNC cutting, HDHMR CNC cutting, 3D CNC carving, decorative jali cutting, parametric design manufacturing, acrylic CNC cutting, ACP cutting, WPC cutting and custom CNC projects.</p>
            </div>
            <div class="prose-content">
            <p>Educational content helps conversion because CNC buyers often need guidance before they are ready to request a quote. Articles can explain file preparation, material selection, jali pattern strength, finish planning, furniture component batching, prototype workflows and cost factors. When this content links naturally to service pages and inquiry forms, the website becomes more useful for visitors and stronger for search engines.</p>

        </div>
    </div>
</section>


<!-- ============================================================
     NEWSLETTER SECTION
     ============================================================ -->
<section class="relative overflow-hidden py-8 lg:py-10" style="background:linear-gradient(135deg,#050509 0%,#18135f 52%,#050509 100%);">
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