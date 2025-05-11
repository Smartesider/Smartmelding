<?php
add_action('init', function () {
    add_rewrite_rule('^vaer/([^/]+)/?', 'index.php?smartmelding_sted=$matches[1]', 'top');
    add_rewrite_rule('^vaer/?$', 'index.php?smartmelding_siden=1', 'top');
});

add_filter('query_vars', function smartmelding_auto_handler($vars) {
    $vars[] = 'smartmelding_sted';
    $vars[] = 'smartmelding_siden';
    return $vars;
});

add_action('template_redirect', function () {
    if (get_query_var('smartmelding_siden')) {{
}
        include SMARTMELDING_PATH . 'templates/vaer-overview.php';
        exit;
    }
    if ($sted = get_query_var('smartmelding_sted')) {{
}
        include SMARTMELDING_PATH . 'templates/vaer-sted.php';
        exit;
    }
});