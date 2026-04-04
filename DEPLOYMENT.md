# Buffer Zone Laravel - Deployment Guide

## Overview
BufferZoneLaravel is a unified PHP Laravel application combining the React frontend and Express backend from the original BufferZoneOnline project. This eliminates the need for Node.js and provides a single monolithic deployment suitable for traditional PHP hosting environments.

## Requirements
- **PHP:** 8.2 or higher
- **MySQL:** 5.7 or higher
- **Composer:** Latest version
- **Web Server:** Apache or Nginx with URL rewrite support

## Installation & Setup

### 1. Initial Setup

```bash
# Clone or extract the project
cd /path/to/BufferZoneLaravel

# Install dependencies
composer install

# Create .env file from template
cp .env.example .env

# Generate application key
php artisan key:generate

# Create storage symlink for file uploads
php artisan storage:link
```

### 2. Configure Environment

Edit `.env` with your hosting details:

```env
# Application
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=your_db_host
DB_PORT=3306
DB_DATABASE=bufferzoneems
DB_USERNAME=db_user
DB_PASSWORD=secure_password

# Email Configuration
MAIL_MAILER=smtp
MAIL_HOST=mail.bufferzoneems.co.za
MAIL_PORT=465
MAIL_ENCRYPTION=ssl
MAIL_USERNAME=noreply@bufferzoneems.co.za
MAIL_PASSWORD=your_smtp_password
MAIL_FROM_ADDRESS=noreply@bufferzoneems.co.za
NOTIFY_TO=info@bufferzoneems.co.za

# Admin Credentials
ADMIN_USERNAME=admin
ADMIN_PASSWORD_HASH=$2a$12$hMuUOJkhVzTta6B5XNghduXzkTmtWAx.n5VxP5LvO80KjR7SiwY9a

# JWT/Security
JWT_SECRET=9fedee182742bb91296c763bd33763cc38495ce928393cba23b2fc095a8f7451bd98c97f978a77ea39ba2cf0cb63021c30ec510046500c1abd3fb8d85c350b1f
```

### 3. Database Migration

Run migrations to create tables:

```bash
php artisan migrate
```

This creates two tables:
- `contact_submissions` - Contact form submissions
- `gallery_items` - Gallery images

### 4. Web Server Configuration

#### Apache (.htaccess)
```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>

    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} -d [OR]
    RewriteCond %{REQUEST_FILENAME} -f
    RewriteRule ^ ^ [L]

    RewriteRule ^ index.php [L]
</IfModule>
```

#### Nginx
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}

location ~ \.php$ {
    fastcgi_pass unix:/var/run/php-fpm.sock;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
    include fastcgi_params;
}
```

### 5. File Permissions

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache public/storage
```

### 6. Production Optimization

```bash
# Clear and cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

## Project Structure

```
BufferZoneLaravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # AuthController, ContactController, GalleryController
│   │   └── Middleware/         # IsAdmin authentication middleware
│   ├── Mail/                   # ContactFormMailable for email notifications
│   ├── Models/                 # ContactSubmission, GalleryItem Eloquent models
│   └── Livewire/               # Gallery, ContactForm reactive components
├── bootstrap/
│   └── app.php                 # Middleware registration
├── routes/
│   └── web.php                 # All application routes
├── resources/
│   ├── views/
│   │   ├── layouts/            # Master template (app.blade.php)
│   │   ├── components/         # Navbar, Footer
│   │   ├── pages/              # Public pages (about, team, services, events, etc.)
│   │   ├── admin/              # Admin panel (login, dashboard)
│   │   ├── livewire/           # Livewire component views
│   │   └── emails/             # Email templates
│   └── css/                    # Tailwind CSS
├── database/
│   └── migrations/             # Database schema
├── public/
│   ├── images/                 # Logo and static images
│   ├── storage/                # Symlink to uploads (↔ storage/app/public)
│   └── index.php               # Laravel entry point
└── storage/
    └── app/public/images/      # Uploaded gallery images
```

## API Endpoints

### Public Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/gallery` | List all gallery items |
| POST | `/api/contact/submit` | Submit contact form (rate limited: 10/hour) |

### Authentication Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/api/auth/login` | Admin login |
| GET | `/api/auth/verify` | Verify session |
| POST | `/api/auth/logout` | Admin logout |

### Protected Admin Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/contact/submissions` | Get contact submissions (paginated) |
| PATCH | `/api/contact/{id}/read` | Mark submission as read |
| DELETE | `/api/contact/{id}` | Delete submission |
| POST | `/api/gallery/upload` | Upload gallery image |
| PATCH | `/api/gallery/{id}` | Update gallery item |
| POST | `/api/gallery/reorder` | Reorder gallery items |
| DELETE | `/api/gallery/{id}` | Delete gallery item |

## Features

### Public Website
- **Home Page** - Landing page with services overview, about section, gallery, and contact form
- **Service Pages** - Medical Cover, Training, Staffing, Corporate Packages
- **Event Pages** - Sports Events, Concerts, Corporate Events, Community Events
- **Info Pages** - About Us, Our Team, Careers, Partners
- **Contact Form** - Livewire component with validation and email notifications
- **Gallery** - Livewire component displaying images in responsive grid

### Admin Panel
- **Login** - Session-based authentication
- **Dashboard** - Overview with statistics and quick actions
- **Contact Management** - View, filter, mark read, and delete submissions (future: Livewire table)
- **Gallery Management** - Upload, reorder, edit captions, delete images (future: Livewire interface)

### Technical Features
- **Responsive Design** - Tailwind CSS for mobile-first design
- **Email Notifications** - Automated emails for new contact submissions
- **File Upload Handling** - Image validation and storage with symlink access
- **Session-Based Auth** - Secure admin authentication with CSRF protection
- **Rate Limiting** - Prevents form spam (10 requests per hour per IP)
- **Database Soft Deletes** - Contact submissions can be soft-deleted (not permanently removed)

## Email Configuration

To send email notifications, configure SMTP settings in `.env`. The system uses Laravel Mailables to send contact form notifications to the configured admin email address.

Test email configuration:

```bash
php artisan tinker
>>> Mail::raw('test', function($message) { $message->to('your@email.com'); });
```

## Database Backup & Recovery

### Backup
```bash
mysqldump -u username -p bufferzoneems > backup.sql
```

### Restore
```bash
mysql -u username -p bufferzoneems < backup.sql
```

## Troubleshooting

### Storage Link Issues
If images don't show after upload:
```bash
php artisan storage:link --force
```

### Permission Denied
```bash
sudo chown -R www-data:www-data .
sudo chmod -R 755 storage bootstrap/cache
```

### Database Connection Error
Verify in `.env`:
- `DB_HOST` - Should be IP or hostname of MySQL server
- `DB_PORT` - Default 3306
- Credentials are correct
- MySQL service is running

### Email Not Sending
- Verify SMTP credentials in `.env`
- Check mail logs in `storage/logs/laravel.log`
- Ensure firewall allows SMTP port (usually 465 or 587)

## Monitoring & Maintenance

### Check Application Logs
```bash
tail -f storage/logs/laravel.log
```

### Clear Caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Run Tasks (if needed in future)
```bash
php artisan schedule:run
```

## Security Checklist

- [ ] `APP_DEBUG=false` in production
- [ ] `APP_KEY` is generated and unique
- [ ] `.env` file is not accessible via web
- [ ] Storage permissions restrict access (755, not 777)
- [ ] CSRF tokens enabled on all forms
- [ ] HTTPS/SSL certificate installed
- [ ] Admin password hash changed and secure
- [ ] Rate limiting configured on contact form
- [ ] Regular database backups scheduled
- [ ] Email credentials not exposed in code

## Migration from BufferZoneOnline

If migrating existing data from the Node.js version:

1. **Export existing database**: `mysqldump bufferzoneems > old_data.sql`
2. **Review schema differences** in `database/migrations/`
3. **Run Laravel migrations**: `php artisan migrate`
4. **Import data**: Manually or via data migration script
5. **Import gallery images**: Copy from old `/uploads` to `storage/app/public/images`
6. **Test all functionality** before going live

## Support & Development

For development work:
```bash
# Run development server
php artisan serve

# Watch for changes (requires npm)
npm run dev
```

### Key Files to Understand
- `Routes (routes/web.php)` - All endpoints
- `Controllers (app/Http/Controllers/)` - Business logic
- `Models (app/Models/)` - Database interactions
- `Views (resources/views/)` - Frontend templates
- `Environment (.env)` - Configuration

## License & Credits
Buffer Zone EMS - 2026

---
**Last Updated:** April 4, 2026
