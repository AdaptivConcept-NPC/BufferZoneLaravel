# CMS Architecture and Routing Polish

This plan addresses recent feedback regarding the CMS Dashboard structure, error handling (404 isolation), and logout routing.

## Proposed Changes

### Auth & Logout Routing
#### [MODIFY] `routes/web.php`
- Add an explicit `Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout')` route.
- Allow `Route::get('/admin/logout')` to gracefully redirect to `/admin/login` to prevent 404s when manually typed.

#### [MODIFY] `app/Http/Controllers/AuthController.php`
- Update the `logout` method to check if the request expects JSON (e.g. `$request->expectsJson()`). If it doesn't, redirect to `/admin/login`.

#### [MODIFY] `resources/views/layouts/admin.blade.php`
- Update the logout form action to use `/admin/logout`.

---

### Dashboard Restructuring
The layout will be restructured to feature a minimal KPI dashboard for general access, while the existing complex dashboard will be shifted to "High-Level" as the Command Center.

#### [MODIFY] `resources/views/layouts/admin.blade.php`
- Rewrite the sidebar to link to the new "Dashboard" (KPI & Stats).
- Move the old Dashboard link to the "High-Level" section and rename it "Command Center".

#### [RENAME/MODIFY] `resources/views/admin/dashboard.blade.php` -> `resources/views/admin/command_center.blade.php`
- The current dashboard becomes the `command_center`. It will be restricted to SuperAdmins.

#### [NEW] `resources/views/admin/dashboard.blade.php`
- Create a new, minimal "KPI and Stats Visualizations" dashboard tailored for general access. It will display simple cards (e.g., Active Enquiries, Live Site Traffic, Total Pages) without the advanced terminal or security audit sections.

#### [MODIFY] `routes/web.php`
- Update the `/admin/dashboard` route to load the new KPI dashboard.
- Create an `/admin/command-center` route mapping to the old dashboard.

---

### Custom 404 Pages
Implement isolated 404 pages so admin users see a themed admin 404, while public users see a themed public 404.

#### [MODIFY] `bootstrap/app.php`
- Register an exception handler for `Symfony\Component\HttpKernel\Exception\NotFoundHttpException` to intercept 404 errors.
- Conditionally render `errors.admin.404` if the request is inside the `admin/*` path, otherwise render `errors.404`.

#### [NEW] `resources/views/errors/404.blade.php`
- Create a branded public 404 page featuring the "Buffer Zone EMS" premium styling and glassmorphism. Contains a clear button to navigate back Home.

#### [NEW] `resources/views/errors/admin/404.blade.php`
- Create a utilitarian, dark-theme 404 page specific to the CMS interface, offering a button to return to the Admin Dashboard.

## Open Questions
- Should the new KPI dashboard contain real database data (e.g. real count of Active Enquiries from `ContactSubmission`) right away, or stick to a mocked minimal layout for now?
- Would you like the Public 404 page to include a search bar, or just a simple "Return Home" button?

## Verification Plan
### Manual Verification
1. Click the Logout button and confirm successful redirection to the login screen without a 404.
2. Manually type `http://localhost:8000/admin/logout` and ensure it properly bounces to the login screen.
3. Access an invalid public URL (`/doesntexist`) and verify the public 404 theme.
4. Access an invalid admin URL (`/admin/doesntexist`) and verify the admin 404 theme.
5. Log into the CMS and verify the new split between the generic Dashboard and the High-Level Command Center.
