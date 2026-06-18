<?php $company = $repo->company(); ?>

<style>
/* ─── DESIGN TOKENS ──────────────────────────────────────────────── */
:root {
  --cnc-red:      #4F46E5;   /* site primary: indigo */
  --cnc-red-lt:   #A5B4FC;   /* indigo light */
  --cnc-dark:     #0D0B2A;   /* deep navy */
  --cnc-dark-2:   #13103A;
  --cnc-slate:    #1E1B4B;
  --cnc-mid:      #6366F1;
  --cnc-light:    #F5F5FF;
  --cnc-border:   #E0E0F5;
  --cnc-white:    #FFFFFF;

  --ff-head: 'Inter', system-ui, sans-serif;
  --ff-body: 'Inter', system-ui, sans-serif;

  --ease-out: cubic-bezier(0.22, 1, 0.36, 1);
}

/* ─── GLOBAL RESETS FOR THIS PAGE ───────────────────────────────── */
.dcnc * { box-sizing: border-box; }

/* ─── EYEBROW ────────────────────────────────────────────────────── */
.dcnc .eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.6875rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--cnc-red);
}
.dcnc .eyebrow::before {
  content: '';
  display: block;
  width: 1.5rem;
  height: 2px;
  background: var(--cnc-red);
  flex-shrink: 0;
}
.dcnc .eyebrow-light {
  color: var(--cnc-red-lt);
}
.dcnc .eyebrow-light::before {
  background: var(--cnc-red-lt);
}

/* ─── SECTION TITLE ─────────────────────────────────────────────── */
.dcnc .section-title {
  font-family: var(--ff-head);
  font-size: clamp(1.625rem, 3vw, 2.375rem);
  font-weight: 800;
  line-height: 1.18;
  letter-spacing: -0.02em;
  color: #0F172A;
  margin-top: 0.875rem;
}
.dcnc .section-title-light {
  color: var(--cnc-white);
}

/* ─── PROSE CONTENT ─────────────────────────────────────────────── */
.dcnc .prose-content p {
  font-size: 0.9375rem;
  line-height: 1.85;
  color: #475569;
  margin-bottom: 1.25rem;
}
.dcnc .prose-content p:last-child { margin-bottom: 0; }

/* ─── SECTIONS ───────────────────────────────────────────────────── */
.dcnc .section {
  padding: 5rem 0;
}
@media (max-width: 768px) {
  .dcnc .section { padding: 3.5rem 0; }
}

/* ═══════════════════════════════════════════════════════════════════
   1. HERO
═══════════════════════════════════════════════════════════════════ */
.dcnc .inner-hero {
  position: relative;
  background-size: cover;
  background-position: center right;
  overflow: hidden;
  min-height: 560px;
  display: flex;
  align-items: center;
}

/* Dark navy-purple gradient overlay — matches site theme */
.dcnc .inner-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    105deg,
    rgba(13,11,42,0.92) 0%,
    rgba(30,27,75,0.82) 55%,
    rgba(79,70,229,0.22) 100%
  );
  pointer-events: none;
  z-index: 1;
}
/* Subtle CNC grid texture */
.dcnc .inner-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(165,180,252,.07) 1px, transparent 1px),
    linear-gradient(90deg, rgba(165,180,252,.07) 1px, transparent 1px);
  background-size: 36px 36px;
  pointer-events: none;
  z-index: 2;
}

.dcnc .inner-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
}

.dcnc .hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(79,70,229,0.25);
  border: 1px solid rgba(165,180,252,0.4);
  border-radius: 2px;
  padding: 0.3rem 0.875rem;
  font-size: 0.6875rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #C7D2FE;
}

.dcnc .hero-h1 {
  font-family: var(--ff-head);
  font-size: clamp(2rem, 4.5vw, 3.5rem);
  font-weight: 900;
  line-height: 1.1;
  letter-spacing: -0.03em;
  color: #fff;
  margin-top: 1.25rem;
  max-width: 820px;
}

.dcnc .hero-sub {
  margin-top: 1.5rem;
  max-width: 600px;
  font-size: 1.0625rem;
  line-height: 1.75;
  color: #CBD5E1;
}

/* ═══════════════════════════════════════════════════════════════════
   2. COMPANY STORY
═══════════════════════════════════════════════════════════════════ */
.dcnc .story-section {
  background: #fff;
}
.dcnc .story-grid {
  display: grid;
  gap: 4rem;
  align-items: start;
}
@media (min-width: 1024px) {
  .dcnc .story-grid { grid-template-columns: 0.85fr 1.15fr; }
}

.dcnc .story-img-wrap {
  position: relative;
}
.dcnc .story-img-wrap img {
  width: 100%;
  border-radius: 4px;
  object-fit: cover;
  display: block;
  aspect-ratio: 4/3;
}
/* Red corner accent on image */
.dcnc .story-img-accent {
  position: absolute;
  bottom: -12px;
  right: -12px;
  width: 80px;
  height: 80px;
  border: 3px solid var(--cnc-red);
  border-radius: 2px;
  pointer-events: none;
}

/* ═══════════════════════════════════════════════════════════════════
   3. MISSION / VISION / CORE PROMISE CARDS
═══════════════════════════════════════════════════════════════════ */
.dcnc .cards-section {
  background: var(--cnc-light);
}
.dcnc .mvp-grid {
  display: grid;
  gap: 1.25rem;
}
@media (min-width: 768px) {
  .dcnc .mvp-grid { grid-template-columns: repeat(3, 1fr); }
}

.dcnc .feature-card {
  background: #fff;
  border: 1px solid var(--cnc-border);
  border-radius: 4px;
  padding: 2rem 1.75rem;
  position: relative;
  transition: box-shadow 0.2s var(--ease-out), transform 0.2s var(--ease-out);
}
.dcnc .feature-card:hover {
  box-shadow: 0 8px 32px rgba(0,0,0,0.09);
  transform: translateY(-2px);
}
.dcnc .feature-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--cnc-red);
  border-radius: 4px 4px 0 0;
}
.dcnc .feature-card h2 {
  font-family: var(--ff-head);
  font-size: 0.6875rem;
  font-weight: 800;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--cnc-red);
  margin-bottom: 1rem;
}
.dcnc .feature-card p {
  font-size: 0.9375rem;
  line-height: 1.8;
  color: #475569;
}

/* ═══════════════════════════════════════════════════════════════════
   4. FOUNDER SECTION
═══════════════════════════════════════════════════════════════════ */
.dcnc .founder-section {
  background: #fff;
}
.dcnc .founder-grid {
  display: grid;
  gap: 4rem;
  align-items: start;
}
@media (min-width: 1024px) {
  .dcnc .founder-grid { grid-template-columns: 1fr 0.9fr; }
}

.dcnc .strengths-panel {
  background: linear-gradient(135deg, #0D0B2A 0%, #1E1B4B 100%);
  border-radius: 4px;
  padding: 2.25rem;
  color: #fff;
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(99,102,241,0.2);
}
/* subtle grid on panel */
.dcnc .strengths-panel::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(165,180,252,.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(165,180,252,.04) 1px, transparent 1px);
  background-size: 24px 24px;
  pointer-events: none;
}
.dcnc .strengths-panel h3 {
  font-family: var(--ff-head);
  font-size: 1.125rem;
  font-weight: 800;
  letter-spacing: -0.01em;
  position: relative;
  z-index: 1;
  padding-bottom: 1rem;
  border-bottom: 1px solid rgba(255,255,255,0.12);
}
.dcnc .strengths-list {
  list-style: none;
  margin: 1.25rem 0 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  position: relative;
  z-index: 1;
}
.dcnc .strengths-list li {
  display: flex;
  gap: 0.875rem;
  font-size: 0.875rem;
  line-height: 1.65;
  color: #CBD5E1;
}
.dcnc .strengths-list li::before {
  content: '';
  flex-shrink: 0;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--cnc-red);
  margin-top: 0.5rem;
}
.dcnc .strengths-list strong {
  color: #fff;
  font-weight: 700;
}

/* ═══════════════════════════════════════════════════════════════════
   5. MANUFACTURING PROCESS (dark section)
═══════════════════════════════════════════════════════════════════ */
.dcnc .process-section {
  background: linear-gradient(160deg, #0D0B2A 0%, #1E1B4B 60%, #13103A 100%);
  color: #fff;
  position: relative;
  overflow: hidden;
}
.dcnc .process-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(165,180,252,.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(165,180,252,.04) 1px, transparent 1px);
  background-size: 40px 40px;
}
.dcnc .process-intro { position: relative; z-index: 1; max-width: 680px; }

.dcnc .process-intro h2 {
  font-family: var(--ff-head);
  font-size: clamp(1.875rem, 3.5vw, 2.75rem);
  font-weight: 900;
  line-height: 1.1;
  letter-spacing: -0.03em;
  color: #fff;
  margin-top: 0.875rem;
}
.dcnc .process-intro p {
  margin-top: 1.25rem;
  font-size: 0.9375rem;
  line-height: 1.85;
  color: #94A3B8;
}

.dcnc .process-cards {
  display: grid;
  gap: 1px;
  margin-top: 3rem;
  position: relative;
  z-index: 1;
  background: rgba(165,180,252,0.1);
  border: 1px solid rgba(165,180,252,0.1);
  border-radius: 4px;
  overflow: hidden;
}
@media (min-width: 768px) {
  .dcnc .process-cards { grid-template-columns: repeat(2, 1fr); }
}
@media (min-width: 1280px) {
  .dcnc .process-cards { grid-template-columns: repeat(4, 1fr); }
}

.dcnc .process-card {
  background: rgba(79,70,229,0.06);
  padding: 2rem 1.75rem;
  position: relative;
  transition: background 0.2s;
}
.dcnc .process-card:hover { background: rgba(99,102,241,0.14); }

.dcnc .process-num {
  font-size: 2.5rem;
  font-weight: 900;
  color: rgba(99,102,241,0.3);
  line-height: 1;
  letter-spacing: -0.04em;
  font-variant-numeric: tabular-nums;
}
.dcnc .process-card h3 {
  font-family: var(--ff-head);
  font-size: 1rem;
  font-weight: 800;
  color: #fff;
  margin-top: 0.875rem;
  letter-spacing: -0.01em;
}
.dcnc .process-card p {
  margin-top: 0.625rem;
  font-size: 0.8125rem;
  line-height: 1.75;
  color: #94A3B8;
}

/* ═══════════════════════════════════════════════════════════════════
   6. QUALITY ASSURANCE
═══════════════════════════════════════════════════════════════════ */
.dcnc .quality-section { background: #fff; }
.dcnc .quality-grid {
  display: grid;
  gap: 4rem;
  align-items: center;
}
@media (min-width: 1024px) {
  .dcnc .quality-grid { grid-template-columns: 0.9fr 1.1fr; }
}

.dcnc .quality-left .section-title { margin-top: 0.875rem; }

.dcnc .quality-divider {
  width: 3rem;
  height: 3px;
  background: var(--cnc-red);
  margin-top: 1.5rem;
  border-radius: 2px;
}

/* ═══════════════════════════════════════════════════════════════════
   7. BUSINESS NETWORK + TIMELINE
═══════════════════════════════════════════════════════════════════ */
.dcnc .network-section { background: var(--cnc-light); }
.dcnc .network-grid {
  display: grid;
  gap: 4rem;
  align-items: start;
}
@media (min-width: 1024px) {
  .dcnc .network-grid { grid-template-columns: 1fr 0.9fr; }
}

.dcnc .timeline-label {
  font-size: 0.6875rem;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #94A3B8;
  margin-bottom: 1.25rem;
}
.dcnc .timeline-list {
  display: flex;
  flex-direction: column;
  gap: 0;
  position: relative;
}
.dcnc .timeline-list::before {
  content: '';
  position: absolute;
  left: 0.75rem;
  top: 0;
  bottom: 0;
  width: 2px;
  background: var(--cnc-border);
}
.dcnc .timeline-item {
  position: relative;
  padding: 0 0 1.5rem 2.5rem;
}
.dcnc .timeline-item:last-child { padding-bottom: 0; }
.dcnc .timeline-dot {
  position: absolute;
  left: 0;
  top: 0.3rem;
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 50%;
  background: #fff;
  border: 2px solid var(--cnc-border);
  display: flex;
  align-items: center;
  justify-content: center;
}
.dcnc .timeline-dot::after {
  content: '';
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--cnc-red);
}
.dcnc .timeline-heading {
  font-size: 0.8125rem;
  font-weight: 800;
  color: #4F46E5;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.dcnc .timeline-body {
  margin-top: 0.375rem;
  font-size: 0.875rem;
  line-height: 1.75;
  color: #475569;
}

/* ═══════════════════════════════════════════════════════════════════
   8. START A PROJECT (CTA section)
═══════════════════════════════════════════════════════════════════ */
.dcnc .cta-section { background: #fff; }
.dcnc .cta-grid {
  display: grid;
  gap: 4rem;
  align-items: start;
}
@media (min-width: 1024px) {
  .dcnc .cta-grid { grid-template-columns: 0.9fr 1.1fr; }
}

.dcnc .cta-left p {
  margin-top: 1.25rem;
  font-size: 0.9375rem;
  line-height: 1.85;
  color: #475569;
}

/* ─── REDUCED MOTION ─────────────────────────────────────────────── */
@media (prefers-reduced-motion: reduce) {
  .dcnc .feature-card { transition: none; }
}
</style>

<div class="dcnc">

<!-- ═══════════════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="<?= hero_background_style('assets/images/banner-about-process-clean.png', 'center right') ?>">
  <div class="inner-hero-inner mx-auto max-w-7xl px-4 py-24 lg:px-6">
    <span class="hero-tag">About Digi CNC</span>
    <h1 class="hero-h1">A Nagpur CNC manufacturing company built around precision, clarity and useful production advice.</h1>
    <p class="hero-sub">Digi CNC is founded by <?= e($company['founder']) ?> and serves architects, interior designers, furniture manufacturers, contractors, industrial teams, artists, prototype companies and homeowners with 2D CNC cutting, 3D CNC carving, decorative jali, parametric manufacturing and custom CNC projects.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     KEY METRICS (standalone section, Tailwind utility classes)
════════════════════════════════════════════════════════════════ -->
<section class="bg-white border-b border-[#E0E0F5] py-10">
  <div class="mx-auto max-w-7xl px-4 lg:px-6">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">

      <div>
        <div class="font-sans text-3xl lg:text-4xl font-extrabold tracking-tight text-[#4F46E5] leading-none">5+</div>
        <div class="mt-2 text-xs uppercase tracking-widest text-slate-500 font-bold">Years of Experience</div>
      </div>

      <div>
        <div class="font-sans text-3xl lg:text-4xl font-extrabold tracking-tight text-[#4F46E5] leading-none">9+</div>
        <div class="mt-2 text-xs uppercase tracking-widest text-slate-500 font-bold">Material Types</div>
      </div>

      <div>
        <div class="font-sans text-3xl lg:text-4xl font-extrabold tracking-tight text-[#4F46E5] leading-none">B2B &amp; B2C</div>
        <div class="mt-2 text-xs uppercase tracking-widest text-slate-500 font-bold">Client Segments</div>
      </div>

      <div>
        <div class="font-sans text-3xl lg:text-4xl font-extrabold tracking-tight text-[#4F46E5] leading-none">100%</div>
        <div class="mt-2 text-xs uppercase tracking-widest text-slate-500 font-bold">Quality Checked</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     COMPANY STORY
════════════════════════════════════════════════════════════════ -->
<section class="section story-section">
  <div class="mx-auto story-grid max-w-7xl px-4 lg:px-6">
    <div>
      <span class="eyebrow">Company Story</span>
      <h2 class="section-title">From drawings and material sheets to reliable CNC output.</h2>
      <div class="story-img-wrap mt-8">
        <img src="<?= e(asset_url('assets/images/banner-about-process-clean.png')) ?>" loading="lazy" alt="Digi CNC Nagpur CNC cutting process and material planning">
        <div class="story-img-accent"></div>
      </div>
    </div>
    <div class="prose-content" style="padding-top:3.5rem;">
      <p>Digi CNC was created to solve a common problem in the interior and manufacturing market: clients had creative ideas, digital drawings or urgent production requirements, but they needed a CNC partner who could speak both design and execution. A drawing may look correct on screen, but CNC production asks practical questions. Is the profile closed? Is the pattern strong enough? Is the material suitable? Will the edge finish meet expectations? Can the parts be nested efficiently? Will the panel survive transport and installation? These questions shaped the working style of Digi CNC from the beginning.</p>
      <p>Under the leadership of <?= e($company['founder']) ?>, the company has built more than five years of experience across MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and decorative laminates. The work includes simple 2D profile cutting, high-detail jali, carved decorative panels, mandir designs, wall panels, furniture components, signage elements, prototypes and parametric design parts. The company serves both B2B and B2C clients, which gives the team a broad understanding of real project expectations. A contractor needs speed and repeatability. An architect needs design intent protected. A homeowner needs guidance and confidence. A prototype company needs accuracy and iteration. Digi CNC is structured to respond to all of these contexts.</p>
      <p>The story of the company is not only about machinery. It is about improving the conversation around CNC work in Nagpur. Many project delays happen because the file is incomplete, the material is chosen too late, or the finishing requirement is not discussed before machining. Digi CNC encourages clients to share dimensions, quantity, material thickness, reference images, CAD files and timelines early. This helps the team plan the job properly and helps the client avoid avoidable rework. The business has grown through this practical approach: listen carefully, review the input, guide the client, cut accurately and keep the final use in mind.</p>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     MISSION / VISION / CORE PROMISE
════════════════════════════════════════════════════════════════ -->
<section class="section cards-section">
  <div class="mx-auto max-w-7xl px-4 lg:px-6">
    <div class="mvp-grid">
      <article class="feature-card">
        <h2>Mission</h2>
        <p>To provide Nagpur and Maharashtra with CNC cutting and carving services that turn design intent into accurate, buildable, finish-ready components for interiors, furniture, prototypes and custom manufacturing.</p>
      </article>
      <article class="feature-card">
        <h2>Vision</h2>
        <p>To become a trusted CNC manufacturing partner for architects, designers, manufacturers and homeowners who need premium workmanship, practical advice and dependable project communication.</p>
      </article>
      <article class="feature-card">
        <h2>Core Promise</h2>
        <p>Every project receives manufacturing attention before machine time: file review, material fit, pattern strength, production feasibility, edge quality and clear next-step guidance.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     FOUNDER SECTION
════════════════════════════════════════════════════════════════ -->
<section class="section founder-section">
  <div class="mx-auto founder-grid max-w-7xl px-4 lg:px-6">
    <div class="prose-content">
      <span class="eyebrow">Founder Section</span>
      <h2 class="section-title">Led by <?= e($company['founder']) ?> with hands-on manufacturing discipline.</h2>
      <p>Good CNC work requires a calm technical eye. A founder-led CNC business has an advantage because project decisions do not disappear into layers of unclear communication. At Digi CNC, Mr. Krunal Patel brings attention to the details that matter at the machine and at the client table. The goal is not to accept every file blindly. The goal is to produce work that is useful when it reaches the client, site, workshop or finishing team.</p>
      <p>That mindset influences the quotation process, file checks, machine planning and customer support. If a jali web is too thin, the concern is raised. If a parametric rib assembly needs numbering, it is discussed. If MDF is being used where HDHMR may be more sensible, the client receives guidance. If a carved panel needs finishing allowance, the team accounts for it. This founder-driven quality culture helps Digi CNC stand apart from generic CNC router services.</p>
      <p>For professionals, this reduces friction. Architects can share concepts and receive manufacturing feedback. Interior designers can coordinate custom panels with confidence. Furniture manufacturers can discuss repeatable parts and nesting. Contractors can ask practical questions about delivery and assembly. Homeowners can understand material choices without feeling lost in technical language. The result is a working relationship that feels clear and premium without becoming slow or complicated.</p>
    </div>
    <div class="strengths-panel">
      <h3>Core Strengths</h3>
      <ul class="strengths-list">
        <li><div><strong>Precision:</strong> CAD-aware cutting and carving for repeatable results.</div></li>
        <li><div><strong>Material Range:</strong> MDF, HDHMR, wood, acrylic, PVC, ACP, WPC, plywood and laminates.</div></li>
        <li><div><strong>Design Support:</strong> Guidance for jali, parametric work, prototypes and decorative panels.</div></li>
        <li><div><strong>Local Responsiveness:</strong> Nagpur-based communication for urgent and custom requirements.</div></li>
        <li><div><strong>Business Flexibility:</strong> Support for B2B batches and B2C custom pieces.</div></li>
      </ul>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     MANUFACTURING PROCESS
════════════════════════════════════════════════════════════════ -->
<section class="section process-section">
  <div class="mx-auto max-w-7xl px-4 lg:px-6">
    <div class="process-intro">
      <span class="eyebrow eyebrow-light">Manufacturing Process</span>
      <h2>A controlled process for cutting, carving, engraving and custom CNC work.</h2>
      <p>Digi CNC begins with understanding the use case. A wall panel, cabinet part, acrylic display, ACP component, carved artwork and parametric installation do not need the same production approach. The process starts by checking the drawing or reference against material, thickness, quantity and desired finish. If the file needs cleaning, the team can guide the client before production. If a sample is sensible, it is recommended before a larger batch.</p>
    </div>
    <div class="process-cards">
      <?php foreach ([
        ['Input Review', 'CAD files, PDFs, images, site dimensions and material assumptions are reviewed before production.'],
        ['Toolpath Planning', 'Cutting, carving or engraving strategy is selected according to material, detail level and finish expectation.'],
        ['Machine Execution', 'The CNC process focuses on secure workholding, clean routing, correct depth and repeatable output.'],
        ['Quality Handover', 'Parts are checked, organized and prepared for finishing, assembly, pickup or dispatch guidance.'],
      ] as $i => $item): ?>
        <article class="process-card">
          <div class="process-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
          <h3><?= e($item[0]) ?></h3>
          <p><?= e($item[1]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     QUALITY ASSURANCE
════════════════════════════════════════════════════════════════ -->
<section class="section quality-section">
  <div class="mx-auto quality-grid max-w-7xl px-4 lg:px-6">
    <div class="quality-left">
      <span class="eyebrow">Quality Assurance</span>
      <h2 class="section-title">Quality begins before the router starts.</h2>
      <div class="quality-divider"></div>
    </div>
    <div class="prose-content">
      <p>Digi CNC treats quality as a sequence, not a final inspection checkbox. A clean final part begins with a clean file. Closed curves, correct scale, appropriate spacing, proper nesting, manageable depth and clear labels reduce machining risk. Material quality matters too. Sheet flatness, thickness variation, surface condition and finish plan can affect the final output. The team looks at these details before production whenever possible.</p>
      <p>During machining, attention shifts to workholding, tool condition, feed approach, pass depth and edge behavior. For 3D carving, depth and step-over influence finish quality. For jali, inside corners and thin bridges need careful review. For furniture parts, repeatability and part organization matter. For acrylic and ACP, surface protection and edge quality become important. For parametric work, numbering and assembly logic can be as important as cutting accuracy.</p>
      <p>After cutting, the team considers whether the parts are ready for pickup, finishing, assembly or further coordination. Digi CNC does not claim that CNC alone completes every project. Finishing, polishing, lamination, painting, installation and hardware work may involve other trades. But CNC accuracy gives those trades a stronger starting point. That is the value the company protects.</p>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     BUSINESS NETWORK + TIMELINE
════════════════════════════════════════════════════════════════ -->
<section class="section network-section">
  <div class="mx-auto network-grid max-w-7xl px-4 lg:px-6">
    <div class="prose-content">
      <span class="eyebrow">Business Network</span>
      <h2 class="section-title">Serving the ecosystem around architecture, interiors, furniture and manufacturing.</h2>
      <p>Nagpur has a growing need for reliable CNC support because design expectations are rising. Commercial interiors need branded features. Homes need custom mandirs, partitions and decorative panels. Furniture manufacturers need repeatable parts. Architects are exploring parametric surfaces and detail-rich spaces. Prototype developers need accurate components without committing to large tooling. Digi CNC sits inside this network and helps each group move from idea to manufactured output.</p>
      <p>The company's local presence matters. When a project has site changes, urgent revisions or material questions, responsive communication can protect the schedule. Digi CNC can coordinate with designers, contractors, carpenters, finishing teams and clients so that the CNC portion supports the larger project rather than slowing it down. This is especially useful for renovation projects, commercial fit-outs and custom residential interiors where dimensions and decisions often evolve.</p>
    </div>
    <div>
      <p class="timeline-label">Timeline</p>
      <div class="timeline-list">
        <?php foreach ([
          ['Foundation', 'Digi CNC begins with a focus on practical CNC cutting and carving support in Nagpur.'],
          ['Material Expansion', 'Work grows across MDF, HDHMR, wood, acrylic, ACP, PVC, WPC and plywood.'],
          ['Design-Led Manufacturing', 'Parametric panels, decorative jali, 3D carving and custom CNC projects become key strengths.'],
          ['Growth Focus', 'The company continues serving architects, interior designers, furniture teams, manufacturers and homeowners across Nagpur and Maharashtra.'],
        ] as $row): ?>
          <div class="timeline-item">
            <div class="timeline-dot"></div>
            <p class="timeline-heading"><?= e($row[0]) ?></p>
            <p class="timeline-body"><?= e($row[1]) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     START A PROJECT
════════════════════════════════════════════════════════════════ -->
<section class="section cta-section">
  <div class="mx-auto cta-grid max-w-7xl px-4 lg:px-6">
    <div class="cta-left">
      <span class="eyebrow">Start a Project</span>
      <h2 class="section-title">Send a drawing, reference image or requirement.</h2>
      <p>Whether the requirement is a single carved panel, a batch of furniture components, a decorative jali screen, a parametric installation, a prototype part or a complete custom CNC project, Digi CNC can help review the details and guide the next step.</p>
    </div>
    <?php $this->partial('partials/contact-form', ['repo' => $repo]); ?>
  </div>
</section>

</div><!-- /.dcnc -->