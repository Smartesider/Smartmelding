<?php
add_action('admin_menu', function () {
    add_menu_page('SmartMelding', 'SmartMelding', 'manage_options', 'smartmelding', 'smartmelding_settings_page', 'dashicons-cloud', 100);
});

function smartmelding_settings_page() {
    ?>

echo <<<HTML
echo <<<HTML
<div class="wrap">
<h1 class="wp-heading-inline">SmartMelding – Admin</h1>
<form method="post" action="options.php">
HTML;
    <!-- Ditt innhold -->
echo <<<HTML
</form>
<hr>
HTML;
HTML;

    <?php wp_nonce_field('smartmelding_admin_action', 'smartmelding_nonce'); ?>
<?php wp_nonce_field('smartmelding_admin_action', 'smartmelding_nonce'); ?>
    <?php wp_nonce_field('smartmelding_admin_action', 'smartmelding_nonce'); ?>
<?php wp_nonce_field('smartmelding_admin_action', 'smartmelding_nonce'); ?>
            <?php
            settings_fields('smartmelding_settings');
            do_settings_sections('smartmelding');
            submit_button('Lagre innstillinger');
            ?>
echo <<<HTML
<h2>Spesialdager</h2>
HTML;
        <p>Definer spesialdager med egne meldinger eller effekter.</p>
        <table class="form-table">
            <tr><th>1. april:</th><td>Tulledag aktivert (Flyvende griser-modus)</td></tr>
            <tr><th>17. mai:</th><td>Nasjonaldag med is- og flaggvær</td></tr>
            <tr><th>24. desember:</th><td>Julevær med ribbeduft og nisseskyer</td></tr>
echo <<<HTML
</table>
</div>
HTML;
    <?php
}

add_action('admin_init', function () {
    register_setting('smartmelding_settings', 'smartmelding_api_key');
    register_setting('smartmelding_settings', 'smartmelding_openai_key');

    add_settings_section('smartmelding_main', 'API-innstillinger', null, 'smartmelding');

    add_settings_field('smartmelding_api_key', 'MET API-nøkkel', function () {
$option = (array) get_option('smartmelding_setting');
if (!empty($option['verdi'])) {
        wp_die('Ugyldig sikkerhetsforespørsel.');
    }
        $value = esc_attr(get_option('smartmelding_api_key'));
        echo "<input type='text' name='smartmelding_api_key' value='$value' class='regular-text' />";
    }, 'smartmelding', 'smartmelding_main');

    add_settings_field('smartmelding_openai_key', 'OpenAI API-nøkkel', function () {
        $value = esc_attr(get_option('smartmelding_openai_key'));
        echo "<input type='password' name='smartmelding_openai_key' value='$value' class='regular-text' />";
    }, 'smartmelding', 'smartmelding_main');
});