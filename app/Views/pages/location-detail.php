<section class="relative isolate overflow-hidden bg-slate-950 text-white">
    <img class="absolute inset-0 -z-10 h-full w-full object-cover opacity-35" src="<?= e(asset_url($page['image'])) ?>" alt="<?= e($page['title']) ?> by Digi CNC" fetchpriority="high">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-slate-950 via-slate-950/95 to-slate-950/40"></div>
    <div class="mx-auto max-w-7xl px-4 py-20 lg:px-6">
        <p class="eyebrow text-red-300"><?= e($page['keyword']) ?></p>
        <h1 class="mt-4 max-w-5xl font-heading text-4xl font-extrabold leading-tight lg:text-6xl"><?= e($page['h1']) ?></h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200"><?= e($page['meta_description']) ?></p>
        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a class="btn-primary px-6 py-3" href="#quote">Request Location-Based Quote</a>
            <a class="btn-secondary px-6 py-3" href="<?= e(app_url('gallery')) ?>">View CNC Gallery</a>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[minmax(0,1fr)_380px] lg:px-6 text-justify">
        <article class="prose-content">
            <p class="eyebrow">Location Landing Page</p>
            <h2 class="section-title"><?= e($page['title']) ?> with practical manufacturing support from Digi CNC.</h2>
            <p>When clients search for <?= e($page['keyword']) ?>, they are usually looking for a supplier who can move quickly from discussion to production. Digi CNC serves this need from Nagpur with 2D CNC cutting, 3D CNC carving, parametric design manufacturing, decorative jali cutting, MDF CNC cutting, HDHMR CNC cutting, acrylic cutting, ACP cutting, WPC cutting, furniture components, custom CNC projects, prototype manufacturing, CNC engraving, wall panels and mandir designs.</p>
            <p>The location advantage is important because CNC projects often require discussion. A designer may need to confirm whether a jali pattern is strong enough. A furniture contractor may need repeatable components cut from MDF, HDHMR or plywood. A homeowner may need help choosing between MDF, HDHMR and wood for a mandir panel. A prototype company may need a sample before a production batch. A commercial project team may need parts delivered in a sequence that supports site execution. Digi CNC keeps these conversations local, practical and production-focused.</p>
            <p>Nagpur and Maharashtra have a wide mix of residential, commercial, industrial and renovation projects. CNC manufacturing supports this market because it gives designers and builders better control over shape, repeatability and detail. It can reduce manual cutting errors, improve edge consistency, support design-led interiors and make custom elements more achievable. Digi CNC positions itself as a premium industrial manufacturing partner for this exact need.</p>

            <h2>Who uses Digi CNC for this location?</h2>
            <p>Architects use Digi CNC for feature panels, parametric ribs, ceiling baffles, decorative screens and design-heavy interiors. Interior designers use the service for jali, mandir units, wall panels, reception walls, retail counters and carved details. Furniture manufacturers and contractors use CNC cutting for shutters, shelves, grooves, profiles, assembly parts and batch components. Industrial manufacturers can use CNC support for templates, sheet parts, prototypes and fixtures. Artists and creative professionals use CNC carving and cutting to convert digital or hand-drawn concepts into physical work. Homeowners use Digi CNC for custom residential features that need accurate fit and premium finish.</p>
            <p>The same machine capability serves all these audiences, but the communication changes. A professional design studio may send technical files and expect manufacturing feedback. A homeowner may send a phone photo and dimensions. A contractor may send an urgent list of panels. A prototype team may need iterative samples. Digi CNC handles this variation by asking the right questions before production.</p>

            <h2>Materials available for location-based CNC projects</h2>
            <p>Digi CNC works with <?= e(implode(', ', $repo->materials())) ?>. MDF is widely used for painted interiors, jali and carved panels. HDHMR is chosen for durability and moisture resistance in kitchens, wardrobes and commercial furniture. Wood gives natural grain and a premium carved finish. Acrylic is useful for signage, display work and clean modern panels. PVC, ACP and WPC can support specialty commercial and exterior-adjacent applications when the design and material thickness are suitable. Plywood and decorative laminates are used for furniture and fit-out requirements depending on finish and structural needs.</p>
            <p>Material selection is not a cosmetic decision only. It affects machining time, edge finish, pattern strength, finishing cost, installation method and long-term performance. A delicate CNC jali in the wrong material can become fragile. A deep carving on a thin sheet can look weak. A furniture part without finishing allowance can create fitting issues. Digi CNC helps clients choose the right material for the actual use case.</p>

            <h2>Service range for <?= e($page['title']) ?></h2>
            <p>The service range includes <a href="<?= e(app_url('CNC-cutting-service-nagpur')) ?>">CNC cutting service in Nagpur</a>, <a href="<?= e(app_url('2d-cnc-cutting-nagpur')) ?>">2D CNC cutting</a>, <a href="<?= e(app_url('3d-cnc-carving-nagpur')) ?>">3D CNC carving</a>, <a href="<?= e(app_url('parametric-design-nagpur')) ?>">parametric design manufacturing</a>, <a href="<?= e(app_url('decorative-jali-cutting-nagpur')) ?>">decorative jali cutting</a>, <a href="<?= e(app_url('mdf-cnc-cutting-nagpur')) ?>">MDF CNC cutting</a>, <a href="<?= e(app_url('hdhmr-cnc-cutting-nagpur')) ?>">HDHMR CNC cutting</a> and <a href="<?= e(app_url('custom-cnc-projects')) ?>">custom CNC projects</a>. These internal service pages explain specific use cases in more detail and include FAQs for buyers who need deeper information before sending an inquiry.</p>
            <p>A location landing page works best when it answers the practical question behind the search: can this business serve my project here? Digi CNC is positioned to serve Nagpur directly and Maharashtra project requirements based on material, quantity, drawing readiness, logistics and production schedule. Clients outside Nagpur can share files remotely, discuss feasibility and coordinate production where suitable.</p>

            <h2>Process for local CNC inquiries</h2>
            <p>The process begins when the client shares a file, reference image, material idea, dimensions and timeline. Digi CNC reviews the requirement and checks whether the file is production-ready. If the file needs correction, the client is guided. If the material choice is risky, alternatives can be discussed. If the design is complex, a sample may be recommended. Once the details are clear, quotation and production scheduling become easier.</p>
            <p>During production, the CNC process is planned according to service type. 2D cutting focuses on profiles, nesting and repeatability. 3D carving focuses on relief depth, surface quality and finishing allowance. Jali cutting focuses on pattern strength and clean cutouts. Parametric manufacturing focuses on part organization and assembly logic. Furniture component work focuses on consistency and labels. Custom projects focus on feasibility and iteration. This structured approach helps different projects receive the attention they need.</p>

            <h2>Why choose Digi CNC for <?= e($page['keyword']) ?>?</h2>
            <p>Digi CNC offers more than machine availability. The company brings local communication, founder-led attention, more than five years of CNC experience, broad material capability and a practical understanding of interiors, furniture, prototypes and custom manufacturing. Clients can discuss projects by phone, WhatsApp or inquiry form. The team can review files, advise on material, explain feasibility and guide the production path.</p>
            <p>For commercial buyers, this means better planning and fewer surprises. For homeowners, it means clearer guidance. For architects and designers, it means design intent is treated seriously. For manufacturers, it means repeatable component output can be discussed with a production mindset. That combination makes Digi CNC a strong choice for CNC cutting and carving requirements in Nagpur and Maharashtra.</p>
        </article>

        <aside class="space-y-5">
            <div id="quote" class="rounded-lg border border-slate-200 bg-slate-50 p-5 shadow-sm">
                <h2 class="font-heading text-2xl font-bold">Request a Quote</h2>
                <p class="mt-2 text-sm leading-7 text-slate-600">Share your location, material, drawing and quantity for a practical feasibility review.</p>
                <div class="mt-5"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'compact' => true]); ?></div>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                <h2 class="font-heading text-xl font-bold">Served Audiences</h2>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-600">
                    <?php foreach ($repo->industries() as $industry): ?>
                        <li class="flex gap-2"><span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-red-600"></span><?= e($industry) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-5xl px-4 lg:px-6">
        <div class="text-center">
            <p class="eyebrow">FAQs</p>
            <h2 class="section-title">Questions about <?= e($page['title']) ?></h2>
        </div>
        <div class="mt-8 divide-y divide-slate-200 rounded-lg border border-slate-200 bg-white px-6 shadow-sm">
            <?php foreach ($page['faqs'] as $faq): ?>
                <details class="faq-item py-5">
                    <summary><?= e($faq['q']) ?></summary>
                    <p><?= e($faq['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
