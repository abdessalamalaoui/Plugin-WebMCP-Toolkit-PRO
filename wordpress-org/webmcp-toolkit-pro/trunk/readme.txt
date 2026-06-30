=== WebMCP Toolkit PRO ===
Contributors: abdessalamalaoui
Tags: ai, webmcp, automation, chatbot, accessibility
Requires at least: 6.0
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 3.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds an AI-readable WebMCP action layer, persona instructions, form mapping, help documentation, and monitoring to WordPress.

== Description ==

WebMCP Toolkit PRO helps WordPress sites communicate more clearly with AI-enabled browsers and assistants.

Instead of requiring an AI agent to guess from the visual page, the plugin can expose site instructions, structured tool definitions, and labeled forms. Site owners can use the built-in AI Persona Wizard to describe their site, preferred tone, and interaction rules.

This plugin is GPL licensed and fully functional. It does not include paid unlocks or disabled directory features.

= Main features =

* WebMCP-style action layer for WordPress front-end pages.
* AI Persona Wizard for site-specific assistant instructions.
* Declarative form labels for search, comments, contact forms, and other forms.
* Dashboard Help & Docs page for setup and troubleshooting.
* Translation-ready admin screens with a bundled POT file.
* AI Monitor for recent action-layer activity.
* Structured tools including `get_agent_instructions` and `get_post_details`.

= Who it helps =

* Site owners who want AI agents to understand their site more accurately.
* Bloggers and publishers with large content archives.
* Business sites that want clearer assistant behavior around forms and search.
* Food bloggers when paired with the separate WebMCP Recipe Maker Addon.

== Installation ==

1. Upload the `webmcp-toolkit-pro` folder to `/wp-content/plugins/`.
2. Activate WebMCP Toolkit PRO from the Plugins screen.
3. Open WebMCP AI in the WordPress dashboard.
4. Enable Action Layer.
5. Optional: enable Declarative Forms.
6. Use the AI Persona Wizard to generate and save your site instructions.

== Frequently Asked Questions ==

= Does this plugin require an API key? =

No. The plugin registers front-end tools and metadata for AI-enabled browsers. It does not require an external API key.

= Does this plugin send data to a third-party service? =

No. The included code does not send plugin data to an external service.

= What is the AI Monitor? =

AI Monitor shows recent WebMCP tool activity logged by the plugin so administrators can see when action-layer tools are used.

= Is this a paid or trial plugin? =

No. This WordPress.org package is fully functional and GPL licensed.

= How do I add recipe support? =

Install WP Recipe Maker and the separate WebMCP Recipe Maker Addon.

== Screenshots ==

1. Core WebMCP settings and AI Persona Wizard.
2. Help & Docs page.
3. AI Monitor.

== Changelog ==

= 3.2.4 =
* Added language loading and a languages directory.
* Added a starter translation template at `languages/webmcp-toolkit-pro.pot`.
* Made the main dashboard screens, help page, monitor, and admin bridge text translation-ready.

= 3.2.3 =
* Added WordPress.org-compatible plugin headers.
* Added WordPress.org readme.
* Added settings sanitization.
* Hardened action logging with authenticated AJAX, nonce verification, and sanitized log data.
* Improved escaping for dashboard output.

= 3.2.2 =
* Added dashboard Help & Docs page.
* Added user guidance for bloggers, publishers, and food bloggers.

= 3.2.1 =
* Initial public release.

== Upgrade Notice ==

= 3.2.4 =
Recommended language and WordPress.org compatibility update.

= 3.2.3 =
Recommended compatibility and hardening update for WordPress.org packaging.
