<?php $company = $repo->company(); ?>
<section class="inner-hero" style="<?= hero_background_style('assets/images/banner-services-materials-clean.png', 'center right') ?>">
    <div class="mx-auto max-w-7xl px-4 py-20 lg:px-6">
        <p class="eyebrow text-red-300">Contact Digi CNC</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl">Request a CNC Cutting, Carving, Jali or Custom Project Quotation</h1>
        <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-200">Call, WhatsApp or send a detailed inquiry. Share material, dimensions, quantity, file status and timeline for faster project review.</p>
    </div>
</section>

<section class="section bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[.9fr_1.1fr] lg:px-6">
        <div class="space-y-5">
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                <h2 class="font-heading text-2xl font-bold">Contact Details</h2>
                <dl class="mt-5 space-y-4 text-sm leading-6">
                    <div><dt class="font-bold text-slate-950">Phone</dt><dd><a class="text-red-600" href="tel:+919766653376"><?= e($company['phone']) ?></a></dd></div>
                    <div><dt class="font-bold text-slate-950">WhatsApp</dt><dd><a class="text-red-600" href="https://wa.me/<?= e($company['whatsapp']) ?>" target="_blank" rel="noopener">Message Digi CNC on WhatsApp</a></dd></div>
                    <div><dt class="font-bold text-slate-950">Location</dt><dd><?= e($company['location']) ?></dd></div>
                    <div><dt class="font-bold text-slate-950">Business Hours</dt><dd><?= e($company['hours']) ?></dd></div>
                </dl>
                <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                    <a class="btn-primary flex-1 justify-center py-3" href="tel:+919766653376">Call Now</a>
                    <a class="btn-secondary flex-1 justify-center border-slate-300 py-3 text-slate-950" href="https://wa.me/<?= e($company['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp</a>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm">
                <iframe title="Google Map for Digi CNC Nagpur" class="h-80 w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Nagpur%2C%20Maharashtra%2C%20India&output=embed"></iframe>
            </div>

            <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="font-heading text-2xl font-bold">Quick Inquiry Tips</h2>
                <ul class="mt-4 grid gap-3 text-sm leading-7 text-slate-600">
                    <li>Send CAD files such as DXF, DWG, SVG, AI, CDR or clean PDF references when available.</li>
                    <li>Mention material, thickness, sheet size, quantity, finish expectation and deadline.</li>
                    <li>For jali and parametric work, include final panel size and installation context.</li>
                    <li>For furniture components, include part labels, hardware references and batch quantity.</li>
                </ul>
            </div>
        </div>

        <div>
            <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-lg">
                <h2 class="font-heading text-3xl font-bold">Send Your Requirement</h2>
                <p class="mt-3 leading-7 text-slate-600">This form records your inquiry with source-page tracking so Digi CNC can understand which service or content led to the request.</p>
                <div class="mt-6"><?php $this->partial('partials/contact-form', ['repo' => $repo]); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_.9fr] lg:px-6">
        <div class="prose-content">
            <p class="eyebrow">After You Send Inquiry</p>
            <h2 class="section-title">Fast review for drawings, material choices and production feasibility.</h2>
            <p>Once you submit a requirement, Digi CNC reviews the project context and identifies the practical next step. The team may ask for a CAD file, reference image, final dimensions, material thickness, quantity, finish plan or site condition before giving accurate guidance.</p>
            <p>For the best response, share as much production information as possible. CNC quotations depend on design complexity, material, thickness, cutting time, finishing expectations, quantity and delivery requirements. A clear message helps Digi CNC guide you faster and more accurately.</p>
        </div>
        <div class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="font-heading text-2xl font-bold">Contact FAQs</h2>
            <div class="mt-5 divide-y divide-slate-200">
                <?php foreach ($repo->faqs('contact') as $faq): ?>
                    <details class="faq-item py-4">
                        <summary><?= e($faq['q']) ?></summary>
                        <p><?= e($faq['a']) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
