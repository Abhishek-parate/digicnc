<?php
$company = $repo->company();
// Strip everything except digits for wa.me link
$waNumber = preg_replace('/\D/', '', $company['whatsapp']);
?>

<!-- HERO BANNER — clean image only -->
<div class="relative h-72 overflow-hidden lg:h-96">
    <img
        src="<?= e(asset_url('assets/images/banner-services-materials-clean.png')) ?>"
        alt="Digi CNC Contact"
        class="absolute inset-0 h-full w-full object-cover object-center">
</div>

<!-- INTRO -->
<div class="border-b border-slate-100 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-6 lg:px-6">
        <p class="eyebrow text-red-600">Contact Digi CNC</p>
        <h1 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-slate-950 lg:text-4xl">
            Request a CNC Cutting, Carving, Jali or Custom Project Quotation
        </h1>
        <p class="mt-4 max-w-3xl text-justify text-base leading-7 text-slate-600">
            Call, WhatsApp or send a detailed inquiry. Share material details, dimensions, thickness, quantity, design file status and project timeline for a faster project review. The more information you provide, the easier it is for Digi CNC to evaluate feasibility, recommend suitable materials and provide an accurate quotation.
        </p>
    </div>
</div>

<!-- MAIN TWO-COLUMN -->
<section class="bg-slate-50 py-8 lg:py-12">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 lg:grid-cols-[.9fr_1.1fr] lg:px-6">

        <!-- LEFT COLUMN -->
        <div class="flex flex-col gap-5">

            <!-- Contact Details Card -->
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-slate-900 px-6 py-4">
                    <h3 class="font-heading text-lg font-bold text-white">Contact Details</h3>
                </div>
                <div class="px-6 py-5">
                    <dl class="space-y-4 text-sm leading-6">

                        <!-- Phone -->
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-50 text-red-600">
                                <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.09 1.18 2 2 0 012.07.01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            </span>
                            <div>
                                <dt class="font-semibold text-slate-800">Phone</dt>
                                <dd><a class="font-medium text-red-600 hover:text-red-700" href="tel:+91<?= e(preg_replace('/\D/', '', $company['phone'])) ?>"><?= e($company['phone']) ?></a></dd>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-green-50 text-green-600">
                                <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path fill="currentColor" d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.862L.057 23.786a.5.5 0 00.612.641l6.094-1.598A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.805 9.805 0 01-5.045-1.396l-.361-.214-3.737.98.998-3.648-.235-.374A9.818 9.818 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/></svg>
                            </span>
                            <div>
                                <dt class="font-semibold text-slate-800">WhatsApp</dt>
                                <dd><a class="font-medium text-green-600 hover:text-green-700" href="https://wa.me/<?= e($waNumber) ?>" target="_blank" rel="noopener">Message Digi CNC on WhatsApp</a></dd>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-indigo-600">
                                <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg>
                            </span>
                            <div>
                                <dt class="font-semibold text-slate-800">Location</dt>
                                <dd class="text-justify text-slate-600"><?= e($company['location']) ?></dd>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-600">
                                <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M12 6v6l4 2"/></svg>
                            </span>
                            <div>
                                <dt class="font-semibold text-slate-800">Business Hours</dt>
                                <dd class="text-slate-600"><?= e($company['hours']) ?></dd>
                            </div>
                        </div>

                    </dl>

                    <!-- CTA Buttons -->
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <a href="tel:+91<?= e(preg_replace('/\D/', '', $company['phone'])) ?>"
                            class="flex items-center justify-center gap-2 rounded-xl bg-red-600 px-4 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-red-700 active:scale-95">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.09 1.18 2 2 0 012.07.01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            Call Now
                        </a>
                        <a href="https://wa.me/<?= e($waNumber) ?>" target="_blank" rel="noopener"
                            class="flex items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-green-700 active:scale-95">
                            <svg width="15" height="15" fill="white" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.533 5.862L.057 23.786a.5.5 0 00.612.641l6.094-1.598A11.946 11.946 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.805 9.805 0 01-5.045-1.396l-.361-.214-3.737.98.998-3.648-.235-.374A9.818 9.818 0 012.182 12C2.182 6.57 6.57 2.182 12 2.182S21.818 6.57 21.818 12 17.43 21.818 12 21.818z"/></svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Tips Card -->
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-slate-900 px-6 py-4">
                    <h3 class="font-heading text-lg font-bold text-white">Quick Inquiry Tips</h3>
                </div>
                <ul class="divide-y divide-slate-100 px-6 py-2 text-sm leading-6 text-slate-600">
                    <li class="flex gap-3 py-3">
                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
                        <span class="text-justify">Send CAD files such as DXF, DWG, SVG, AI, CDR or clean PDF references when available.</span>
                    </li>
                    <li class="flex gap-3 py-3">
                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
                        <span class="text-justify">Mention material, thickness, sheet size, quantity, finish expectation and deadline.</span>
                    </li>
                    <li class="flex gap-3 py-3">
                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
                        <span class="text-justify">For jali and parametric work, include final panel size and installation context.</span>
                    </li>
                    <li class="flex gap-3 py-3">
                        <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
                        <span class="text-justify">For furniture components, include part labels, hardware references and batch quantity.</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- RIGHT COLUMN — FORM (logic untouched) -->
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
            <div class="bg-slate-900 px-6 py-5">
                <h3 class="font-heading text-xl font-bold text-white">Send Your Requirement</h3>
                <p class="mt-1 text-justify text-sm leading-6 text-white/90">
                    This form records your inquiry with source-page tracking so Digi CNC can understand which service or content led to the request.
                </p>
            </div>
            <div class="px-6 py-6">
                <?php $this->partial('partials/contact-form', ['repo' => $repo]); ?>
            </div>
        </div>

    </div>

    <!-- MAP (untouched) -->
    <div class="mx-auto max-w-7xl px-4 lg:px-6">
        <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
            <iframe
                title="Google Map for Digi CNC Nagpur"
                class="h-80 w-full"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=Nagpur%2C%20Maharashtra%2C%20India&output=embed">
            </iframe>
        </div>
    </div>

</section>

<!-- BOTTOM PROSE + FAQ -->
<section class="bg-white py-8 lg:py-12">
    <div class="mx-auto max-w-7xl px-4 lg:px-6">

        <!-- Full-width section header -->
        <p class="eyebrow">After You Send Inquiry</p>
        <h2 class="mt-3 font-heading text-2xl font-bold leading-snug text-slate-900 lg:text-3xl">
            Fast review for drawings, material choices and production feasibility.
        </h2>
        <div class="mt-4 h-px w-full bg-slate-100"></div>

        <!-- Equal two-column grid -->
        <div class="mt-8 grid gap-8 lg:grid-cols-2 lg:gap-10 lg:items-start">

            <!-- LEFT — Prose -->
            <div class="flex h-full flex-col justify-between space-y-4 text-sm leading-7 text-slate-600">
                <div class="space-y-4">
                    <p class="text-justify">Once you submit a requirement, Digi CNC reviews the project context and identifies the practical next step. The team may ask for a CAD file, reference image, final dimensions, material thickness, quantity, finish plan or site condition before giving accurate guidance.</p>
                    <p class="text-justify">For the best response, share as much production information as possible. CNC quotations depend on design complexity, material, thickness, cutting time, finishing expectations, quantity and delivery requirements. A clear message helps Digi CNC guide you faster and more accurately.</p>
                </div>

                <!-- Small trust strip to balance height with FAQ card and reinforce the message -->
                <div class="grid grid-cols-3 gap-3 pt-2">
                    <div class="rounded-xl border border-slate-100 bg-slate-50 px-3 py-4 text-center">
                        <p class="font-heading text-xl font-extrabold text-red-600">24hr</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">Avg. response time</p>
                    </div>
                    <div class="rounded-xl border border-slate-100 bg-slate-50 px-3 py-4 text-center">
                        <p class="font-heading text-xl font-extrabold text-red-600">DXF</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">DWG, SVG, AI, CDR</p>
                    </div>
                    <div class="rounded-xl border border-slate-100 bg-slate-50 px-3 py-4 text-center">
                        <p class="font-heading text-xl font-extrabold text-red-600">100%</p>
                        <p class="mt-1 text-xs leading-5 text-slate-500">Feasibility checked</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT — FAQ Card -->
            <div class="overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between bg-slate-900 px-6 py-4">
                    <h3 class="font-heading text-lg font-bold text-white">Contact FAQs</h3>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs font-semibold text-white">
                        <?= count($repo->faqs('contact')) ?> answers
                    </span>
                </div>
                <div class="divide-y divide-slate-100 bg-white">
                    <?php foreach ($repo->faqs('contact') as $faq): ?>
                        <details class="faq-item group px-6 py-3.5 transition-colors duration-200 hover:bg-slate-50 [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 text-sm font-semibold leading-6 text-slate-800 transition-colors duration-200 group-open:text-red-600">
                                <span class="flex items-start gap-2.5">
                                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500 transition-transform duration-200 group-open:scale-125"></span>
                                    <span><?= e($faq['q']) ?></span>
                                </span>
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-slate-200 text-slate-400 transition-all duration-200 group-open:rotate-180 group-open:border-red-200 group-open:bg-red-50 group-open:text-red-600">
                                    <svg width="10" height="10" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </span>
                            </summary>
                            <p class="mt-2.5 pl-5 text-justify text-sm leading-6 text-slate-500"><?= e($faq['a']) ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>