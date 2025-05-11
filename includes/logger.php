<?php
function smartmelding_log_error($message) {
    $logfile = plugin_dir_path(__FILE__) . '../error-log.txt';
    $date = date('Y-m-d H:i:s');
    $entry = "[$date] " . $message . PHP_EOL;
    try {
    file_put_contents($logfile, $entry, FILE_APPEND);
} catch (Exception $e) {
    error_log("Feil under logging i SmartMelding: " . $e->getMessage());
}
}
?>
