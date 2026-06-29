# Plugin WebMCP Toolkit PRO

Public source repository for the **WebMCP Toolkit PRO** WordPress plugin and the **WebMCP Recipe Maker Addon**.

## Packages

### WebMCP Toolkit PRO

`webmcp-toolkit-pro/`

Adds a WebMCP-oriented action layer to WordPress sites, including:

- Admin settings for enabling the action layer.
- AI persona wizard for site-specific agent instructions.
- Declarative form annotations for search, comments, and generic forms.
- Front-end `document.modelContext` tool registration.
- Admin-only bridge status widget.
- Basic agent action logging in the WordPress dashboard.

### WebMCP Recipe Maker Addon

`webmcp-recipe-maker-addon/`

Extends WebMCP Toolkit PRO for sites using WP Recipe Maker:

- Detects WP Recipe Maker recipes on singular posts.
- Registers `get_recipe_data` for structured ingredients, instructions, nutrition, and servings.
- Registers `scale_recipe_servings` for portion scaling math.
- Adds a WordPress admin status page for the recipe integration.

## Installation

1. Download a ZIP from `dist/` or package a plugin folder manually.
2. In WordPress, go to **Plugins > Add New > Upload Plugin**.
3. Upload `webmcp-toolkit-pro.zip` and activate it.
4. Optional: upload `webmcp-recipe-maker-addon.zip` and activate it on sites using WP Recipe Maker.
5. Enable the action layer from **WebMCP AI > WebMCP v3** in the WordPress dashboard.

## Requirements

- WordPress 6.0 or newer recommended.
- PHP 7.4 or newer recommended.
- WP Recipe Maker is required only for the recipe add-on.

## Development

Run PHP syntax checks:

```bash
php -l webmcp-toolkit-pro/webmcp-toolkit-pro.php
php -l webmcp-recipe-maker-addon/webmcp-recipe-maker-addon.php
```

Build release ZIPs:

```bash
zip -r dist/webmcp-toolkit-pro.zip webmcp-toolkit-pro
zip -r dist/webmcp-recipe-maker-addon.zip webmcp-recipe-maker-addon
```

## License

GPL-2.0-or-later. See `LICENSE`.
