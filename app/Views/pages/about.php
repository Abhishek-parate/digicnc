<?php $company = $repo->company(); ?>
<section class="inner-hero">
    <div class="mx-auto max-w-7xl px-4 py-20 lg:px-6">
        <p class="eyebrow text-red-300">About Digi CNC</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl">A Nagpur CNC manufacturing company built around precision, clarity and useful production advice.</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">Digi CNC is founded by <?= e($company['founder']) ?> and serves architects, interior designers, furniture manufacturers, contractors, industrial teams, artists, prototype companies and homeowners with 2D CNC cutting, 3D CNC carving, decorative jali, parametric manufacturing and custom CNC projects.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.85fr_1.15fr] lg:px-6">
        <div>
            <p class="eyebrow">Company Story</p>
            <h2 class="section-title">From drawings and material sheets to reliable CNC output.</h2>
            <img class="mt-6 rounded-lg object-cover shadow-lg" src="<?= e(asset_url('assets/images/hero-cnc-workshop.png')) ?>" loading="lazy" alt="Digi CNC Nagpur CNC cutting workshop">
        </div>
        <div class="prose-content">
            <p>Digi CNC was created to solve a common problem in the interior and manufacturing market: clients had creative ideas, digital drawings or urgent production requirements, but they needed a CNC partner who could speak both design and execution. A drawing may look correct on screen, but CNC production asks practical questions. Is the profile closed? Is the pattern strong enough? Is the material suitable? Will the edge finish meet expectations? Can the parts be nested efficiently? Will the panel survive transport and installation? These questions shaped the working style of Digi CNC from the beginning.</p>
            <p>Under the leadership of <?= e($company['founder']) ?>, the company has built more than five years of experience across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The work includes simple 2D profile cutting, high-detail jali, carved decorative panels, mandir designs, wall panels, furniture components, signage elements, prototypes and parametric design parts. The company serves both B2B and B2C clients, which gives the team a broad understanding of real project expectations. A contractor needs speed and repeatability. An architect needs design intent protected. A homeowner needs guidance and confidence. A prototype company needs accuracy and iteration. Digi CNC is structured to respond to all of these contexts.</p>
            <p>The story of the company is not only about machinery. It is about improving the conversation around CNC work in Nagpur. Many project delays happen because the file is incomplete, the material is chosen too late, or the finishing requirement is not discussed before machining. Digi CNC encourages clients to share dimensions, quantity, material thickness, reference images, CAD files and timelines early. This helps the team plan the job properly and helps the client avoid avoidable rework. The business has grown through this practical approach: listen carefully, review the input, guide the client, cut accurately and keep the final use in mind.</p>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-5 md:grid-cols-3">
            <article class="feature-card">
                <h2>Mission</h2>
                <p>To provide Nagpur and Maharashtra with CNC cutting and carving services that turn design intent into accurate, buildable, finish-ready components for interiors, furniture, prototypes and custom manufacturing.</p>
            </article>
            <article class="feature-card">
                <h2>Vision</h2>
                <p>To become a trusted CNC manufacturing partner for architects, designers, manufacturers and homeowners who need premium workmanship, practical advice and dependable project communication.</p>
            </article>
            <article class="feature-card">
                <h2>Core Promise</h2>
                <p>Every project receives manufacturing attention before machine time: file review, material fit, pattern strength, production feasibility, edge quality and clear next-step guidance.</p>
            </article>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_.9fr] lg:px-6">
        <div class="prose-content">
            <p class="eyebrow">Founder Section</p>
            <h2 class="section-title">Led by <?= e($company['founder']) ?> with hands-on manufacturing discipline.</h2>
            <p>Good CNC work requires a calm technical eye. A founder-led CNC business has an advantage because project decisions do not disappear into layers of unclear communication. At Digi CNC, Mr. Krunal Patel brings attention to the details that matter at the machine and at the client table. The goal is not to accept every file blindly. The goal is to produce work that is useful when it reaches the client, site, workshop or finishing team.</p>
            <p>That mindset influences the quotation process, file checks, machine planning and customer support. If a jali web is too thin, the concern is raised. If a parametric rib assembly needs numbering, it is discussed. If MDF is being used where HDHMR may be more sensible, the client receives guidance. If a carved panel needs finishing allowance, the team accounts for it. This founder-driven quality culture helps Digi CNC stand apart from generic CNC router services.</p>
            <p>For professionals, this reduces friction. Architects can share concepts and receive manufacturing feedback. Interior designers can coordinate custom panels with confidence. Furniture manufacturers can discuss repeatable parts and nesting. Contractors can ask practical questions about delivery and assembly. Homeowners can understand material choices without feeling lost in technical language. The result is a working relationship that feels clear and premium without becoming slow or complicated.</p>
        </div>
        <div class="rounded-lg bg-slate-950 p-6 text-white">
            <h3 class="font-heading text-2xl font-bold">Core Strengths</h3>
            <ul class="mt-6 grid gap-4 text-sm leading-6 text-slate-200">
                <li><strong class="text-white">Precision:</strong> CAD-aware cutting and carving for repeatable results.</li>
                <li><strong class="text-white">Material Range:</strong> MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and laminates.</li>
                <li><strong class="text-white">Design Support:</strong> Guidance for jali, parametric work, prototypes and decorative panels.</li>
                <li><strong class="text-white">Local Responsiveness:</strong> Nagpur-based communication for urgent and custom requirements.</li>
                <li><strong class="text-white">Business Flexibility:</strong> Support for B2B batches and B2C custom pieces.</li>
            </ul>
        </div>
    </div>
</section>

<section class="section bg-slate-950 text-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="max-w-3xl">
            <p class="eyebrow text-red-300">Manufacturing Process</p>
            <h2 class="section-title text-white">A controlled process for cutting, carving, engraving and custom CNC work.</h2>
            <p class="mt-5 leading-8 text-slate-300">Digi CNC begins with understanding the use case. A wall panel, cabinet part, acrylic display, ACP component, carved artwork and parametric installation do not need the same production approach. The process starts by checking the drawing or reference against material, thickness, quantity and desired finish. If the file needs cleaning, the team can guide the client before production. If a sample is sensible, it is recommended before a larger batch.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach ([
                ['Input Review', 'CAD files, PDFs, images, site dimensions and material assumptions are reviewed before production.'],
                ['Toolpath Planning', 'Cutting, carving or engraving strategy is selected according to material, detail level and finish expectation.'],
                ['Machine Execution', 'The CNC process focuses on secure workholding, clean routing, correct depth and repeatable output.'],
                ['Quality Handover', 'Parts are checked, organized and prepared for finishing, assembly, pickup or dispatch guidance.'],
            ] as $item): ?>
                <article class="rounded-lg border border-white/10 bg-white/5 p-5">
                    <h3 class="font-heading text-xl font-bold"><?= e($item[0]) ?></h3>
                    <p class="mt-3 text-sm leading-7 text-slate-300"><?= e($item[1]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.9fr_1.1fr] lg:px-6">
        <div>
            <p class="eyebrow">Quality Assurance</p>
            <h2 class="section-title">Quality begins before the router starts.</h2>
        </div>
        <div class="prose-content">
            <p>Digi CNC treats quality as a sequence, not a final inspection checkbox. A clean final part begins with a clean file. Closed curves, correct scale, appropriate spacing, proper nesting, manageable depth and clear labels reduce machining risk. Material quality matters too. Sheet flatness, thickness variation, surface condition and finish plan can affect the final output. The team looks at these details before production whenever possible.</p>
            <p>During machining, attention shifts to workholding, tool condition, feed approach, pass depth and edge behavior. For 3D carving, depth and step-over influence finish quality. For jali, inside corners and thin bridges need careful review. For furniture parts, repeatability and part organization matter. For acrylic and ACP, surface protection and edge quality become important. For parametric work, numbering and assembly logic can be as important as cutting accuracy.</p>
            <p>After cutting, the team considers whether the parts are ready for pickup, finishing, assembly or further coordination. Digi CNC does not claim that CNC alone completes every project. Finishing, polishing, lamination, painting, installation and hardware work may involve other trades. But CNC accuracy gives those trades a stronger starting point. That is the value the company protects.</p>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-10 lg:grid-cols-[1fr_.9fr]">
            <div class="prose-content">
                <p class="eyebrow">Business Network</p>
                <h2 class="section-title">Serving the ecosystem around architecture, interiors, furniture and manufacturing.</h2>
                <p>Nagpur has a growing need for reliable CNC support because design expectations are rising. Commercial interiors need branded features. Homes need custom mandirs, partitions and decorative panels. Furniture manufacturers need repeatable parts. Architects are exploring parametric surfaces and detail-rich spaces. Prototype developers need accurate components without committing to large tooling. Digi CNC sits inside this network and helps each group move from idea to manufactured output.</p>
                <p>The company’s local presence matters. When a project has site changes, urgent revisions or material questions, responsive communication can protect the schedule. Digi CNC can coordinate with designers, contractors, carpenters, finishing teams and clients so that the CNC portion supports the larger project rather than slowing it down. This is especially useful for renovation projects, commercial fit-outs and custom residential interiors where dimensions and decisions often evolve.</p>
            </div>
            <div>
                <h3 class="font-heading text-2xl font-bold">Timeline</h3>
                <div class="mt-6 space-y-4">
                    <?php foreach ([
                        ['Foundation', 'Digi CNC begins with a focus on practical CNC cutting and carving support in Nagpur.'],
                        ['Material Expansion', 'Work grows across MDF, HDHMR, wood, acrylic, ACP, PVC, WPC and plywood.'],
                        ['Design-Led Manufacturing', 'Parametric panels, decorative jali, 3D carving and custom CNC projects become key strengths.'],
                        ['Growth Focus', 'The company continues serving architects, interior designers, furniture teams, manufacturers and homeowners across Nagpur and Maharashtra.'],
                    ] as $row): ?>
                        <div class="rounded-lg border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="font-bold text-red-600"><?= e($row[0]) ?></p>
                            <p class="mt-2 text-sm leading-7 text-slate-600"><?= e($row[1]) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.9fr_1.1fr] lg:px-6">
        <div>
            <p class="eyebrow">Start a Project</p>
            <h2 class="section-title">Send a drawing, reference image or requirement.</h2>
            <p class="mt-5 leading-8 text-slate-600">Whether the requirement is a single carved panel, a batch of furniture components, a decorative jali screen, a parametric installation, a prototype part or a complete custom CNC project, Digi CNC can help review the details and guide the next step.</p>
        </div>
        <?php $this->partial('partials/contact-form', ['repo' => $repo]); ?>
    </div>
</section>
