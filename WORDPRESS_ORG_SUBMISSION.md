# WordPress.org Submission Notes

This repository contains two WordPress plugins. Submit them separately to WordPress.org:

1. `webmcp-toolkit-pro`
2. `webmcp-recipe-maker-addon`

Each plugin has its own `readme.txt`, plugin header metadata, stable tag, and prepared SVN-style folder under `wordpress-org/`.

## Before Submitting

- Confirm the public slug you want for each plugin.
- Confirm the plugin name is acceptable for WordPress.org review. The current main plugin name is `WebMCP Toolkit PRO`; it is fully GPL and does not lock features behind payment.
- Replace `Tested up to` if you test against a newer WordPress release.
- Add banner/icon assets to each `assets/` folder if desired.
- Add screenshots to each plugin folder before release if you want the screenshot section to show real images.

## Initial Review Upload

For the initial WordPress.org review form, upload a ZIP containing the plugin folder:

```bash
zip -r webmcp-toolkit-pro.zip webmcp-toolkit-pro
zip -r webmcp-recipe-maker-addon.zip webmcp-recipe-maker-addon
```

## After Approval

WordPress.org will provide an SVN repository for each approved plugin. Copy the matching prepared folder content:

- `wordpress-org/webmcp-toolkit-pro/trunk`
- `wordpress-org/webmcp-toolkit-pro/tags/3.2.4`
- `wordpress-org/webmcp-toolkit-pro/assets`

and:

- `wordpress-org/webmcp-recipe-maker-addon/trunk`
- `wordpress-org/webmcp-recipe-maker-addon/tags/1.3.4`
- `wordpress-org/webmcp-recipe-maker-addon/assets`

Do not commit GitHub `dist/` ZIP files to WordPress.org SVN.

## Current Stable Tags

- WebMCP Toolkit PRO: `3.2.4`
- WebMCP Recipe Maker Addon: `1.3.4`
