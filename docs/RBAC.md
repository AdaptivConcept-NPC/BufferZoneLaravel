# BufferZone CMS: Role-Based Access Control (RBAC)

This document outlines the security architecture and permission matrix for the BufferZone Command Suite.

## Role Hierarchy

| Role | Badge | Description |
| :--- | :--- | :--- |
| `super-admin` | <span style="color: #D31111;">●</span> **Root** | Full system authority. Can manage users, execute terminal commands, and perform destructive file operations. |
| `view-only-admin` | <span style="color: #4A6070;">●</span> **Standard** | Operational monitoring. Access to dashboard, page content, and inbox is read-only. Cannot modify users or execute system commands. |

## Permission Matrix

| Feature / Resource | `super-admin` | `view-only-admin` |
| :--- | :---: | :---: |
| Admin Dashboard | View | View |
| Page Content Editor | Read/Write | Read-Only |
| Image Gallery | Upload/Delete | View-Only |
| Contact Inbox | Read/Delete | Read-Only |
| User Management | Full | Access Denied |
| System Terminal | Full | Access Denied |
| Audit Logs | View | Access Denied |

## Security Implementation

### 1. Middleware Layer
- `IsAdmin`: Validates that the user session is active and valid for the `/admin` prefix.
- `SuperAdminOnly`: Strictly enforces `super-admin` role requirement for sensitive routes and API endpoints.

### 2. UI Persistence
- Navigation items for restricted zones are conditionally rendered based on user role.
- Destructive buttons (Delete, Upload, Save) are hidden or disabled for `view-only-admin` users.

### 3. API Protection
- All destructive API endpoints (`POST`, `PATCH`, `DELETE`) are wrapped in the `SuperAdminOnly` middleware.
- Unauthorized attempts are automatically logged to the `audit_logs` table for security review.
