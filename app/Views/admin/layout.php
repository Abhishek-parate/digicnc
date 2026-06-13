<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= e($title ?? 'Admin') ?> | Digi CNC</title>
    <link rel="stylesheet" href="<?= e(versioned_asset_url('assets/css/app.css')) ?>">
</head>
<body class="bg-slate-100 text-slate-900">
    <div class="min-h-screen lg:flex">
        <aside class="bg-slate-950 p-5 text-white lg:min-h-screen lg:w-72">
            <a class="flex items-center gap-3" href="<?= e(app_url('admin')) ?>">
                <span class="flex h-10 w-10 items-center justify-center rounded bg-red-600 font-heading font-extrabold">DC</span>
                <span class="font-heading text-lg font-bold">Digi CNC Admin</span>
            </a>
            <?php if (!empty($_SESSION['admin_user'])): ?>
                <nav class="mt-8 grid gap-1 text-sm">
                    <?php foreach (['Dashboard' => 'admin', 'Leads' => 'admin/leads', 'Blogs' => 'admin/blogs', 'Categories' => 'admin/categories', 'Services' => 'admin/services', 'Gallery' => 'admin/gallery', 'Testimonials' => 'admin/testimonials', 'FAQs' => 'admin/faqs', 'SEO' => 'admin/seo', 'Contact Requests' => 'admin/contact-requests'] as $label => $path): ?>
                        <a class="rounded px-3 py-2 text-slate-200 hover:bg-white/10 hover:text-white" href="<?= e(app_url($path)) ?>"><?= e($label) ?></a>
                    <?php endforeach; ?>
                    <a class="mt-4 rounded bg-red-600 px-3 py-2 font-bold text-white hover:bg-red-700" href="<?= e(app_url('admin/logout')) ?>">Logout</a>
                </nav>
            <?php endif; ?>
        </aside>
        <main class="flex-1 p-4 lg:p-8">
            <?php $adminFlash = $_SESSION['admin_flash'] ?? null; unset($_SESSION['admin_flash']); ?>
            <?php if ($adminFlash): ?>
                <div class="mb-5 rounded-md border <?= $adminFlash['type'] === 'success' ? 'border-emerald-200 bg-emerald-50 text-emerald-800' : 'border-red-200 bg-red-50 text-red-800' ?> px-4 py-3 text-sm font-semibold">
                    <?= e($adminFlash['message']) ?>
                </div>
            <?php endif; ?>
            <?= $content ?>
        </main>
    </div>
    <script src="<?= e(versioned_asset_url('assets/js/app.js')) ?>" defer></script>
</body>
</html>
