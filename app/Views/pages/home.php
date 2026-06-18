<?php $company = $repo->company();
$heroSlides = $repo->heroSlides(); ?>

<!-- =============================================================
     HEADING HIERARCHY SYSTEM
     h1  → Hero page title       : text-4xl xl:text-5xl  font-bold (700)
     h2  → Section titles        : text-3xl              font-bold (700)
     h3  → Card / panel titles   : text-lg               font-semibold (600)
     h4  → Sub-headings in cards : text-base             font-semibold (600)
     p   → Body / eyebrow        : text-sm – text-base
     ============================================================= -->

<!-- ── Hero ─────────────────────────────────────────────────── -->
<section class="hero-slider relative isolate overflow-hidden bg-slate-950 text-white" data-hero-slider>
    <div class="absolute inset-0 -z-10">
        <?php foreach ($heroSlides as $index => $slide): ?>
            <img class="hero-slide <?= $index === 0 ? 'hero-slide-active' : '' ?>"
                data-hero-slide="<?= e($index) ?>"
                src="<?= e(asset_url($slide['image'])) ?>"
                alt="<?= e($slide['alt']) ?>"
                <?= $index === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>>
        <?php endforeach; ?>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_75%_20%,rgba(50,46,161,.34),transparent_34%),linear-gradient(90deg,rgba(5,5,9,.96)_0%,rgba(5,5,9,.88)_44%,rgba(5,5,9,.56)_100%)]"></div>
    </div>

    <div class="mx-auto flex min-h-[560px] max-w-7xl flex-col justify-center px-4 pb-14 pt-24 lg:px-6 lg:pb-20 lg:pt-28">
        <div class="relative">
            <?php foreach ($heroSlides as $index => $slide): ?>
                <div class="hero-copy <?= $index === 0 ? 'hero-copy-active' : '' ?>" data-hero-copy="<?= e($index) ?>">
                    <p class="eyebrow text-red-300"><?= e($slide['eyebrow']) ?></p>

                    <?php if ($index === 0): ?>
                        <h1 class="mt-4 font-heading text-4xl font-semibold leading-tight xl:text-5xl">
                            <?= e($slide['title']) ?>
                        </h1>
                    <?php else: ?>
                        <p class="mt-4 font-heading text-4xl font-semibold leading-tight xl:text-5xl" role="heading" aria-level="2">
                            <?= e($slide['title']) ?>
                        </p>
                    <?php endif; ?>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-300 text-justify">
                        <?= e($slide['copy']) ?>
                    </p>
                </div>
            <?php endforeach; ?>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a class="btn-primary px-6 py-3" href="<?= e(app_url('contact-us')) ?>">Get CNC Quote</a>
                <a class="btn-secondary px-6 py-3" href="<?= e(app_url('gallery')) ?>">View Project Gallery</a>
            </div>

            <div class="mt-6 flex gap-3" aria-label="Hero slider controls">
                <?php foreach ($heroSlides as $index => $slide): ?>
                    <button class="hero-dot <?= $index === 0 ? 'hero-dot-active' : '' ?>"
                        type="button"
                        data-hero-dot="<?= e($index) ?>"
                        aria-label="Show slide <?= e($index + 1) ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ── Stats bar ────────────────────────────────────────────── -->
<section class="border-t border-slate-200 bg-white py-4 lg:py-6">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="grid divide-y divide-slate-200 sm:grid-cols-2 sm:divide-y-0 sm:divide-x lg:grid-cols-4">
            <?php foreach ($repo->stats() as $stat): ?>
                <div class="px-6 py-4 text-center">
                    <p class="font-heading text-3xl font-bold text-indigo-700 sm:text-4xl">
                        <span data-counter="<?= e($stat['value']) ?>">0</span><?= e($stat['suffix']) ?>
                    </p>
                    <p class="mt-2 text-[0.65rem] font-semibold uppercase tracking-[0.1em] text-slate-500">
                        <?= e($stat['label']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ── Send Drawing / Contact form ──────────────────────────── -->
<section class="bg-slate-50 py-16 lg:py-20">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-stretch gap-8 px-4 md:grid-cols-2 md:gap-10 lg:px-6">
        <div class="order-2 min-h-[320px] overflow-hidden rounded-lg shadow-xl md:order-1">
            <img class="h-full w-full object-cover"
                src="<?= e(asset_url($heroSlides[0]['image'])) ?>"
                alt="<?= e($heroSlides[0]['alt']) ?>"
                loading="lazy">
        </div>
        <div class="order-1 rounded-lg border border-slate-200 bg-white p-6 shadow-xl md:order-2 lg:p-8">
            <h3 class="font-heading text-lg font-semibold text-slate-900">
                Send Drawing or Requirement
            </h3>
            <p class="mt-2 text-sm leading-6 text-slate-600 text-justify">
                Share material, size, quantity, file status and timeline. The Digi CNC team will review the feasibility and guide the next step.
            </p>
            <div class="mt-5">
                <?php $this->partial('partials/contact-form', ['repo' => $repo, 'compact' => true]); ?>
            </div>
        </div>
    </div>
</section>


<!-- ── Why Choose Digi CNC ──────────────────────────────────── -->
<section class="bg-white py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div>
            <p class="eyebrow">Why Choose Digi CNC</p>
            <h2 class="mt-3 font-heading text-3xl font-bold leading-tight text-slate-900">
                A manufacturing partner for design-led CNC work, not just a cutting vendor.
            </h2>
        </div>

        <div class="mt-10 grid gap-10 lg:grid-cols-[.9fr_1.1fr]">
            <div>
                <p class="text-sm leading-8 text-slate-600 text-justify">
                    CNC work can look simple from the outside: load a file, clamp a sheet, run a machine. In practice, the best output depends on a chain of decisions made before the router starts. Digi CNC studies the drawing, material, thickness, pattern strength, edge quality, finish plan and intended use. That is why the company is useful for both B2B production work and B2C custom projects. A furniture contractor may need repeatable parts with clean labels. An architect may need a parametric surface that can actually be assembled. A homeowner may need a mandir jali that looks detailed but does not become fragile. Each case requires different judgment.
                </p>
                <p class="mt-4 text-sm leading-8 text-slate-600 text-justify">
                    Founded by Mr. Krunal Patel and backed by more than five years of hands-on CNC experience, Digi CNC serves Nagpur and Maharashtra with practical production thinking. The team works across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The result is a service that feels premium because the basics are treated seriously: file preparation, tool choice, material support, clean cutting strategy, review before machining, communication during production and sensible delivery expectations.
                </p>
            </div>

            <div class="grid auto-rows-fr gap-4 sm:grid-cols-2">
                <?php foreach (
                    [
                        ['title' => 'Drawing-First Review', 'body' => 'Files are checked for scale, closed profiles, duplicate lines, thin webs, tool clearance and production risk before cutting.'],
                        ['title' => 'Material Aware',       'body' => 'MDF, HDHMR, acrylic, ACP, WPC and wood behave differently, so toolpath planning is matched to the material and finish goal.'],
                        ['title' => 'B2B + B2C Support',   'body' => 'The workflow supports architects, furniture teams, contractors, manufacturers, artists, prototype companies and homeowners.'],
                        ['title' => 'Conversion Guidance', 'body' => 'Every inquiry is guided toward the clearest next step: file correction, sample cutting, quotation, production or design refinement.'],
                    ] as $index => $item
                ): ?>
                    <article class="feature-card group flex h-full flex-col transition hover:-translate-y-1 hover:border-red-200 hover:shadow-md">
                        <span class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-red-50 font-heading text-sm font-semibold text-red-600 transition group-hover:bg-red-100">
                            <?= e(sprintf('%02d', $index + 1)) ?>
                        </span>
                        <h3 class="font-heading text-base font-semibold leading-snug text-slate-800">
                            <?= e($item['title']) ?>
                        </h3>
                        <p class="mt-1 text-sm leading-6 text-slate-600 text-justify"><?= e($item['body']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ── Services Tabs ─────────────────────────────────────────── -->
<?php
$services     = $repo->services();
$firstService = $services[0] ?? null;
?>
<section class="bg-slate-50 py-16 lg:py-20" id="services-section">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="w-full max-w-none">
            <p class="eyebrow">Our Services</p>
            <h2 class="mt-3 font-heading text-3xl font-bold leading-tight text-slate-900">
                CNC services for interiors, furniture, prototypes, art and industrial use.
            </h2>
            <p class="mt-3 w-full text-sm leading-7 text-slate-600 text-justify">
                Digi CNC covers the common CNC needs of the Nagpur market while also handling custom work that needs design interpretation. The service range includes 2D CNC cutting, 3D CNC carving, parametric design manufacturing, decorative jali cutting, MDF CNC cutting, HDHMR CNC cutting, wood carving, acrylic cutting, ACP cutting, WPC cutting, prototype manufacturing, CNC engraving, wall panels, mandir designs and furniture components. Each service can be used as a one-time requirement or as part of a recurring production relationship.
            </p>
        </div>

        <!-- MOBILE: Stack vertically. DESKTOP: side-by-side tabs + panel -->
        <div class="mt-10 overflow-hidden rounded-2xl bg-slate-950 shadow-xl">

            <!-- Mobile tab strip (horizontal scroll) — hidden on md+ -->
            <div id="svc-tabs-mobile" class="flex overflow-x-auto md:hidden scrollbar-none border-b border-white/10">
                <?php foreach ($services as $i => $service): ?>
                    <button
                        type="button"
                        data-svc-index="<?= e($i) ?>"
                        data-svc-number="<?= e(sprintf('%02d', $i + 1)) ?>"
                        data-svc-name="<?= e($service['name']) ?>"
                        data-svc-summary="<?= e($service['summary']) ?>"
                        data-svc-href="<?= e(app_url($service['slug'])) ?>"
                        data-svc-image="<?= e(asset_url($service['image'] ?? 'assets/images/half.png')) ?>"
                        class="svc-tab-mobile flex-shrink-0 whitespace-nowrap border-b-2 px-4 py-3 text-xs font-medium transition <?= $i === 0 ? 'border-red-500 text-white' : 'border-transparent text-slate-400' ?>">
                        <?= e($service['name']) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Desktop layout: sidebar + panel — hidden on mobile -->
            <div class="hidden md:flex items-start">

                <!-- Sidebar tabs -->
                <div id="svc-tabs" class="flex w-48 flex-shrink-0 flex-col overflow-y-auto md:max-h-[680px] md:w-48 lg:w-64">
                    <?php foreach ($services as $i => $service): ?>
                        <?php $svcImage = $service['image'] ?? 'assets/images/half.png'; ?>
                        <button
                            type="button"
                            data-svc-index="<?= e($i) ?>"
                            data-svc-number="<?= e(sprintf('%02d', $i + 1)) ?>"
                            data-svc-name="<?= e($service['name']) ?>"
                            data-svc-summary="<?= e($service['summary']) ?>"
                            data-svc-href="<?= e(app_url($service['slug'])) ?>"
                            data-svc-image="<?= e(asset_url($svcImage)) ?>"
                            class="svc-tab relative flex w-full items-center gap-3 border-b border-white/10 px-3 py-4 text-left transition sm:px-5 <?= $i === 0 ? 'bg-white/10' : 'hover:bg-white/5' ?>">
                            <span class="svc-tab-bar absolute inset-y-0 left-0 w-1 bg-red-500 <?= $i === 0 ? '' : 'opacity-0' ?>"></span>
                            <span class="svc-tab-icon flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-md font-heading text-[0.65rem] font-semibold sm:h-9 sm:w-9 sm:text-xs <?= $i === 0 ? 'bg-red-500 text-white' : 'bg-white/10 text-red-300' ?>">
                                <?= e(strtoupper(substr($service['name'], 0, 1))) ?>
                            </span>
                            <span class="svc-tab-label truncate text-xs font-medium leading-snug sm:text-sm <?= $i === 0 ? 'text-white' : 'text-slate-300' ?>">
                                <?= e($service['name']) ?>
                            </span>
                        </button>
                    <?php endforeach; ?>
                </div>

                <!-- Detail panel (desktop) -->
                <div class="min-w-0 flex-1 self-stretch bg-white px-5 py-8 sm:px-8 lg:px-10 lg:py-10">
                    <span id="svc-panel-number" class="block font-heading text-4xl font-bold leading-none text-slate-200 lg:text-6xl">
                        <?= $firstService ? e(sprintf('%02d', 1)) : '' ?>
                    </span>

                    <h3 id="svc-panel-name"
                        title="<?= $firstService ? e($firstService['name']) : '' ?>"
                        class="mt-3 truncate font-heading text-xl font-semibold text-slate-900 sm:text-2xl">
                        <?= $firstService ? e($firstService['name']) : '' ?>
                    </h3>

                    <p id="svc-panel-summary" class="mt-3 text-sm leading-7 text-slate-600 text-justify lg:text-[0.95rem]">
                        <?= $firstService ? e($firstService['summary']) : '' ?>
                    </p>

                    <ul class="mt-5 space-y-3">
                        <?php foreach (
                            [
                                'Toolpath and material matched before cutting begins',
                                'Drawing reviewed for scale, clearance and risk',
                                'Production support based out of Nagpur',
                            ] as $point
                        ): ?>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <span class="mt-0.5 flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-red-50 text-red-600">
                                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span><?= e($point) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="mt-6 flex justify-start">
                        <a id="svc-panel-link-top"
                            href="<?= $firstService ? e(app_url($firstService['slug'])) : '#' ?>"
                            style="background-color: #4338ca; color: #ffffff; text-decoration: none;"
                            class="group relative inline-flex items-center gap-2 overflow-hidden rounded-full px-[18px] py-2 text-sm font-semibold shadow-md shadow-indigo-200 transition-all duration-300 hover:-translate-y-1 hover:shadow-indigo-300">
                            <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-500 group-hover:translate-x-full"></span>
                            <span class="relative z-10 tracking-wide">Explore This Service</span>
                            <span class="relative z-10 flex h-[22px] w-[22px] flex-shrink-0 items-center justify-center rounded-full bg-white/[0.22] transition-all duration-300 group-hover:translate-x-1">
                                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="mt-5 w-full overflow-hidden rounded-xl bg-slate-100 shadow-sm">
                        <img id="svc-panel-image"
                            class="aspect-[3/1] h-auto w-full object-cover"
                            src="<?= $firstService ? e(asset_url($firstService['image'] ?? 'assets/images/half.png')) : '' ?>"
                            alt="<?= $firstService ? e($firstService['name']) : '' ?>"
                            loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Mobile detail panel — hidden on md+ -->
            <div id="svc-mobile-panel" class="md:hidden bg-white px-5 py-7">
                <span id="svc-panel-number-m" class="block font-heading text-3xl font-bold leading-none text-slate-200">
                    <?= $firstService ? e(sprintf('%02d', 1)) : '' ?>
                </span>
                <h3 id="svc-panel-name-m" class="mt-2 font-heading text-lg font-semibold text-slate-900">
                    <?= $firstService ? e($firstService['name']) : '' ?>
                </h3>
                <p id="svc-panel-summary-m" class="mt-2 text-sm leading-7 text-slate-600 text-justify">
                    <?= $firstService ? e($firstService['summary']) : '' ?>
                </p>
                <ul class="mt-4 space-y-2">
                    <?php foreach (
                        [
                            'Toolpath and material matched before cutting begins',
                            'Drawing reviewed for scale, clearance and risk',
                            'Production support based out of Nagpur',
                        ] as $point
                    ): ?>
                        <li class="flex items-start gap-2 text-sm text-slate-600">
                            <span class="mt-0.5 flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-red-50 text-red-600">
                                <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span><?= e($point) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="mt-5">
                    <a id="svc-panel-link-m"
                        href="<?= $firstService ? e(app_url($firstService['slug'])) : '#' ?>"
                        style="background-color: #4338ca; color: #ffffff; text-decoration: none;"
                        class="inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold">
                        <span>Explore This Service</span>
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="mt-4 w-full overflow-hidden rounded-xl bg-slate-100">
                    <img id="svc-panel-image-m"
                        class="aspect-video h-auto w-full object-cover"
                        src="<?= $firstService ? e(asset_url($firstService['image'] ?? 'assets/images/half.png')) : '' ?>"
                        alt="<?= $firstService ? e($firstService['name']) : '' ?>"
                        loading="lazy">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        // Desktop tabs
        var tabs = document.querySelectorAll('#svc-tabs [data-svc-index]');
        var numberEl = document.getElementById('svc-panel-number');
        var nameEl = document.getElementById('svc-panel-name');
        var summaryEl = document.getElementById('svc-panel-summary');
        var linkElTop = document.getElementById('svc-panel-link-top');
        var imageEl = document.getElementById('svc-panel-image');

        function activateDesktop(tab) {
            tabs.forEach(function(t) {
                var active = t === tab;
                var icon = t.querySelector('.svc-tab-icon');
                var label = t.querySelector('.svc-tab-label');
                var bar = t.querySelector('.svc-tab-bar');
                t.classList.toggle('bg-white/10', active);
                t.classList.toggle('hover:bg-white/5', !active);
                icon.classList.toggle('bg-red-500', active);
                icon.classList.toggle('text-white', active);
                icon.classList.toggle('bg-white/10', !active);
                icon.classList.toggle('text-red-300', !active);
                label.classList.toggle('text-white', active);
                label.classList.toggle('text-slate-300', !active);
                bar.classList.toggle('opacity-0', !active);
            });
            if (numberEl) numberEl.textContent = tab.getAttribute('data-svc-number');
            if (nameEl) { nameEl.textContent = tab.getAttribute('data-svc-name'); nameEl.setAttribute('title', tab.getAttribute('data-svc-name')); }
            if (summaryEl) summaryEl.textContent = tab.getAttribute('data-svc-summary');
            if (linkElTop) linkElTop.setAttribute('href', tab.getAttribute('data-svc-href'));
            if (imageEl) { imageEl.setAttribute('src', tab.getAttribute('data-svc-image')); imageEl.setAttribute('alt', tab.getAttribute('data-svc-name')); }
        }

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() { activateDesktop(tab); });
        });

        // Mobile tabs
        var mobileTabs = document.querySelectorAll('#svc-tabs-mobile [data-svc-index]');
        var numberElM = document.getElementById('svc-panel-number-m');
        var nameElM = document.getElementById('svc-panel-name-m');
        var summaryElM = document.getElementById('svc-panel-summary-m');
        var linkElM = document.getElementById('svc-panel-link-m');
        var imageElM = document.getElementById('svc-panel-image-m');

        function activateMobile(tab) {
            mobileTabs.forEach(function(t) {
                var active = t === tab;
                t.classList.toggle('border-red-500', active);
                t.classList.toggle('text-white', active);
                t.classList.toggle('border-transparent', !active);
                t.classList.toggle('text-slate-400', !active);
            });
            if (numberElM) numberElM.textContent = tab.getAttribute('data-svc-number');
            if (nameElM) nameElM.textContent = tab.getAttribute('data-svc-name');
            if (summaryElM) summaryElM.textContent = tab.getAttribute('data-svc-summary');
            if (linkElM) linkElM.setAttribute('href', tab.getAttribute('data-svc-href'));
            if (imageElM) { imageElM.setAttribute('src', tab.getAttribute('data-svc-image')); imageElM.setAttribute('alt', tab.getAttribute('data-svc-name')); }
        }

        mobileTabs.forEach(function(tab) {
            tab.addEventListener('click', function() { activateMobile(tab); });
        });
    })();
</script>


<!-- ── Materials We Work With ───────────────────────────────── -->
<section class="relative overflow-hidden bg-slate-50 py-16 lg:py-20">
    <div class="pointer-events-none absolute -left-16 -top-16 h-72 w-72 rounded-full bg-indigo-100 opacity-50 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-16 -right-10 h-72 w-72 rounded-full bg-red-50 opacity-60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-6">
            <p class="eyebrow">Materials We Work With</p>
            <h2 class="mt-3 font-heading text-3xl font-bold leading-tight text-slate-900">
                Material selection that respects finish, strength and application.
            </h2>
        </div>

        <!-- FIX: was inline style grid with 1fr 480px — now Tailwind responsive grid -->
        <div class="grid grid-cols-1 gap-10 pt-5 lg:grid-cols-[1fr_480px] lg:gap-16 lg:items-start">

            <div class="text-sm leading-[1.9] text-slate-600">
                <p class="mb-5 text-justify">
                    The same CNC file can perform very differently in two materials. MDF is often selected for painted decorative panels, interior jali and carved surfaces because it offers a consistent face and economical machining. HDHMR is chosen when moisture resistance, density and durability matter for kitchens, wardrobes and commercial furniture. Natural wood is valued for warmth, grain and premium carving. Acrylic helps with signage, display work and clean modern panels. ACP and WPC support exterior-adjacent or commercial requirements when used with the right design details. Digi CNC helps clients avoid material assumptions that look good on paper but fail during cutting, finishing or installation.
                </p>
                <p class="text-justify">
                    For every project, material thickness, sheet size, edge quality, finishing method, fastener strategy and pattern strength are considered together. This is especially important for decorative jali, mandir panels, parametric ribs, furniture components and prototype work where one weak detail can affect the final result.
                </p>
                <div class="mt-8 flex items-center gap-3">
                    <div class="h-[3px] w-10 rounded-full bg-red-600"></div>
                    <div class="h-[3px] w-5 rounded-full bg-indigo-700"></div>
                    <div class="h-[3px] w-2.5 rounded-full bg-slate-200"></div>
                </div>
            </div>

            <div class="relative">
                <div class="pointer-events-none absolute -inset-4 rounded-[2rem] bg-gradient-to-br from-indigo-100 via-white to-red-50 opacity-60 blur-2xl"></div>
                <div class="relative rounded-[1.25rem] border border-slate-200 bg-white p-6 shadow-[0_16px_48px_rgba(15,23,42,0.10)]">
                    <div class="mb-5 flex items-center justify-between border-b border-slate-100 pb-4">
                        <div>
                            <p class="text-sm font-semibold tracking-tight text-slate-900">Available Materials</p>
                            <p class="mt-0.5 text-[0.72rem] font-medium text-slate-400">Selected for design, durability and application needs</p>
                        </div>
                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-[0.625rem] bg-gradient-to-br from-indigo-700 to-indigo-400 text-white">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M6 11h12M8 15h8M10 19h4" />
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-2.5">
                        <?php foreach ($repo->materials() as $material): ?>
                            <div
                                class="group relative flex min-h-[4rem] cursor-default items-center justify-center overflow-hidden rounded-xl border border-slate-200 bg-gradient-to-b from-slate-50 to-slate-100 p-2 text-center shadow-sm transition-all duration-200 hover:-translate-y-1 hover:border-indigo-400 hover:bg-gradient-to-b hover:from-indigo-50 hover:to-indigo-100 hover:shadow-[0_8px_24px_rgba(99,102,241,0.18)]">
                                <span class="pointer-events-none absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-indigo-700 to-red-600 opacity-0 transition-opacity duration-200 group-hover:opacity-100"></span>
                                <span class="text-[0.68rem] font-bold uppercase tracking-[0.07em] text-slate-800 leading-snug">
                                    <?= e($material) ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ── Industries We Serve ──────────────────────────────────── -->
<section class="relative overflow-hidden bg-slate-950 py-16 lg:py-20 text-white">
    <div class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_88%_12%,rgba(239,68,68,.12),transparent_40%),radial-gradient(circle_at_6%_90%,rgba(79,70,229,.14),transparent_38%)]"></div>

    <div class="relative mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mb-8 w-full">
            <p class="eyebrow text-red-300">Industries We Serve</p>
            <h2 class="mt-3 font-heading text-3xl font-bold leading-tight text-white">
                Built for professionals who need dependable CNC output.
            </h2>
            <p class="mt-4 w-full text-sm leading-7 text-slate-300 text-justify">
                Digi CNC works with a wide audience because CNC manufacturing sits between design and execution. Architects use it for feature panels, facades, partitions, ceiling baffles and parametric concepts. Interior designers use it for wall panels, jali, mandirs, retail counters and branded commercial details. Furniture manufacturers use it for repeat components, shutters, grooves, templates and cabinet parts. Contractors use it when manual cutting would slow the site or reduce consistency. Artists and prototype teams use it to test forms that need digital precision. Homeowners use it when a custom interior element must fit a specific space and style.
            </p>
        </div>

        <?php
        $industryIconPaths = [
            'architect'            => '<path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
            'interior'             => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 21h16M6 21V9l6-4 6 4v12M9 21v-6h6v6M9 11h.01M15 11h.01"/>',
            'furniture manufactur' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 12V8a3 3 0 013-3h6a3 3 0 013 3v4M5 12h14a2 2 0 012 2v4H3v-4a2 2 0 012-2zM7 18v3m10-3v3"/>',
            'contractor'           => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.59a2.548 2.548 0 11-3.586-3.586l8.59-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.39 1.192.39 1.846z"/>',
            'industrial'           => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281a1.687 1.687 0 00.97 1.295c.323.136.63.301.911.49.273.183.6.275.926.241l1.36-.139a1.125 1.125 0 011.094.852l.319 1.275a1.125 1.125 0 01-.4 1.17l-1.094.844a1.687 1.687 0 00-.611 1.83c.058.272.058.55 0 .822a1.687 1.687 0 00.611 1.83l1.094.844c.387.299.53.81.4 1.17l-.32 1.275a1.125 1.125 0 01-1.093.852l-1.36-.139a1.687 1.687 0 00-.926.241 6.4 6.4 0 01-.911.49 1.687 1.687 0 00-.97 1.295l-.213 1.281a1.125 1.125 0 01-1.11.94h-2.594a1.125 1.125 0 01-1.11-.94l-.213-1.281a1.687 1.687 0 00-.97-1.295 6.345 6.345 0 01-.911-.49 1.687 1.687 0 00-.926-.241l-1.36.139a1.125 1.125 0 01-1.093-.852l-.32-1.275a1.125 1.125 0 01.4-1.17l1.094-.844a1.687 1.687 0 00.611-1.83 2.385 2.385 0 010-.822 1.687 1.687 0 00-.611-1.83l-1.094-.844a1.125 1.125 0 01-.4-1.17l.32-1.275a1.125 1.125 0 011.094-.852l1.36.139c.326.034.653-.058.926-.241.281-.189.588-.354.911-.49a1.687 1.687 0 00.97-1.295l.213-1.281z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
            'artist'               => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.4-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597l-5.814 3.876a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>',
            'prototype'            => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5m9.75-11.396v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M9.75 3.104c1.5-.138 3-.138 4.5 0M5 14.5a23.94 23.94 0 0114 0M5 14.5l-1.402 1.402c-1.232 1.232-.65 3.318 1.067 3.611A48.309 48.309 0 0012 21c2.773 0 5.491-.235 8.135-.687 1.718-.293 2.3-2.379 1.067-3.611L19.8 15.3"/>',
            'homeowner'            => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>',
            'renovation'           => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>',
            'commercial'           => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>',
        ];
        $defaultIconPath  = $industryIconPaths['commercial'];
        $pickIndustryIcon = function ($name) use ($industryIconPaths, $defaultIconPath) {
            $lower = strtolower($name);
            foreach ($industryIconPaths as $needle => $svgPath) {
                if (strpos($lower, $needle) !== false) return $svgPath;
            }
            return $defaultIconPath;
        };
        ?>

        <div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-5">
            <?php foreach ($repo->industries() as $industry): ?>
                <div class="group flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-4 transition duration-300 hover:border-red-400/40 hover:bg-white/10">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-md border border-red-400/20 bg-red-500/10 text-red-300 transition duration-300 group-hover:bg-red-500/20 group-hover:text-red-200">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <?= $pickIndustryIcon($industry) ?>
                        </svg>
                    </span>
                    <h3 class="font-heading text-sm font-semibold leading-snug text-slate-100">
                        <?= e($industry) ?>
                    </h3>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ── Portfolio Preview ─────────────────────────────────────── -->
<section class="relative overflow-hidden bg-slate-50 py-16 lg:py-20">

    <div class="pointer-events-none absolute -right-24 -top-24 h-96 w-96 rounded-full bg-indigo-100 opacity-50 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-20 -left-20 h-80 w-80 rounded-full bg-red-50 opacity-60 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 lg:px-8">

        <div class="flex flex-col items-start justify-between gap-8 md:flex-row md:items-center">
            <div class="flex-1">
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[3px] w-8 rounded-full bg-red-500"></span>
                    <p class="text-[0.68rem] font-bold uppercase tracking-[0.22em] text-red-500">Portfolio Preview</p>
                    <span class="h-[3px] w-4 rounded-full bg-red-200"></span>
                </div>
                <h2 class="font-heading max-w-2xl text-3xl font-bold leading-tight text-slate-900">
                    Realistic applications for
                    <span class="relative whitespace-nowrap text-indigo-700">
                        CNC cutting
                        <svg class="absolute -bottom-1 left-0 w-full" viewBox="0 0 300 8" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 6 Q75 1 150 5 Q225 9 300 4" stroke="#dc2626" stroke-width="2.5" fill="none" stroke-linecap="round" opacity="0.45" />
                        </svg>
                    </span>,
                    carving and interior manufacturing.
                </h2>
            </div>

            <a href="<?= e(app_url('gallery')) ?>"
                style="background-color:#4338ca; color:#ffffff !important; text-decoration:none;"
                class="group relative inline-flex flex-shrink-0 items-center gap-3 overflow-hidden rounded-full px-8 py-3.5 text-sm font-semibold shadow-xl shadow-indigo-300 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-indigo-300 sm:px-10 sm:py-4"
                onmouseover="this.style.backgroundColor='#3730a3'" onmouseout="this.style.backgroundColor='#4338ca'">
                <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-500 group-hover:translate-x-full"></span>
                <span class="relative z-10 tracking-wide" style="color:#ffffff;">Open Full Gallery</span>
                <span class="relative z-10 flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-white/25 transition-all duration-300 group-hover:translate-x-1">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </a>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            <?php foreach (array_slice($repo->gallery(), 0, 3) as $item): ?>
                <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-indigo-200 hover:shadow-2xl hover:shadow-indigo-100/60">
                    <span class="block h-[3px] w-full origin-left scale-x-0 bg-gradient-to-r from-indigo-600 via-indigo-400 to-red-500 transition-transform duration-500 group-hover:scale-x-100"></span>
                    <a href="<?= e(app_url($item['slug'] ?? 'gallery')) ?>" class="relative block h-56 flex-shrink-0 overflow-hidden bg-slate-900">
                        <img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="<?= e(asset_url($item['image'])) ?>" loading="lazy" alt="<?= e($item['alt']) ?>">
                        <div class="absolute inset-0 flex items-center justify-center bg-slate-900/55 opacity-0 backdrop-blur-[2px] transition-all duration-300 group-hover:opacity-100">
                            <span class="inline-flex translate-y-3 items-center gap-2 rounded-full border border-white/30 bg-white/20 px-5 py-2.5 text-[0.72rem] font-semibold uppercase tracking-widest text-white shadow-lg backdrop-blur-md transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View Project
                            </span>
                        </div>
                    </a>
                    <div class="flex flex-1 flex-col p-6">
                        <div class="mb-3 flex items-center gap-2">
                            <span class="h-1.5 w-1.5 flex-shrink-0 rounded-full bg-red-500"></span>
                            <p class="text-[0.6rem] font-bold uppercase tracking-[0.2em] text-red-500"><?= e($item['category']) ?></p>
                        </div>
                        <h3 class="font-heading text-base font-semibold leading-snug text-slate-900 transition-colors duration-200 group-hover:text-indigo-700">
                            <?= e($item['title']) ?>
                        </h3>
                        <div class="flex-1"></div>
                        <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
                            <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-slate-50 px-3 py-1.5 text-[0.65rem] font-medium text-slate-500">
                                <svg class="h-3.5 w-3.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2" />
                                    <path d="M3 9h18M9 21V9" />
                                </svg>
                                CNC Manufactured
                            </span>
                            <a href="<?= e(app_url($item['slug'] ?? 'gallery')) ?>"
                                class="flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-400 shadow-sm transition-all duration-200 group-hover:border-red-400 group-hover:bg-red-500 group-hover:text-white group-hover:shadow-red-200">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- FIX: flex-col on mobile, flex-row on sm+; wrap material badges -->
        <div class="mt-8 flex flex-col items-start justify-between gap-5 rounded-2xl border border-slate-200 bg-white px-6 py-5 shadow-sm sm:flex-row sm:items-center">
            <div class="flex items-center gap-3">
                <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-md shadow-indigo-200">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M6 11h12M8 15h8M10 19h4" />
                    </svg>
                </span>
                <p class="text-sm text-slate-500">
                    <span class="font-semibold text-slate-800">9+ materials</span>
                    <span class="mx-2 text-slate-300">·</span>
                    Cutting, carving &amp; parametric manufacturing across Nagpur &amp; Maharashtra
                </p>
            </div>
            <!-- FIX: flex-wrap so badges wrap on mobile instead of overflowing -->
            <div class="flex flex-wrap gap-2">
                <?php foreach (['MDF', 'HDHMR', 'Acrylic', 'ACP', 'Wood', 'WPC'] as $mat): ?>
                    <span
                        class="material-badge inline-flex cursor-default select-none items-center rounded-full border-2 border-indigo-300 bg-indigo-50 px-4 py-2 text-[0.78rem] font-bold uppercase tracking-widest text-indigo-700 transition-all duration-200 whitespace-nowrap hover:-translate-y-0.5 hover:border-indigo-700 hover:bg-indigo-700 hover:text-white hover:shadow-[0_6px_18px_rgba(67,56,202,0.28)]">
                        <?= e($mat) ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>


<!-- ── Trust Signals / Testimonials ─────────────────────────── -->
<section class="bg-slate-950 py-16 lg:py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mb-10 max-w-3xl">
            <p class="eyebrow text-indigo-300">Trust Signals</p>
            <h2 class="mt-3 font-heading text-3xl font-bold leading-tight text-white">
                Built for accuracy, communication and long-term project relationships.
            </h2>
            <p class="mt-4 text-sm leading-7 text-slate-400 text-justify">
                A premium CNC supplier should protect the client from avoidable mistakes. Digi CNC focuses on practical advice before production, because a small file issue can become expensive after cutting. The team pays attention to drawing clarity, material constraints, order quantity, production sequence and end use.
            </p>
            <p class="mt-4 text-sm font-semibold text-white">
                5+ Years Experience <span class="px-2 text-slate-500">·</span> 9+ Materials Handled
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-3">
            <?php foreach ($repo->testimonials() as $t): ?>
                <article class="flex flex-col rounded-xl border border-white/10 bg-white/5 p-6">
                    <p class="text-sm leading-7 text-slate-300 text-justify">
                        "<?= e($t['quote']) ?>"
                    </p>
                    <div class="mt-5 border-t border-white/10 pt-4">
                        <h3 class="font-heading text-sm font-semibold text-white"><?= e($t['name']) ?></h3>
                        <p class="text-xs text-indigo-300"><?= e($t['role']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-8 flex flex-wrap gap-3">
            <?php foreach (['Drawing-First Review', 'Material Aware', 'B2B + B2C Support', 'Clear Communication'] as $point): ?>
                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-medium text-slate-300">
                    <?= e($point) ?>
                </span>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ── SEO Section + FAQ ─────────────────────────────────────── -->
<section class="bg-slate-50 py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <div class="mb-8">
            <p class="eyebrow mb-2 text-indigo-600">SEO Manufacturing Notes</p>
            <h2 class="font-heading text-3xl font-bold leading-tight text-slate-900">
                CNC cutting service in Nagpur with a local, production-focused advantage.
            </h2>
        </div>

        <!-- FIX: was inline style grid 1fr 380px — now Tailwind responsive (existing <style> block had correct intent but inline style won) -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-[1fr_380px] lg:items-start">

            <div class="flex flex-col gap-5">

                <div class="rounded-xl border border-slate-200 border-l-4 border-l-indigo-700 bg-white px-6 py-5 shadow-sm">
                    <p class="text-sm leading-7 text-slate-600 text-justify">
                        When people search for CNC Cutting Service in Nagpur, they are often not looking for a generic machine shop. They need someone who can understand the difference between a beautiful concept and a part that can be cut, finished and installed. Digi CNC fills that space for Nagpur and Maharashtra. The company supports 2D CNC cutting, 3D CNC carving, decorative jali cutting, MDF CNC cutting, HDHMR CNC cutting, custom CNC projects, prototype manufacturing and CNC router services for the interior and manufacturing ecosystem.
                    </p>
                </div>

                <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm" id="seo-tabs">
                    <div class="flex border-b border-slate-200 bg-slate-50">
                        <button type="button" data-seo-tab="0"
                            class="seo-tab-btn flex flex-1 flex-col items-center gap-1 border-b-2 border-indigo-700 px-2 py-3 text-[0.75rem] font-semibold text-indigo-700 transition-all">
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Architects
                        </button>
                        <button type="button" data-seo-tab="1"
                            class="seo-tab-btn flex flex-1 flex-col items-center gap-1 border-b-2 border-transparent px-2 py-3 text-[0.75rem] font-semibold text-slate-400 transition-all">
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Material &amp; Search
                        </button>
                        <button type="button" data-seo-tab="2"
                            class="seo-tab-btn flex flex-1 flex-col items-center gap-1 border-b-2 border-transparent px-2 py-3 text-[0.75rem] font-semibold text-slate-400 transition-all">
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Our Approach
                        </button>
                    </div>
                    <div class="p-5">
                        <p class="seo-tab-panel text-sm leading-7 text-slate-500 text-justify" data-seo-panel="0">
                            For architects and interior designers, Digi CNC helps convert creative drawings into panels, partitions, baffles, wall features and parametric elements. For furniture manufacturers and contractors, the value is repeatability: accurate profiles, consistent components, organized production and reduced manual correction. For industrial manufacturers and prototype companies, CNC cutting offers a way to test shapes, create templates, route sheet materials and prepare functional components. For homeowners, the same technology makes it possible to create custom mandir designs, decorative screens, wall panels and furniture details that fit a specific site.
                        </p>
                        <p class="seo-tab-panel hidden text-sm leading-7 text-slate-500 text-justify" data-seo-panel="1">
                            Search visibility matters, but the work must also satisfy the person who arrives from Google. That is why the site explains materials, applications, file requirements and workflow clearly. A client should understand that MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates each need different machining decisions. A jali pattern should not be selected only because it looks attractive on a screen. It should have enough strength, appropriate spacing, manageable cutting time and a finish plan. A parametric design should not be manufactured without assembly logic. A furniture batch should not be cut from a file with duplicate curves or unclear part labels.
                        </p>
                        <p class="seo-tab-panel hidden text-sm leading-7 text-slate-500 text-justify" data-seo-panel="2">
                            Digi CNC brings a grounded industrial tone to this process. The team does not overcomplicate simple work, but it also does not treat detailed work casually. That balance is valuable in Nagpur because the market includes commercial projects, renovation work, new homes, modular furniture, boutique interiors, retail displays, office spaces and custom creative commissions. Clients can start with a call, a WhatsApp message, a reference image or a production drawing. From there, Digi CNC guides file preparation, material choice, quotation and production scheduling.
                        </p>
                    </div>
                </div>

            </div>

            <div class="overflow-hidden rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center gap-3 bg-gradient-to-r from-indigo-700 to-indigo-400 px-6 py-4">
                    <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-lg bg-white/20">
                        <svg width="17" height="17" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                        </svg>
                    </span>
                    <div>
                        <p class="text-[0.95rem] font-semibold text-white leading-snug">Frequently Asked Questions</p>
                        <p class="mt-0.5 text-[0.72rem] text-white/75">Quick answers to common queries</p>
                    </div>
                </div>
                <div class="bg-white">
                    <?php foreach ($repo->faqs('home') as $i => $faq): ?>
                        <details class="faq-item group border-b border-slate-100">
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-5 py-4 transition hover:bg-slate-50 [&::-webkit-details-marker]:hidden">
                                <h3 class="font-heading text-[0.8rem] font-semibold leading-snug text-slate-800">
                                    <?= e($faq['q']) ?>
                                </h3>
                                <span class="faq-chevron flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full border border-slate-200 bg-slate-50 text-slate-400 transition-all duration-200">
                                    <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="mx-5 mb-3 border-l-[3px] border-indigo-200 pl-4">
                                <p class="text-[0.8rem] leading-[1.65] text-slate-500 text-justify">
                                    <?= e($faq['a']) ?>
                                </p>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
                <div class="border-t border-slate-200 bg-slate-50 px-5 py-3">
                    <p class="text-[0.75rem] text-slate-400">
                        Have more questions?
                        <a href="<?= e(app_url('contact-us')) ?>" class="ml-1 font-semibold text-indigo-700 hover:underline">Contact Digi CNC team →</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* Services mobile tab strip — hide scrollbar */
    #svc-tabs-mobile {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    #svc-tabs-mobile::-webkit-scrollbar {
        display: none;
    }

    /* FAQ open state */
    details.faq-item[open] > summary {
        background-color: #eef2ff;
    }
    details.faq-item[open] > summary h3 {
        color: #4338ca;
    }
    details.faq-item[open] > summary .faq-chevron {
        transform: rotate(180deg);
        border-color: #c7d2fe;
        background-color: #eef2ff;
        color: #4338ca;
    }
</style>

<script>
    (function() {
        // SEO tabs — now using Tailwind hidden/block instead of inline display style
        var btns = document.querySelectorAll('#seo-tabs .seo-tab-btn');
        var panels = document.querySelectorAll('#seo-tabs .seo-tab-panel');
        btns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var idx = btn.getAttribute('data-seo-tab');
                btns.forEach(function(b) {
                    var active = b === btn;
                    b.classList.toggle('border-indigo-700', active);
                    b.classList.toggle('text-indigo-700', active);
                    b.classList.toggle('border-transparent', !active);
                    b.classList.toggle('text-slate-400', !active);
                });
                panels.forEach(function(p) {
                    var show = p.getAttribute('data-seo-panel') === idx;
                    p.classList.toggle('hidden', !show);
                });
            });
        });
    })();
</script>