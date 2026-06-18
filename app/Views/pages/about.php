<?php $company = $repo->company(); ?>

<section class="inner-hero" style="<?= hero_background_style('assets/images/banner-about-process-clean.png', 'center right') ?>">
    <div class="mx-auto max-w-7xl px-4 py-24 lg:px-6 lg:py-28">
        <p class="eyebrow text-red-300">About Digi CNC</p>
        <h1 class="mt-5 max-w-4xl font-heading text-4xl font-semibold leading-tight tracking-tight text-white lg:text-6xl">A Nagpur CNC manufacturing company built around precision, clarity and useful production advice.</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200 text-justify">Digi CNC is founded by <?= e($company['founder']) ?> and serves architects, interior designers, furniture manufacturers, contractors, industrial teams, artists, prototype companies and homeowners with 2D CNC cutting, 3D CNC carving, decorative jali, parametric manufacturing and custom CNC projects.</p>
    </div>
</section>

<section class="border-b border-slate-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-10 lg:px-6 lg:py-12">
        <div class="grid grid-cols-2 gap-8 text-center lg:grid-cols-4 lg:divide-x lg:divide-slate-200">
            <div class="lg:px-6">
                <p class="font-heading text-[2rem] font-bold leading-none text-red-600 lg:text-[2.5rem]">5+</p>
                <p class="mt-2.5 text-[0.7rem] font-semibold uppercase tracking-[0.16em] text-slate-500">Years of Experience</p>
            </div>
            <div class="lg:px-6">
                <p class="font-heading text-[2rem] font-bold leading-none text-red-600 lg:text-[2.5rem]">9+</p>
                <p class="mt-2.5 text-[0.7rem] font-semibold uppercase tracking-[0.16em] text-slate-500">Material Types</p>
            </div>
            <div class="lg:px-6">
                <p class="font-heading text-[2rem] font-bold leading-none text-red-600 lg:text-[2.5rem]">B2B &amp; B2C</p>
                <p class="mt-2.5 text-[0.7rem] font-semibold uppercase tracking-[0.16em] text-slate-500">Client Segments</p>
            </div>
            <div class="lg:px-6">
                <p class="font-heading text-[2rem] font-bold leading-none text-red-600 lg:text-[2.5rem]">100%</p>
                <p class="mt-2.5 text-[0.7rem] font-semibold uppercase tracking-[0.16em] text-slate-500">Quality Checked</p>
            </div>
        </div>
    </div>
</section>

<section style="padding-top: 4rem; padding-bottom: 4rem; background-color: #ffffff;">
    <div style="margin-left: auto; margin-right: auto; max-width: 80rem; padding-left: 1rem; padding-right: 1rem;">

        <div style="text-align: center; margin-bottom: 2.5rem;">
            <p class="eyebrow">Company Story</p>
            <h2 class="section-title"
                style="font-weight: 400; font-size: clamp(1.35rem, 2.5vw, 1.95rem); letter-spacing: -0.01em; margin-top: 1rem; margin-bottom: 0; white-space: nowrap;">
                From drawings and material sheets to reliable CNC output.
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3.5rem; align-items: stretch;">

            <div style="min-width: 0; height: 460px;">
                <img
                    src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
                    loading="lazy"
                    alt="Digi CNC Nagpur CNC cutting process and material planning"
                    style="width: 100%; height: 100%; display: block; object-fit: cover; object-position: center; border-radius: 0.5rem; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.10);">
            </div>

            <div style="min-width: 0; height: 460px; display: flex; flex-direction: column; position: relative;">

                <div id="cs-content-wrap" style="flex: 1; overflow: hidden; position: relative;">
                    <p class="text-justify" style="line-height: 1.85; margin: 0 0 1.25rem; font-size: 1rem; color: #475569;">Digi CNC was created to solve a common problem in the interior and manufacturing market: clients had creative ideas, digital drawings or urgent production requirements, but they needed a CNC partner who could speak both design and execution. A drawing may look correct on screen, but CNC production asks practical questions. Is the profile closed? Is the pattern strong enough? Is the material suitable? Will the edge finish meet expectations? Can the parts be nested efficiently? Will the panel survive transport and installation? These questions shaped the working style of Digi CNC from the beginning.</p>

                    <p class="text-justify" style="line-height: 1.85; margin: 0 0 1.25rem; font-size: 1rem; color: #475569;">Under the leadership of <?= e($company['founder']) ?>, the company has built more than five years of experience across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The work includes simple 2D profile cutting, high-detail jali, carved decorative panels, mandir designs, wall panels, furniture components, signage elements, prototypes and parametric design parts. The company serves both B2B and B2C clients, which gives the team a broad understanding of real project expectations. A contractor needs speed and repeatability. An architect needs design intent protected. A homeowner needs guidance and confidence. A prototype company needs accuracy and iteration. Digi CNC is structured to respond to all of these contexts.</p>

                    <p id="cs-p3" class="text-justify" style="line-height: 1.85; margin: 0; font-size: 1rem; color: #475569;">The story of the company is not only about machinery. It is about improving the conversation around CNC work in Nagpur. Many project delays happen because the file is incomplete, the material is chosen too late, or the finishing requirement is not discussed before machining. Digi CNC encourages clients to share dimensions, quantity, material thickness, reference images, CAD files and timelines early. This helps the team plan the job properly and helps the client avoid avoidable rework. The business has grown through this practical approach: listen carefully, review the input, guide the client, cut accurately and keep the final use in mind.</p>

                    <div id="cs-fade" style="position: absolute; bottom: 0; left: 0; right: 0; height: 3.5rem; background: linear-gradient(to bottom, rgba(255,255,255,0), #ffffff); pointer-events: none;"></div>
                </div>

                <div style="padding-top: 0.75rem; background: #ffffff;">
                    <button
                        id="cs-toggle"
                        onclick="toggleCS(this)"
                        aria-expanded="false"
                        style="display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.8125rem; font-weight: 600; color: #dc2626; background: none; border: none; padding: 0; cursor: pointer; letter-spacing: 0.03em; font-family: inherit;">
                        Read More
                        <svg id="cs-arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="transition: transform 0.3s ease;">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    function toggleCS(btn) {
        var wrap = document.getElementById('cs-content-wrap');
        var fade = document.getElementById('cs-fade');
        var arrow = document.getElementById('cs-arrow');
        var col = wrap.parentElement;
        var open = btn.getAttribute('aria-expanded') === 'true';
        if (open) {
            col.style.height = '460px';
            wrap.style.overflow = 'hidden';
            fade.style.display = 'block';
            arrow.style.transform = 'rotate(0deg)';
            btn.setAttribute('aria-expanded', 'false');
            btn.childNodes[0].textContent = 'Read More';
        } else {
            col.style.height = 'auto';
            wrap.style.overflow = 'visible';
            fade.style.display = 'none';
            arrow.style.transform = 'rotate(180deg)';
            btn.setAttribute('aria-expanded', 'true');
            btn.childNodes[0].textContent = 'Read Less';
        }
    }
</script>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid gap-8 md:grid-cols-3">

            <!-- Mission -->
            <article class="group relative flex flex-col items-center overflow-hidden rounded-2xl bg-white text-center transition-all duration-300 hover:-translate-y-2"
                style="padding: 2.5rem 2rem; box-shadow: 0 2px 12px rgba(30,64,175,0.07), 0 1px 3px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">

                <div class="absolute inset-x-0 top-0" style="height: 4px; background: linear-gradient(90deg, #93c5fd, #2563eb, #93c5fd);"></div>

                <div class="mb-6 flex items-center justify-center rounded-full transition-all duration-300 group-hover:scale-110"
                    style="width: 4.5rem; height: 4.5rem; background: linear-gradient(135deg, #eff6ff, #dbeafe);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>

                <h2 class="font-heading text-xl font-bold tracking-tight text-slate-900">Mission</h2>
                <div class="rounded-full transition-all duration-300 group-hover:w-16" style="margin: 0.75rem auto; height: 2px; width: 2.5rem; background: linear-gradient(90deg, #2563eb, #60a5fa);"></div>
                <p class="flex-1 text-sm leading-relaxed text-slate-500 text-justify" style="margin-bottom: 1.75rem;">To provide Nagpur and Maharashtra with CNC cutting and carving services that turn design intent into accurate, buildable, finish-ready components for interiors, furniture, prototypes and custom manufacturing.</p>

                <div class="w-full" style="border-top: 1px solid #f1f5f9; padding-top: 1.25rem;">
                    <span class="font-heading font-bold uppercase text-blue-600" style="font-size: 0.6875rem; letter-spacing: 0.18em;">Design to Output</span>
                </div>
            </article>

            <!-- Vision — featured dark card -->
            <article class="group relative flex flex-col items-center overflow-hidden rounded-2xl text-center transition-all duration-300 hover:-translate-y-2"
                style="padding: 2.5rem 2rem; background: linear-gradient(155deg, #251e7a 0%, #2b2491 45%, #322EA1 100%); box-shadow: 0 8px 32px rgba(50,46,161,0.35), 0 2px 8px rgba(50,46,161,0.2); border: 1px solid rgba(255,255,255,0.1);">

                <div class="pointer-events-none absolute" style="top: -3rem; right: -3rem; width: 10rem; height: 10rem; border-radius: 9999px; background: rgba(96,165,250,0.15); filter: blur(2.5rem);"></div>

                <div class="mb-6 flex items-center justify-center rounded-full transition-all duration-300 group-hover:scale-110"
                    style="width: 4.5rem; height: 4.5rem; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>

                <h2 class="font-heading text-xl font-bold tracking-tight text-white">Vision</h2>
                <div class="rounded-full" style="margin: 0.75rem auto; height: 2px; width: 2.5rem; background: rgba(147,197,253,0.7);"></div>
                <p class="flex-1 text-sm leading-relaxed text-justify" style="color: #bfdbfe; margin-bottom: 1.75rem;">To become a trusted CNC manufacturing partner for architects, designers, manufacturers and homeowners who need premium workmanship, practical advice and dependable project communication.</p>

                <div class="w-full" style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1.25rem;">
                    <span class="font-heading font-bold uppercase" style="font-size: 0.6875rem; letter-spacing: 0.18em; color: #93c5fd;">Trusted Partnership</span>
                </div>
            </article>

            <!-- Core Promise -->
            <article class="group relative flex flex-col items-center overflow-hidden rounded-2xl bg-white text-center transition-all duration-300 hover:-translate-y-2"
                style="padding: 2.5rem 2rem; box-shadow: 0 2px 12px rgba(30,64,175,0.07), 0 1px 3px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">

                <div class="absolute inset-x-0 top-0" style="height: 4px; background: linear-gradient(90deg, #93c5fd, #2563eb, #93c5fd);"></div>

                <div class="mb-6 flex items-center justify-center rounded-full transition-all duration-300 group-hover:scale-110"
                    style="width: 4.5rem; height: 4.5rem; background: linear-gradient(135deg, #eff6ff, #dbeafe);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                </div>

                <h2 class="font-heading text-xl font-bold tracking-tight text-slate-900">Core Promise</h2>
                <div class="rounded-full transition-all duration-300 group-hover:w-16" style="margin: 0.75rem auto; height: 2px; width: 2.5rem; background: linear-gradient(90deg, #2563eb, #60a5fa);"></div>
                <p class="flex-1 text-sm leading-relaxed text-slate-500 text-justify" style="margin-bottom: 1.75rem;">Every project receives manufacturing attention before machine time: file review, material fit, pattern strength, production feasibility, edge quality and clear next-step guidance.</p>

                <div class="w-full" style="border-top: 1px solid #f1f5f9; padding-top: 1.25rem;">
                    <span class="font-heading font-bold uppercase text-blue-600" style="font-size: 0.6875rem; letter-spacing: 0.18em;">Quality Assured</span>
                </div>
            </article>

        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mx-auto mb-8 max-w-3xl text-center">
            <p class="eyebrow">Founder Section</p>
            <span class="mx-auto mt-3 block h-px w-16 bg-red-200"></span>
            <h2 class="mt-5 text-3xl font-bold text-slate-900 lg:text-4xl">Led by <?= e($company['founder']) ?> with hands-on manufacturing discipline.</h2>
        </div>

        <div class="mt-12 grid grid-cols-2 items-stretch gap-8 lg:gap-12">

            <!-- Left: Content Column -->
            <div class="flex flex-col">
                <div id="founder-content-wrap" class="prose-content relative h-full overflow-hidden transition-all duration-300">
                    <p class="text-sm leading-7 text-slate-600 text-justify">Good CNC work requires a calm technical eye. A founder-led CNC business has an advantage because project decisions do not disappear into layers of unclear communication. At Digi CNC, Mr. Krunal Patel brings attention to the details that matter at the machine and at the client table. The goal is not to accept every file blindly. The goal is to produce work that is useful when it reaches the client, site, workshop or finishing team.</p>

                    <p class="mt-5 text-sm leading-7 text-slate-600 text-justify">That mindset influences the quotation process, file checks, machine planning and customer support. If a jali web is too thin, the concern is raised. If a parametric rib assembly needs numbering, it is discussed. If MDF is being used where HDHMR may be more sensible, the client receives guidance. If a carved panel needs finishing allowance, the team accounts for it. This founder-driven quality culture helps Digi CNC stand apart from generic CNC router services.</p>

                    <p id="founder-p2" class="mt-5 text-sm leading-7 text-slate-600 text-justify">For professionals, this reduces friction. Architects can share concepts and receive manufacturing feedback. Interior designers can coordinate custom panels with confidence. Furniture manufacturers can discuss repeatable parts and nesting. Contractors can ask practical questions about delivery and assembly. Homeowners can understand material choices without feeling lost in technical language. The result is a working relationship that feels clear and premium without becoming slow or complicated.
                        <button
                            id="founder-toggle"
                            onclick="toggleFounder(this)"
                            aria-expanded="false"
                            class="inline font-semibold text-red-600 transition-colors duration-300 hover:text-red-700">
                            Read More
                        </button>
                    </p>
                </div>
            </div>

            <!-- Right: Core Strengths -->
            <div class="relative overflow-hidden rounded-xl bg-slate-950 p-6 text-white lg:p-6">
                <div class="absolute inset-x-0 top-0 h-1 bg-red-600"></div>
                <div class="pointer-events-none absolute -right-12 -top-12 h-44 w-44 rounded-full bg-red-600/10 blur-3xl"></div>

                <h3 class="text-center font-heading text-lg font-bold lg:text-xl">Core Strengths</h3>
                <span class="mx-auto mt-3 block h-px w-10 bg-red-400/50"></span>

                <div class="mt-6 space-y-3">
                    <div class="group flex items-start gap-4 rounded-lg border border-white/15 bg-gradient-to-r from-white/8 to-white/5 px-4 py-3.5 transition-all duration-300 hover:border-white/25 hover:from-white/12 hover:to-white/8">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-white/30 to-white/20 transition-all duration-300 group-hover:from-white/40 group-hover:to-white/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="7" />
                                <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
                                <circle cx="12" cy="12" r="1.3" fill="#ffffff" stroke="none" />
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-300 text-justify"><strong class="font-semibold text-white">Precision:</strong> CAD-aware cutting and carving.</p>
                    </div>

                    <div class="group flex items-start gap-4 rounded-lg border border-white/15 bg-gradient-to-r from-white/8 to-white/5 px-4 py-3.5 transition-all duration-300 hover:border-white/25 hover:from-white/12 hover:to-white/8">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-white/30 to-white/20 transition-all duration-300 group-hover:from-white/40 group-hover:to-white/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3 21 8l-9 5-9-5 9-5z" />
                                <path d="M3 12l9 5 9-5" />
                                <path d="M3 16l9 5 9-5" />
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-300 text-justify"><strong class="font-semibold text-white">Materials:</strong> MDF, HDHMR, wood, acrylic, PVC, ACP, WPC.</p>
                    </div>

                    <div class="group flex items-start gap-4 rounded-lg border border-white/15 bg-gradient-to-r from-white/8 to-white/5 px-4 py-3.5 transition-all duration-300 hover:border-white/25 hover:from-white/12 hover:to-white/8">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-white/30 to-white/20 transition-all duration-300 group-hover:from-white/40 group-hover:to-white/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 12l8-8 8 8M4 12h16" />
                                <path d="M12 4v16" />
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-300 text-justify"><strong class="font-semibold text-white">Design Support:</strong> Jali, parametric, prototypes.</p>
                    </div>

                    <div class="group flex items-start gap-4 rounded-lg border border-white/15 bg-gradient-to-r from-white/8 to-white/5 px-4 py-3.5 transition-all duration-300 hover:border-white/25 hover:from-white/12 hover:to-white/8">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-white/30 to-white/20 transition-all duration-300 group-hover:from-white/40 group-hover:to-white/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-300 text-justify"><strong class="font-semibold text-white">Local:</strong> Nagpur-based responsiveness.</p>
                    </div>

                    <div class="group flex items-start gap-4 rounded-lg border border-white/15 bg-gradient-to-r from-white/8 to-white/5 px-4 py-3.5 transition-all duration-300 hover:border-white/25 hover:from-white/12 hover:to-white/8">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-white/30 to-white/20 transition-all duration-300 group-hover:from-white/40 group-hover:to-white/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 7h11" />
                                <path d="M13 4l3 3-3 3" />
                                <path d="M19 17H8" />
                                <path d="M11 14l-3 3 3 3" />
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-300 text-justify"><strong class="font-semibold text-white">Flexibility:</strong> B2B and B2C support.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    function toggleFounder(btn) {
        var wrap = document.getElementById('founder-content-wrap');
        var open = btn.getAttribute('aria-expanded') === 'true';

        if (open) {
            wrap.classList.remove('h-auto', 'overflow-visible');
            wrap.classList.add('h-full', 'overflow-hidden');
            btn.setAttribute('aria-expanded', 'false');
            btn.textContent = 'Read More';
        } else {
            wrap.classList.remove('h-full', 'overflow-hidden');
            wrap.classList.add('h-auto', 'overflow-visible');
            btn.setAttribute('aria-expanded', 'true');
            btn.textContent = 'Read Less';
        }
    }
</script>

<section class="section bg-slate-950 text-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="w-full text-center">
            <p class="eyebrow text-red-300">Manufacturing Process</p>
            <h2 class="section-title text-white" style="font-weight: 500; font-size: clamp(1.6rem, 3vw, 2.25rem);">A controlled process for cutting, carving, engraving and custom CNC work.</h2>
            <p class="mt-5 text-justify leading-8 text-slate-300">Digi CNC begins with understanding the use case. A wall panel, cabinet part, acrylic display, ACP component, carved artwork and parametric installation do not need the same production approach. The process starts by checking the drawing or reference against material, thickness, quantity and desired finish. If the file needs cleaning, the team can guide the client before production. If a sample is sensible, it is recommended before a larger batch.</p>
        </div>
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach (
                [
                    ['Input Review', 'CAD files, PDFs, images, site dimensions and material assumptions are reviewed before production.'],
                    ['Toolpath Planning', 'Cutting, carving or engraving strategy is selected according to material, detail level and finish expectation.'],
                    ['Machine Execution', 'The CNC process focuses on secure workholding, clean routing, correct depth and repeatable output.'],
                    ['Quality Handover', 'Parts are checked, organized and prepared for finishing, assembly, pickup or dispatch guidance.'],
                ] as $i => $item
            ): ?>
                <article class="rounded-lg border border-white/10 bg-white/5 p-6 transition hover:border-white/20 hover:bg-white/[0.08]">
                    <span class="font-heading text-2xl font-extrabold text-red-300/70"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3 class="mt-3 font-heading text-xl font-bold"><?= e($item[0]) ?></h3>
                    <p class="mt-3 text-sm leading-7 text-slate-300 text-justify"><?= e($item[1]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center mb-29">
            <p class="eyebrow">Quality Assurance</p>
            <h2 class="mt-4 font-heading text-3xl font-bold tracking-tight text-slate-900 lg:text-4xl leading-tight">Quality begins before the router starts.</h2>
        </div>

        <div class="grid grid-cols-2 items-stretch" style="gap: 5rem;">

            <div class="overflow-hidden rounded-2xl shadow-md min-w-0 self-stretch">
                <img
                    src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
                    alt="Digi CNC quality assurance process"
                    loading="lazy"
                    class="w-full h-full object-cover">
            </div>

            <div class="min-w-0 flex flex-col justify-start">
                <p class="text-sm leading-8 text-slate-600 text-justify">Digi CNC treats quality as a sequence, not a final inspection checkbox. A clean final part begins with a clean file. Closed curves, correct scale, appropriate spacing, proper nesting, manageable depth and clear labels reduce machining risk. Material quality matters too. Sheet flatness, thickness variation, surface condition and finish plan can affect the final output. The team looks at these details before production whenever possible.</p>

                <p class="mt-5 text-sm leading-8 text-slate-600 text-justify">During machining, attention shifts to workholding, tool condition, feed approach, pass depth and edge behavior. For 3D carving, depth and step-over influence finish quality. For jali, inside corners and thin bridges need careful review. For furniture parts, repeatability and part organization matter. For acrylic and ACP, surface protection and edge quality become important. For parametric work, numbering and assembly logic can be as important as cutting accuracy.</p>

                <p class="mt-5 text-sm leading-8 text-slate-600 text-justify">After cutting, the team considers whether the parts are ready for pickup, finishing, assembly or further coordination. Digi CNC does not claim that CNC alone completes every project. Finishing, polishing, lamination, painting, installation and hardware work may involve other trades. But CNC accuracy gives those trades a stronger starting point. That is the value the company protects.</p>
            </div>

        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mx-auto max-w-4xl text-center" style="margin-bottom: 4rem;">
            <p class="eyebrow">Business Network</p>
            <h2 class="mt-4 font-heading text-3xl font-semibold tracking-tight text-slate-900 lg:text-[2.25rem] lg:leading-snug">Serving the ecosystem around architecture, interiors, furniture and manufacturing.</h2>
        </div>

        <div class="grid grid-cols-2 gap-24 items-start">

            <div class="pt-14">
                <p class="text-sm leading-8 text-slate-600 text-justify">Nagpur has a growing need for reliable CNC support because design expectations are rising. Commercial interiors need branded features. Homes need custom mandirs, partitions and decorative panels. Furniture manufacturers need repeatable parts. Architects are exploring parametric surfaces and detail-rich spaces. Prototype developers need accurate components without committing to large tooling. Digi CNC sits inside this network and helps each group move from idea to manufactured output.</p>
                <p class="mt-5 text-sm leading-8 text-slate-600 text-justify">The company's local presence matters. When a project has site changes, urgent revisions or material questions, responsive communication can protect the schedule. Digi CNC can coordinate with designers, contractors, carpenters, finishing teams and clients so that the CNC portion supports the larger project rather than slowing it down. This is especially useful for renovation projects, commercial fit-outs and custom residential interiors where dimensions and decisions often evolve.</p>
            </div>

            <div>
                <div class="mb-7 text-center">
                    <h3 class="font-heading text-xl font-bold text-slate-950">Timeline</h3>
                </div>

                <div class="flex flex-col gap-4">
                    <?php
                    $timeline = [
                        ['Foundation', 'Digi CNC begins with a focus on practical CNC cutting and carving support in Nagpur.'],
                        ['Material Expansion', 'Work grows across MDF, HDHMR, wood, acrylic, ACP, PVC, WPC and plywood.'],
                        ['Design-Led Manufacturing', 'Parametric panels, decorative jali, 3D carving and custom CNC projects become key strengths.'],
                        ['Growth Focus', 'The company continues serving architects, interior designers, furniture teams, manufacturers and homeowners across Nagpur and Maharashtra.'],
                    ];
                    foreach ($timeline as $i => $row):
                    ?>
                        <div class="rounded-xl border border-slate-200 bg-white px-5 py-4 shadow-sm transition-all duration-300 hover:border-red-200 hover:shadow-md hover:-translate-y-0.5">
                            <div class="flex items-center justify-between gap-2">
                                <p class="font-heading text-sm font-bold text-red-600"><?= e($row[0]) ?></p>
                                <span class="shrink-0 rounded-full bg-red-50 px-2 py-0.5 font-heading text-[0.6rem] font-bold uppercase tracking-widest text-red-400"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            </div>
                            <p class="mt-1.5 text-sm leading-6 text-slate-500 text-justify"><?= e($row[1]) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl items-start gap-12 px-4 lg:grid-cols-[.9fr_1.1fr] lg:gap-16 lg:px-6">
        <div>
            <p class="eyebrow">Start a Project</p>
            <h2 class="section-title">Send a drawing, reference image or requirement.</h2>
            <p class="mt-5 leading-8 text-slate-600 text-justify">Whether the requirement is a single carved panel, a batch of furniture components, a decorative jali screen, a parametric installation, a prototype part or a complete custom CNC project, Digi CNC can help review the details and guide the next step.</p>
        </div>
        <?php $this->partial('partials/contact-form', ['repo' => $repo]); ?>
    </div>
</section>