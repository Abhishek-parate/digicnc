<div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-center">
    <div>
        <p class="eyebrow">Admin Dashboard</p>
        <h1 class="font-heading text-3xl font-bold">Digi CNC Control Center</h1>
    </div>
    <a class="btn-primary px-5 py-3" href="<?= e(app_url('')) ?>" target="_blank" rel="noopener">View Website</a>
</div>

<div class="grid gap-4 md:grid-cols-4">
    <?php foreach ($counts as $label => $count): ?>
        <div class="rounded-lg bg-white p-5 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[0.16em] text-slate-500"><?= e(str_replace('-', ' ', $label)) ?></p>
            <p class="mt-3 font-heading text-4xl font-extrabold text-red-600"><?= e($count) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<div class="mt-8 grid gap-6 lg:grid-cols-[.85fr_1.15fr]">
    <section class="rounded-lg bg-white p-5 shadow-sm">
        <h2 class="font-heading text-2xl font-bold">Management Modules</h2>
        <div class="mt-5 grid gap-3 sm:grid-cols-2">
            <?php foreach ($modules as $key => $module): ?>
                <a class="rounded border border-slate-200 p-4 transition hover:border-red-200 hover:bg-red-50" href="<?= e(app_url('admin/' . $key)) ?>">
                    <span class="font-bold text-slate-950"><?= e($module['title']) ?></span>
                    <span class="mt-1 block text-sm text-slate-600">Manage <?= e(strtolower($module['singular'])) ?> records</span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="rounded-lg bg-white p-5 shadow-sm">
        <h2 class="font-heading text-2xl font-bold">Latest Leads</h2>
        <div class="mt-5 overflow-x-auto">
            <table class="admin-table">
                <thead><tr><th>Name</th><th>Phone</th><th>Service</th><th>Date</th></tr></thead>
                <tbody>
                    <?php foreach ($leads as $lead): ?>
                        <tr>
                            <td><?= e($lead['name'] ?? '') ?></td>
                            <td><?= e($lead['phone'] ?? '') ?></td>
                            <td><?= e($lead['service_interest'] ?? '') ?></td>
                            <td><?= e($lead['created_at'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (!$leads): ?>
                        <tr><td colspan="4">No leads yet.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
