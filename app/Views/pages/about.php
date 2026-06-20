<?php $company = $repo->company(); ?>

<!-- Banner Image (no overlay, no text) -->
<div class="w-full" style="height: 480px;">
    <img
        src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
        alt="Digi CNC Nagpur CNC manufacturing process"
        loading="eager"
        class="w-full h-full object-cover object-center">
</div>

<!-- Floating White Card Section -->
<section class="bg-gray-50 pb-0">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <!-- Main Card -->
        <div class="-mt-24 relative z-10 bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y lg:divide-y-0 lg:divide-x divide-slate-100">

                <!-- Left: Heading + Description + CTA -->
                <div class="px-8 py-10 lg:px-12 lg:py-12 flex flex-col justify-center">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] mb-4" style="color: #322EA1;">About Digi CNC</p>
                    <h1 class="font-heading text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                        Crafting Precision.<br>
                        Delivering <span style="color: #322EA1;">Excellence.</span>
                    </h1>
                    <div class="mt-3 w-10 h-0.5" style="background: #dc2626;"></div>
                    <p class="mt-6 text-sm leading-7 text-slate-600 text-justify">
                        Digi CNC is founded by <?= e($company['founder']) ?> and serves architects, interior designers, furniture manufacturers, contractors, industrial teams, artists, prototype companies and homeowners with 2D CNC cutting, 3D CNC carving, decorative jali, parametric manufacturing and custom CNC projects.
                    </p>
                    <div class="mt-8">
                        <a href="services"
                            class="inline-flex items-center gap-2 text-white text-sm font-semibold px-6 py-3 rounded-lg transition-colors duration-200"
                            style="background: #322EA1;">
                            Explore Our Services
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right: Key Features -->
                <div class="px-8 py-10 lg:px-12 lg:py-12 flex flex-col justify-center gap-6">

                    <div class="flex items-start gap-5 pb-6 border-b border-slate-100 last:border-b-0 last:pb-0">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" /><circle cx="12" cy="12" r="3" /><path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-900 text-sm">Precision-Driven</p>
                            <p class="mt-1 text-sm text-slate-500 leading-6 text-justify">Advanced CNC technology ensures accurate and detailed results every time.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 pb-6 border-b border-slate-100 last:border-b-0 last:pb-0">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" /><path d="M16 3H8l-2 4h12l-2-4z" /><path d="M12 12v4M10 14h4" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-900 text-sm">Custom Solutions</p>
                            <p class="mt-1 text-sm text-slate-500 leading-6 text-justify">From intricate jali designs to complex 3D carving, we craft to your needs.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><path d="M9 12l2 2 4-4" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-900 text-sm">Quality Assured</p>
                            <p class="mt-1 text-sm text-slate-500 leading-6 text-justify">Every project is quality-checked to deliver perfection and long-lasting value.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="mt-4 mb-6 lg:mb-8 bg-white rounded-2xl shadow-sm border border-slate-100">
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-y lg:divide-y-0 divide-slate-100">

                <div class="flex flex-col items-center gap-2 px-4 py-6">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" /><path d="M16 3H8l-2 4h12l-2-4z" />
                        </svg>
                    </div>
                    <p class="font-heading text-2xl sm:text-3xl font-black" style="color: #322EA1;">5+</p>
                    <p class="text-[0.62rem] sm:text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-slate-500 text-center">Years of Experience</p>
                </div>

                <div class="flex flex-col items-center gap-2 px-4 py-6">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3 21 8l-9 5-9-5 9-5z" /><path d="M3 12l9 5 9-5" /><path d="M3 16l9 5 9-5" />
                        </svg>
                    </div>
                    <p class="font-heading text-2xl sm:text-3xl font-black" style="color: #322EA1;">9+</p>
                    <p class="text-[0.62rem] sm:text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-slate-500 text-center">Material Types</p>
                </div>

                <div class="flex flex-col items-center gap-2 px-4 py-6">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <p class="font-heading text-xl sm:text-3xl font-black" style="color: #322EA1;">B2B &amp; B2C</p>
                    <p class="text-[0.62rem] sm:text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-slate-500 text-center">Client Segments</p>
                </div>

                <div class="flex flex-col items-center gap-2 px-4 py-6">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /><path d="M9 12l2 2 4-4" />
                        </svg>
                    </div>
                    <p class="font-heading text-2xl sm:text-3xl font-black" style="color: #322EA1;">100%</p>
                    <p class="text-[0.62rem] sm:text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-slate-500 text-center">Quality Checked</p>
                </div>

            </div>
        </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 2 — Company Story
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-white pt-4 pb-12 lg:pt-6 lg:pb-16 px-4 lg:px-6">
    <div class="mx-auto max-w-7xl">

        <div class="text-center mb-6 lg:mb-8">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="block w-12 h-px" style="background: #a5a8e0;"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Company Story</p>
                <span class="block w-12 h-px" style="background: #a5a8e0;"></span>
            </div>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                From drawings and material sheets<br class="hidden sm:block">
                to reliable <span style="color: #322EA1;">CNC output.</span>
            </h2>
            <div class="mt-3 mx-auto w-10 h-1 rounded-full" style="background: #322EA1;"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

            <!-- LEFT COLUMN -->
            <div class="flex flex-col">

                <div style="border-radius: 1rem 1rem 0 0; overflow: hidden; flex: 1; min-height: 220px;">
                    <img
                        src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
                        alt="Digi CNC cutting process"
                        loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                </div>

                <!-- Stats Bar -->
                <div style="background: #0f172a; border-radius: 0 0 1rem 1rem; padding: 1.25rem 1rem;">
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 0;">

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px; padding: 0 0.25rem; border-right: 1px solid rgba(50,46,161,0.4);">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#a5b4fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M9 22V10"/></svg>
                            </div>
                            <p style="font-size: 1.4rem; font-weight: 900; color: #ffffff; margin: 0; line-height: 1;">5+</p>
                            <p style="font-size: 0.55rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #a5b4fc; text-align: center; margin: 0; line-height: 1.4;">Years of<br>Experience</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px; padding: 0 0.25rem; border-right: 1px solid rgba(50,46,161,0.4);">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#a5b4fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            </div>
                            <p style="font-size: 1.4rem; font-weight: 900; color: #ffffff; margin: 0; line-height: 1;">9+</p>
                            <p style="font-size: 0.55rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #a5b4fc; text-align: center; margin: 0; line-height: 1.4;">Skilled<br>Team</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px; padding: 0 0.25rem; border-right: 1px solid rgba(50,46,161,0.4);">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#a5b4fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8l-2 4h12l-2-4z"/></svg>
                            </div>
                            <p style="font-size: 0.85rem; font-weight: 900; color: #ffffff; margin: 0; line-height: 1.2;">B2B &amp; B2C</p>
                            <p style="font-size: 0.55rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #a5b4fc; text-align: center; margin: 0; line-height: 1.4;">Clients<br>Served</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 4px; padding: 0 0.25rem;">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#a5b4fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                            </div>
                            <p style="font-size: 1.4rem; font-weight: 900; color: #ffffff; margin: 0; line-height: 1;">100%</p>
                            <p style="font-size: 0.55rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #a5b4fc; text-align: center; margin: 0; line-height: 1.4;">Quality<br>Focused</p>
                        </div>

                    </div>
                </div>

                <!-- Quote Block -->
                <div class="mt-4 rounded-2xl border border-slate-200 bg-slate-50 px-5 sm:px-6 py-5 flex items-start gap-4">
                    <div class="flex-shrink-0 w-9 h-9 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#322EA1"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900 leading-6 text-justify">Digi CNC is more than a service provider. It is a partner for ideas that need to become real.</p>
                        <p class="mt-1.5 text-xs text-slate-500 leading-5 text-justify">From drawings and material sheets to reliable CNC output – this is the promise the company stands by every day.</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Story Sections -->
            <div class="flex flex-col divide-y divide-slate-100">

                <div class="flex items-start gap-4 py-6 first:pt-0">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-base font-bold text-slate-900 mb-2">Our Journey</h3>
                        <p class="text-sm leading-7 text-slate-600 text-justify">Digi CNC was created to solve a common problem in the interior and manufacturing market: clients had creative ideas, digital drawings or urgent production requirements, but they needed a CNC partner who could speak both design and execution. A drawing may look correct on screen, but CNC production asks practical questions. Is the profile closed? Is the pattern strong enough? Is the material suitable? Will the edge finish meet expectations? Can the parts be nested efficiently? Will the panel survive transport and installation? These questions shaped the working style of Digi CNC from the beginning.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 py-6">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-base font-bold text-slate-900 mb-2">Our Experience</h3>
                        <p class="text-sm leading-7 text-slate-600 text-justify">Under the leadership of <?= e($company['founder']) ?>, the company has built more than five years of experience across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The work includes simple 2D profile cutting, high-detail jali, carved decorative panels, mandir designs, wall panels, furniture components, signage elements, prototypes and parametric design parts. The company serves both B2B and B2C clients, which gives the team a broad understanding of real project expectations.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 py-6">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-base font-bold text-slate-900 mb-2">Why It Matters</h3>
                        <p class="text-sm leading-7 text-slate-600 text-justify">The story of the company is not only about machinery. It is about improving the conversation around CNC work in Nagpur. Many project delays happen because the file is incomplete, the material is chosen too late, or the finishing requirement is not discussed before machining. Digi CNC encourages clients to share dimensions, quantity, material thickness, reference images, CAD files and timelines early. This helps the team plan the job properly and helps the client avoid avoidable rework.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 pt-6">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-base font-bold text-slate-900 mb-2">Who We Work With</h3>
                        <p class="text-sm leading-7 text-slate-600 text-justify">Digi CNC works with contractors, architects, interior designers, furniture manufacturers, shop owners, branding companies, event professionals, homeowners and prototype developers. Some clients need a single panel. Some manage large-scale interior packages. The size of the order does not change the core commitment: accurate output, honest communication and reliable timelines.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="prose-content" style="padding-top:3.5rem;">
      <p>Digi CNC was created to solve a common problem in the interior and manufacturing market: clients had creative ideas, digital drawings or urgent production requirements, but they needed a CNC partner who could speak both design and execution. A drawing may look correct on screen, but CNC production asks practical questions. Is the profile closed? Is the pattern strong enough? Is the material suitable? Will the edge finish meet expectations? Can the parts be nested efficiently? Will the panel survive transport and installation? These questions shaped the working style of Digi CNC from the beginning.</p>
      <p>Under the leadership of <?= e($company['founder']) ?>, the company has built more than five years of experience across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The work includes simple 2D profile cutting, high-detail jali, carved decorative panels, mandir designs, wall panels, furniture components, signage elements, prototypes and parametric design parts. The company serves both B2B and B2C clients, which gives the team a broad understanding of real project expectations. A contractor needs speed and repeatability. An architect needs design intent protected. A homeowner needs guidance and confidence. A prototype company needs accuracy and iteration. Digi CNC is structured to respond to all of these contexts.</p>
      <p>The story of the company is not only about machinery. It is about improving the conversation around CNC work in Nagpur. Many project delays happen because the file is incomplete, the material is chosen too late, or the finishing requirement is not discussed before machining. Digi CNC encourages clients to share dimensions, quantity, material thickness, reference images, CAD files and timelines early. This helps the team plan the job properly and helps the client avoid avoidable rework. The business has grown through this practical approach: listen carefully, review the input, guide the client, cut accurately and keep the final use in mind.</p>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 3 — Our Values
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-slate-50 pt-12 pb-12 lg:pt-16 lg:pb-16">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="text-center mb-6 lg:mb-8">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Our Values</p>
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
            </div>
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                Built on Purpose. Driven by <span style="color: #322EA1;">Precision.</span>
            </h2>
            <p class="mt-3 mx-auto max-w-xl text-slate-500 text-base leading-7">
                These principles guide everything we do at Digi CNC — from the first drawing to the final output.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3 items-stretch">

            <!-- Mission Card -->
            <article class="group relative flex flex-col bg-white rounded-2xl border border-slate-200 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                style="padding: 1.5rem 1.5rem;">
                <div class="absolute inset-x-0 top-0 h-1" style="background: linear-gradient(90deg, transparent, #322EA1, transparent);"></div>
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-center font-heading text-2xl font-black text-slate-900">Mission</h2>
                <div class="mx-auto mt-2 w-10 h-0.5 rounded-full mb-4" style="background: #322EA1;"></div>
                <p class="flex-1 text-sm leading-7 text-slate-500 text-justify">To provide Nagpur and Maharashtra with CNC cutting and carving services that turn design intent into accurate, buildable, finish-ready components for interiors, furniture, prototypes and custom manufacturing.</p>
                <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Design to Output</span>
                </div>
            </article>

            <!-- Vision Card (featured dark) -->
            <article class="group relative flex flex-col rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 md:-translate-y-3"
                style="padding: 1.5rem 1.5rem; background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 50%, #251e7a 100%); box-shadow: 0 12px 36px rgba(15,23,42,0.5), 0 4px 12px rgba(50,46,161,0.3); border: 1px solid rgba(255,255,255,0.08);">
                <div class="pointer-events-none absolute -top-12 -right-12 w-40 h-40 rounded-full" style="background: rgba(50,46,161,0.2); filter: blur(2.5rem);"></div>
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-center font-heading text-2xl font-black text-white">Vision</h2>
                <div class="mx-auto mt-2 w-10 h-0.5 rounded-full mb-4" style="background: rgba(165,180,252,0.7);"></div>
                <p class="flex-1 text-sm leading-7 text-justify" style="color: #c7d2fe;">To become a trusted CNC manufacturing partner for architects, designers, manufacturers and homeowners who rely on premium advice and dependable project communication.</p>
                <div class="mt-5 pt-4 flex items-center justify-center" style="border-top: 1px solid rgba(255,255,255,0.12);">
                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-indigo-200">Trusted Partnership</span>
                </div>
            </article>

            <!-- Core Promise Card -->
            <article class="group relative flex flex-col bg-white rounded-2xl border border-slate-200 overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                style="padding: 1.5rem 1.5rem;">
                <div class="absolute inset-x-0 top-0 h-1" style="background: linear-gradient(90deg, transparent, #322EA1, transparent);"></div>
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-center font-heading text-2xl font-black text-slate-900">Core Promise</h2>
                <div class="mx-auto mt-2 w-10 h-0.5 rounded-full mb-4" style="background: #322EA1;"></div>
                <p class="flex-1 text-sm leading-7 text-slate-500 text-justify">Every project receives manufacturing attention before machine time: file review, material fit, pattern strength, production feasibility, edge quality and clear next-step guidance.</p>
                <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-center">
                    <span class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Quality Assured</span>
                </div>
            </article>

        </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 4 — Founder Section
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-white pt-12 pb-12 lg:pt-16 lg:pb-16">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mx-auto mb-6 lg:mb-8 max-w-3xl text-center">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Founder Section</p>
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
            </div>
            <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">Led by <?= e($company['founder']) ?> with hands-on manufacturing discipline.</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 items-stretch gap-10 lg:gap-12">

            <!-- LEFT: Content Column -->
            <div class="flex flex-col justify-between">
                <div class="flex flex-col gap-6">
                    <p class="text-sm leading-7 text-slate-600 text-justify">Good CNC work requires a calm technical eye. A founder-led CNC business has an advantage because project decisions do not disappear into layers of unclear communication. At Digi CNC, Mr. Krunal Patel brings attention to the details that matter at the machine and at the client table. The goal is not to accept every file blindly. The goal is to produce work that is useful when it reaches the client, site, workshop or finishing team.</p>
                    <p class="text-sm leading-7 text-slate-600 text-justify">That mindset influences the quotation process, file checks, machine planning and customer support. If a jali web is too thin, the concern is raised. If a parametric rib assembly needs numbering, it is discussed. If MDF is being used where HDHMR may be more sensible, the client receives guidance. If a carved panel needs finishing allowance, the team accounts for it. This founder-driven quality culture helps Digi CNC stand apart from generic CNC router services.</p>
                    <p class="text-sm leading-7 text-slate-600 text-justify">For professionals, this reduces friction. Architects can share concepts and receive manufacturing feedback. Interior designers can coordinate custom panels with confidence. Furniture manufacturers can discuss repeatable parts and nesting. Contractors can ask practical questions about delivery and assembly. Homeowners can understand material choices without feeling lost in technical language. The result is a working relationship that feels clear and premium without becoming slow or complicated.</p>
                </div>

                <div class="mt-10 pt-7 border-t border-slate-100 flex items-center gap-4">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 50%, #322EA1 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-heading text-sm font-bold text-slate-900"><?= e($company['founder']) ?></p>
                        <p class="text-xs text-slate-500">Founder, Digi CNC</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Core Strengths -->
            <div class="relative overflow-hidden rounded-2xl p-6 sm:p-7 text-white lg:p-8 flex flex-col justify-center"
                style="background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 45%, #251e7a 100%); box-shadow: 0 12px 36px rgba(15,23,42,0.5), 0 4px 12px rgba(50,46,161,0.3); border: 1px solid rgba(255,255,255,0.08);">

                <div class="pointer-events-none absolute -right-12 -top-12 h-44 w-44 rounded-full" style="background: rgba(50,46,161,0.2); filter: blur(2.5rem);"></div>
                <div class="pointer-events-none absolute -left-10 -bottom-10 h-36 w-36 rounded-full" style="background: rgba(50,46,161,0.15); filter: blur(2.5rem);"></div>

                <div class="text-center mb-8">
                    <h3 class="font-heading text-lg font-bold lg:text-xl">Core Strengths</h3>
                    <div class="mx-auto mt-3 w-10 h-0.5 rounded-full" style="background: rgba(165,180,252,0.7);"></div>
                </div>

                <div class="flex flex-col gap-3.5">

                    <div class="flex items-center gap-4 rounded-xl px-4 sm:px-5 py-4" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg" style="background: rgba(50,46,161,0.4);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="7"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/><circle cx="12" cy="12" r="1.3" fill="#ffffff" stroke="none"/>
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: #c7d2fe;"><strong class="font-semibold text-white">Precision:</strong> CAD-aware cutting and carving.</p>
                    </div>

                    <div class="flex items-center gap-4 rounded-xl px-4 sm:px-5 py-4" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg" style="background: rgba(50,46,161,0.4);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3 21 8l-9 5-9-5 9-5z"/><path d="M3 12l9 5 9-5"/><path d="M3 16l9 5 9-5"/>
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: #c7d2fe;"><strong class="font-semibold text-white">Materials:</strong> MDF, HDHMR, wood, acrylic, PVC, ACP, WPC.</p>
                    </div>

                    <div class="flex items-center gap-4 rounded-xl px-4 sm:px-5 py-4" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg" style="background: rgba(50,46,161,0.4);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 12l8-8 8 8M4 12h16"/><path d="M12 4v16"/>
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: #c7d2fe;"><strong class="font-semibold text-white">Design Support:</strong> Jali, parametric, prototypes.</p>
                    </div>

                    <div class="flex items-center gap-4 rounded-xl px-4 sm:px-5 py-4" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg" style="background: rgba(50,46,161,0.4);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: #c7d2fe;"><strong class="font-semibold text-white">Local:</strong> Nagpur-based responsiveness.</p>
                    </div>

                    <div class="flex items-center gap-4 rounded-xl px-4 sm:px-5 py-4" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg" style="background: rgba(50,46,161,0.4);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 7h11"/><path d="M13 4l3 3-3 3"/><path d="M19 17H8"/><path d="M11 14l-3 3 3 3"/>
                            </svg>
                        </div>
                        <p class="text-sm leading-relaxed" style="color: #c7d2fe;"><strong class="font-semibold text-white">Flexibility:</strong> B2B and B2C support.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 5 — Manufacturing Process (dark bg)
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-slate-950 text-white relative overflow-hidden pt-16 pb-16 lg:pt-24 lg:pb-24">

    <div class="pointer-events-none absolute -top-20 left-1/4 w-[28rem] h-[28rem] rounded-full" style="background: rgba(50,46,161,0.2); filter: blur(6rem);"></div>
    <div class="pointer-events-none absolute -bottom-20 right-1/4 w-[28rem] h-[28rem] rounded-full" style="background: rgba(50,46,161,0.25); filter: blur(6rem);"></div>

    <div class="mx-auto max-w-7xl px-4 lg:px-6 relative">

        <div class="w-full text-center mb-10 lg:mb-14">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="block w-10 h-px" style="background: rgba(165,180,252,0.5);"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #a5b4fc;">Manufacturing Process</p>
                <span class="block w-10 h-px" style="background: rgba(165,180,252,0.5);"></span>
            </div>
            <h2 class="font-heading font-black text-white leading-tight" style="font-size: clamp(1.75rem, 3.5vw, 2.5rem);">A controlled process for cutting, carving, engraving and custom CNC work.</h2>
            <p class="mt-5 max-w-3xl mx-auto text-center leading-8" style="color: #94a3b8;">Digi CNC begins with understanding the use case. A wall panel, cabinet part, acrylic display, ACP component, carved artwork and parametric installation do not need the same production approach. The process starts by checking the drawing or reference against material, thickness, quantity and desired finish. If the file needs cleaning, the team can guide the client before production. If a sample is sensible, it is recommended before a larger batch.</p>
        </div>

        <div class="mt-10 lg:mt-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
            <?php foreach (
                [
                    ['Input Review', 'CAD files, PDFs, images, site dimensions and material assumptions are reviewed before production.'],
                    ['Toolpath Planning', 'Cutting, carving or engraving strategy is selected according to material, detail level and finish expectation.'],
                    ['Machine Execution', 'The CNC process focuses on secure workholding, clean routing, correct depth and repeatable output.'],
                    ['Quality Handover', 'Parts are checked, organized and prepared for finishing, assembly, pickup or dispatch guidance.'],
                ] as $i => $item
            ): ?>
                <article class="group relative rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1.5"
                    style="background: linear-gradient(155deg, rgba(50,46,161,0.3) 0%, rgba(30,27,75,0.45) 55%, rgba(15,23,42,0.5) 100%); border: 1px solid rgba(100,90,200,0.25); box-shadow: 0 8px 24px rgba(0,0,0,0.35);">

                    <div class="absolute inset-x-0 top-0 h-[3px] rounded-t-2xl" style="background: linear-gradient(90deg, transparent, #322EA1, transparent); opacity: 0.8;"></div>

                    <div class="flex items-center justify-between mb-5">
                        <span class="font-heading text-3xl font-black" style="color: rgba(165,180,252,0.5);"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center transition-transform duration-300 group-hover:scale-110" style="background: rgba(50,46,161,0.3); border: 1px solid rgba(165,180,252,0.3);">
                            <?php
                                $icons = [
                                    '<path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/>',
                                    '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
                                    '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
                                    '<path d="M20 6 9 17l-5-5"/>',
                                ];
                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#c7d2fe" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $icons[$i] . '</svg>';
                            ?>
                        </div>
                    </div>

                    <h3 class="font-heading text-xl font-bold text-white"><?= e($item[0]) ?></h3>
                    <div class="mt-2 mb-4 w-8 h-0.5 rounded-full" style="background: rgba(165,180,252,0.6);"></div>
                    <p class="text-sm leading-7 text-justify" style="color: #b4bcd4;"><?= e($item[1]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 6 — Quality Assurance
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-white relative overflow-hidden pt-12 pb-12 lg:pt-16 lg:pb-16">

    <div class="pointer-events-none absolute -top-10 -right-10 w-80 h-80 rounded-full" style="background: radial-gradient(circle, rgba(50,46,161,0.1), transparent 70%);"></div>

    <div class="mx-auto max-w-7xl px-4 lg:px-6 relative">

        <div class="mb-6 lg:mb-8 text-center">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="block w-8 h-px" style="background: linear-gradient(90deg, transparent, #322EA1);"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Quality Assurance</p>
                <span class="block w-8 h-px" style="background: linear-gradient(90deg, #322EA1, transparent);"></span>
            </div>
            <h2 class="font-heading font-black text-slate-900 leading-tight" style="font-size: clamp(1.9rem, 3.5vw, 2.75rem);">
                Quality Begins Before The <span style="color: #322EA1;">Router</span> Starts.
            </h2>
            <p class="mt-3 text-sm font-semibold text-slate-500 tracking-wide">
                Precision <span class="mx-1" style="color: #322EA1;">&bull;</span> Material Control <span class="mx-1" style="color: #322EA1;">&bull;</span> Process Accuracy
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

            <!-- LEFT: Image + Feature Strip -->
            <div class="flex flex-col">
                <div style="border-radius: 1rem 1rem 0 0; overflow: hidden; flex: 1; min-height: 220px;">
                    <img
                        src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>"
                        alt="Digi CNC quality assurance process"
                        loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                </div>

                <div style="background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 45%, #251e7a 100%); border-radius: 0 0 1rem 1rem; padding: 1.1rem 0.5rem;">
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 0;">

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 0 0.35rem; border-right: 1px solid rgba(50,46,161,0.4);">
                            <div style="width: 34px; height: 34px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c7d2fe" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                            </div>
                            <p style="font-size: 0.7rem; font-weight: 700; color: #ffffff; margin: 0; text-align: center;">Quality Checked</p>
                            <p style="font-size: 0.6rem; color: #94a3b8; margin: 0; text-align: center; line-height: 1.3;">Every file reviewed before production.</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 0 0.35rem; border-right: 1px solid rgba(50,46,161,0.4);">
                            <div style="width: 34px; height: 34px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c7d2fe" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 21 8l-9 5-9-5 9-5z"/><path d="M3 12l9 5 9-5"/><path d="M3 16l9 5 9-5"/></svg>
                            </div>
                            <p style="font-size: 0.7rem; font-weight: 700; color: #ffffff; margin: 0; text-align: center;">Material Verified</p>
                            <p style="font-size: 0.6rem; color: #94a3b8; margin: 0; text-align: center; line-height: 1.3;">Material quality and fitment confirmed.</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 0 0.35rem;">
                            <div style="width: 34px; height: 34px; border-radius: 50%; background: rgba(50,46,161,0.35); display: flex; align-items: center; justify-content: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c7d2fe" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
                            </div>
                            <p style="font-size: 0.7rem; font-weight: 700; color: #ffffff; margin: 0; text-align: center;">CNC Ready Files</p>
                            <p style="font-size: 0.6rem; color: #94a3b8; margin: 0; text-align: center; line-height: 1.3;">Clean, optimized files for accurate output.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT: Numbered Cards -->
            <div class="flex flex-col gap-5 justify-center">

                <div class="flex items-start gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-5 transition-all duration-300 hover:shadow-md hover:border-slate-200">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center font-heading font-extrabold text-white text-sm"
                        style="background: linear-gradient(155deg, #0f172a 0%, #322EA1 100%);">01</div>
                    <div class="flex-1">
                        <h3 class="font-heading text-base font-bold text-slate-900 flex items-center gap-2">
                            Before Production
                            <span class="hidden sm:block w-6 h-px bg-slate-300"></span>
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600 text-justify">We start with a clean file. Closed curves, correct scale, appropriate spacing, manageable depth and clear labels reduce machining risk. Material quality, sheet flatness, thickness variation, surface condition and finish plan can affect the final output. The team looks at these details before production whenever possible.</p>
                    </div>
                    <div class="hidden sm:flex flex-shrink-0 w-9 h-9 rounded-lg items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><circle cx="11" cy="14" r="2"/><path d="M12.5 15.5L15 18"/></svg>
                    </div>
                </div>

                <div class="flex items-start gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-5 transition-all duration-300 hover:shadow-md hover:border-slate-200">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center font-heading font-extrabold text-white text-sm"
                        style="background: linear-gradient(155deg, #0f172a 0%, #322EA1 100%);">02</div>
                    <div class="flex-1">
                        <h3 class="font-heading text-base font-bold text-slate-900 flex items-center gap-2">
                            During Machining
                            <span class="hidden sm:block w-6 h-px bg-slate-300"></span>
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600 text-justify">Attention shifts to workholding, tool condition, feed approach, pass depth and edge behavior. For 3D carving, depth and step-over influence finish quality. For jali, inside corners and thin bridges need careful review. For furniture parts, repeatability and part organization matter. For acrylic and ACP, surface protection and edge quality become important. For parametric work, numbering and assembly logic can be as important as cutting accuracy.</p>
                    </div>
                    <div class="hidden sm:flex flex-shrink-0 w-9 h-9 rounded-lg items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                </div>

                <div class="flex items-start gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-5 transition-all duration-300 hover:shadow-md hover:border-slate-200">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl flex items-center justify-center font-heading font-extrabold text-white text-sm"
                        style="background: linear-gradient(155deg, #0f172a 0%, #322EA1 100%);">03</div>
                    <div class="flex-1">
                        <h3 class="font-heading text-base font-bold text-slate-900 flex items-center gap-2">
                            After Cutting
                            <span class="hidden sm:block w-6 h-px bg-slate-300"></span>
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600 text-justify">We consider whether the parts are ready for pickup, finishing, assembly or further coordination. Digi CNC does not claim that CNC alone completes every project. Finishing, polishing, lamination, painting, installation and hardware work may involve other trades. But CNC accuracy gives those trades a stronger starting point. That is the value the company protects.</p>
                    </div>
                    <div class="hidden sm:flex flex-shrink-0 w-9 h-9 rounded-lg items-center justify-center" style="background: #eef0fb;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="prose-content">
      <p>Digi CNC treats quality as a sequence, not a final inspection checkbox. A clean final part begins with a clean file. Closed curves, correct scale, appropriate spacing, proper nesting, manageable depth and clear labels reduce machining risk. Material quality matters too. Sheet flatness, thickness variation, surface condition and finish plan can affect the final output. The team looks at these details before production whenever possible.</p>
      <p>During machining, attention shifts to workholding, tool condition, feed approach, pass depth and edge behavior. For 3D carving, depth and step-over influence finish quality. For jali, inside corners and thin bridges need careful review. For furniture parts, repeatability and part organization matter. For acrylic and ACP, surface protection and edge quality become important. For parametric work, numbering and assembly logic can be as important as cutting accuracy.</p>
      <p>After cutting, the team considers whether the parts are ready for pickup, finishing, assembly or further coordination. Digi CNC does not claim that CNC alone completes every project. Finishing, polishing, lamination, painting, installation and hardware work may involve other trades. But CNC accuracy gives those trades a stronger starting point. That is the value the company protects.</p>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 7 — Business Network
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-slate-50 pt-12 pb-12 lg:pt-16 lg:pb-16">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mx-auto max-w-4xl text-center mb-6 lg:mb-8">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
                <p class="text-xs font-bold uppercase tracking-[0.18em]" style="color: #322EA1;">Business Network</p>
                <span class="block w-10 h-px" style="background: #a5a8e0;"></span>
            </div>
            <h2 class="mt-3 font-heading text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900 lg:text-[2.25rem] lg:leading-snug">
                Serving the ecosystem around
                <span style="color: #322EA1;">architecture,<br class="hidden sm:block"> interiors, furniture and manufacturing.</span>
            </h2>
            <div class="flex items-center justify-center gap-2 mt-4">
                <span class="block w-10 h-px opacity-60" style="background: #a5a8e0;"></span>
                <span class="block w-2 h-2 rounded-full" style="background: #322EA1;"></span>
                <span class="block w-10 h-px opacity-60" style="background: #a5a8e0;"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

            <!-- LEFT -->
            <div class="flex flex-col justify-between gap-8">

                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl border flex items-center justify-center mt-0.5" style="background: #eef0fb; border-color: #c7caef;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <p class="text-sm leading-8 text-slate-600 text-justify">Nagpur has a growing need for reliable CNC support because design expectations are rising. Commercial interiors need branded features. Homes need custom mandirs, partitions and decorative panels. Furniture manufacturers need repeatable parts. Architects are exploring parametric surfaces and detail-rich spaces. Prototype developers need accurate components without committing to large tooling. Digi CNC sits inside this network and helps each group move from idea to manufactured output.</p>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl border flex items-center justify-center mt-0.5" style="background: #eef0fb; border-color: #c7caef;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8l-2 4h12l-2-4z"/>
                        </svg>
                    </div>
                    <p class="text-sm leading-8 text-slate-600 text-justify">The company's local presence matters. When a project has site changes, urgent revisions or material questions, responsive communication can protect the schedule. Digi CNC can coordinate with designers, contractors, carpenters, finishing teams and clients so that the CNC portion supports the larger project rather than slowing it down. This is especially useful for renovation projects, commercial fit-outs and custom residential interiors where dimensions and decisions often evolve.</p>
                </div>

            </div>

            <!-- RIGHT: Timeline -->
            <div class="flex flex-col">

                <div class="flex items-center gap-3 mb-5">
                    <span class="flex-1 border-t border-dashed" style="border-color: #c7caef;"></span>
                    <h3 class="font-heading text-xl font-bold text-slate-900 whitespace-nowrap">Timeline</h3>
                    <span class="flex-1 border-t border-dashed" style="border-color: #c7caef;"></span>
                </div>

                <div class="flex flex-col flex-1">
                    <?php
                    $timeline = [
                        ['Foundation',               'Digi CNC begins with a focus on practical CNC cutting and carving support in Nagpur.',                                                                                '#322EA1', '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M9 22V10"/>'],
                        ['Material Expansion',       'Work grows across MDF, HDHMR, wood, acrylic, ACP, PVC, WPC and plywood.',                                                                                          '#1e1b4b', '<path d="M12 3 21 8l-9 5-9-5 9-5z"/><path d="M3 12l9 5 9-5"/><path d="M3 16l9 5 9-5"/>'],
                        ['Design-Led Manufacturing', 'Parametric panels, decorative jali, 3D carving and custom CNC projects become key strengths.',                                                                        '#251e7a', '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>'],
                        ['Growth Focus',             'The company continues serving architects, interior designers, furniture teams, manufacturers and homeowners across Nagpur and Maharashtra.',                           '#0f172a', '<path d="M3 3v18h18"/><path d="M7 16l4-4 4 4 4-4"/>'],
                    ];
                    foreach ($timeline as $i => [$title, $desc, $color, $icon]):
                        $is_last = $i === count($timeline) - 1;
                    ?>
                        <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-white px-4 py-3.5 shadow-sm transition-all duration-300 hover:border-slate-200 hover:shadow-md hover:-translate-y-0.5">
                            <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center"
                                style="background: <?= e($color) ?>;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                    <?= $icon ?>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between gap-2">
                                    <p class="font-heading text-sm font-bold" style="color: <?= e($color) ?>;"><?= e($title) ?></p>
                                    <span class="font-heading text-xs font-bold" style="color: <?= e($color) ?>; opacity:.8;"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                                </div>
                                <p class="mt-1 text-xs leading-6 text-slate-500 text-justify"><?= e($desc) ?></p>
                            </div>
                        </div>

                        <?php if (!$is_last): ?>
                            <div class="flex justify-start pl-7" style="height: 12px;">
                                <div class="w-0.5 h-full" style="background: <?= e($color) ?>; opacity: 0.25;"></div>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SECTION 8 — Start a Project / Contact CTA
     Consistent padding: pt-16 pb-16 lg:pt-24 lg:pb-24
════════════════════════════════════════════════════════ -->
<section class="bg-white pt-12 pb-12 lg:pt-16 lg:pb-16">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- LEFT: content -->
            <div>

                <div class="flex items-center gap-2 mb-3">
                    <p class="text-[0.65rem] font-bold uppercase tracking-[0.2em]" style="color: #322EA1;">Start a Project</p>
                    <span class="block w-4 h-px" style="background: #322EA1;"></span>
                </div>
                <div class="w-8 h-0.5 rounded-full mb-3" style="background: #322EA1;"></div>

                <h2 class="font-heading font-black leading-tight text-slate-900" style="font-size: clamp(2rem, 3.5vw, 2.8rem);">
                    Send a drawing,<br>
                    reference image or<br>
                    <span style="color: #322EA1;">requirement.</span>
                </h2>

                <p class="mt-4 text-sm leading-7 text-slate-600 text-justify">
                    Whether the requirement is a single carved panel, a batch of furniture components, a decorative jali screen, a parametric installation, a prototype part or a complete custom CNC project, Digi CNC can help review the details and guide the next step.
                </p>

                <div class="mt-5 flex flex-col gap-3">

                    <div class="flex items-center gap-4 bg-white rounded-xl px-4 py-3.5 border border-slate-100 shadow-sm">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb; border: 1px solid #c7caef;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </div>
                        <span class="w-px h-8 bg-slate-200 flex-shrink-0"></span>
                        <div>
                            <p class="text-sm font-bold text-slate-900">Custom CNC Manufacturing</p>
                            <p class="text-xs text-slate-500 mt-0.5">High precision. Quality assured.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 bg-white rounded-xl px-4 py-3.5 border border-slate-100 shadow-sm">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb; border: 1px solid #c7caef;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                            </svg>
                        </div>
                        <span class="w-px h-8 bg-slate-200 flex-shrink-0"></span>
                        <div>
                            <p class="text-sm font-bold text-slate-900">Fast Turnaround Time</p>
                            <p class="text-xs text-slate-500 mt-0.5">Quick response. On-time delivery.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 bg-white rounded-xl px-4 py-3.5 border border-slate-100 shadow-sm">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background: #eef0fb; border: 1px solid #c7caef;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <span class="w-px h-8 bg-slate-200 flex-shrink-0"></span>
                        <div>
                            <p class="text-sm font-bold text-slate-900">Design-to-Production Support</p>
                            <p class="text-xs text-slate-500 mt-0.5">From idea to manufactured output.</p>
                        </div>
                    </div>

                </div>

                <div class="mt-6 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#322EA1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>
                    </svg>
                    <p class="text-xs font-semibold text-slate-500 tracking-widest">Secure &bull; Reliable &bull; Professional</p>
                </div>

            </div>

            <!-- RIGHT: floating form card -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-xl p-6 sm:p-8">
                <?php $this->partial('partials/contact-form', ['repo' => $repo]); ?>
            </div>

        </div>
    </div>
</section>
