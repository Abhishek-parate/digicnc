<?php $company = $repo->company(); ?>
<section class="relative isolate overflow-hidden bg-slate-950 text-white">
    <img class="absolute inset-0 -z-10 h-full w-full object-cover opacity-45" src="<?= e(asset_url('assets/images/hero-cnc-workshop.png')) ?>" alt="CNC cutting service in Nagpur workshop by Digi CNC" fetchpriority="high">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/30"></div>
    <div class="mx-auto grid min-h-[720px] max-w-7xl content-center gap-10 px-4 py-20 lg:grid-cols-[1.05fr_.95fr] lg:px-6">
        <div>
            <p class="eyebrow text-red-300">Digi CNC Nagpur - 2D & 3D CNC Cutting & Carving</p>
            <h1 class="mt-5 max-w-4xl font-heading text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">Premium CNC Cutting, Carving, Jali and Parametric Manufacturing in Nagpur</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">Digi CNC helps architects, interior designers, furniture manufacturers, contractors, prototype teams, artists and homeowners convert drawings into clean CNC-manufactured parts. From MDF jali panels and HDHMR furniture components to 3D carved wall panels and parametric design installations, the work is planned for accuracy, finish and real-world assembly.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a class="btn-primary px-6 py-3" href="<?= e(app_url('contact-us')) ?>">Get CNC Quote</a>
                <a class="btn-secondary px-6 py-3" href="<?= e(app_url('gallery')) ?>">View Project Gallery</a>
            </div>
            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($repo->stats() as $stat): ?>
                    <div class="rounded border border-white/15 bg-white/10 p-4 backdrop-blur">
                        <p class="font-heading text-3xl font-extrabold"><span data-counter="<?= e($stat['value']) ?>">0</span><?= e($stat['suffix']) ?></p>
                        <p class="mt-1 text-sm text-slate-300"><?= e($stat['label']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="self-end rounded-lg border border-white/15 bg-white/95 p-5 text-slate-900 shadow-2xl">
            <p class="font-heading text-2xl font-bold">Send Drawing or Requirement</p>
            <p class="mt-2 text-sm leading-6 text-slate-600">Share material, size, quantity, file status and timeline. The Digi CNC team will review the feasibility and guide the next step.</p>
            <div class="mt-5"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'compact' => true]); ?></div>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-10 lg:grid-cols-[.9fr_1.1fr]">
            <div>
                <p class="eyebrow">Why Choose Digi CNC</p>
                <h2 class="section-title">A manufacturing partner for design-led CNC work, not just a cutting vendor.</h2>
                <p class="mt-5 leading-8 text-slate-600">CNC work can look simple from the outside: load a file, clamp a sheet, run a machine. In practice, the best output depends on a chain of decisions made before the router starts. Digi CNC studies the drawing, material, thickness, pattern strength, edge quality, finish plan and intended use. That is why the company is useful for both B2B production work and B2C custom projects. A furniture contractor may need repeatable parts with clean labels. An architect may need a parametric surface that can actually be assembled. A homeowner may need a mandir jali that looks detailed but does not become fragile. Each case requires different judgment.</p>
                <p class="mt-4 leading-8 text-slate-600">Founded by Mr. Krunal Patel and backed by more than five years of hands-on CNC experience, Digi CNC serves Nagpur and Maharashtra with practical production thinking. The team works across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The result is a service that feels premium because the basics are treated seriously: file preparation, tool choice, material support, clean cutting strategy, review before machining, communication during production and sensible delivery expectations.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <?php foreach ([
                    ['title' => 'Drawing-First Review', 'body' => 'Files are checked for scale, closed profiles, duplicate lines, thin webs, tool clearance and production risk before cutting.'],
                    ['title' => 'Material-Aware Machining', 'body' => 'MDF, HDHMR, acrylic, ACP, WPC and wood behave differently, so toolpath planning is matched to the material and finish goal.'],
                    ['title' => 'B2B + B2C Support', 'body' => 'The workflow supports architects, furniture teams, contractors, manufacturers, artists, prototype companies and homeowners.'],
                    ['title' => 'Conversion-Focused Guidance', 'body' => 'Every inquiry is guided toward the clearest next step: file correction, sample cutting, quotation, production or design refinement.'],
                ] as $item): ?>
                    <article class="feature-card">
                        <h3><?= e($item['title']) ?></h3>
                        <p><?= e($item['body']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="max-w-3xl">
            <p class="eyebrow">Our Services</p>
            <h2 class="section-title">CNC services for interiors, furniture, prototypes, art and industrial use.</h2>
            <p class="mt-4 leading-8 text-slate-600">Digi CNC covers the common CNC needs of the Nagpur market while also handling custom work that needs design interpretation. The service range includes 2D CNC cutting, 3D CNC carving, parametric design manufacturing, decorative jali cutting, MDF CNC cutting, HDHMR CNC cutting, wood carving, acrylic cutting, ACP cutting, WPC cutting, prototype manufacturing, CNC engraving, wall panels, mandir designs and furniture components. Each service can be used as a one-time requirement or as part of a recurring production relationship.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($repo->services() as $service): ?>
                <a class="service-card group" href="<?= e(app_url($service['slug'])) ?>">
                    <span class="service-icon"><?= strtoupper(substr($service['name'], 0, 1)) ?></span>
                    <h3><?= e($service['name']) ?></h3>
                    <p><?= e($service['summary']) ?></p>
                    <span class="mt-4 inline-flex font-bold text-red-600 group-hover:text-red-700">Explore service →</span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.95fr_1.05fr] lg:px-6">
        <div>
            <p class="eyebrow">Materials We Work With</p>
            <h2 class="section-title">Material selection that respects finish, strength and application.</h2>
            <p class="mt-5 leading-8 text-slate-600">The same CNC file can perform very differently in two materials. MDF is often selected for painted decorative panels, interior jali and carved surfaces because it offers a consistent face and economical machining. HDHMR is chosen when moisture resistance, density and durability matter for kitchens, wardrobes and commercial furniture. Natural wood is valued for warmth, grain and premium carving. Acrylic helps with signage, display work and clean modern panels. ACP and WPC support exterior-adjacent or commercial requirements when used with the right design details. Digi CNC helps clients avoid material assumptions that look good on paper but fail during cutting, finishing or installation.</p>
            <p class="mt-4 leading-8 text-slate-600">For every project, material thickness, sheet size, edge quality, finishing method, fastener strategy and pattern strength are considered together. This is especially important for decorative jali, mandir panels, parametric ribs, furniture components and prototype work where one weak detail can affect the final result.</p>
        </div>
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
            <?php foreach ($repo->materials() as $material): ?>
                <div class="rounded-md border border-slate-200 bg-slate-50 p-4 text-center font-bold text-slate-800 shadow-sm"><?= e($material) ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-slate-950 text-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-10 lg:grid-cols-[.85fr_1.15fr]">
            <div>
                <p class="eyebrow text-red-300">Industries We Serve</p>
                <h2 class="section-title text-white">Built for professionals who need dependable CNC output.</h2>
                <p class="mt-5 leading-8 text-slate-300">Digi CNC works with a wide audience because CNC manufacturing sits between design and execution. Architects use it for feature panels, facades, partitions, ceiling baffles and parametric concepts. Interior designers use it for wall panels, jali, mandirs, retail counters and branded commercial details. Furniture manufacturers use it for repeat components, shutters, grooves, templates and cabinet parts. Contractors use it when manual cutting would slow the site or reduce consistency. Artists and prototype teams use it to test forms that need digital precision. Homeowners use it when a custom interior element must fit a specific space and style.</p>
            </div>
            <div class="grid gap-3 sm:grid-cols-2">
                <?php foreach ($repo->industries() as $industry): ?>
                    <div class="rounded-md border border-white/10 bg-white/5 p-4 font-semibold text-slate-100"><?= e($industry) ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="mx-auto max-w-3xl text-center">
            <p class="eyebrow">Project Workflow</p>
            <h2 class="section-title">A clear path from idea or drawing to CNC-ready output.</h2>
            <p class="mt-4 leading-8 text-slate-600">The Digi CNC workflow is designed to reduce uncertainty. Many clients arrive with different levels of readiness. Some have a polished CAD file. Some have a reference image and rough dimensions. Some have a physical sample. The process turns that input into a practical manufacturing plan.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
            <?php foreach ([
                ['01', 'Inquiry Review', 'Share the file, image, material, thickness, size, quantity and timeline.'],
                ['02', 'Design Check', 'Profiles, scale, pattern strength, tool clearance and drawing issues are reviewed.'],
                ['03', 'Material Planning', 'The material, sheet layout, nesting and finishing requirements are confirmed.'],
                ['04', 'CNC Production', 'Cutting, carving or engraving is completed with attention to accuracy and edge quality.'],
                ['05', 'Dispatch Guidance', 'Parts are organized for finishing, assembly, transport or site coordination.'],
            ] as $step): ?>
                <article class="process-card">
                    <span><?= e($step[0]) ?></span>
                    <h3><?= e($step[1]) ?></h3>
                    <p><?= e($step[2]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
                <p class="eyebrow">Portfolio Preview</p>
                <h2 class="section-title">Realistic applications for CNC cutting, carving and interior manufacturing.</h2>
            </div>
            <a class="btn-secondary border-slate-300 text-slate-900" href="<?= e(app_url('gallery')) ?>">Open Full Gallery</a>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-3">
            <?php foreach (array_slice($repo->gallery(), 0, 3) as $item): ?>
                <article class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
                    <img class="h-72 w-full object-cover" src="<?= e(asset_url($item['image'])) ?>" loading="lazy" alt="<?= e($item['alt']) ?>">
                    <div class="p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-red-600"><?= e($item['category']) ?></p>
                        <h3 class="mt-2 font-heading text-xl font-bold"><?= e($item['title']) ?></h3>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-10 lg:grid-cols-[.8fr_1.2fr]">
            <div>
                <p class="eyebrow">Trust Signals</p>
                <h2 class="section-title">Built for accuracy, communication and long-term project relationships.</h2>
                <p class="mt-5 leading-8 text-slate-600">A premium CNC supplier should protect the client from avoidable mistakes. Digi CNC focuses on practical advice before production, because a small file issue can become expensive after cutting. The team pays attention to drawing clarity, material constraints, order quantity, production sequence and end use. This helps commercial clients plan repeat work and helps homeowners feel confident about custom orders.</p>
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <?php foreach (['Architect Ready', 'Interior Friendly', 'Furniture Batch Work', 'Prototype Support'] as $logo): ?>
                        <div class="rounded border border-slate-200 bg-slate-50 p-4 text-center text-sm font-extrabold text-slate-700"><?= e($logo) ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                <?php foreach ($repo->testimonials() as $testimonial): ?>
                    <article class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm leading-7 text-slate-600">“<?= e($testimonial['quote']) ?>”</p>
                        <h3 class="mt-5 font-bold"><?= e($testimonial['name']) ?></h3>
                        <p class="text-sm text-red-600"><?= e($testimonial['role']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_.9fr] lg:px-6">
        <div>
            <p class="eyebrow">SEO Manufacturing Notes</p>
            <h2 class="section-title">CNC cutting service in Nagpur with a local, production-focused advantage.</h2>
            <div class="prose-content mt-5">
                <p>When people search for CNC Cutting Service in Nagpur, they are often not looking for a generic machine shop. They need someone who can understand the difference between a beautiful concept and a part that can be cut, finished and installed. Digi CNC fills that space for Nagpur and Maharashtra. The company supports 2D CNC cutting, 3D CNC carving, decorative jali cutting, MDF CNC cutting, HDHMR CNC cutting, custom CNC projects, prototype manufacturing and CNC router services for the interior and manufacturing ecosystem.</p>
                <p>For architects and interior designers, Digi CNC helps convert creative drawings into panels, partitions, baffles, wall features and parametric elements. For furniture manufacturers and contractors, the value is repeatability: accurate profiles, consistent components, organized production and reduced manual correction. For industrial manufacturers and prototype companies, CNC cutting offers a way to test shapes, create templates, route sheet materials and prepare functional components. For homeowners, the same technology makes it possible to create custom mandir designs, decorative screens, wall panels and furniture details that fit a specific site.</p>
                <p>Search visibility matters, but the work must also satisfy the person who arrives from Google. That is why the site explains materials, applications, file requirements and workflow clearly. A client should understand that MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates each need different machining decisions. A jali pattern should not be selected only because it looks attractive on a screen. It should have enough strength, appropriate spacing, manageable cutting time and a finish plan. A parametric design should not be manufactured without assembly logic. A furniture batch should not be cut from a file with duplicate curves or unclear part labels.</p>
                <p>Digi CNC brings a grounded industrial tone to this process. The team does not overcomplicate simple work, but it also does not treat detailed work casually. That balance is valuable in Nagpur because the market includes commercial projects, renovation work, new homes, modular furniture, boutique interiors, retail displays, office spaces and custom creative commissions. Clients can start with a call, a WhatsApp message, a reference image or a production drawing. From there, Digi CNC guides file preparation, material choice, quotation and production scheduling.</p>
            </div>
        </div>
        <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="font-heading text-2xl font-bold">Frequently Asked Questions</h2>
            <div class="mt-5 divide-y divide-slate-200">
                <?php foreach ($repo->faqs('home') as $faq): ?>
                    <details class="faq-item py-4">
                        <summary><?= e($faq['q']) ?></summary>
                        <p><?= e($faq['a']) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
