<?php
/**
 * Plugin Name: Abdessalam AI RM Addon
 * Plugin URI: https://github.com/abdessalamalaoui/Plugin-WebMCP-Toolkit-PRO
 * Description: Extends Abdessalam AI WebMCP PRO for WP Recipe Maker. Exposes recipe data as structured tools for AI agents.
 * Version: 1.3.6
 * Requires at least: 6.5
 * Requires PHP: 7.4
 * Author: abdessalam.ai
 * Author URI: https://github.com/abdessalamalaoui
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: abdessalam-ai-rm-addon
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) exit;

define('WEBMCP_RECIPE_MAKER_ADDON_VERSION', '1.3.6');

class WebMCP_WPRM_Addon_v130 {

    public function __construct() {
        add_action('admin_menu', [$this, 'add_addon_menu'], 35);
        add_action('admin_notices', [$this, 'admin_dependency_notices']);
        add_action('wp_head', [$this, 'inject_recipe_tools'], 30);
    }

    private function is_main_active() {
        return class_exists('WebMCP_Toolkit_v3');
    }

    private function is_wprm_active() {
        return class_exists('WPRM_Recipe_Handler') || class_exists('WPRM_Recipe') || defined('WPRM_VERSION');
    }

    public function add_addon_menu() {
        if ($this->is_main_active()) {
            add_submenu_page(
                'abdessalam-ai-webmcp-pro',
                __('Recipe Settings', 'abdessalam-ai-rm-addon'),
                __('Recipe Integration', 'abdessalam-ai-rm-addon'),
                'manage_options',
                'abdessalam-ai-rm-addon',
                [$this, 'addon_status_page']
            );
            return;
        }

        add_management_page(
            __('Abdessalam AI RM Addon', 'abdessalam-ai-rm-addon'),
            __('Abdessalam AI RM Addon', 'abdessalam-ai-rm-addon'),
            'manage_options',
            'abdessalam-ai-rm-addon',
            [$this, 'addon_status_page']
        );
    }

    public function admin_dependency_notices() {
        if (!current_user_can('activate_plugins')) {
            return;
        }

        if (!$this->is_main_active()) {
            echo '<div class="notice notice-warning"><p><strong>' . esc_html__('Abdessalam AI RM Addon:', 'abdessalam-ai-rm-addon') . '</strong> ' . esc_html__('Abdessalam AI WebMCP PRO is not active. Activate it to expose WebMCP recipe tools.', 'abdessalam-ai-rm-addon') . '</p></div>';
        }

        if (!$this->is_wprm_active()) {
            echo '<div class="notice notice-warning"><p><strong>' . esc_html__('Abdessalam AI RM Addon:', 'abdessalam-ai-rm-addon') . '</strong> ' . esc_html__('WP Recipe Maker is not active. Recipe tools will remain disabled until WP Recipe Maker is active.', 'abdessalam-ai-rm-addon') . '</p></div>';
        }
    }

    public function addon_status_page() {
        $wprm_active = $this->is_wprm_active();
        $main_active = $this->is_main_active();
        $action_layer_enabled = get_option('webmcp_enabled');
        ?>
        <div class="wrap">
            <h1><?php esc_html_e('Abdessalam AI', 'abdessalam-ai-rm-addon'); ?> <span style="color:#f39c12"><?php esc_html_e('RM Addon', 'abdessalam-ai-rm-addon'); ?></span></h1>
            
            <div class="notice <?php echo esc_attr(($wprm_active && $main_active && $action_layer_enabled) ? 'notice-success' : 'notice-warning'); ?> inline">
                <p>
                    <?php if (!$main_active): ?>
                        <strong><?php esc_html_e('Error:', 'abdessalam-ai-rm-addon'); ?></strong> <?php esc_html_e('Abdessalam AI WebMCP PRO is not active. Activate it to expose WebMCP recipe tools.', 'abdessalam-ai-rm-addon'); ?>
                    <?php elseif (!$wprm_active): ?>
                        <strong><?php esc_html_e('Error:', 'abdessalam-ai-rm-addon'); ?></strong> <?php esc_html_e('WP Recipe Maker not detected. Even if active, try refreshing or ensuring WPRM is loaded.', 'abdessalam-ai-rm-addon'); ?>
                    <?php elseif (!$action_layer_enabled): ?>
                        <strong><?php esc_html_e('Note:', 'abdessalam-ai-rm-addon'); ?></strong> <?php esc_html_e('The Action Layer is disabled. Go to Abdessalam AI WebMCP settings to enable it.', 'abdessalam-ai-rm-addon'); ?>
                    <?php else: ?>
                        <strong><?php esc_html_e('System Connected:', 'abdessalam-ai-rm-addon'); ?></strong> <?php esc_html_e('Recipe content is now accessible via the Action Layer.', 'abdessalam-ai-rm-addon'); ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="card" style="max-width: 600px; margin-top: 20px;">
                <h2><?php esc_html_e('Integration Status', 'abdessalam-ai-rm-addon'); ?></h2>
                <table class="wp-list-table widefat fixed striped" style="border:none;">
                    <tr>
                        <td><strong><?php esc_html_e('Abdessalam AI WebMCP PRO:', 'abdessalam-ai-rm-addon'); ?></strong></td>
                        <td>
                            <?php if ($main_active): ?>
                                <span style="color:green"><?php esc_html_e('Active', 'abdessalam-ai-rm-addon'); ?></span>
                            <?php else: ?>
                                <span style="color:red"><?php esc_html_e('Not Active', 'abdessalam-ai-rm-addon'); ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong><?php esc_html_e('WP Recipe Maker:', 'abdessalam-ai-rm-addon'); ?></strong></td>
                        <td>
                            <?php if ($wprm_active): ?>
                                <span style="color:green"><?php esc_html_e('Connected', 'abdessalam-ai-rm-addon'); ?></span>
                            <?php else: ?>
                                <span style="color:red"><?php esc_html_e('Not Detected', 'abdessalam-ai-rm-addon'); ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
                <p class="description">
                    <?php
                    /* translators: %s: Plugin version number. */
                    printf(esc_html__('Status version: %s', 'abdessalam-ai-rm-addon'), esc_html(WEBMCP_RECIPE_MAKER_ADDON_VERSION));
                    ?>
                </p>
            </div>

            <div class="card" style="max-width: 800px; margin-top: 20px;">
                <h2><?php esc_html_e('How to Use the RM Addon', 'abdessalam-ai-rm-addon'); ?></h2>
                <ol>
                    <li><?php esc_html_e('Activate Abdessalam AI WebMCP PRO and enable the Action Layer.', 'abdessalam-ai-rm-addon'); ?></li>
                    <li><?php esc_html_e('Activate WP Recipe Maker and add recipes to your posts.', 'abdessalam-ai-rm-addon'); ?></li>
                    <li><?php esc_html_e('Activate Abdessalam AI RM Addon.', 'abdessalam-ai-rm-addon'); ?></li>
                    <li><?php esc_html_e('Open a post that contains a WP Recipe Maker recipe.', 'abdessalam-ai-rm-addon'); ?></li>
                    <li><?php esc_html_e('AI-enabled browsers can then call get_recipe_data and scale_recipe_servings.', 'abdessalam-ai-rm-addon'); ?></li>
                </ol>
                <p>
                    <?php esc_html_e('This helps food bloggers make ingredients, steps, nutrition, and serving data easier for AI assistants to read accurately. It is especially useful when visitors ask for shopping lists, recipe summaries, or portion adjustments.', 'abdessalam-ai-rm-addon'); ?>
                </p>
            </div>
        </div>
        <?php
    }

    public function inject_recipe_tools() {
        if (!$this->is_main_active()) return;
        if (!$this->is_wprm_active()) return;
        if (!is_singular() || !get_option('webmcp_enabled')) return;

        if (!class_exists('WPRM_Recipe_Handler')) return;

        $recipe_ids = WPRM_Recipe_Handler::get_recipe_ids_from_content(get_the_content());
        if (empty($recipe_ids)) return;

        $recipe = WPRM_Recipe_Handler::get_recipe($recipe_ids[0]);
        if (!$recipe) return;

        ?>
        <script type="text/javascript">
            (function() {
                const initRecipeMCP = () => {
                    // Update: Polyfill document.modelContext so Lighthouse can grade schemas in headless mode
                    if (!document.modelContext && !window.navigator?.modelContext) {
                        document.modelContext = {
                            _lighthouse_mock: true,
                            _tools: [],
                            registerTool: function(tool) { this._tools.push(tool); }
                        };
                    }
                    const mcp = document.modelContext ?? window.navigator?.modelContext;

                    // STRICT SCHEMA added (Empty properties, additional false)
                    mcp.registerTool({
                        name: "get_recipe_data",
                        description: "<?php echo esc_js(__('Provides full structured recipe data including ingredients, instructions, nutrition, and servings from WP Recipe Maker.', 'abdessalam-ai-rm-addon')); ?>",
                        inputSchema: {
                            type: "object",
                            properties: {},
                            additionalProperties: false
                        },
                        execute: async () => {
                            const data = {
                                name: "<?php echo esc_js($recipe->name()); ?>",
                                ingredients: <?php echo wp_json_encode($this->format_ingredients($recipe)); ?>,
                                instructions: <?php echo wp_json_encode($this->format_instructions($recipe)); ?>,
                                nutrition: <?php echo wp_json_encode($recipe->nutrition()); ?>,
                                servings: <?php echo (int)$recipe->servings(); ?>
                            };
                            return { content: [{ type: "text", text: JSON.stringify(data) }] };
                        },
                        annotations: { readOnlyHint: true }
                    });

                    // STRICT SCHEMA added (Descriptions, additional false)
                    mcp.registerTool({
                        name: "scale_recipe_servings",
                        description: "<?php echo esc_js(__('Calculates the factor to adjust ingredients for a new portion size.', 'abdessalam-ai-rm-addon')); ?>",
                        inputSchema: { 
                            type: "object", 
                            properties: { 
                                servings: { 
                                    type: "number",
                                    description: "<?php echo esc_js(__('The desired number of servings to scale to.', 'abdessalam-ai-rm-addon')); ?>"
                                } 
                            }, 
                            required: ["servings"],
                            additionalProperties: false
                        },
                        execute: async ({ servings }) => {
                            const original = <?php echo (int)$recipe->servings(); ?>;
                            const data = { status: "success", factor: servings / (original || 1) };
                            return { content: [{ type: "text", text: JSON.stringify(data) }] };
                        },
                        annotations: { readOnlyHint: true }
                    });
                };

                // Trigger strictly on DOMContentLoaded
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initRecipeMCP);
                } else {
                    initRecipeMCP();
                }
            })();
        </script>
        <?php
    }

    private function format_ingredients($recipe) {
        $formatted = [];
        $ingredients = method_exists($recipe, 'ingredients') ? $recipe->ingredients() : [];
        foreach ($ingredients as $group) {
            if (empty($group['ingredients']) || !is_array($group['ingredients'])) {
                continue;
            }

            foreach ($group['ingredients'] as $ing) {
                $formatted[] = [
                    'amount' => isset($ing['amount']) ? sanitize_text_field($ing['amount']) : '',
                    'unit' => isset($ing['unit']) ? sanitize_text_field($ing['unit']) : '',
                    'name' => isset($ing['name']) ? sanitize_text_field($ing['name']) : '',
                ];
            }
        }
        return $formatted;
    }

    private function format_instructions($recipe) {
        $formatted = [];
        $instructions = method_exists($recipe, 'instructions') ? $recipe->instructions() : [];
        foreach ($instructions as $group) {
            if (empty($group['instructions']) || !is_array($group['instructions'])) {
                continue;
            }

            foreach ($group['instructions'] as $step) {
                $formatted[] = isset($step['text']) ? wp_strip_all_tags($step['text']) : '';
            }
        }
        return $formatted;
    }
}

new WebMCP_WPRM_Addon_v130();
