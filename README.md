# Plugin WebMCP Toolkit PRO

Public source repository for the **WebMCP Toolkit PRO** WordPress plugin and the **WebMCP Recipe Maker Addon**.

## Packages

### WebMCP Toolkit PRO

`webmcp-toolkit-pro/`

Adds a WebMCP-oriented action layer to WordPress sites, including:

- Admin settings for enabling the action layer.
- AI persona wizard for site-specific agent instructions.
- Help & Docs page inside the WordPress dashboard.
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

## WordPress.org Compatibility

This repository includes WordPress.org-ready package files:

- `webmcp-toolkit-pro/readme.txt`
- `webmcp-recipe-maker-addon/readme.txt`
- `wordpress-org/webmcp-toolkit-pro/`
- `wordpress-org/webmcp-recipe-maker-addon/`

The main toolkit and the recipe add-on should be submitted as separate WordPress.org plugins because each plugin needs its own slug, readme, review, and SVN repository.

The `wordpress-org/` folders are prepared in the expected SVN shape:

- `trunk/` for the current development release.
- `tags/{version}/` for the stable release matching the readme stable tag.
- `assets/` for future banners, icons, and screenshots.

Do not upload the `dist/` ZIP files into WordPress.org SVN. They are for GitHub/manual installation only.

## Help & Documentation

After activation, open **WebMCP AI > Help & Docs** in the WordPress dashboard.

That page explains:

- What WebMCP Toolkit PRO does for WordPress sites.
- How to enable the action layer and declarative form mapping.
- How to use the AI Persona Wizard.
- How bloggers can guide AI agents toward accurate site search and post discovery.
- How food bloggers can use the Recipe Maker Addon with WP Recipe Maker.
- Which WebMCP tools are registered on the front end.
- Common troubleshooting steps.

## How It Helps Users

WebMCP Toolkit PRO gives AI-enabled browsers a clearer way to understand a WordPress site. Instead of relying only on visual scraping, agents can read site instructions, discover labeled forms, and use structured tools. For visitors, this can mean more accurate help, cleaner navigation, and fewer mistaken summaries.

For bloggers and publishers, the plugin helps AI assistants understand the site's niche, tone, and preferred content-discovery flow. This is useful for archives, how-to posts, reviews, tutorials, news, and resource libraries.

For food bloggers, the WebMCP Recipe Maker Addon exposes recipe data from WP Recipe Maker in a structured format. AI agents can read ingredients, instructions, nutrition, and serving counts more reliably, then help visitors with recipe summaries, shopping lists, and portion scaling.

## Available Tools

- `get_agent_instructions`: returns the saved site persona and interaction rules.
- `get_post_details`: logs and returns a structured response for a requested WordPress post ID.
- `get_recipe_data`: added by the recipe add-on on posts with WP Recipe Maker recipes.
- `scale_recipe_servings`: added by the recipe add-on to calculate a serving-size multiplier.

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
