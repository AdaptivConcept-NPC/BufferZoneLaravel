# Implementation Plan - PySwissShef Lab Elevation & Redirects

This plan outlines the integration of the newly built Replit High-Level Lab environment into the PySwissShef sub-module. We will implement a "Lab Elevation" system that allows users to seamlessly navigate from the low-heat StackBlitz "Tasting Room" to the high-heat Replit "Kitchen" when a recipe requires native system access.

## User Review Required

> [!IMPORTANT]
> **Environment Detection**: We will use `window.location.hostname` to detect if the app is running in StackBlitz (`*.stackblitz.io` or `*.webcontainer.io`) vs. Replit. 
> 
> **Redirect Flow**: The "Elevate" button will open the Replit link in a new tab. For now, we will link to the main Replit lab app.

## Proposed Changes

### [Adaptivconcept-FL Parent Project]

#### [MODIFY] [LabDetail.jsx](file:///c:/AppDev/My_Linkdin/projects/adaptivconcept-npc/Adaptivconcept-FL/adaptivconcept-react/src/pages/LabDetail.jsx)
- Register `replitUrl: "https://py-portfolio-lab--thabangmposula.replit.app"` in the `labsData` object.
- Add a secondary CTA button for "High-Heat Kitchen (Replit)" to distinguish it from the standard StackBlitz console.

### [PySwissShef Sub-module]

#### [MODIFY] [RecipeDetail.jsx](file:///c:/AppDev/My_Linkdin/projects/iarxii/PySwissShef/src/pages/RecipeDetail.jsx)
- Implement environment detection logic:
  ```javascript
  const isStackBlitz = window.location.hostname.includes('stackblitz') || window.location.hostname.includes('webcontainer');
  ```
- Add a new "Condition" in the Tasting Terminal:
  - If a recipe's `security` is "High-Access" and `isStackBlitz` is true, display a prominent "ELEVATE TO HIGH-HEAT KITCHEN" button.
- The button will navigate the user to the Replit deployment.

#### [MODIFY] [index.css](file:///c:/AppDev/My_Linkdin/projects/iarxii/PySwissShef/src/index.css)
- Add `.btn-elevation` styling:
  - Gradient: `linear-gradient(135deg, #f97316 0%, #fbbf24 100%)` (Orange to Gold).
  - Hover glow effect: `box-shadow: 0 0 20px rgba(249, 115, 22, 0.5)`.

#### [MODIFY] [recipes.json](file:///c:/AppDev/My_Linkdin/projects/iarxii/PySwissShef/src/data/recipes.json)
- Ensure environment descriptions explicitly mention "Replit Required" for High-Access tools.

## Verification Plan

### Automated Tests
- Browser subagent will be used to simulate a StackBlitz environment (by mocking hostname if possible, or just verifying the logic exists) and clicking the redirect.

### Manual Verification
- Verify the new button aesthetics in the Cyber-Bistro theme.
- Confirm the Replit link opens the correct deployment.
