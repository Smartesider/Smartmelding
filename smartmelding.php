<?php
/*
Plugin Name: SmartMelding
Description: Plugin for AI-basert meldingsgenerering med adminpanel og PDF-støtte.
Version: 2.0.1
Author: Kompetanse Utleie AS
*/

if (!defined('SMARTMELDING_PLUGIN_DIR')) {
    define('SMARTMELDING_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Aktiveringshook
function smartmelding_activate() {
    if (!get_option('smartmelding_activated')) {
        update_option('smartmelding_activated', current_time('mysql'));
    }
}
register_activation_hook(__FILE__, 'smartmelding_activate');

// Inkluder nødvendige moduler
require_once SMARTMELDING_PLUGIN_DIR . 'includes/admin-menu.php';
require_once SMARTMELDING_PLUGIN_DIR . 'includes/cron-job.php';
require_once SMARTMELDING_PLUGIN_DIR . 'includes/rest-api.php';
require_once SMARTMELDING_PLUGIN_DIR . 'includes/shortcodes.php';
require_once SMARTMELDING_PLUGIN_DIR . 'includes/ai-generator.php';
