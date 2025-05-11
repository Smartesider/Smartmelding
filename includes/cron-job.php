<?php

// Sjekk og opprett planlagt cron-event
function smartmelding_schedule_cron() {
    if (!wp_next_scheduled('smartmelding_cron_event')) {
        wp_schedule_event(time(), 'hourly', 'smartmelding_cron_event');
    }
}
add_action('wp', 'smartmelding_schedule_cron');

// Koble funksjonen til cron-eventet
add_action('smartmelding_cron_event', 'smartmelding_cron_function');

function smartmelding_cron_function() {
    if (defined('SMARTMELDING_PLUGIN_DIR')) {
        error_log('[SmartMelding Cron] Cron-jobb kjørt: ' . date('Y-m-d H:i:s'));
    }
}
