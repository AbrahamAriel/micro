<?php
	// <meta charset="utf-8">
	Theme::charset('utf-8');

	// <meta name="viewport" content="width=device-width, initial-scale=1">
	Theme::viewport('width=device-width, initial-scale=1');

	// <title>...</title>
	Theme::title();

	// <meta name="description" content=".....">
	Theme::description();

	// <link rel="shortcut icon" href="favicon.png">
	// Theme::favicon('favicon.png');
	echo '<link rel="shortcut icon" href="'.$Site->url().'favicon.png">';	// use user favicon.png instead

	// CSS
	Theme::css('reset.css');
	Theme::css('simple-grid.css');
	Theme::css('micro.css');
	Theme::fontAwesome();
	
	// siteHead Plugins
	Theme::plugins('siteHead');
	
	// Path to avatar
	$avatar = $Site->url().'/bl-content/uploads/profiles/admin.png';
	
	echo '<style>';
	if(@getimagesize($avatar)) {
		echo '.jumbotron .logo {';
		echo '	background-image: url("'.HTML_PATH_UPLOADS_PROFILES.'admin.png");';
		echo '}';
	} else {
		echo '.jumbotron .logo {';
		echo '	display: none;';
		echo '}';
		echo '.jumbotron .title {';
		echo '	margin-top: 10px;';
		echo '}';
	}
	echo '</style>';
?>