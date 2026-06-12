# Digi CNC Website

Premium PHP 8.3, TailwindCSS and vanilla JavaScript website for Digi CNC Nagpur.

## Features

- SEO-optimized public pages: Home, About, Services, Gallery, Blog, Contact
- Individual service landing pages for CNC cutting, 3D carving, 2D cutting, parametric design, jali, MDF, HDHMR and custom CNC projects
- Location landing pages for Nagpur and Maharashtra
- Dynamic meta tags, canonical URLs, Open Graph, Twitter cards and JSON-LD schema
- Organization, LocalBusiness, Breadcrumb, FAQ, Service, Image and BlogPosting schema
- Responsive sticky header, mega menu, floating WhatsApp/call buttons and lead forms
- Admin panel for leads, contact requests, services, blogs, categories, gallery, testimonials, FAQs and SEO records
- CSRF protection, input validation, PDO prepared statements and XSS-safe output helpers
- MySQL schema and seed data
- robots.txt and sitemap.xml

## Local Setup with XAMPP

1. Place this folder at:
   `/Applications/XAMPP/xamppfiles/htdocs/digicnc`

2. Start Apache and MySQL in XAMPP.

3. Import database:
   ```bash
   /Applications/XAMPP/xamppfiles/bin/mysql -u root < database/migrations/001_create_schema.sql
   /Applications/XAMPP/xamppfiles/bin/mysql -u root digicnc < database/seed/sample_data.sql
   ```

4. Configure environment variables in Apache, or edit `app/config/config.php` for local testing.

5. Build Tailwind CSS:
   ```bash
   npm install
   npm run build:css
   ```

6. Open:
   `http://localhost/digicnc/`

## Admin Access

Default local admin:

- Email: `admin@digicncnagpur.com`
- Password: `DigiCNC@2026!`

Before production, create a new bcrypt hash and set `ADMIN_PASSWORD_HASH`.

```bash
/Applications/XAMPP/xamppfiles/bin/php -r "echo password_hash('your-strong-password', PASSWORD_BCRYPT), PHP_EOL;"
```

## Production Notes

- Point the web server document root to `public/` when possible.
- If hosting from the project root, keep `.htaccess` enabled so clean SEO URLs rewrite to `public/index.php`.
- Update `APP_URL`, `GA_MEASUREMENT_ID` and `GSC_VERIFICATION`.
- Replace placeholder domain `https://digicncnagpur.com` in `public/sitemap.xml` and `public/robots.txt` if the final domain differs.
- Use compressed WebP/AVIF images for added PageSpeed gains where the hosting pipeline supports it.
- Ensure `storage/` and `public/uploads/` are writable by the web server.
- Use HTTPS in production.
- Rotate the default admin password immediately.

## Important URLs

- `/CNC-cutting-service-nagpur`
- `/3d-cnc-carving-nagpur`
- `/2d-cnc-cutting-nagpur`
- `/parametric-design-nagpur`
- `/decorative-jali-cutting-nagpur`
- `/mdf-cnc-cutting-nagpur`
- `/hdhmr-cnc-cutting-nagpur`
- `/custom-cnc-projects`
- `/cnc-cutting-nagpur`
- `/cnc-cutting-maharashtra`
- `/admin`

