# Migrate Stats Section to CMS

Move the hardcoded stats section (Years Active, Events Covered, etc.) into the CMS to allow the admin to toggle visibility and update the metrics without code changes.

## User Review Required

> [!IMPORTANT]
> I will be introducing a new **JSON** content type to the CMS helper. This allows complex data structures (like a list of stats) to be managed as a single entity while remaining easy to loop through in Blade templates.

> [!NOTE]
> I'll implement a visibility "toggle" in the Admin Panel so you can hide the entire stats row during low-traffic periods or special campaigns.

## Proposed Changes

### Database & Helpers
#### [MODIFY] [cms_helper.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Helpers/cms_helper.php)
- Update `cms()` to automatically `json_decode` the value if the database record's `type` is set to `json`.

#### [RUN] Artisan Sync Script
- Add `home_stats_visible` (type: `toggle`, section: `home`, label: `Display Hero Stats`).
- Add `home_stats_data` (type: `json`, section: `home`, label: `Hero Metrics Data`).
- Initial JSON payload:
  ```json
  [
    {"label": "Years Active", "value": "5+"},
    {"label": "Events Covered", "value": "200+"},
    {"label": "Qualified Staff", "value": "20+"}
  ]
  ```

### Admin Portal
#### [MODIFY] [page-manager.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/livewire/admin/page-manager.blade.php)
- Add a UI handler for the `toggle` type (a sleek red switch).
- Add a UI handler for the `json` type (a code-styled textarea with validation hint).

### Home Page
#### [MODIFY] [home.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/pages/home.blade.php)
- Replace static `@php` stats array with `cms('home_stats_data')`.
- Wrap the entire stats container in an `@if(cms('home_stats_visible', '1') == '1')` block.

## Verification Plan

### Automated Tests
- Use the browser tool to:
  1. Navigate to Page Manager and toggle "Display Hero Stats" to OFF.
  2. Verify the stats row disappears from the Home page.
  3. Change "5+ Years" to "10+ Years" in the JSON field and save.
  4. Verify the update appears on the Home page.

### Manual Verification
- Test that the formatting of the JSON doesn't break the page if invalid (I'll add a fallback `[]` in the helper).
