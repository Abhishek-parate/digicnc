<div class="mb-8 flex flex-col justify-between gap-4 md:flex-row md:items-center">
    <div>
        <p class="eyebrow">Admin Module</p>
        <h1 class="font-heading text-3xl font-bold"><?= e($module['title']) ?></h1>
    </div>
    <a class="btn-secondary border-slate-300 px-5 py-3 text-slate-950" href="<?= e(app_url('admin')) ?>">Back to Dashboard</a>
</div>

<?php if (!$dbConnected): ?>
    <div class="mb-6 rounded-md border border-amber-200 bg-amber-50 px-4 py-3 text-sm font-semibold text-amber-900">
        Database is not connected. Import <code>database/migrations/001_create_schema.sql</code> and update DB credentials to enable full admin persistence.
    </div>
<?php endif; ?>

<div class="grid gap-6 <?= empty($module['readonly']) ? 'xl:grid-cols-[.85fr_1.15fr]' : '' ?>">
    <?php if (empty($module['readonly'])): ?>
        <section class="rounded-lg bg-white p-5 shadow-sm">
            <h2 class="font-heading text-2xl font-bold">Add <?= e($module['singular']) ?></h2>
            <form class="mt-5 grid gap-4" action="<?= e(app_url('admin/' . $section . '/store')) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <?php foreach ($module['fields'] as $field => $meta): ?>
                    <label class="form-field">
                        <span><?= e($meta['label']) ?></span>
                        <?php if (($meta['type'] ?? 'text') === 'textarea'): ?>
                            <textarea name="<?= e($field) ?>" rows="4"></textarea>
                        <?php elseif (($meta['type'] ?? 'text') === 'richtext'): ?>
                            <textarea class="rich-editor" name="<?= e($field) ?>" rows="8" placeholder="<h2>Heading</h2><p>Write content...</p>"></textarea>
                            <small class="text-xs text-slate-500">Rich HTML tags are sanitized. Use headings, paragraphs, lists, bold links and blockquotes.</small>
                        <?php elseif (($meta['type'] ?? 'text') === 'file'): ?>
                            <input type="file" name="<?= e($field) ?>" accept="image/png,image/jpeg,image/webp">
                        <?php else: ?>
                            <input name="<?= e($field) ?>" placeholder="<?= e($field === 'slug' ? 'Auto-generated if blank' : '') ?>">
                        <?php endif; ?>
                    </label>
                <?php endforeach; ?>
                <button class="btn-primary justify-center py-3" type="submit">Save <?= e($module['singular']) ?></button>
            </form>
        </section>
    <?php endif; ?>

    <section class="rounded-lg bg-white p-5 shadow-sm">
        <h2 class="font-heading text-2xl font-bold">Records</h2>
        <div class="mt-5 overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <?php foreach ($module['columns'] as $column): ?>
                            <th><?= e(str_replace('_', ' ', $column)) ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <?php foreach ($module['columns'] as $column): ?>
                                <td><?= e($row[$column] ?? '') ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (!$rows): ?>
                        <tr><td colspan="<?= e(count($module['columns'])) ?>">No records found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
