# BufferZone EMS - CMS User Guide

Welcome to the **Buffer Zone EMS Command Suite**. This administrative portal is tailored to give you real-time analytics, rapid page editing capabilities, and a streamlined view of all customer communications.

This guide provides a comprehensive walkthrough of the backend systems.

---

## 1. Authentication & Access

The Command Suite is protected by strict Role-Based Access Control (RBAC). 

1. **URL**: Navigate to your secure portal endpoint (e.g., `bufferzoneems.co.za/lara/public/admin/login`).
2. **Credentials**: Enter your assigned `Username` and `Password`.
3. **Roles**:
   - **Admin**: Has access to the main dashboard, page editor, and contact inbox.
   - **Super-Admin**: Has all Admin privileges, plus access to the **Command Center** and **Terminal** for deep system diagnostics.

> [!CAUTION]
> Treat your Super-Admin credentials with care, as this role allows execution of system-level caching and optimization scripts that dictate the live site's behavior.

---

## 2. The Dashboard

Upon logging in, you will land on the **Dashboard Overview**. This is your daily operations command center.

- **KPI Cards**: See high-level system metrics at a glance:
  - **Enquiries**: Total messages in your inbox and their growth trend.
  - **Site Traffic**: High-level traffic estimations (if connected to your analytics).
  - **CMS Pages**: A quick indicator of how many pages are currently active versus drafted.
  - **Active Coverages**: A pulse check on active EMS events.
- **Quick Links**: Large buttons to rapidly jump to your Inbox, the Page Manager, or the Live Site preview.

---

## 3. Page Manager

Located under `Page Manager` in the sidebar, this tool empowers you to edit website text seamlessly without touching code.

1. **Select a Page**: Use the dropdown (or tabs) to choose the page you want to edit (e.g., *Home* or *About*).
2. **Form Editor**: 
   - Each page is broken down into thematic sections (like the *Hero Section* or *Welcome Message*). 
   - Make edits to titles, subtitles, and paragraphs.
3. **Dynamic Saving**: When you click **Deploy Changes**, the system will permanently update the database and instantly compile the new data on the live site. A success notification will appear at the top of your screen.

> [!TIP]
> Use the "Live Site" button in the sidebar to open your website in an adjacent tab. This allows you to quickly verify your text formatting immediately after saving!

---

## 4. Contact Inbox

Located under `Contact Inbox`, this is where all customer submissions from the live website's Contact Form are securely routed.

- **Unread Signals**: New messages are highlighted.
- **Message Details**: Click into any message to view the user's Name, Phone Number, Email, and their detailed inquiry.
- **Status Toggles**: You can mark messages as **Resolved** by toggling their read-status. This helps keep the team coordinated on which customer inquiries still require dispatch or follow-up.

---

## 5. Super-Admin Tools

If you possess a `super_admin` role, you will see a section labeled **High-Level** on your sidebar.

### Command Center
- This is a diagnostic interface monitoring the server's pulse. It reports PHP version, database heartbeat, error log statuses, and active cache utilization.
- **Maintenance Overrides**: Allows the rapid deployment of "Maintenance Mode", bringing the patient-facing site offline with a professional notice during heavy upgrades.

### Terminal (Artisan Commands)
- Allows execution of routine Laravel commands without SSH access.
- **Clear Cache**: Use `View Clear` or `Route Clear` if the live site appears to be lagging behind recent structural modifications.

---

## 6. Security & Logout

When your operational shift is complete, please follow security best practices:
- **Logging Out**: On the bottom-left of the sidebar, click the red **Logout** button. 
- You will be securely de-identified from the session and returned to the system login wall.

> [!NOTE]
> If you close the browser window without logging out, the system will eventually expire your session automatically for security reasons.

*Need more help? Contact your designated software support channel for escalation.*
