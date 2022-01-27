<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Not Found</title>
    <meta name="description" content="Description - not found">
    <meta name="author" content="@mikeunge">

    <meta property="og:title" content="Not Found">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.example.com/404">
    <meta property="og:description" content="">

    <link rel="icon" href="/public/assets/favicon.ico">
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-900">
    <a href="/" class="absolute top-4 left-4 hover:scale-110 hover:transition-all antialiased">
        <div class="flex">
            <i class="material-icons mt-1 mr-1 text-gray-200" style="font-size: 18px;">arrow_back</i>
            <span class="text-gray-200">Startpage</span>
        </div>
    </a>
    <div class="flex flex-col justify-center items-center h-screen font-Lato antialiased">
        <div class="text-2xl text-gray-200">404 | NOT FOUND</div>
        <div class="text-gray-200">
            <?php
                echo 'Site: ' . $_SERVER['REQUEST_URI'];
            ?>
        </div>
    </div>
</body>
</html>


