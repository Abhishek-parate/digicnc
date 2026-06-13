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
                    <div class="invisible absolute left-1/2 top-full w-[760px] -translate-x-1/2 pt-4 opacity-0 transition group-hover:visible group-hover:opacity-100">
                        <div class="grid grid-cols-2 gap-2 rounded-lg border border-slate-200 bg-white p-4 shadow-2xl">
                            <?php foreach ($servicePages as $slug => $service): ?>
                                <a class="rounded-md p-3 transition hover:bg-red-50" href="<?= e(app_url($slug)) ?>">
                                    <span class="block font-semibold text-slate-950"><?= e($service['title']) ?></span>
                                    <span class="mt-1 block text-sm leading-5 text-slate-600"><?= e($service['summary']) ?></span>
                                </a>
                            <?php endforeach; ?>
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

    <a class="fixed right-4 top-20 z-40 rounded-full bg-emerald-500 px-4 py-3 text-sm font-extrabold text-white shadow-2xl transition hover:bg-emerald-600 md:right-5 md:top-24" href="https://wa.me/<?= e($company['whatsapp']) ?>?text=Hello%20Digi%20CNC,%20I%20need%20a%20CNC%20project%20quotation." target="_blank" rel="noopener" aria-label="WhatsApp Digi CNC">WhatsApp</a>
    <a class="fixed right-[7.6rem] top-20 z-40 rounded-full bg-red-600 px-4 py-3 text-sm font-extrabold text-white shadow-2xl transition hover:bg-red-700 md:right-5 md:top-40" href="tel:+919766653376" aria-label="Call Digi CNC">Call</a>

    <script src="<?= e(versioned_asset_url('assets/js/app.js')) ?>" defer></script>
</body>
</html>
