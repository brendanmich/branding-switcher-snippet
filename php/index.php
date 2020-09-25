<!doctype HTML>

<html lang="en">
	<head>

		<!-- Site Meta -->
		<title>Site Name</title>
		<meta name="description" content="">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" />

		<!-- Open Graph Meta -->
		<meta property="og:title" content="Site Name"/>
		<meta property="og:description" content="" />
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://www.mywebsite.com' . $_SERVER['REQUEST_URI']; ?>" />
		<meta property="og:site_name" content="My Website"/>

		<!-- Open Graph Cover -->
		<?php if ((int) date("n") == 2) { // Black History Month (February) ?>
			<meta property="og:image" content="/external/social/social-cover-black-history.png" />
		<?php } else if ((int) date("n") == 6) { // Pride Month (June) ?>
			<meta property="og:image" content="/external/social/social-cover-pride.png" />
		<?php } else { ?>
			<meta property="og:image" content="/external/social/social-cover.png" />
		<?php } ?>

		<!-- Favicon -->
		<?php if ((int) date("n") == 2) { // Black History Month (February) ?>
			<link rel="shortcut icon" href="/img/favicon-black-history.ico" type="image/x-icon">
			<link rel="icon" href="/img/favicon-black-history.ico" type="image/x-icon">
		<?php } else if ((int) date("n") == 6) { // Pride Month (June) ?>
			<link rel="shortcut icon" href="/img/favicon-pride.ico" type="image/x-icon">
			<link rel="icon" href="/img/favicon-pride.ico" type="image/x-icon">
		<?php } else { ?>
			<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
			<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
		<?php } ?>
	</head>

	<body class="preload"></body>
</html>
