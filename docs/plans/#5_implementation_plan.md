# Admin Suite Enhancements: Gallery & External Links

This plan covers the visual and functional upgrade of the Image Gallery and the addition of a "Manage Links" utility for quick access to external business tools.

## User Review Required

> [!IMPORTANT]
> I will be using **Alpine.js** to handle the modal and lightbox logic. This ensures a zero-latency, premium feeling for the UI without requiring page reloads or heavy external libraries.

## Proposed Changes

### 1. Image Gallery Upgrade
#### [MODIFY] [page-manager.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/livewire/admin/page-manager.blade.php)
- **Modal Upload**: Moving the upload form into an Alpine.js modal. Add a "Add New Image" button that triggers it.
- **Lightbox**: Implement a full-screen image preview overlay that appears when clicking "View" on any gallery item.
- **Grid Actions**: Refine the image cards to show high-contrast "View" (eye icon) and "Delete" (trash icon) buttons on hover.

### 2. Manage Links Suite
#### [NEW] [LinkManager.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Livewire/Admin/LinkManager.php)
- Create a new Livewire component to house external business links.

#### [NEW] [link-manager.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/livewire/admin/link-manager.blade.php)
- Design a clean, card-based interface for external links:
  - **Google Workspace** (External Link)
  - **Odoo** (External Link)
- Ensure they launch in new tabs as requested.

#### [MODIFY] [admin.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/layouts/admin.blade.php)
- Add the "Manage Links" entry to the sidebar with a "link" icon.

#### [MODIFY] [web.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/routes/web.php)
- Register the `/admin/links` route.

## Verification Plan

### Automated Tests
- Use the browser tool to:
  1. Navigate to the Gallery and verify that clicking "Add New Image" opens a modal.
  2. Verify that clicking "View" on an image opens the lightbox.
  3. Verify the "Manage Links" sidebar link works and navigates to the new tab.
  4. Verify the Google Workspace and Odoo links have `target="_blank"`.

### Manual Verification
- Confirm the modal overlay covers the screen properly and is dismissible via the 'Escape' key or clicking the backdrop.
