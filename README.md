# Plugin Abdessalam AI WebMCP PRO

Public source repository for the **Abdessalam AI WebMCP PRO** WordPress plugin and the **Abdessalam AI RM Addon**.

## Packages

### Abdessalam AI WebMCP PRO

`abdessalam-ai-webmcp-pro/`

Adds a WebMCP-oriented action layer to WordPress sites, including:

- Admin settings for enabling the action layer.
- AI persona wizard for site-specific agent instructions.
- Help & Docs page inside the WordPress dashboard.
- Declarative form annotations for search, comments, and generic forms.
- Front-end `document.modelContext` tool registration.
- Admin-only bridge status widget.
- Basic agent action logging in the WordPress dashboard.

### Abdessalam AI RM Addon

`abdessalam-ai-rm-addon/`

Extends Abdessalam AI WebMCP PRO for sites using WP Recipe Maker:

- Detects WP Recipe Maker recipes on singular posts.
- Registers `get_recipe_data` for structured ingredients, instructions, nutrition, and servings.
- Registers `scale_recipe_servings` for portion scaling math.
- Adds a WordPress admin status page for the recipe integration.

## Installation

1. Download a ZIP from `dist/` or package a plugin folder manually.
2. In WordPress, go to **Plugins > Add New > Upload Plugin**.
3. Upload `abdessalam-ai-webmcp-pro.zip` and activate it.
4. Optional: upload `abdessalam-ai-rm-addon.zip` and activate it on sites using WP Recipe Maker.
5. Enable the action layer from **Abdessalam AI > Abdessalam AI WebMCP** in the WordPress dashboard.

## WordPress.org Compatibility

This repository includes WordPress.org-ready package files:

- `abdessalam-ai-webmcp-pro/readme.txt`
- `abdessalam-ai-rm-addon/readme.txt`
- `abdessalam-ai-webmcp-pro/languages/abdessalam-ai-webmcp-pro.pot`
- `abdessalam-ai-rm-addon/languages/abdessalam-ai-rm-addon.pot`
- `wordpress-org/abdessalam-ai-webmcp-pro/`
- `wordpress-org/abdessalam-ai-rm-addon/`

The main toolkit and the recipe add-on should be submitted as separate WordPress.org plugins because each plugin needs its own slug, readme, review, and SVN repository.

The `wordpress-org/` folders are prepared in the expected SVN shape:

- `trunk/` for the current development release.
- `tags/{version}/` for the stable release matching the readme stable tag.
- `assets/` for future banners, icons, and screenshots.

Do not upload the `dist/` ZIP files into WordPress.org SVN. They are for GitHub/manual installation only.

Both plugins include a `languages/` directory with a POT file so translators can create locale-specific `.po` and `.mo` files.

## Help & Documentation

After activation, open **Abdessalam AI > Help & Docs** in the WordPress dashboard.

That page explains:

- What Abdessalam AI WebMCP PRO does for WordPress sites.
- How to enable the action layer and declarative form mapping.
- How to use the AI Persona Wizard.
- How bloggers can guide AI agents toward accurate site search and post discovery.
- How food bloggers can use the RM Addon with WP Recipe Maker.
- Which WebMCP tools are registered on the front end.
- Common troubleshooting steps.

## How It Helps Users

Abdessalam AI WebMCP PRO gives AI-enabled browsers a clearer way to understand a WordPress site. Instead of relying only on visual scraping, agents can read site instructions, discover labeled forms, and use structured tools. For visitors, this can mean more accurate help, cleaner navigation, and fewer mistaken summaries.

For bloggers and publishers, the plugin helps AI assistants understand the site's niche, tone, and preferred content-discovery flow. This is useful for archives, how-to posts, reviews, tutorials, news, and resource libraries.

For food bloggers, the Abdessalam AI RM Addon exposes recipe data from WP Recipe Maker in a structured format. AI agents can read ingredients, instructions, nutrition, and serving counts more reliably, then help visitors with recipe summaries, shopping lists, and portion scaling.

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
php -l abdessalam-ai-webmcp-pro/abdessalam-ai-webmcp-pro.php
php -l abdessalam-ai-rm-addon/abdessalam-ai-rm-addon.php
```

Build release ZIPs:

```bash
zip -r dist/abdessalam-ai-webmcp-pro.zip abdessalam-ai-webmcp-pro
zip -r dist/abdessalam-ai-rm-addon.zip abdessalam-ai-rm-addon
```

## License

GPL-2.0-or-later. See `LICENSE`.
