=== WebMCP Recipe Maker Addon ===
Contributors: abdessalamalaoui
Tags: recipes, food blog, wp recipe maker, ai, webmcp
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.3.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds structured WebMCP recipe tools for sites using WebMCP Toolkit PRO and WP Recipe Maker.

== Description ==

WebMCP Recipe Maker Addon extends WebMCP Toolkit PRO for food blogs and recipe sites using WP Recipe Maker.

When a singular WordPress post contains a WP Recipe Maker recipe and the WebMCP action layer is enabled, the add-on registers structured tools that AI-enabled browsers can use to read recipe data more accurately.

This plugin is GPL licensed and fully functional. It does not include paid unlocks or disabled directory features.

= Main features =

* Detects WP Recipe Maker recipes on singular posts.
* Registers `get_recipe_data` with recipe name, ingredients, instructions, nutrition, and servings.
* Registers `scale_recipe_servings` to calculate portion-size adjustments.
* Adds a Recipe Integration status page under WebMCP AI.
* Includes setup guidance for food bloggers.
* Translation-ready admin screens with a bundled POT file.

= Requirements =

* WebMCP Toolkit PRO.
* WP Recipe Maker.
* WordPress 6.5 or newer.
* PHP 7.4 or newer.

== Installation ==

1. Install and activate WebMCP Toolkit PRO.
2. Install and activate WP Recipe Maker.
3. Upload the `webmcp-recipe-maker-addon` folder to `/wp-content/plugins/`.
4. Activate WebMCP Recipe Maker Addon from the Plugins screen.
5. Open WebMCP AI > Recipe Integration to confirm the connection.
6. Visit a post containing a WP Recipe Maker recipe.

== Frequently Asked Questions ==

= Does this replace WP Recipe Maker? =

No. This is an add-on that reads recipe data from WP Recipe Maker and exposes it to WebMCP-compatible AI agents.

= What tools does it add? =

It adds `get_recipe_data` and `scale_recipe_servings` on singular posts that contain a WP Recipe Maker recipe.

= Does it work on every page? =

No. Recipe tools are only registered on singular content that contains a WP Recipe Maker recipe.

= Is this a paid or trial plugin? =

No. This WordPress.org package is fully functional and GPL licensed.

== Screenshots ==

1. Recipe Integration status page.
2. Food blogger setup guidance.

== Changelog ==

= 1.3.5 =
* Improved WordPress.org compatibility for escaped admin output.
* Added safer recipe ingredient and instruction formatting.
* Added translator context for the status version string.

= 1.3.4 =
* Added language support and a languages directory.
* Added a starter translation template at `languages/webmcp-recipe-maker-addon.pot`.
* Made the dashboard status and guidance text translation-ready.

= 1.3.3 =
* Added WordPress.org-compatible plugin headers.
* Added WordPress.org readme.
* Replaced raw JSON output helpers with WordPress JSON encoding helpers.

= 1.3.2 =
* Added dashboard usage guidance for the recipe add-on.

= 1.3.1 =
* Initial public release.

== Upgrade Notice ==

= 1.3.5 =
Recommended WordPress.org compatibility update.

= 1.3.4 =
Recommended language support update.

= 1.3.3 =
Recommended compatibility update for WordPress.org packaging.
