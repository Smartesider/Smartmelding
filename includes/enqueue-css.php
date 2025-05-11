<?php
function smartmelding_enqueue_styles() {
    wp_enqueue_style('smartmelding-style', SMARTMELDING_URL . 'assets/smartmelding.css');
}
add_action('wp_enqueue_scripts', 'smartmelding_enqueue_styles');
