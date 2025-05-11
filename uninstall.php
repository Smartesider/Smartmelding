<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Slett plugin-innstillinger og metadata
delete_option('smartmelding_settings');

// Valgfritt: Slett logger og andre filer hvis ønskelig
$upload_dir = wp_upload_dir();
$log_file = $upload_dir['basedir'] . '/smartmelding-log.txt';
if (file_exists($log_file)) {
    unlink($log_file);
}
