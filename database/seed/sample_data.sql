USE digicnc;

INSERT INTO admin_users (name, email, password_hash, role)
VALUES ('Digi CNC Admin', 'admin@digicncnagpur.com', '$2y$10$sYYGZJbL.IEPK57MEF6rt.GwTDBbqgrCvHKmRqWZvPVi1aSCdV/cG', 'admin')
ON DUPLICATE KEY UPDATE email = VALUES(email);

INSERT INTO blog_categories (name, slug, description) VALUES
('CNC Guides', 'cnc-guides', 'Practical guidance for CNC cutting, carving and file preparation.'),
('Materials', 'materials', 'Material comparisons for MDF, HDHMR, wood, acrylic, ACP, WPC and plywood.'),
('Parametric Design', 'parametric-design', 'Manufacturing notes for parametric panels, ribs, baffles and complex geometry.')
ON DUPLICATE KEY UPDATE description = VALUES(description);

INSERT INTO services (name, slug, short_description, meta_title, meta_description, status) VALUES
('2D CNC Cutting', '2d-cnc-cutting-nagpur', 'Accurate profile cutting, nesting, slots, perforations and repeat furniture components.', '2D CNC Cutting Nagpur | Digi CNC', '2D CNC cutting in Nagpur for MDF, HDHMR, plywood, acrylic, ACP and custom sheet components.', 'published'),
('3D CNC Carving', '3d-cnc-carving-nagpur', 'Relief carving, decorative wall panels, mandir details and premium wooden surfaces.', '3D CNC Carving Nagpur | Digi CNC', '3D CNC carving in Nagpur for wood, MDF, wall panels, relief art and custom decorative interiors.', 'published'),
('Decorative Jali Cutting', 'decorative-jali-cutting-nagpur', 'Premium CNC jali screens for partitions, mandirs, doors, ceilings and wall panels.', 'Decorative Jali Cutting Nagpur | Digi CNC', 'Decorative jali cutting in Nagpur for MDF, HDHMR, wood, PVC, WPC and acrylic interiors.', 'published')
ON DUPLICATE KEY UPDATE short_description = VALUES(short_description);

INSERT INTO gallery_items (title, category, image_path, alt_text, sort_order, status) VALUES
('Nested furniture components in MDF and plywood', '2D CNC Cutting', 'assets/images/portfolio-furniture-components.png', '2D CNC cutting in Nagpur for furniture components by Digi CNC', 1, 'published'),
('Luxury carved wooden wall relief panel', '3D CNC Carving', 'assets/images/portfolio-3d-carving.png', '3D CNC carving Nagpur decorative wooden relief panel', 2, 'published'),
('Decorative CNC jali screen for premium interiors', 'Jali Designs', 'assets/images/portfolio-jali-mandir.png', 'Decorative jali cutting Nagpur MDF CNC jali panel', 3, 'published');

INSERT INTO testimonials (client_name, client_role, quote, rating, status) VALUES
('Interior Design Studio, Nagpur', 'Commercial Interiors', 'Digi CNC understood our drawings quickly and delivered clean jali panels with consistent finish.', 5, 'published'),
('Furniture Contractor', 'Modular Furniture', 'For repeat components, accuracy matters. Their CNC cutting helped us reduce manual correction work.', 5, 'published');

INSERT INTO faqs (question, answer, page_slug, sort_order, status) VALUES
('What does Digi CNC manufacture?', 'Digi CNC manufactures 2D CNC cut parts, 3D carved panels, decorative jali, MDF and HDHMR components, parametric interiors, furniture parts and custom CNC projects.', 'home', 1, 'published'),
('What is required for a quotation?', 'Send dimensions, material, thickness, quantity, design file or reference image, finish requirement, timeline and location details.', 'home', 2, 'published');

INSERT INTO seo_meta (page_slug, meta_title, meta_description, canonical_url)
VALUES
('home', 'Digi CNC Nagpur | 2D & 3D CNC Cutting, Carving, Jali & Parametric Manufacturing', 'Digi CNC Nagpur provides 2D CNC cutting, 3D carving, decorative jali, MDF, HDHMR, parametric design and custom CNC projects.', 'https://digicncnagpur.com/'),
('services', 'CNC Services in Nagpur | Digi CNC', 'Explore Digi CNC services including 2D cutting, 3D carving, jali, MDF, HDHMR, acrylic, ACP, WPC and custom CNC projects.', 'https://digicncnagpur.com/services')
ON DUPLICATE KEY UPDATE meta_title = VALUES(meta_title), meta_description = VALUES(meta_description);
