# WordPress.org Submission Notes

This repository contains two WordPress plugins. Submit them separately to WordPress.org:

1. `abdessalam-ai-toolkit-for-webmcp`
2. `abdessalam-ai-rm-addon`

Each plugin has its own `readme.txt`, plugin header metadata, stable tag, and prepared SVN-style folder under `wordpress-org/`.

## Before Submitting

- Confirm the public slug you want for each plugin.
- Confirm the plugin name is acceptable for WordPress.org review. The current main plugin name is `Abdessalam AI Toolkit for WebMCP`; it is fully GPL and does not lock features behind payment.
- Replace `Tested up to` if you test against a newer WordPress release.
- Add banner/icon assets to each `assets/` folder if desired.
- Add screenshots to each plugin folder before release if you want the screenshot section to show real images.

## Initial Review Upload

For the initial WordPress.org review form, upload a ZIP containing the plugin folder:

```bash
zip -r abdessalam-ai-toolkit-for-webmcp.zip abdessalam-ai-toolkit-for-webmcp
zip -r abdessalam-ai-rm-addon.zip abdessalam-ai-rm-addon
```

## After Approval

WordPress.org will provide an SVN repository for each approved plugin. Copy the matching prepared folder content:

- `wordpress-org/abdessalam-ai-toolkit-for-webmcp/trunk`
- `wordpress-org/abdessalam-ai-toolkit-for-webmcp/tags/3.2.6`
- `wordpress-org/abdessalam-ai-toolkit-for-webmcp/assets`

and:

- `wordpress-org/abdessalam-ai-rm-addon/trunk`
- `wordpress-org/abdessalam-ai-rm-addon/tags/1.3.7`
- `wordpress-org/abdessalam-ai-rm-addon/assets`

Do not commit GitHub `dist/` ZIP files to WordPress.org SVN.

## Current Stable Tags

- Abdessalam AI Toolkit for WebMCP: `3.2.6`
- Abdessalam AI RM Addon: `1.3.7`
