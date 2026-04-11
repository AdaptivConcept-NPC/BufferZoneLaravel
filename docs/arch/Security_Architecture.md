# BufferZone EMS Security Architecture

## 1. Identity & Authentication
The administrative ecosystem has transitioned from hardcoded `.env` credentials to a **Database-Backed Identity System**.

### 1.1 Centralized User Registry
- **Table**: `users`
- **Identity Provider**: Laravel (Bcrypt hashing)
- **Unified Login**: Both the Laravel Command Center and the Node CMS authenticate against the same `users` table.

### 1.2 Administrative Accounts
| Account | Role | Purpose |
| :--- | :--- | :--- |
| `admin-tmp` | `super-admin` | Full system control, destructive actions, terminal access. |
| `admin-ems` | `view-only-admin` | System monitoring, viewing enquiries/gallery without modification rights. |

## 2. Role-Based Access Control (RBAC)

### 2.1 Middleware Protection
- **`IsAdmin`**: Ensures the user is authenticated as an administrator.
- **`SuperAdminOnly`**: Restricts the following actions to `super-admin` users:
  - Destructive API calls (POST, DELETE, PATCH, PUT).
  - Artisan command execution.
  - Media management (Upload/Delete).

### 2.2 UI Hardening
The interface dynamically adapts to the user's role:
- **Laravel Dashboard**: The "Terminal" button is hidden/locked for view-only users.
- **Node CMS**: "Add Image", "Delete", and "Edit" buttons are removed from the DOM for view-only users.
- **Contacts**: Deletion and "Mark as Read" buttons are hidden for view-only users.

## 3. Audit Logging & Redundancy

### 3.1 Dual-Persistence Strategy
Every administrative action (logins, command execution, gallery modifications) is logged twice:
1.  **Database**: The `audit_logs` table for structured querying and reporting.
2.  **File System**: Redundant logging in `storage/logs/audit.log` (monitored by standard server tools).

### 3.2 Audit Coverage
Log events include:
- `auth_login`: High-level tracking of successful entries.
- `command_execute`: Tracking of specific Artisan commands run.
- `gallery_upload` / `gallery_delete` / `gallery_update`: Full trail of content changes.
- `RBAC_DENIED`: Logs unauthorized attempts by view-only users to perform restricted actions.

## 4. Production Deployment Instructions

### 4.1 Running Migrations
To upgrade the production database, execute:
```bash
php artisan migrate --force
```

### 4.2 Account Initialization
To bootstrap the super-admin and monitor accounts on production, run:
```bash
php artisan app:setup-identity
```
*Note: Credentials will be sent to thabang.mposula@outlook.com.*
