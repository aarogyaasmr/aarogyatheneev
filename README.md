```markdown
# Aarogya Theneev – PHP Website

This repository contains the complete source code for **Aarogya Theneev**, a PHP-based website currently deployed on **Hostinger**.  
The project includes frontend pages, backend PHP scripts, reusable components, database configuration, and assets.

---

## 📂 Project Structure & File Descriptions

Below is a detailed breakdown of the repository structure and the purpose of each file/folder:

```

aarogyatheneev/
│── index.php
│── about.php
│── contact.php
│── services.php
│── products.php
│── gallery.php
│── testimonials.php
│── blog.php
│── faq.php
│
│── admin/
│   │── index.php
│   │── login.php
│   │── dashboard.php
│   │── users.php
│   │── leads.php
│   │── products.php
│   │── orders.php
│   │── reports.php
│   │── logout.php
│
│── includes/
│   │── header.php
│   │── footer.php
│   │── navbar.php
│   │── config.php
│   │── auth.php
│
│── assets/
│   │── css/
│   │   └── style.css
│   │── js/
│   │   └── main.js
│   │── images/
│       └── (logo, banners, icons)
│
│── db/
│   └── aarogyatheneev.sql
│
│── README.md

```

---

### 🏠 Root-Level Files

- **index.php** → Homepage. Entry point of the website. Loads navigation, hero section, featured services/products.  
- **about.php** → About Us page describing Aarogya Theneev’s mission, team, and company background.  
- **contact.php** → Contact page with form submission (stored in DB or emailed). Uses backend PHP for processing.  
- **services.php** → Lists available services with details.  
- **products.php** → Displays product catalog fetched from DB.  
- **gallery.php** → Image gallery showcasing projects, events, or services.  
- **testimonials.php** → Client feedback/testimonials page.  
- **blog.php** → Blog/news articles section (static/dynamic depending on DB integration).  
- **faq.php** → Frequently Asked Questions page.  

---

### 🔐 `admin/` – Admin Dashboard

- **index.php** → Admin login page.  
- **login.php** → Handles admin authentication (username/password).  
- **dashboard.php** → Main admin panel showing stats and quick actions.  
- **users.php** → Manage registered users (CRUD).  
- **leads.php** → Manage incoming leads from contact forms.  
- **products.php** → CRUD operations for products (add, update, delete).  
- **orders.php** → View/manage customer orders.  
- **reports.php** → Analytics, sales, and activity reports.  
- **logout.php** → Ends admin session.  

---

### 📦 `includes/` – Reusable Components

- **header.php** → Common HTML `<head>` section (meta tags, CSS includes).  
- **footer.php** → Common footer across all pages.  
- **navbar.php** → Top navigation menu.  
- **config.php** → Database connection (MySQL). Defines `$host`, `$user`, `$password`, `$dbname`.  
- **auth.php** → Authentication middleware to protect admin routes.  

---

### 🎨 `assets/` – Static Files

- **css/style.css** → Main stylesheet for the site.  
- **js/main.js** → Custom JavaScript (form validation, interactivity).  
- **images/** → Contains all logos, banners, icons, and product images.  

---

### 🗄 `db/`

- **aarogyatheneev.sql** → Database schema & sample data for MySQL.  
  - Tables may include: `users`, `products`, `orders`, `leads`, `testimonials`, etc.  

---

## ⚙️ Setup Instructions (Local)

1. Install **XAMPP/MAMP/LAMP**.  
2. Place the project inside:
   - Windows: `C:/xampp/htdocs/aarogyatheneev/`  
   - macOS: `/Applications/MAMP/htdocs/aarogyatheneev/`  
   - Linux: `/var/www/html/aarogyatheneev/`  
3. Import `db/aarogyatheneev.sql` into MySQL.  
4. Update DB credentials in `includes/config.php`.  
5. Run Apache & MySQL → open in browser:  
```

[http://localhost/aarogyatheneev/](http://localhost/aarogyatheneev/)

````

---

## 🌍 Deployment (Hostinger / cPanel)

1. Upload project files via **File Manager** or FTP.  
2. Import `db/aarogyatheneev.sql` in Hostinger’s phpMyAdmin.  
3. Update DB credentials in `includes/config.php`:  
```php
$host = "localhost";
$user = "your_db_user";
$password = "your_db_password";
$dbname = "your_db_name";
````


## 👨‍💻 Author

Developed & maintained by **Aarogya Theneev Team**.

