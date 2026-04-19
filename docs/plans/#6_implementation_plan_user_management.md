# User Management & RBAC Integration Plan

This plan introduces a dedicated User Management system into the BufferZone CMS, enabling administrators to manage access with a clear Role-Based Access Control (RBAC) hierarchy.

## User Review Required

> [!IMPORTANT]
> - I will be defining two distinct roles: `super-admin` (Full Control) and `view-only-admin` (Standard Analytics & Monitoring).
> - New user accounts will require a unique username and email.
> - Super-Admins will be prevented from deleting their own accounts to avoid system lockouts.

## Proposed Changes

### [CMS Security & RBAC]

#### [NEW] [RBAC.md](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/docs/RBAC.md)
- Document the role hierarchy and permission matrix.
- `super-admin`: Full filesystem, user, and command access.
- `view-only-admin`: dashboard viewing and content inspection without modification rights.

### [User Management UI]

#### [MODIFY] [admin.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/layouts/admin.blade.php)
- Add "User Management" link under the "Support" section.
- Implement conditional rendering to ensure only `super-admin` users see this button.

#### [NEW] [UserManager.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/app/Livewire/Admin/UserManager.php)
- Livewire component to fetch and manage users.
- Support for `Search`, `Create`, `Update Role`, and `Delete`.

#### [NEW] [user-manager.blade.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/resources/views/livewire/admin/user-manager.blade.php)
- A premium, dark-themed management interface matching the Command Suite aesthetic.
- Interactive user cards with role badges and action buttons.

### [Routing & Auth]

#### [MODIFY] [web.php](file:///c:/AppDev/BufferZoneEMS/BufferZoneLaravel/routes/web.php)
- Register the `/admin/users` route within the `superadmin` middleware group.

## Verification Plan

### Automated Tests (Browser Subagent)
1. **Admin Access**:
   - Log in as the primary `super-admin`.
   - Navigate to the new User Management page.
2. **User Creation**:
   - Create a test `view-only-admin` account.
   - Verify the new user appears in the list.
3. **RBAC Validation**:
   - Log out and log back in as the new `view-only-admin`.
   - Verify that the "User Management" and "Terminal" links are HIDDEN.
   - Attempt to access `/admin/users` directly and verify redirection/403.
4. **Cleanup**:
   - Log back in as `super-admin` and delete the test account.

### Manual Verification
- Verify that the sidebar icons and layout remain consistent with the existing design system.
