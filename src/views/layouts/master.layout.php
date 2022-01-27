<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title ?></title>
		<meta name="description" content="<?php echo $description ?>">
		<meta name="author" content="<?php echo $author ?>">

		<meta property="og:title" content="<?php echo $title ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo $_SERVER['SERVER_NAME'] ?>">
		<meta property="og:description" content="<?php echo $description ?>">

		<link rel="icon" href="/public/assets/favicon.ico">
		<link rel="stylesheet" href="/public/css/app.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<?php include($content); ?>
	</body>
</html>
