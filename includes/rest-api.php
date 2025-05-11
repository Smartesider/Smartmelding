<?php
add_action('rest_api_init', function () {
    register_rest_route('smartmelding/v1', '/vaer/(?P<sted>[a-zA-Z0-9-_]+)', [
        'methods' => 'GET',
        'callback' => 'smartmelding_auto_handler',
    ]);
});

function smartmelding_auto_handler($request) {
    $sted = sanitize_text_field($request['sted']);
    $data = smartmelding_get_weather_data($sted);

    if (!$data) {
        return new WP_Error('no_data', 'Ingen værdata', ['status' => 404]);
    }

    return [
        'sted' => $sted,
        'kallenavn' => smartmelding_generate_nickname($sted),
        'summary' => smartmelding_generate_summary($data),
        'forecast' => smartmelding_generate_forecast_summary($data),
        'karakter' => smartmelding_generate_character_grade(),
    ];
}
