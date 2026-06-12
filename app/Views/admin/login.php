<div class="mx-auto flex min-h-[80vh] max-w-md items-center">
    <div class="w-full rounded-lg bg-white p-6 shadow-xl">
        <div class="text-center">
            <span class="mx-auto flex h-12 w-12 items-center justify-center rounded bg-red-600 font-heading text-xl font-extrabold text-white">DC</span>
            <h1 class="mt-4 font-heading text-2xl font-bold">Digi CNC Admin</h1>
            <p class="mt-2 text-sm text-slate-600">Secure access for managing blogs, leads, SEO, gallery and content.</p>
        </div>
        <form class="mt-6 grid gap-4" action="<?= e(app_url('admin/login')) ?>" method="post">
            <?= csrf_field() ?>
            <label class="form-field">
                <span>Email</span>
                <input type="email" name="email" required autocomplete="username" value="<?= e(config('admin.email')) ?>">
            </label>
            <label class="form-field">
                <span>Password</span>
                <input type="password" name="password" required autocomplete="current-password" placeholder="Admin password">
            </label>
            <button class="btn-primary justify-center py-3" type="submit">Login</button>
        </form>
        <p class="mt-4 text-xs leading-5 text-slate-500">Default local password is <strong>DigiCNC@2026!</strong>. Change the hash in environment configuration before production.</p>
    </div>
</div>
