# BufferZoneLaravel - PHP Laravel Application

A unified Laravel PHP application combining the frontend and backend of the BufferZone EMS platform. This eliminates Node.js dependencies and provides a single-deployment solution suitable for traditional PHP hosting.

## Quick Start

```bash
# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate

# Create storage symlink
php artisan storage:link

# Run development server
php artisan serve
```

Visit: http://localhost:8000

## Key Features

✅ **Unified Application** - Single Laravel deployment (no separate Node.js server)  
✅ **Responsive Design** - Tailwind CSS for modern UI  
✅ **Admin Panel** - Manage contacts and gallery  
✅ **Contact Form** - Livewire component with validation & email notifications  
✅ **Gallery** - Image management system  
✅ **Session-Based Auth** - Secure admin authentication  
✅ **Rate Limiting** - Protect against spam  

## Project Structure

```
✓ Controllers      - Auth, Contact, Gallery API endpoints
✓ Models          - ContactSubmission, GalleryItem Eloquent models
✓ Livewire        - Interactive Gallery and ContactForm components
✓ Views           - Blade templates for all pages
✓ Migrations      - Database schema (contact_submissions, gallery_items)
✓ Middleware      - Admin session authentication
✓ Routes          - Web routes with proper middleware
✓ Styling         - Tailwind CSS with custom colors
```

## Admin Access

**URL:** http://localhost:8000/admin/login  
**Default Username:** admin  
**Default Password:** (Configured in .env via ADMIN_PASSWORD_HASH)

## Configuration

See [DEPLOYMENT.md](DEPLOYMENT.md) for:
- Production setup
- Email configuration
- Web server setup (Apache/Nginx)
- Security best practices
- Troubleshooting

## Database Schema

### contact_submissions
- id, name, email, phone, message, type, event_type
- is_read (boolean), deleted_at (soft deletes)
- created_at, updated_at timestamps

### gallery_items
- id, filename, caption, sort_order
- created_at, updated_at timestamps

## API Endpoints

### Public
- `GET /api/gallery` - List gallery items
- `POST /api/contact/submit` - Submit contact form

### Admin
- `POST /api/auth/login` - Admin login
- `GET /api/contact/submissions` - Get submissions (paginated)
- `POST /api/gallery/upload` - Upload image

See [DEPLOYMENT.md](DEPLOYMENT.md#api-endpoints) for complete API documentation.

## File Upload

Uploaded gallery images are stored in `storage/app/public/images/` and accessible via `/storage/images/{filename}` once the storage symlink is created.

## Compared to Original

| Feature | React/Node.js | Laravel |
|---------|---|---|
| Deployment | Requires Node.js | Pure PHP |
| Frontend | React + Vite | Blade + Livewire + Tailwind |
| Backend | Express.js | Laravel |
| API | REST (separate) | Integrated |
| Database | MySQL | MySQL (same) |
| Hosting | Requires Node.js support | Standard PHP hosting |

## Development

```bash
# Watch mode (if using Vite for assets in future)
npm run dev

# Running tests (future)
php artisan test

# Debugging
php artisan tinker
```

## Notes

- This is a fresh implementation converting the React/Node.js architecture to unified Laravel
- Admin credentials must be configured via env variables (password hash format: bcrypt)
- All existing functionality from the original BufferZoneOnline is preserved
- Database tables match the original schema for compatibility
- Ready for production deployment after environment configuration

## Support

For issue requests or future enhancements to the admin panel (contacts table UI, gallery drag-drop reorder UI), refer to [DEPLOYMENT.md](DEPLOYMENT.md).

---

**Version:** 1.0.0 | **Last Updated:** April 4, 2026 | **Built with:** Laravel 12 + Livewire 4 + Tailwind CSS
