<?php
$selectedService = $selectedService ?? '';
$compact = $compact ?? false;
?>
<form class="lead-form grid gap-4 rounded-lg border border-slate-200 bg-white p-5 shadow-sm" action="<?= e(app_url('lead')) ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="source_page" value="<?= e(trim((string) ($_GET['path'] ?? ''), '/') ?: '') ?>">
    <label class="hidden">Website <input type="text" name="website" autocomplete="off" tabindex="-1"></label>
    <div class="grid gap-4 sm:grid-cols-2">
        <label class="form-field">
            <span>Name *</span>
           <input
    type="text"
    name="name"
    required
    minlength="3"
    maxlength="50"
    pattern="[A-Za-z ]+"
    title="Name should contain only letters"
    autocomplete="name"
    placeholder="Your name"
>
        </label>
        <label class="form-field">
            <span>Phone *</span>
            <input
    type="tel"
    name="phone"
    required
    pattern="[6-9][0-9]{9}"
    maxlength="10"
    inputmode="numeric"
    autocomplete="tel"
    placeholder="+91"
    title="Enter a valid 10 digit mobile number"
>
        </label>
    </div>
    <div class="grid gap-4 sm:grid-cols-2">
        <label class="form-field">
            <span>Email</span>
           <input
    type="email"
    name="email"
    autocomplete="email"
    placeholder="name@example.com"
>
        </label>
        <label class="form-field">
            <span>Company / Studio</span>
            <input
    type="text"
    name="company"
    autocomplete="organization"
    placeholder="Optional"
>
        </label>
    </div>
    <div class="grid gap-4 sm:grid-cols-1">
        <label class="form-field">
            <span>Service Interest</span>
            <select name="service_interest" required>
                <option value="">Select service</option>
                <?php foreach ($repo->services() as $service): ?>
                    <option value="<?= e($service['name']) ?>" <?= $selectedService === $service['name'] ? 'selected' : '' ?>><?= e($service['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label class="form-field">
            <span>Project Budget</span>
            <select name="project_budget">
                <option value="">Select range</option>
                <option>Prototype / sample</option>
                <option>Small residential project</option>
                <option>Commercial batch work</option>
                <option>Industrial / recurring work</option>
            </select>
        </label>
    </div>
    <label class="form-field">
        <span>Project Requirement *</span>
        <textarea name="message" required rows="<?= $compact ? 4 : 5 ?>" placeholder="Share material, size, quantity, design file status and timeline."></textarea>
        <span class="form-error hidden text-xs text-red-600 mt-1" data-error-for="message"></span>
    </label>
    <button class="btn-primary w-full justify-center py-3" type="submit">Request CNC Quotation</button>
    <p class="text-center text-xs leading-5 text-slate-500">For urgent work, call or WhatsApp <a class="font-bold text-red-600" href="tel:+919766653376">+91 9766653376</a>.</p>
</form>