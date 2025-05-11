<?php
function smartmelding_generate_nickname($sted) {
    $silly = ['Grisgrendahøl', 'Tåketåsen', 'Regnsumpen', 'Snøkaoslia', 'Vindsvingen'];
    return $silly[crc32($sted) % count($silly)] . ' (' . $sted . ')';
}
