<?php
$categories = array_values(array_unique(array_map(fn (array $item): string => $item['category'], $repo->gallery())));
?>
<section class="inner-hero" style="<?= hero_background_style('assets/images/hero-slider-jali-cnc-clean.png', 'center right') ?>">
    <div class="mx-auto max-w-7xl px-4 py-20 lg:px-6">
        <p class="eyebrow text-red-300">Project Gallery</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl">CNC Cutting, Carving, Jali, Furniture Components and Custom Project Gallery</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">Browse Digi CNC project categories for 2D CNC cutting, 3D CNC carving, parametric designs, decorative jali, furniture components, mandir designs and custom CNC projects.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="flex flex-wrap gap-2" data-gallery-filters>
            <button class="filter-btn is-active" data-filter="all" type="button">All</button>
            <?php foreach ($categories as $category): ?>
                <button class="filter-btn" data-filter="<?= e($category) ?>" type="button"><?= e($category) ?></button>
            <?php endforeach; ?>
        </div>

        <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3" data-gallery-grid>
            <?php foreach ($repo->gallery() as $item): ?>
                <article class="gallery-item overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm" data-category="<?= e($item['category']) ?>">
                    <button class="block w-full text-left" data-lightbox="<?= e(asset_url($item['image'])) ?>" data-title="<?= e($item['title']) ?>" type="button">
                        <img class="h-72 w-full object-cover transition duration-300 hover:scale-[1.03]" src="<?= e(asset_url($item['image'])) ?>" loading="lazy" alt="<?= e($item['alt']) ?>">
                    </button>
                    <div class="p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-600"><?= e($item['category']) ?></p>
                        <h2 class="mt-2 font-heading text-xl font-bold"><?= e($item['title']) ?></h2>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_.9fr] lg:px-6">
        <div class="prose-content">
            <p class="eyebrow">Gallery SEO Notes</p>
            <h2 class="section-title">Project categories built around common CNC buying intent.</h2>
            <p>The Digi CNC gallery is organized around practical project types because clients usually search by application, not only by machine capability. 2D CNC cutting includes furniture components, profiles, nested parts, signage bases and sheet material cutting. 3D CNC carving includes relief panels, textured wall surfaces, carved wood and decorative elements. Parametric designs include wave panels, ribs, baffles and digitally generated forms. Jali designs include partitions, mandir panels, door inserts and screens. Furniture components include MDF, HDHMR and plywood parts for modular and custom projects. Mandir designs include arches, back panels, doors and ornamental details. Custom projects include prototypes, art, ACP, acrylic, WPC and special CNC work.</p>
            <p>Each image uses descriptive alt text so search engines can understand the CNC application and location relevance. This supports ranking for terms such as CNC Cutting Service in Nagpur, 3D CNC Carving Nagpur, Decorative Jali Cutting Nagpur, MDF CNC Cutting and Custom CNC Projects. More importantly, it helps real users quickly identify whether Digi CNC can handle the type of work they have in mind.</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="font-heading text-2xl font-bold">Have a similar project?</h2>
            <p class="mt-3 text-sm leading-7 text-slate-600">Send a reference photo, CAD file or approximate dimensions. Digi CNC can review material, pattern strength and CNC feasibility before quotation.</p>
            <div class="mt-6"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'compact' => true]); ?></div>
        </div>
    </div>
</section>

<div class="fixed inset-0 z-[80] hidden items-center justify-center bg-slate-950/90 p-4" data-lightbox-modal aria-hidden="true">
    <div class="relative max-h-full max-w-5xl">
        <button class="absolute -right-2 -top-12 rounded bg-white px-3 py-2 font-bold text-slate-950" data-lightbox-close type="button">Close</button>
        <img class="max-h-[82vh] rounded-lg object-contain" data-lightbox-image src="" alt="">
        <p class="mt-3 text-center font-semibold text-white" data-lightbox-title></p>
    </div>
</div>
