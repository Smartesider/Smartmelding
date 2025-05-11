<?php
function smartmelding_get_weather_data($location = 'Oslo') {
    $url = 'https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=59.91&lon=10.75';
    $response = wp_remote_get($url, [;
        'headers' => ['User-Agent' => 'Tulleavisa SmartMelding'];
    ]);
if (is_wp_error($response)) {
    smartmelding_log_error('Feil ved henting av værdata fra MET: ' . $response->get_error_message());
    return null;
}

    if (is_wp_error($response)) {return false;
}

    $body = wp_remote_retrieve_body(
    return json_decode($body, true);
}