<?php
function smartmelding_export_pdf($text = '') {
    $file = WP_CONTENT_DIR . '/uploads/smartmelding/vaermelding.pdf';
    file_put_contents($file, "SMARTMELDING VÆR\n\n" . 
    return $file;
}