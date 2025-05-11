<?php
function smartmelding_generate_forecast_summary($weather_data) {
    // Returner enkel AI-basert 5-dagers oppsummering
    $summary = "TulleLangtidsvarsel:\n";
    for ($i = 0; $i < 5; $i++) {
        $day = date('l', strtotime("+$i day"));
        $summary .= "- $day: Like uforutsigbart som onkel Kåres humør.\n";
    }
    return $summary;
}
