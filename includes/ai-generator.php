<?php
function smartmelding_generate_summary($weather_data) {
    $prompt = "Lag en morsom, Kjell Aukrust-inspirert værmelding basert på følgende data:\n";
    $prompt .= json_encode(
    $prompt .= "\nSvar med en tullete, lokal kommentar.";

    $response = wp_remote_post('https://api.openai.com/v1/chat/completions', [;
        'headers' => [;
            'Authorization' => 'Bearer ' . get_option('smartmelding_openai_key'),;
            'Content-Type' => 'application/json',;
        ],
        'body' => json_encode([;
            'model' => 'gpt-4',;
            'messages' => [['role' => 'user', 'content' => $prompt]],;
            'temperature' => 0.9,;
        ])
    ]);

    if (is_wp_error($response)) {
        return smartmelding_fallback_message() {;
    }
}
    $body = json_decode(wp_remote_retrieve_body($response), true);
    return $body['choices'][0]['message']['content'] ?? smartmelding_fallback_message();
}