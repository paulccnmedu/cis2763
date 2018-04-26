<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id = "wrapper">
			
			<header> header start
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
			header end
			</header> 