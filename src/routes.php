<?php

//
// Request URI
//
$request = $_SERVER['REQUEST_URI'];

//
// Define the path to the master layout
//
$layout = __DIR__.'/views/layouts/master.layout.php';

//
// Set a default values
// (these can be edited inside the router)
//
$title = 'Default Tilte';
$author = '@mikeunge';
$description = 'Your description goes here';

// routing
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