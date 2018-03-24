<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 **/
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<div id = "wrapper">
			<header>
				header content here
			</header>
			<main>
				<b>Start WordPress Loop</b><br>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<b>Post Title:</b><?php the_title(); ?><br>
					<b>Post Content:</b><?php  the_content(); ?><br>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				<b>End WordPress Loop</b>
			</main>
			<div id = "sidebar"> 
				sidebar content here 	
			</div>
			<footer>
				footer content here 
			</footer>
		</div> <!-- wrapper -->
	</body>
</html>