# Aarogya Theneev – PHP Website

This repository contains the complete source code for **Aarogya Theneev**, a PHP-based website for health and wellness management.

---

## 📂 Project Structure & File Descriptions

```text
aarogyatheneev/
├── .htaccess                       # Apache web server config (URL rewriting, security)
├── CaptchaSecurityImages.php       # PHP script to generate CAPTCHA images for forms
├── PHPExcel/                       # PHP library for Excel file handling
│   └── Classes/                    # PHPExcel classes (third-party)
├── README.md                       # Project documentation (this file)
├── adminer.php                     # Adminer – single-file database management tool (like phpMyAdmin)
├── application/                    # CodeIgniter Framework app folder
│   ├── .htaccess                   # Prevent direct access to application files
│   ├── cache/                      # CI cache files
│   ├── config/                     # App configuration (database, routes, etc)
│   ├── controllers/                # MVC: Controller PHP files
│   ├── core/                       # CI core classes (extension)
│   ├── helpers/                    # Custom helper functions
│   ├── hooks/                      # CI hooks (event triggers)
│   ├── index.html                  # Prevent folder listing
│   ├── language/                   # Language files for localization
│   ├── libraries/                  # Custom libraries (classes)
│   ├── logs/                       # Error/access logs for debugging
│   ├── models/                     # MVC: Database models
│   ├── third_party/                # Third-party libraries
│   └── views/                      # MVC: HTML/PHP view templates
├── assets/                         # Static and admin assets
│   ├── admin/                      # Admin panel assets (CKEditor, custom admin JS/CSS)
│   ├── css/                        # Main site CSS stylesheets
│   ├── font/, fonts/               # Font files used by site
│   ├── img/                        # Public/static images for site
│   ├── js/                         # Main JS (validation, interactivity)
│   ├── valiation/                  # Likely JS for form validation
│   └── video/                      # Video files/assets (if any)
├── class.phpmailer.php             # PHPMailer library for sending emails
├── class.smtp.php                  # SMTP support for PHPMailer
├── component/                      # Reusable code components
│   ├── jquery/                     # jQuery library or plugins
│   └── recaptcha/                  # Google reCAPTCHA integration files
├── demo/                           # Demo HTML/PHP pages (sample site, static pages)
│   ├── about.html, blog.html, ...  # Sample/demo static pages
│   ├── assets/                     # Demo-specific static assets
│   └── ...                         # (See repo for full list)
├── gateway/                        # Payment gateway integration (e.g., CCAvenue)
│   ├── Crypto.php                  # Crypto utility for gateway
│   ├── ccavRequestHandler.php      # CCAvenue request handler
│   ├── ccavResponseHandler.php     # CCAvenue response handler
│   ├── dashboard.php               # Payment dashboard
│   ├── img/                        # Gateway-specific images
│   ├── logout.php                  # Payment dashboard logout
│   ├── make-payment.php            # Payment initiation page
│   ├── payprocess.php              # Payment process handler
│   └── thankyou.php                # Post-payment thank you page
├── index.php                       # Main website homepage (entry point)
├── monofont.ttf                    # Font file for CAPTCHA or UI
├── portal/                         # Main portal (backoffice, CRM, user management)
│   ├── .htaccess                   # Security config
│   ├── Order.php                   # Order class/controller
│   ├── about.php                   # About page (portal-side)
│   ├── add-brand.php, add-category.php, ... # CRUD for various entities
│   ├── app/                        # Portal app logic
│   ├── assets/                     # Portal static assets
│   ├── brand.php                   # Brand management
│   ├── categories.php              # Category management
│   ├── change-password.php         # Password change form
│   ├── closed-lead.php             # List of closed leads
│   ├── collection.php              # Collections dashboard
│   ├── commision.php               # Commission management
│   ├── constant/                   # Constant values/configs
│   ├── contact-lead.php            # Contacted leads page
│   ├── custom/                     # Custom portal code
│   ├── customer.php                # Customer management
│   ├── customer/                   # Customer sub-features
│   ├── dashboard.php               # Portal dashboard
│   ├── editbrand.php, ...          # Edit pages for brands, leads, etc.
│   ├── email_config.php            # Email settings/configuration
│   ├── expreport.php               # Export reports
│   ├── failed-lead.php             # Failed leads
│   ├── getproductreport.php        # Product reports
│   ├── googlechart.php             # Charts/stats via Google Chart
│   ├── importbrand.php             # Import brands (CSV, etc)
│   ├── index.php                   # Portal homepage
│   ├── invoiceprint.php            # Print invoices
│   ├── lead.php                    # Lead management
│   ├── login.php                   # Portal login page
│   ├── manage_website.php          # Website management
│   ├── new-lead.php                # New leads
│   ├── php_action/                 # PHP action scripts (AJAX/handlers)
│   ├── product.php                 # Product management
│   ├── productreport.php           # Product reports
│   ├── qualified-lead.php          # Qualified leads
│   ├── report.php                  # Reports dashboard
│   ├── sales_report.php            # Sales reports
│   ├── salesreport.php             # Sales report (alt)
│   ├── sss/                        # Misc scripts/storage
│   ├── users.php                   # User management
│   ├── videos.php                  # Video library
│   └── working-lead.php            # Working leads
├── system/                         # CodeIgniter system folder (core framework)
│   ├── .htaccess
│   ├── core/
│   ├── database/
│   ├── fonts/
│   ├── helpers/
│   ├── index.html
│   ├── language/
│   └── libraries/
├── u397572463_aarogya.sql          # Main MySQL database dump (schema and data)
├── uploads/                        # User and admin uploads
│   ├── admin/                      # Admin uploads
│   ├── cache/                      # Upload cache
│   ├── cms/                        # CMS media
│   ├── headerbanner/               # Banner images
│   ├── image/                      # General images
│   ├── memeberimage/               # Member profile images
│   ├── news/                       # News images/files
│   ├── no_image.jpg, no_image.png  # Placeholder images
│   └── serviceicon/                # Service icons
├── yoga-wellness/                  # Yoga/wellness subsite
│   ├── assets/                     # Yoga-specific assets
│   ├── index.php                   # Yoga home page
│   └── sss.html                    # Misc yoga-related HTML
```

---

### Notable Directories

- **application/** and **system/**: CodeIgniter framework core and your app’s MVC structure.
- **assets/**: CSS, JS, images, admin panel assets.
- **uploads/**: All user/media uploaded content.
- **portal/**: CRM-like backoffice for managing users, products, leads, orders, reports, and more.
- **gateway/**: Payment gateway integration (CCAvenue).
- **component/**: JS, PHP, or service integrations (jQuery, reCAPTCHA, etc).
- **demo/**: Standalone static/demo pages for previewing the site.
- **PHPExcel/**, **PHPMailer**, **Adminer**: Third-party libraries/tools.

---

### Notable Files

- **index.php**: Website homepage.
- **adminer.php**: Single-file DB admin (Adminer).
- **u397572463_aarogya.sql**: MySQL DB schema/data for full site.
- **class.phpmailer.php**, **class.smtp.php**: Emailing functionality.
- **CaptchaSecurityImages.php**: CAPTCHA generator.
- **monofont.ttf**: Used for CAPTCHA or branding.

---

> **Note:** For very large directories or those containing only assets (like images, fonts), see the folder for details.
> For the latest and most complete file tree, visit the [GitHub repository browser](https://github.com/aarogyaasmr/aarogyatheneev).

---

## ⚙️ Local Setup Instructions

1. Install **XAMPP/MAMP/LAMP**.
2. Place the project inside:
   - **Windows:** `C:/xampp/htdocs/aarogyatheneev/`
   - **macOS:** `/Applications/MAMP/htdocs/aarogyatheneev/`
   - **Linux:** `/var/www/html/aarogyatheneev/`
3. Import `u397572463_aarogya.sql` into MySQL.
4. Update DB credentials in the appropriate config file.
5. Start Apache & MySQL, then open in your browser:
   ```
   http://localhost/aarogyatheneev/
   ```

---

## 🌍 Deployment (Hostinger / cPanel)

1. Upload project files via **File Manager** or FTP.
2. Import the SQL file in Hostinger’s phpMyAdmin.
3. Update DB credentials in your config file:
   ```php
   $host = "localhost";
   $user = "your_db_user";
   $password = "your_db_password";
   $dbname = "your_db_name";
   ```

---

## 👨‍💻 Author

Developed & maintained by **Aarogya Theneev Team**.

---
