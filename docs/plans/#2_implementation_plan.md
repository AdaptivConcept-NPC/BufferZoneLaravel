# Implementation Plan: Laravel CMS Consolidation & Page Manager

This plan outlines the steps to transition the **BufferZone EMS** project from a decoupled hybrid state to a unified Laravel-master architecture. We will implement a professional **Page Manager** that controls both site copy and the image gallery, ensuring everything is manageable via the Laravel backend.

## User Review Required

> [!IMPORTANT]
> **Architecture Shift**: We are effectively "demoting" the Node/React project to a benchmark and making Laravel the sole source of truth for the CMS. All management UI will now live within the Laravel `/admin` portal.

> [!WARNING]
> **Data Migration**: Existing hardcoded text in Blade files will be moved to the database. I will provide a seeder to populate these initially so the site doesn't look empty after the switch.

## Proposed Changes

---

### 1. Database & Models

#### [NEW] [SiteContent.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Models/SiteContent.php)
*   Model to handle key-value pairs for site text and mapped assets.
*   Fields: `key`, `value`, `type` (text, longtext, image), `label`, `section`.

#### [NEW] [CreateSiteContentsTable.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/database/migrations/2026_04_18_000000_create_site_contents_table.php)
*   Schema definition for the SiteContent model.

#### [MODIFY] [GalleryItem.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Models/GalleryItem.php)
*   Add an accessor for `url` to ensure consistent delivery across the system.

---

### 2. Backend Logic & Services

#### [NEW] [CmsServiceProvider.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Providers/CmsServiceProvider.php)
*   Register a global `cms()` helper or share a `$content` variable with all views for easy access (e.g., `{{ cms('hero_title') }}`).

#### [MODIFY] [GalleryController.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Http/Controllers/GalleryController.php)
*   **Fix**: Update `destroy` method to use `File::delete(public_path(...))` instead of `Storage::disk('public')` to resolve the asset deletion bug.
*   Ensure responses match the expected format for unified consumption.

---

### 3. Progressive Admin UI (Livewire)

#### [NEW] [PageManager.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Livewire/Admin/PageManager.php)
*   The master component for content management.
*   Implement **Tabs interface**:
    *   **Content**: Edit site copy (Home title, About us text, etc.).
    *   **Gallery**: Full management of the gallery (upload, delete, reorder).
    *   **Settings**: Global site settings (contact email, phone).

#### [NEW] [page-manager.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/livewire/admin/page-manager.blade.php)
*   High-fidelity UI using the existing admin design system (dark mode, glassmorphism).

---

### 4. Template Integration

#### [MODIFY] [home.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/pages/home.blade.php)
*   Replace hardcoded text/images with dynamic CMS calls.

#### [MODIFY] [admin.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/layouts/admin.blade.php)
*   Update sidebar links:
    *   Replace "Professional Portal" link with "Content Manager" (Internal Laravel route).
    *   Add "Gallery Manager" (or integrate into Content Manager).

## Open Questions

1.  **Existing React Dashboard**: Should I completely remove the "Professional Portal" buttons pointing to the React app, or keep them as "Legacy Benchmarks" for now?
2.  **Site Structure**: Beyond the Home page, which other pages should we prioritize for content management (About, Services, Team)?
3.  **Ordering**: For the Gallery, would you like a simple drag-and-drop UI (requires Livewire Sortable) or a numeric sort-order input?

## Verification Plan

### Automated Tests
*   Run `php artisan test` (if applicable) to ensure no regressions.
*   Manual check of asset deletion: Upload an image, delete it, and verify it's removed from `public/assets/images`.

### Manual Verification
*   Edit a piece of text (e.g., Hero Title) in the new Page Manager and verify it updates on the live Home page.
*   Test Gallery upload/reorder/delete in the new tabbed UI.
