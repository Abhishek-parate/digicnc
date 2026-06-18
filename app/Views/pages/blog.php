<section class="bg-white">

    <!-- Image -->
    <img
        src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
        alt="CNC Knowledge Hub"
        class="w-full object-cover"
        style="height:400px;"
    >

    <!-- Content below image -->
    <div class="mx-auto mt-12 max-w-7xl px-4 py-12 lg:px-6">
        <p class="eyebrow mb-6 text-red-600">
            CNC Knowledge Hub
        </p>

        <h1 class="mt-4 max-w-7xl font-heading text-4xl font-extrabold leading-tight text-slate-950 lg:text-4xl">
            CNC Cutting, Materials, Design and Manufacturing Blog
        </h1>

        <p class="mt-6 max-w-7xl text-lg leading-8 text-slate-600">
            Practical articles for architects, interior designers, furniture manufacturers, contractors, homeowners and prototype teams planning CNC cutting or carving projects in Nagpur.
        </p>
    </div>

</section>

<section class="pt-4 mt-4 pb-16 bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-6 md:grid-cols-3">
            <?php foreach ($repo->blogs() as $blog): ?>
                <article class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
                    <img class="h-56 w-full object-cover" src="<?= e(asset_url($blog['image'])) ?>" loading="lazy" alt="<?= e($blog['title']) ?> by Digi CNC Nagpur">
                    <div class="p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-600"><?= e($blog['category']) ?> · <?= e(reading_time($blog['content'])) ?> min read</p>
                        <h2 class="mt-3 font-heading text-2xl font-bold leading-tight"><a href="<?= e(app_url('blog/' . $blog['slug'])) ?>"><?= e($blog['title']) ?></a></h2>
                        <p class="mt-3 text-sm leading-7 text-slate-600"><?= e($blog['excerpt']) ?></p>
                        <a class="mt-5 inline-flex font-bold text-red-600" href="<?= e(app_url('blog/' . $blog['slug'])) ?>">Read article →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section py-5 bg-slate-50">
    <div class="mx-auto mb-6  mt-6 max-w-7xl px-4 lg:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-6">
        <div>
            <p class="eyebrow">Blog System</p>
            <h2 class="section-title">Built for SEO content publishing and technical education.</h2>
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
