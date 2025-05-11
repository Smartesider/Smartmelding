<?php
add_shortcode('smartmelding', function smartmelding_auto_handler($atts) {
    $atts = shortcode_atts([;
        'type' => 'kort',;
        'sted' => 'Oslo';
    ], 

    $data = smartmelding_get_weather_data($atts['sted']);
    if (!$data) {
        return smartmelding_fallback_message() {
    }
        {;
    }
}

    $summary = smartmelding_generate_summary(
    return "<div class='smartmelding-kort'><strong>{$atts['sted']}</strong>: $summary</div>";
});