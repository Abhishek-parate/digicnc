<section class="inner-hero" style="<?= hero_background_style('assets/images/banner-services-materials-clean.png', 'center right') ?>">
    <div class="mx-auto max-w-7xl px-4 py-20 lg:px-6">
        <p class="eyebrow text-red-300">CNC Services</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl">2D CNC Cutting, 3D CNC Carving, Jali, MDF, HDHMR and Custom CNC Projects in Nagpur</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">Explore Digi CNC services for architects, interior designers, furniture manufacturers, contractors, industrial manufacturers, artists, prototype companies, homeowners, renovation teams and commercial projects.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-10 lg:grid-cols-[.9fr_1.1fr]">
            <div>
                <p class="eyebrow">Service Overview</p>
                <h2 class="section-title">CNC manufacturing support across design, material and production needs.</h2>
            </div>
            <div class="prose-content">
                <p>Digi CNC provides CNC router services in Nagpur for clients who need accurate sheet cutting, decorative carving, parametric parts, jali panels, furniture components, prototype work and custom CNC manufacturing. The service page is structured to help different buyers find the right entry point. An architect may begin with parametric design manufacturing. An interior designer may need decorative jali or 3D carved wall panels. A furniture manufacturer may need 2D cutting, MDF CNC cutting or HDHMR CNC cutting. A homeowner may need a custom mandir panel, wall feature or partition. An industrial buyer may need templates, fixtures or prototype parts.</p>
                <p>Every service begins with a file and feasibility review. CNC output depends on material, thickness, tool access, profile quality, edge expectation, finishing method and quantity. That is why Digi CNC encourages clients to send drawings, reference images, dimensions, material details and schedule expectations early. A small check before machining can prevent waste, weak patterns or production delays.</p>
            </div>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($repo->services() as $service): ?>
                <a class="service-card group" href="<?= e(app_url($service['slug'])) ?>">
                    <span class="service-icon"><?= strtoupper(substr($service['name'], 0, 1)) ?></span>
                    <h2><?= e($service['name']) ?></h2>
                    <p><?= e($service['summary']) ?></p>
                    <span class="mt-5 inline-flex font-bold text-red-600 group-hover:text-red-700">View details →</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="max-w-3xl">
            <p class="eyebrow">Individual SEO Service Pages</p>
            <h2 class="section-title">Detailed service pages with FAQs, schema and lead capture.</h2>
            <p class="mt-4 leading-8 text-slate-600">These pages are built for high-intent Google searches in Nagpur and Maharashtra. Each service page explains applications, materials, manufacturing process, quality checks, internal links and project-start guidance.</p>
        </div>
        <div class="mt-8 grid gap-4 md:grid-cols-2">
            <?php foreach ($repo->servicePages() as $slug => $service): ?>
                <a class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm transition hover:border-red-200 hover:shadow-lg" href="<?= e(app_url($slug)) ?>">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-600"><?= e($service['keyword']) ?></p>
                    <h3 class="mt-2 font-heading text-xl font-bold"><?= e($service['title']) ?></h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600"><?= e($service['summary']) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_.9fr] lg:px-6">
        <div class="prose-content">
            <p class="eyebrow">Choosing the Right Service</p>
            <h2 class="section-title">The right CNC route depends on what the finished part must do.</h2>
            <p>2D CNC cutting is best for flat profiles, cutouts, panels, furniture components, signage bases, acrylic shapes, ACP work and repeat production. 3D CNC carving is used when the surface itself needs depth, relief, texture or artistic form. Decorative jali cutting is a specialized form of 2D work where pattern strength, inside corners and finish matter. Parametric design manufacturing needs an additional layer of planning because every rib, baffle or panel may be unique and must be organized for assembly.</p>
            <p>MDF CNC cutting is often selected for painted interior panels, decorative grooves, jali and mandir elements. HDHMR CNC cutting is preferred for kitchens, wardrobes, heavy-use furniture and moisture-sensitive spaces. Wood CNC carving adds warmth and premium texture. Acrylic CNC cutting supports clean modern signage and displays. ACP, PVC and WPC cutting can serve commercial and specialty applications when the material thickness and finish are suitable. Digi CNC helps clients match service and material to the real project requirement.</p>
            <p>For custom CNC projects, the best starting point is information. Send a sketch, CAD file, reference image, physical sample photo, dimensions, quantity and material idea. If the project is not fully designed yet, Digi CNC can still guide the feasibility discussion and suggest how to prepare the file. This is useful for artists, prototype development companies, homeowners and design studios that need a practical production partner.</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
            <h2 class="font-heading text-2xl font-bold">Need help selecting a service?</h2>
            <p class="mt-3 text-sm leading-7 text-slate-600">Share your reference, material and timeline. Digi CNC will help identify whether the work needs 2D cutting, 3D carving, jali optimization, parametric part planning or custom CNC development.</p>
            <div class="mt-6"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'compact' => true]); ?></div>
        </div>
    </div>
</section>
