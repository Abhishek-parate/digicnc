<section
    style="
        height:400px;
        overflow:hidden;
    "
>
    <img
        style="
            width:100%;
            height:100%;
            object-fit:cover;
        "
        src="<?= e(asset_url($service['image'])) ?>"
        alt="<?= e($service['title']) ?>"
    >
</section>
<section class="section bg-white">
    <div class="mx-auto max-w-7xl gap-10 px-4 lg">
            <p class="eyebrow mt-1 text-red-500"><?= e($service['keyword']) ?></p>
           <h1 class="mt-2 font-heading text-4xl font-extrabold leading-tight lg:text-4xl"><?= e($service['title']) ?></h1>
           <article class="prose-content text-justify">
            <p class="mt-3 mb-5 max-w-7xl text-lg leading-8 text-slate-900"><?= e($service['summary']) ?></p>
        </div>
        <div class="relative rounded-4xl border border-white/15 bg-white/10 mx-auto max-w-7xl gap-10 px-4 p-8 px-4 backdrop-blur">
            <h2 class="font-heading text-2xl mt-4 font-bold">Best For</h2>
            <div class="mt-5 grid gap-3 sm:grid-cols-3">
                <?php foreach ($service['applications'] as $application): ?>
                    <span class="rounded-2xl border border-slate-900 bg-white/10 px-3 py-2 text-sm font-semibold"><?= e($application) ?></span>
                <?php endforeach; ?>
            </div>
            <h2 class="mt-8 font-heading text-2xl font-bold">Materials</h2>
            <div class="mt-3 mb-2 flex flex-wrap gap-2">
                <?php foreach ($service['materials'] as $material): ?>
                    <span class="rounded-2xl border border-slate-900 bg-white/10 px-3 py-2 text-sm font-bold text-slate-950"><?= e($material) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<div class="h-8 bg-gradient-to-b from-slate-950 to-white"></div>
<section class="section bg-white  pt-4">
   <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[minmax(0,1fr)_380px] lg:px-6" style="align-items: start;">
        <article class="prose-content text-justify">
            <p class="eyebrow">Service Overview</p>
            <h2 class="section-title"><?= e($service['title']) ?> with design-aware manufacturing support.</h2>
            <p><?= e($service['summary']) ?> This service is built for clients who need more than a simple machine run. A CNC project has to move from idea or drawing into a physical part that can be handled, finished, assembled and installed. Digi CNC reviews the file, material, thickness, pattern, quantity, use case and expected finish before recommending the best production path.</p>
            <p>In Nagpur and across Maharashtra, CNC buyers often come from very different backgrounds. Architects may send a feature-wall concept, designers may share a jali pattern, furniture manufacturers may need repeat components, contractors may need quick production support, artists may need relief detail, prototype companies may need a functional sample and homeowners may need a custom mandir or panel. Digi CNC keeps the conversation practical for each buyer. The aim is to protect the design intent while reducing avoidable mistakes at the manufacturing stage.</p>
            <p>The strongest CNC outcomes happen when the drawing, material and final application are aligned. A pattern that works beautifully in MDF may need changes in acrylic. A 3D surface may need extra depth, but the chosen board may limit what can be carved safely. A furniture component may look correct, but without hardware references it may create assembly problems later. A parametric panel may need part numbering so the site team can install it efficiently. Digi CNC brings these details into the discussion before production.</p>

            <h2>Why this service matters for CNC buyers in Nagpur</h2>
            <p><?= e($service['keyword']) ?> is a high-intent requirement because clients are usually close to execution. They may already have a drawing, a site measurement, a designer reference or a production schedule. At that stage, delays are costly. A clean CNC process can reduce manual cutting, improve repeatability, speed up fabrication and create details that are difficult to achieve by hand. It also gives designers more freedom because patterns, curves, reliefs and repeat components can be produced from digital files with controlled accuracy.</p>
            <p>For B2B clients, the value is consistency. Furniture manufacturers, contractors and industrial teams need parts that repeat correctly across batches. CNC cutting can support cabinets, shutters, partitions, templates, display units, signage bases, counter panels and assembly components. For B2C clients, the value is personalization. A homeowner can create a mandir backdrop, decorative jali, carved wall feature or custom furniture detail that fits the home exactly. Digi CNC supports both needs with a clear review and production workflow.</p>
            <p>Local responsiveness is another advantage. When the supplier is accessible in Nagpur, drawings can be clarified faster, material decisions can be discussed practically and urgent revisions can be handled with better context. Digi CNC encourages clients to share complete information early so the quotation and feasibility check can be meaningful. The more accurate the input, the smoother the output.</p>

            <h2>Applications and project types</h2>
            <p>This service can be used for <?= e(implode(', ', $service['applications'])) ?> and related CNC requirements. In interior projects, it can support partitions, wall panels, ceiling details, doors, display units, mandir elements, reception features and decorative surfaces. In furniture production, it can support repeat parts, grooves, profiles, shelves, shutters, hardware references and nested components. In commercial work, it can support branding, retail fixtures, restaurant interiors, office features and showroom displays. In prototype and custom work, it can support sample parts, artistic pieces, one-off components and design validation.</p>
            <p>Every application has its own production logic. Decorative jali needs enough web thickness and clean inside corners. Furniture components need dimensions that match assembly and hardware. Carved panels need depth planning and finishing allowance. Acrylic parts need surface protection and edge considerations. ACP and WPC work need material suitability checks. Parametric designs need organization, numbering and often a sample before full production. Digi CNC uses application context to prevent the project from being treated as a generic file.</p>

            <h2>Materials used for <?= e($service['title']) ?></h2>
            <p>Common material options for this service include <?= e(implode(', ', $service['materials'])) ?>. Material choice affects cost, cutting time, edge quality, strength, surface finish and installation behavior. MDF is commonly selected for painted interiors and decorative panels because it offers a consistent machining surface. HDHMR is useful when density and moisture resistance are priorities. Natural wood gives a premium finish but requires attention to grain, thickness and carving behavior. Acrylic provides modern clean surfaces for signage and display applications. ACP, PVC and WPC can be suitable for specific commercial or specialty uses when the design geometry matches the material.</p>
            <p>Digi CNC helps clients avoid material mismatch. A delicate jali pattern in a weak sheet may break. A deep carve on a thin panel may not be stable. A furniture component cut without considering finishing thickness may fit poorly later. These are manufacturing realities that should be considered before machining, not after. The team discusses thickness, sheet condition, finish plan and application so the selected material supports the project goal.</p>

            <h2>Design and file preparation</h2>
            <p>Production-ready files are the foundation of accurate CNC work. The preferred inputs include DXF, DWG, SVG, AI, CDR, clean PDF drawings or well-dimensioned reference images. Files should be drawn to scale, with closed profiles, no duplicate lines, clear quantity notes and correct units. For carved or 3D work, depth, relief style and reference quality are important. For parametric work, each part should be organized and numbered. For furniture batches, part names, grain direction, hardware references and assembly logic can save time.</p>
            <p>If the file is not ready, Digi CNC can still review the requirement and guide the next step. Many clients begin with a reference image or site measurement. The team can explain what additional information is needed before production. This is especially useful for homeowners and custom project clients who may not have CAD drawings. The goal is to move from unclear input to a clear manufacturing plan without making the process intimidating.</p>

            <h2>Manufacturing process</h2>
            <p>The process begins with inquiry review. Digi CNC looks at the service requirement, dimensions, material, quantity and deadline. Next comes design review, where the file is checked for scale, profile quality, pattern strength and machining feasibility. Material planning follows, including thickness, sheet usage, nesting and finish expectations. Once the details are confirmed, CNC production begins with suitable toolpath planning and workholding. After cutting, carving or engraving, parts are reviewed and organized for finishing, pickup, assembly or dispatch discussion.</p>
            <p>For detailed jobs, sample cutting can be a wise step. A sample helps verify pattern scale, carve depth, edge quality, material behavior and finishing response. This is particularly important for parametric installations, intricate jali, carved panels, prototypes and premium interior features. Digi CNC can guide whether a sample is necessary based on project risk and quantity.</p>

            <h2>Quality checks and trust signals</h2>
            <p>Quality in CNC manufacturing is not limited to the machine. It includes communication, drawing review, material planning, production setup and post-cut organization. Digi CNC focuses on practical checks: dimensions, profile continuity, material thickness, cutting depth, edge behavior, pattern strength and final application. These checks are important whether the project is a single custom panel or a recurring batch of components.</p>
            <p>The company’s trust signals include founder-led attention, more than five years of CNC experience, support for multiple industries, broad material capability and a willingness to guide clients before production. Digi CNC works with architects, interior designers, furniture manufacturers, furniture contractors, industrial manufacturers, artists, prototype development companies, homeowners, renovation projects and commercial projects. That range helps the team understand different priorities and avoid a one-size-fits-all approach.</p>
            <p>Handover planning is also part of quality. A CNC part does not exist in isolation; it usually moves to sanding, painting, polishing, lamination, carpentry, hardware fitting, transport or site installation. Digi CNC considers how the part will be handled after machining so clients can plan the next trade with fewer surprises. For example, delicate jali panels may need careful packing, furniture components may need organized grouping, carved panels may need finishing allowance and parametric parts may need numbering. This attention to the stage after CNC production helps the work remain useful beyond the machine bed.</p>

            <h2>Cost factors</h2>
            <p>Pricing depends on design complexity, material type, sheet thickness, quantity, cutting length, carving depth, machine time, file readiness, finishing requirement and urgency. A simple profile cut is usually easier to estimate than an intricate jali or deep 3D carving. A clean CAD file reduces preparation time. Efficient nesting can reduce material waste. Larger repeat batches may benefit from organized production planning. Digi CNC provides better guidance when clients share complete information at the start.</p>
            <p>To request a quotation, share the drawing or reference, size, material, thickness, quantity, finish plan and timeline. If you are not sure which material to use, explain the application and desired look. The team can suggest practical options before quoting.</p>

            <h2>Internal links for related CNC services</h2>
            <p>Many projects need more than one CNC capability. A decorative project may combine <a href="<?= e(app_url('decorative-jali-cutting-nagpur')) ?>">decorative jali cutting in Nagpur</a> with <a href="<?= e(app_url('mdf-cnc-cutting-nagpur')) ?>">MDF CNC cutting</a>. A premium interior may require <a href="<?= e(app_url('3d-cnc-carving-nagpur')) ?>">3D CNC carving</a> along with <a href="<?= e(app_url('parametric-design-nagpur')) ?>">parametric design manufacturing</a>. Furniture production may combine <a href="<?= e(app_url('2d-cnc-cutting-nagpur')) ?>">2D CNC cutting</a> and <a href="<?= e(app_url('hdhmr-cnc-cutting-nagpur')) ?>">HDHMR CNC cutting</a>. For unique ideas, visit <a href="<?= e(app_url('custom-cnc-projects')) ?>">custom CNC projects</a> or the broader <a href="<?= e(app_url('services')) ?>">CNC services page</a>.</p>
        </article>


     <aside
class="space-y-5 sticky self-start"
style="
    top: 120px;
">
            <div id="quote" class="rounded-lg border border-slate-200 bg-slate-50 p-3 shadow-sm">
                <h2 class="font-heading text-xl font-bold">Get a Quote</h2>
                <p class="mt-2 text-sm leading-7 text-slate-600">Share drawing, material, thickness, quantity and timeline for <?= e($service['title']) ?>.</p>
                <div class="mt-5"><?php $this->partial('partials/contact-form', ['repo' => $repo, 'selectedService' => $service['title'], 'compact' => true]); ?></div>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                <h2 class="font-heading text-xl font-bold">Why Digi CNC</h2>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-600">
                    <?php foreach ($service['differentiators'] as $point): ?>
                        <li class="flex gap-2"><span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-red-600"></span><?= e($point) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                <h2 class="font-heading text-xl font-bold">Related Pages</h2>
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

<section class="section bg-slate-50">
    <div class="mx-auto max-w-5xl px-4 lg:px-6">
        <div class="text-center">
            <p class="eyebrow">FAQs</p>
            <h2 class="section-title">Questions about <?= e($service['title']) ?></h2>
        </div>
        <div class="mt-8 divide-y divide-slate-200 rounded-lg border border-slate-200 bg-white px-6 shadow-sm">
            <?php foreach ($service['faqs'] as $faq): ?>
                <details class="faq-item py-5">
                    <summary><?= e($faq['q']) ?></summary>
                    <p><?= e($faq['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-slate-950 text-white">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 lg:grid-cols-[1fr_auto] lg:items-center lg:px-6">
        <div>
            <p class="eyebrow text-red-300">Lead Generation CTA</p>
            <h2 class="font-heading text-3xl font-extrabold lg:text-4xl">Ready to discuss <?= e($service['title']) ?>?</h2>
            <p class="mt-4 max-w-3xl leading-8 text-slate-300">Send your drawing, reference image, material and timeline. Digi CNC will review the requirement and guide the next production step.</p>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row">
            <a class="btn-primary px-6 py-3" href="https://wa.me/<?= e($repo->company()['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp Project</a>
            <a class="btn-secondary px-6 py-3" href="tel:+919766653376">Call Now</a>
        </div>
    </div>
</section>
