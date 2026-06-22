<section class="h-[400px] overflow-hidden">
    <img
        class="h-full w-full object-cover"
        src="<?= e(asset_url($service['image'])) ?>"
        alt="<?= e($service['title']) ?>">
</section>

<section style="padding:48px 0 32px;">
    <div class="mx-auto max-w-7xl px-4 lg:px-8">

        <!-- Eyebrow Pill -->
        <div style="display:inline-flex;align-items:center;gap:8px;background:#322EA1;color:#fff;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.12em;padding:7px 16px;border-radius:99px;margin-bottom:18px;">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3" />
                <path d="M12 2v2m0 16v2M2 12h2m16 0h2m-3.22-6.78-1.42 1.42M6.64 17.36l-1.42 1.42m12.72 0-1.42-1.42M6.64 6.64 5.22 5.22" />
            </svg>
            <?= e($service['keyword']) ?>
        </div>

        <!-- Title -->
        <h1 class="font-heading font-bold leading-tight" style="color:#050509;margin:0 0 12px;font-size:clamp(1.5rem, 3vw, 2rem);">
            <?php
            $words = explode(' ', $service['title'], 2);
            echo e($words[0]);
            if (isset($words[1])) {
                echo ' <span style="color:#322EA1;">' . e($words[1]) . '</span>';
            }
            ?>
        </h1>
        <div style="width:48px;height:4px;background:#322EA1;border-radius:4px;margin-bottom:18px;"></div>

        <!-- Summary -->
        <p style="color:#475569;font-size:1rem;line-height:1.85;max-width:680px;margin:0 0 40px;">
            <?= e($service['summary']) ?>
        </p>

        <!-- ── BEST FOR ── -->
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="display:inline-flex;align-items:center;gap:8px;background:#322EA1;color:#fff;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;padding:7px 16px;border-radius:99px;white-space:nowrap;">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9 12l2 2 4-4" />
                </svg>
                BEST FOR
            </div>
            <div style="flex:1;height:1px;background:#322EA1;position:relative;">
                <span style="position:absolute;right:0;top:50%;transform:translateY(-50%);width:8px;height:8px;background:#322EA1;border-radius:50%;display:block;"></span>
            </div>
        </div>

        <!-- Best For Grid -->
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:14px;margin-bottom:36px;">
            <?php
            $icons = [
                '<rect x="3" y="3" width="7" height="18" rx="1"/><rect x="14" y="3" width="7" height="18" rx="1"/>',
                '<rect x="4" y="6" width="16" height="10" rx="1"/><path d="M4 10h16M8 6V4m8 2V4"/>',
                '<path d="M3 9h18M3 9l2-5h14l2 5M3 9v10a1 1 0 001 1h16a1 1 0 001-1V9M9 21v-6h6v6"/>',
                '<rect x="5" y="3" width="14" height="18" rx="1"/><path d="M9 7h6M9 11h6M9 15h4"/><circle cx="17" cy="17" r="3"/><path d="M17 15v2l1 1"/>',
                '<rect x="3" y="6" width="18" height="15" rx="1"/><path d="M9 21V6m6 15V6M3 10h18M3 14h18"/>',
                '<circle cx="12" cy="12" r="3"/><path d="M12 2v3m0 14v3M2 12h3m14 0h3m-4.22-6.78-2.12 2.12M8.34 15.66l-2.12 2.12m12.56 0-2.12-2.12M8.34 8.34 6.22 6.22"/>',
            ];
            foreach ($service['applications'] as $i => $application):
                $icon = $icons[$i % count($icons)];
            ?>
                <div style="display:flex;align-items:center;gap:14px;background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:14px 16px;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(50,46,161,.10)'" onmouseout="this.style.boxShadow='none'">
                    <div style="flex-shrink:0;width:44px;height:44px;background:#322EA1;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24"><?= $icon ?></svg>
                    </div>
                    <span style="font-weight:600;font-size:.875rem;color:#1e293b;line-height:1.4;"><?= e($application) ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- ── MATERIALS ── -->
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="display:inline-flex;align-items:center;gap:8px;background:#322EA1;color:#fff;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;padding:7px 16px;border-radius:99px;white-space:nowrap;">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                MATERIALS
            </div>
            <div style="flex:1;height:1px;background:#322EA1;position:relative;">
                <span style="position:absolute;right:0;top:50%;transform:translateY(-50%);width:8px;height:8px;background:#322EA1;border-radius:50%;display:block;"></span>
            </div>
        </div>

        <!-- Material Pills -->
        <div style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:8px;">
            <?php foreach ($service['materials'] as $material): ?>
                <span style="display:inline-block;border:1.5px solid #322EA1;color:#322EA1;font-size:.8125rem;font-weight:700;padding:7px 20px;border-radius:99px;cursor:default;transition:all .18s;"
                    onmouseover="this.style.background='#322EA1';this.style.color='#fff';"
                    onmouseout="this.style.background='';this.style.color='#322EA1';">
                    <?= e($material) ?>
                </span>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<section class="bg-white pb-12 lg:pb-16">
    <div class="mx-auto grid max-w-7xl items-start gap-10 px-4 lg:grid-cols-[minmax(0,1fr)_380px] lg:px-6">
        <article class="prose-content text-justify">
            <p class="eyebrow">Service Overview</p>
            <h2 class="section-title mt-2"><?= e($service['title']) ?> with design-aware manufacturing support.</h2>
            <p class="mt-4 leading-7 text-slate-700"><?= e($service['summary']) ?> This service is built for clients who need more than a simple machine run. A CNC project has to move from idea or drawing into a physical part that can be handled, finished, assembled and installed. Digi CNC reviews the file, material, thickness, pattern, quantity, use case and expected finish before recommending the best production path.</p>
            <p class="mt-4 leading-7 text-slate-700">In Nagpur and across Maharashtra, CNC buyers often come from very different backgrounds. Architects may send a feature-wall concept, designers may share a jali pattern, furniture manufacturers may need repeat components, contractors may need quick production support, artists may need relief detail, prototype companies may need a functional sample and homeowners may need a custom mandir or panel. Digi CNC keeps the conversation practical for each buyer. The aim is to protect the design intent while reducing avoidable mistakes at the manufacturing stage.</p>
            <p class="mt-4 leading-7 text-slate-700">The strongest CNC outcomes happen when the drawing, material and final application are aligned. A pattern that works beautifully in MDF may need changes in acrylic. A 3D surface may need extra depth, but the chosen board may limit what can be carved safely. A furniture component may look correct, but without hardware references it may create assembly problems later. A parametric panel may need part numbering so the site team can install it efficiently. Digi CNC brings these details into the discussion before production.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Why this service matters for CNC buyers in Nagpur</h2>
            <p class="mt-4 leading-7 text-slate-700"><?= e($service['keyword']) ?> is a high-intent requirement because clients are usually close to execution. They may already have a drawing, a site measurement, a designer reference or a production schedule. At that stage, delays are costly. A clean CNC process can reduce manual cutting, improve repeatability, speed up fabrication and create details that are difficult to achieve by hand. It also gives designers more freedom because patterns, curves, reliefs and repeat components can be produced from digital files with controlled accuracy.</p>
            <p class="mt-4 leading-7 text-slate-700">For B2B clients, the value is consistency. Furniture manufacturers, contractors and industrial teams need parts that repeat correctly across batches. CNC cutting can support cabinets, shutters, partitions, templates, display units, signage bases, counter panels and assembly components. For B2C clients, the value is personalization. A homeowner can create a mandir backdrop, decorative jali, carved wall feature or custom furniture detail that fits the home exactly. Digi CNC supports both needs with a clear review and production workflow.</p>
            <p class="mt-4 leading-7 text-slate-700">Local responsiveness is another advantage. When the supplier is accessible in Nagpur, drawings can be clarified faster, material decisions can be discussed practically and urgent revisions can be handled with better context. Digi CNC encourages clients to share complete information early so the quotation and feasibility check can be meaningful. The more accurate the input, the smoother the output.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Applications and project types</h2>
            <p class="mt-4 leading-7 text-slate-700">This service can be used for <?= e(implode(', ', $service['applications'])) ?> and related CNC requirements. In interior projects, it can support partitions, wall panels, ceiling details, doors, display units, mandir elements, reception features and decorative surfaces. In furniture production, it can support repeat parts, grooves, profiles, shelves, shutters, hardware references and nested components. In commercial work, it can support branding, retail fixtures, restaurant interiors, office features and showroom displays. In prototype and custom work, it can support sample parts, artistic pieces, one-off components and design validation.</p>
            <p class="mt-4 leading-7 text-slate-700">Every application has its own production logic. Decorative jali needs enough web thickness and clean inside corners. Furniture components need dimensions that match assembly and hardware. Carved panels need depth planning and finishing allowance. Acrylic parts need surface protection and edge considerations. ACP and WPC work need material suitability checks. Parametric designs need organization, numbering and often a sample before full production. Digi CNC uses application context to prevent the project from being treated as a generic file.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Materials used for <?= e($service['title']) ?></h2>
            <p class="mt-4 leading-7 text-slate-700">Common material options for this service include <?= e(implode(', ', $service['materials'])) ?>. Material choice affects cost, cutting time, edge quality, strength, surface finish and installation behavior. MDF is commonly selected for painted interiors and decorative panels because it offers a consistent machining surface. HDHMR is useful when density and moisture resistance are priorities. Natural wood gives a premium finish but requires attention to grain, thickness and carving behavior. Acrylic provides modern clean surfaces for signage and display applications. ACP, PVC and WPC can be suitable for specific commercial or specialty uses when the design geometry matches the material.</p>
            <p class="mt-4 leading-7 text-slate-700">Digi CNC helps clients avoid material mismatch. A delicate jali pattern in a weak sheet may break. A deep carve on a thin panel may not be stable. A furniture component cut without considering finishing thickness may fit poorly later. These are manufacturing realities that should be considered before machining, not after. The team discusses thickness, sheet condition, finish plan and application so the selected material supports the project goal.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Design and file preparation</h2>
            <p class="mt-4 leading-7 text-slate-700">Production-ready files are the foundation of accurate CNC work. The preferred inputs include DXF, DWG, SVG, AI, CDR, clean PDF drawings or well-dimensioned reference images. Files should be drawn to scale, with closed profiles, no duplicate lines, clear quantity notes and correct units. For carved or 3D work, depth, relief style and reference quality are important. For parametric work, each part should be organized and numbered. For furniture batches, part names, grain direction, hardware references and assembly logic can save time.</p>
            <p class="mt-4 leading-7 text-slate-700">If the file is not ready, Digi CNC can still review the requirement and guide the next step. Many clients begin with a reference image or site measurement. The team can explain what additional information is needed before production. This is especially useful for homeowners and custom project clients who may not have CAD drawings. The goal is to move from unclear input to a clear manufacturing plan without making the process intimidating.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Manufacturing process</h2>
            <p class="mt-4 leading-7 text-slate-700">The process begins with inquiry review. Digi CNC looks at the service requirement, dimensions, material, quantity and deadline. Next comes design review, where the file is checked for scale, profile quality, pattern strength and machining feasibility. Material planning follows, including thickness, sheet usage, nesting and finish expectations. Once the details are confirmed, CNC production begins with suitable toolpath planning and workholding. After cutting, carving or engraving, parts are reviewed and organized for finishing, pickup, assembly or dispatch discussion.</p>
            <p class="mt-4 leading-7 text-slate-700">For detailed jobs, sample cutting can be a wise step. A sample helps verify pattern scale, carve depth, edge quality, material behavior and finishing response. This is particularly important for parametric installations, intricate jali, carved panels, prototypes and premium interior features. Digi CNC can guide whether a sample is necessary based on project risk and quantity.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Quality checks and trust signals</h2>
            <p class="mt-4 leading-7 text-slate-700">Quality in CNC manufacturing is not limited to the machine. It includes communication, drawing review, material planning, production setup and post-cut organization. Digi CNC focuses on practical checks: dimensions, profile continuity, material thickness, cutting depth, edge behavior, pattern strength and final application. These checks are important whether the project is a single custom panel or a recurring batch of components.</p>
            <p class="mt-4 leading-7 text-slate-700">The company's trust signals include founder-led attention, more than five years of CNC experience, support for multiple industries, broad material capability and a willingness to guide clients before production. Digi CNC works with architects, interior designers, furniture manufacturers, furniture contractors, industrial manufacturers, artists, prototype development companies, homeowners, renovation projects and commercial projects. That range helps the team understand different priorities and avoid a one-size-fits-all approach.</p>
            <p class="mt-4 leading-7 text-slate-700">Handover planning is also part of quality. A CNC part does not exist in isolation; it usually moves to sanding, painting, polishing, lamination, carpentry, hardware fitting, transport or site installation. Digi CNC considers how the part will be handled after machining so clients can plan the next trade with fewer surprises. For example, delicate jali panels may need careful packing, furniture components may need organized grouping, carved panels may need finishing allowance and parametric parts may need numbering. This attention to the stage after CNC production helps the work remain useful beyond the machine bed.</p>

            <h2 class="mt-12 font-heading text-2xl font-bold text-slate-900 lg:text-3xl">Cost factors</h2>
            <p class="mt-4 leading-7 text-slate-700">Pricing depends on design complexity, material type, sheet thickness, quantity, cutting length, carving depth, machine time, file readiness, finishing requirement and urgency. A simple profile cut is usually easier to estimate than an intricate jali or deep 3D carving. A clean CAD file reduces preparation time. Efficient nesting can reduce material waste. Larger repeat batches may benefit from organized production planning. Digi CNC provides better guidance when clients share complete information at the start.</p>
            <p class="mt-4 leading-7 text-slate-700">To request a quotation, share the drawing or reference, size, material, thickness, quantity, finish plan and timeline. If you are not sure which material to use, explain the application and desired look. The team can suggest practical options before quoting.</p>


            <!-- ═══════════════════════════════════════════
     RELATED CNC SERVICES SECTION
     Self-contained — kisi bhi page mein use karo
═══════════════════════════════════════════ -->

            <!-- Section Heading -->
            <div style="display:flex;align-items:center;gap:12px;margin:0 0 20px;">
                <div style="width:34px;height:34px;background:#322EA1;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="16" height="16" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:1.1rem;color:#050509;margin:0;">Related CNC services</h3>
            </div>

            <!-- Services Grid -->
            <?php
            $relatedServices = [
                ['Decorative Jali Cutting', 'Nagpur',        'decorative-jali-cutting-nagpur', '<path d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"/>'],
                ['MDF CNC Cutting',         'Nagpur',        'mdf-cnc-cutting-nagpur',         '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>'],
                ['3D CNC Carving',          'Nagpur',        '3d-cnc-carving-nagpur',          '<path d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>'],
                ['Parametric Design',       'Manufacturing', 'parametric-design-nagpur',       '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>'],
                ['2D CNC Cutting',          'Nagpur',        '2d-cnc-cutting-nagpur',          '<path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'],
                ['All CNC Services',        '',              'services',                       '<path d="M4 6h16M4 10h16M4 14h16M4 18h16"/>'],
            ];
            ?>

            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:12px;">
                <?php foreach ($relatedServices as $rs): ?>
                    <a href="<?= e(app_url($rs[2])) ?>"
                        style="display:flex;align-items:center;gap:14px;background:#fff;border:1.5px solid #e2e8f0;border-radius:16px;padding:14px 16px;text-decoration:none;transition:all .2s;"
                        onmouseover="this.style.borderColor='#322EA1';this.style.boxShadow='0 4px 18px rgba(50,46,161,.1)';this.querySelector('.ri-icon').style.background='#322EA1';this.querySelector('.ri-icon svg').style.stroke='#fff';this.querySelector('.ri-title').style.color='#322EA1';"
                        onmouseout="this.style.borderColor='#e2e8f0';this.style.boxShadow='none';this.querySelector('.ri-icon').style.background='#f0f0fb';this.querySelector('.ri-icon svg').style.stroke='#322EA1';this.querySelector('.ri-title').style.color='#1e293b';">
                        <div class="ri-icon" style="width:38px;height:38px;background:#f0f0fb;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:all .2s;">
                            <svg width="18" height="18" fill="none" stroke="#322EA1" stroke-width="1.8" viewBox="0 0 24 24" style="transition:all .2s;"><?= $rs[3] ?></svg>
                        </div>
                        <div style="min-width:0;flex:1;">
                            <p class="ri-title" style="font-family:'Poppins',sans-serif;font-weight:700;font-size:.8125rem;color:#1e293b;margin:0;transition:color .2s;"><?= e($rs[0]) ?></p>
                            <?php if ($rs[1]): ?>
                                <p style="font-size:.7rem;color:#94a3b8;margin:2px 0 0;"><?= e($rs[1]) ?></p>
                            <?php endif; ?>
                        </div>
                        <div style="width:26px;height:26px;background:#f0f0fb;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="12" height="12" fill="none" stroke="#322EA1" stroke-width="2.5" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </article>

        <aside class="top-20 space-y-5 lg:sticky lg:self-start">
            <div id="quote" class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                <h2 class="font-heading text-xl font-bold text-slate-900">Get a Quote</h2>
                <p class="mt-2 text-sm leading-7 text-slate-600">Share drawing, material, thickness, quantity and timeline for <?= e($service['title']) ?>.</p>
                <div class="mt-5"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'selectedService' => $service['title'], 'compact' => true]); ?></div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="font-heading text-xl font-bold text-slate-900">Why Digi CNC</h2>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-600">
                    <?php foreach ($service['differentiators'] as $point): ?>
                        <li class="flex gap-2"><span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-red-600"></span><?= e($point) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="font-heading text-xl font-bold text-slate-900">Related Pages</h2>
                <ul class="mt-4 space-y-3 text-sm font-semibold">
                    <li><a class="text-slate-700 hover:text-red-600" href="<?= e(app_url('cnc-cutting-nagpur')) ?>">CNC Cutting Nagpur</a></li>
                    <li><a class="text-slate-700 hover:text-red-600" href="<?= e(app_url('cnc-cutting-maharashtra')) ?>">CNC Cutting Maharashtra</a></li>
                    <?php foreach (array_slice($repo->servicePages(), 0, 4, true) as $relatedSlug => $related): ?>
                        <?php if ($relatedSlug !== $slug): ?>
                            <li><a class="text-slate-700 hover:text-red-600" href="<?= e(app_url($relatedSlug)) ?>"><?= e($related['title']) ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </div>
</section>

<section style="background:#f4f6ff;padding:72px 0;">
    <div style="max-width:860px;margin:0 auto;padding:0 24px;">

        <!-- Header -->
        <div style="text-align:center;margin-bottom:44px;">
            <div style="display:flex;align-items:center;justify-content:center;gap:10px;margin-bottom:16px;">
                <span style="font-size:11px;font-weight:800;letter-spacing:.14em;color:#322EA1;">&#9650;&#9650;&#9650;&#9650;</span>
                <div style="width:34px;height:34px;background:#322EA1;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                    <svg width="16" height="16" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20 7H4a2 2 0 00-2 2v6a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" />
                        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
                    </svg>
                </div>
                <div style="width:56px;height:1px;background:#322EA1;"></div>
            </div>

            <h2 class="font-heading font-bold leading-tight" style="color:#050509;margin:0 0 12px;font-size:1.75rem;line-height:1.3;">
                Questions about <?= e($service['title']) ?>
            </h2>
            <p style="font-size:.875rem;color:#606693;line-height:1.8;max-width:520px;margin:0 auto 20px;">
                Find answers to common questions about our <?= e(strtolower($service['title'])) ?> services, materials, process and customization options.
            </p>
            <div style="display:flex;align-items:center;justify-content:center;gap:8px;">
                <div style="width:56px;height:1px;background:#322EA1;"></div>
                <div style="width:7px;height:7px;background:#322EA1;border-radius:50%;"></div>
                <div style="width:56px;height:1px;background:#322EA1;"></div>
            </div>
        </div>

        <!-- FAQ Items -->
        <?php
        $faq_icons = [
            '<path d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            '<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
            '<path d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/>',
            '<path d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>',
        ];
        ?>
        <div style="display:flex;flex-direction:column;gap:10px;">
            <?php foreach ($service['faqs'] as $i => $faq): ?>
                <?php $ficon = $faq_icons[$i % count($faq_icons)]; ?>
                <details class="digi-faq" style="background:#fff;border:1.5px solid #e2e8f0;border-radius:16px;overflow:hidden;transition:border-color .2s;">

                    <summary style="display:flex;align-items:center;gap:14px;padding:15px 18px;cursor:pointer;list-style:none;-webkit-appearance:none;"
                        onclick="
                                 const det = this.parentElement;
                                 const all = det.parentElement.querySelectorAll('details.digi-faq');
                                 all.forEach(d => { if(d!==det){ d.removeAttribute('open'); d.style.borderColor='#e2e8f0'; } });
                                 setTimeout(()=>{ det.style.borderColor = det.open ? '#322EA1' : '#e2e8f0'; },10);
                             ">
                        <!-- Icon -->
                        <span style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;min-width:40px;background:#322EA1;border-radius:50%;">
                            <svg width="19" height="19" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"><?= $ficon ?></svg>
                        </span>
                        <!-- Question -->
                        <span style="flex:1;min-width:0;font-family:'Poppins',sans-serif;font-weight:700;font-size:.9375rem;color:#050509;line-height:1.45;">
                            <?= e($faq['q']) ?>
                        </span>
                        <!-- Toggle -->
                        <span class="faq-toggle" style="display:flex;align-items:center;justify-content:center;width:30px;height:30px;min-width:30px;border:2px solid #322EA1;border-radius:50%;">
                            <svg class="ico-plus" width="14" height="14" fill="none" stroke="#322EA1" stroke-width="2.5" viewBox="0 0 24 24">
                                <path d="M12 5v14M5 12h14" />
                            </svg>
                            <svg class="ico-minus" width="14" height="14" fill="none" stroke="#322EA1" stroke-width="2.5" viewBox="0 0 24 24" style="display:none;">
                                <path d="M5 12h14" />
                            </svg>
                        </span>
                    </summary>

                    <div style="height:1px;background:#e2e8f0;margin:0 18px;"></div>
                    <div style="padding:16px 18px 20px;">
                        <p style="font-size:.875rem;color:#475569;line-height:1.8;margin:0;"><?= e($faq['a']) ?></p>
                    </div>

                </details>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- FAQ toggle JS -->
<script>
    document.querySelectorAll('details.digi-faq').forEach(function(det) {
        det.addEventListener('toggle', function() {
            var plus = det.querySelector('.ico-plus');
            var minus = det.querySelector('.ico-minus');
            plus.style.display = det.open ? 'none' : 'block';
            minus.style.display = det.open ? 'block' : 'none';
        });
    });
</script>
<section style="background:#0d0b1f;padding:64px 0 80px;border-top:2px solid rgba(50,46,161,0.45);">
    <div style="max-width:1280px;margin:0 auto;padding:0 24px;display:flex;flex-wrap:wrap;align-items:center;gap:32px;justify-content:space-between;">
        <div style="flex:1;min-width:260px;">
            <p style="font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.14em;color:#aaa7f2;margin:0 0 10px;">Lead Generation CTA</p>
            <h2 style="font-family:'Poppins',sans-serif;font-weight:800;font-size:clamp(1.5rem,3vw,2.25rem);color:#fff;margin:0 0 14px;line-height:1.2;">
                Ready to discuss <?= e($service['title']) ?>?
            </h2>
            <p style="font-size:.9375rem;color:#94a3b8;line-height:1.8;margin:0;max-width:540px;">
                Send your drawing, reference image, material and timeline. Digi CNC will review the requirement and guide the next production step.
            </p>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:12px;flex-shrink:0;">
           <a href="https://wa.me/<?= e(preg_replace('/[^0-9]/', '', $repo->company()['whatsapp'])) ?>" target="_blank" rel="noopener"
    style="display:inline-flex;align-items:center;gap:8px;background:#322EA1;color:#fff;font-weight:800;font-size:.875rem;padding:13px 24px;border-radius:8px;text-decoration:none;transition:background .2s;"
    onmouseover="this.style.background='#241f7f'" onmouseout="this.style.background='#322EA1'">
    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.122.552 4.112 1.516 5.843L0 24l6.335-1.492A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.003-1.368l-.36-.214-3.732.979.995-3.638-.234-.374A9.775 9.775 0 012.182 12C2.182 6.578 6.578 2.182 12 2.182c5.421 0 9.818 4.396 9.818 9.818 0 5.421-4.397 9.818-9.818 9.818z" />
    </svg>
    WhatsApp Project
</a>
            <a href="tel:+919766653376"
                style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.08);color:#fff;font-weight:800;font-size:.875rem;padding:13px 24px;border-radius:8px;border:1px solid rgba(255,255,255,.18);text-decoration:none;transition:background .2s;"
                onmouseover="this.style.background='rgba(255,255,255,.15)'" onmouseout="this.style.background='rgba(255,255,255,.08)'">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Call Now
            </a>
        </div>
    </div>
</section>