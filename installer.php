<?php
// Installer & Setup Wizard (displayed once after activation)
function smartmelding_installer_notice() {
    if (get_option('smartmelding_installed') !== 'yes') {
        echo '<div class="notice notice-success is-dismissible"><p>SmartMelding er nå aktivert! Gå til <a href="' . admin_url('admin.php?page=smartmelding-settings') . '">Innstillinger</a> for å konfigurere værmeldinger og AI.</p></div>';
        update_option('smartmelding_installed', 'yes');
    }
}
add_action('admin_notices', 'smartmelding_installer_notice');
