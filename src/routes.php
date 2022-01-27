<?php

//
// Request URI
//
$request = $_SERVER['REQUEST_URI'];

// 
// Define config, load config
//
$config = __DIR__.'/config.php';
require_once($config);

//
// Routing
//
switch ($request) {
    case '/' :
        $title = 'Homepage';
        $content = __DIR__.'/views/home.php';
        require($layout);
        break;
    case '' :
        $title = 'Homepage';
        $content = __DIR__.'/views/home.php';
        require($layout);
        break;
    default:
        http_response_code(404);
        $title = $request.' | Not Found';
        $content = __DIR__.'/views/not_found.php';
        require($layout);
        break;
}

?>