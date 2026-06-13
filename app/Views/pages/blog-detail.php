<article>
    <section class="inner-hero" style="<?= hero_background_style($blog['image'], 'center right') ?>">
        <div class="mx-auto max-w-4xl px-4 py-20 lg:px-6">
            <p class="eyebrow text-red-300"><?= e($blog['category']) ?> · <?= e(date('d M Y', strtotime($blog['published_at']))) ?></p>
            <h1 class="mt-4 font-heading text-4xl font-extrabold leading-tight text-white lg:text-6xl"><?= e($blog['title']) ?></h1>
            <p class="mt-6 text-lg leading-8 text-slate-200"><?= e($blog['excerpt']) ?></p>
        </div>
    </section>

    <section class="section bg-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[minmax(0,1fr)_360px] lg:px-6">
            <div>
                <img class="mb-8 max-h-[520px] w-full rounded-lg object-cover shadow-lg" src="<?= e(asset_url($blog['image'])) ?>" loading="lazy" alt="<?= e($blog['title']) ?>">
                <div class="prose-content text-lg">
                    <?= $blog['content'] ?>
                    <h2>How Digi CNC applies this in production</h2>
                    <p>On real projects, Digi CNC applies this guidance by checking drawings, material behavior, thickness, pattern strength, finish expectations and assembly context before machining. The goal is to help clients prepare better inputs, select the right material and reduce avoidable production corrections.</p>
                    <p>For project guidance, share your drawing, dimensions, material, quantity and timeline. The team will review the details and suggest the most suitable CNC route.</p>
                </div>
            </div>
            <aside class="space-y-5">
                <div class="rounded-lg border border-slate-200 bg-slate-50 p-5">
                    <h2 class="font-heading text-xl font-bold">Request a CNC Quote</h2>
                    <p class="mt-2 text-sm leading-7 text-slate-600">Have a file or reference? Send it to Digi CNC for a feasibility check.</p>
                    <a class="btn-primary mt-4 w-full justify-center py-3" href="<?= e(app_url('contact-us')) ?>">Contact Digi CNC</a>
                </div>
                <div class="rounded-lg border border-slate-200 bg-white p-5">
                    <h2 class="font-heading text-xl font-bold">Related Services</h2>
                    <ul class="mt-4 space-y-3 text-sm font-semibold">
                        <?php foreach (array_slice($repo->servicePages(), 0, 5, true) as $slug => $service): ?>
                            <li><a class="text-slate-700 hover:text-red-600" href="<?= e(app_url($slug)) ?>"><?= e($service['title']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
</article>
