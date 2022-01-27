<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/not_found.php';
        break;
}

?>