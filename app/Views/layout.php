<?php
$company = $repo->company();
$servicePages = $repo->servicePages();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!doctype html>
<html lang="en-IN" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($seo['title'] ?? 'Digi CNC Nagpur') ?></title>
    <meta name="description" content="<?= e($seo['description'] ?? $company['tagline']) ?>">
    <meta name="keywords" content="<?= e($seo['keywords'] ?? 'CNC Cutting Service in Nagpur') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Digi CNC">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Nagpur">
    <link rel="canonical" href="<?= e($seo['canonical'] ?? full_url('')) ?>">
    <meta property="og:type" content="<?= e($seo['type'] ?? 'website') ?>">
    <meta property="og:site_name" content="Digi CNC">
    <meta property="og:title" content="<?= e($seo['title'] ?? 'Digi CNC Nagpur') ?>">
    <meta property="og:description" content="<?= e($seo['description'] ?? $company['tagline']) ?>">
    <meta property="og:url" content="<?= e($seo['canonical'] ?? full_url('')) ?>">
    <meta property="og:image" content="<?= e($seo['image'] ?? full_url('assets/images/hero-cnc-workshop.png')) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($seo['title'] ?? 'Digi CNC Nagpur') ?>">
    <meta name="twitter:description" content="<?= e($seo['description'] ?? $company['tagline']) ?>">
    <meta name="twitter:image" content="<?= e($seo['image'] ?? full_url('assets/images/hero-cnc-workshop.png')) ?>">
    <meta name="google-site-verification" content="<?= e(config('app.gsc_verification')) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(versioned_asset_url('assets/css/app.css')) ?>">
    <?php foreach (($schemas ?? []) as $schema): ?>
        <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <?php endforeach; ?>
    <?php if (config('app.ga_measurement_id')): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e(config('app.ga_measurement_id')) ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?= e(config('app.ga_measurement_id')) ?>');
        </script>
    <?php endif; ?>
</head>
<body class="bg-white text-slate-900 antialiased">
    <a class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-md focus:bg-white focus:px-4 focus:py-2 focus:text-red-700 focus:shadow" href="#main">Skip to content</a>

    <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 shadow-sm backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 lg:px-6">
            <a href="<?= e(app_url('')) ?>" class="group flex items-center gap-3" aria-label="Digi CNC home">
                <span class="flex h-11 w-11 items-center justify-center rounded bg-red-600 font-heading text-xl font-extrabold text-white shadow-sm">DC</span>
                <span>
                    <span class="block font-heading text-lg font-extrabold leading-5 text-slate-950">Digi CNC</span>
                    <span class="block text-xs font-semibold uppercase tracking-[0.18em] text-red-600">Nagpur Manufacturing</span>
                </span>
            </a>

            <nav class="hidden items-center gap-1 lg:flex" aria-label="Primary navigation">
                <a class="nav-link <?= is_active('') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('')) ?>">Home</a>
                <a class="nav-link <?= is_active('about-us') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('about-us')) ?>">About</a>
                <div class="group relative">
                    <a class="nav-link inline-flex items-center gap-1 <?= is_active('services') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('services')) ?>">Services <span aria-hidden="true">▾</span></a>
                    <div class="invisible absolute left-1/2 top-full w-[700px] -translate-x-1/2 pt-3 opacity-0 transition-all duration-200 group-hover:visible group-hover:opacity-100">
    <!-- Arrow pointer -->
    <div class="mx-auto h-2.5 w-2.5 rotate-45 border-l border-t border-slate-200 bg-white" style="margin-left:calc(50% - 5px); margin-bottom:-1px; position:relative; z-index:1;"></div>
    <div class="rounded-xl border border-slate-200 bg-white shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="flex items-center justify-between px-5 py-3" style="background: linear-gradient(135deg, #322EA1 0%, #4340c4 100%);">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>
                <p class="text-xs font-bold uppercase tracking-widest text-white/80">Our Services</p>
                <span class="text-white/30 text-xs">|</span>
                <p class="text-sm font-bold text-white">Precision CNC Solutions</p>
            </div>
            <p class="text-xs text-white/60">Nagpur · Maharashtra</p>
        </div>
        <!-- Service grid -->
        <div class="grid grid-cols-2 divide-x divide-y divide-slate-100">
            <?php
            $serviceIcons = [
                'M12 2a10 10 0 100 20A10 10 0 0012 2zm0 3v2m0 10v2m-7-7H3m16 0h-2M6.34 6.34l1.42 1.42m8.49 8.49l1.41 1.41M6.34 17.66l1.42-1.42m8.49-8.49l1.41-1.41',
                'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5',
                'M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z',
                'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z',
                'M12 2a5 5 0 015 5c0 5-5 13-5 13S7 12 7 7a5 5 0 015-5z',
                'M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z',
                'M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z',
                'M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z',
                'M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM8 12h8m-4-4v8',
            ];
            $i = 0;
            foreach ($servicePages as $slug => $service):
                $icon = $serviceIcons[$i % count($serviceIcons)];
                $i++;
            ?>
            <a class="group/item flex items-center gap-3 px-4 py-2 transition-all duration-150 hover:bg-[#322EA1]/5" href="<?= e(app_url($slug)) ?>">
                <span class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg transition-all duration-150 group-hover/item:scale-110" style="background-color: rgba(50,46,161,0.08);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors" style="color:#322EA1;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="<?= $icon ?>"/>
                    </svg>
                </span>
                <span class="flex-1 min-w-0 text-sm font-semibold text-slate-700 transition-colors group-hover/item:text-[#322EA1]"><?= e($service['title']) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 flex-shrink-0 text-slate-300 transition-all duration-150 group-hover/item:translate-x-1 group-hover/item:text-[#322EA1]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <?php endforeach; ?>
        </div>
        <!-- Footer strip -->
        <div class="flex items-center justify-between border-t border-slate-100 px-5 py-2.5" style="background: rgba(50,46,161,0.04);">
            <p class="text-xs text-slate-400">CNC Cutting · Carving · Parametric Design · Nagpur</p>
            <a href="<?= e(app_url('services')) ?>" class="flex items-center gap-1 text-xs font-bold transition-colors hover:opacity-80" style="color:#322EA1;">
                View All Services
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</div>
                </div>
                <a class="nav-link <?= is_active('gallery') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('gallery')) ?>">Gallery</a>
                <a class="nav-link <?= is_active('blog') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('blog')) ?>">Blog</a>
                <a class="nav-link <?= is_active('contact-us') ? 'nav-link-active' : '' ?>" href="<?= e(app_url('contact-us')) ?>">Contact</a>
            </nav>

            <div class="hidden items-center gap-3 lg:flex">
                <a class="text-sm font-semibold text-slate-700 hover:text-red-600" href="tel:+919766653376"><?= e($company['phone']) ?></a>
                <a class="btn-primary px-4 py-2 text-sm" href="<?= e(app_url('contact-us')) ?>">Request Quote</a>
            </div>

            <button class="inline-flex h-10 w-10 items-center justify-center rounded border border-slate-300 text-slate-900 lg:hidden" data-mobile-toggle aria-label="Open menu">☰</button>
        </div>
        <div class="hidden border-t border-slate-200 bg-white px-4 py-4 lg:hidden" data-mobile-menu>
            <div class="grid gap-2">
                <?php foreach ([['Home',''], ['About','about-us'], ['Services','services'], ['Gallery','gallery'], ['Blog','blog'], ['Contact','contact-us']] as [$label, $path]): ?>
                    <a class="rounded-md px-3 py-2 font-semibold text-slate-800 hover:bg-red-50 hover:text-red-700" href="<?= e(app_url($path)) ?>"><?= e($label) ?></a>
                <?php endforeach; ?>
                <div class="mt-2 border-t border-slate-200 pt-2">
                    <?php foreach ($servicePages as $slug => $service): ?>
                        <a class="block rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-red-50 hover:text-red-700" href="<?= e(app_url($slug)) ?>"><?= e($service['title']) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <?php if ($flash): ?>
        <div class="mx-auto mt-4 max-w-7xl px-4 lg:px-6">
            <div class="rounded-md border <?= $flash['type'] === 'success' ? 'border-emerald-200 bg-emerald-50 text-emerald-800' : 'border-red-200 bg-red-50 text-red-800' ?> px-4 py-3 text-sm font-semibold">
                <?= e($flash['message']) ?>
            </div>
        </div>
    <?php endif; ?>

    <main id="main">
        <?= $content ?>
    </main>

    <footer class="bg-slate-950 text-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 py-14 sm:grid-cols-2 lg:grid-cols-4 lg:px-6">
            <div>
                <div class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded bg-red-600 font-heading text-xl font-extrabold">DC</span>
                    <div>
                        <p class="font-heading text-xl font-extrabold">Digi CNC</p>
                        <p class="text-xs uppercase tracking-[0.18em] text-red-300">Nagpur, Maharashtra</p>
                    </div>
                </div>
                <p class="mt-5 text-sm leading-7 text-slate-300"><?= e($company['tagline']) ?></p>
                <div class="mt-5 flex gap-3">
                    <a class="rounded bg-white px-4 py-2 text-sm font-bold text-slate-950" href="tel:+919766653376">Call Now</a>
                    <a class="rounded border border-white/20 px-4 py-2 text-sm font-bold text-white" href="https://wa.me/<?= e($company['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp</a>
                </div>
            </div>
            <div>
                <h2 class="footer-title">Core Services</h2>
                <ul class="mt-4 space-y-2 text-sm text-slate-300">
                    <?php foreach (array_slice($servicePages, 0, 8, true) as $slug => $service): ?>
                        <li><a class="hover:text-white" href="<?= e(app_url($slug)) ?>"><?= e($service['title']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2 class="footer-title">SEO Locations</h2>
                <ul class="mt-4 space-y-2 text-sm text-slate-300">
                    <li><a class="hover:text-white" href="<?= e(app_url('cnc-cutting-nagpur')) ?>">CNC Cutting Nagpur</a></li>
                    <li><a class="hover:text-white" href="<?= e(app_url('cnc-cutting-maharashtra')) ?>">CNC Cutting Maharashtra</a></li>
                    <li><a class="hover:text-white" href="<?= e(app_url('services')) ?>">CNC Router Services</a></li>
                    <li><a class="hover:text-white" href="<?= e(app_url('gallery')) ?>">CNC Project Gallery</a></li>
                    <li><a class="hover:text-white" href="<?= e(app_url('blog')) ?>">CNC Manufacturing Blog</a></li>
                </ul>
            </div>
            <div>
                <h2 class="footer-title">Contact</h2>
                <ul class="mt-4 space-y-3 text-sm text-slate-300">
                    <li><strong class="text-white">Phone:</strong> <a href="tel:+919766653376"><?= e($company['phone']) ?></a></li>
                    <li><strong class="text-white">Location:</strong> <?= e($company['location']) ?></li>
                    <li><strong class="text-white">Hours:</strong> <?= e($company['hours']) ?></li>
                    <li><a class="font-bold text-red-300 hover:text-red-200" href="<?= e(app_url('contact-us')) ?>">Send a CNC project inquiry</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/10 px-4 py-5 text-center text-xs text-slate-400">
            © <?= date('Y') ?> Digi CNC. 2D & 3D CNC Cutting, Carving and Parametric Manufacturing in Nagpur.
        </div>
    </footer>

    <!-- WhatsApp floating icon button (bottom-right) -->
    <a class="fixed bottom-6 right-5 z-40 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-500 shadow-2xl transition hover:scale-110 hover:bg-emerald-600"
       href="https://wa.me/<?= e($company['whatsapp']) ?>?text=Hello%20Digi%20CNC,%20I%20need%20a%20CNC%20project%20quotation."
       target="_blank" rel="noopener" aria-label="WhatsApp Digi CNC">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="white" class="h-7 w-7">
            <path d="M16 .5C7.44.5.5 7.44.5 16c0 2.83.74 5.49 2.03 7.8L.5 31.5l7.93-2.08A15.45 15.45 0 0016 31.5C24.56 31.5 31.5 24.56 31.5 16S24.56.5 16 .5zm0 28.28a13.17 13.17 0 01-6.72-1.84l-.48-.29-4.7 1.23 1.26-4.58-.31-.5A13.22 13.22 0 1116 28.78zm7.26-9.9c-.4-.2-2.35-1.16-2.71-1.29-.37-.13-.63-.2-.9.2-.26.4-1.02 1.29-1.25 1.55-.23.27-.46.3-.86.1-.4-.2-1.68-.62-3.2-1.97-1.18-1.05-1.98-2.35-2.21-2.75-.23-.4-.02-.62.17-.82.18-.18.4-.46.6-.7.2-.23.26-.4.4-.66.13-.27.07-.5-.03-.7-.1-.2-.9-2.17-1.23-2.97-.32-.78-.65-.67-.9-.68h-.76c-.27 0-.7.1-1.06.5-.37.4-1.4 1.37-1.4 3.33 0 1.97 1.43 3.87 1.63 4.13.2.27 2.8 4.27 6.79 5.98.95.41 1.69.66 2.27.84.95.3 1.82.26 2.5.16.76-.11 2.35-.96 2.68-1.89.33-.93.33-1.73.23-1.89-.1-.17-.36-.27-.76-.47z"/>
        </svg>
    </a>

    <!-- Call floating icon button (above WhatsApp) -->
    <a class="fixed bottom-24 right-5 z-40 flex h-14 w-14 items-center justify-center rounded-full bg-red-600 shadow-2xl transition hover:scale-110 hover:bg-red-700"
       href="tel:+919766653376" aria-label="Call Digi CNC">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-7 w-7">
            <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/>
        </svg>
    </a>

    <script src="<?= e(versioned_asset_url('assets/js/app.js')) ?>" defer></script>
</body>
</html>