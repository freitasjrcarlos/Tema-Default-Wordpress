		<?php get_header(); ?><!-- Inclui o arquivo header.php -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

	<?php endwhile; else: header(/* Aqui link que será direcionado como default*/"Location: http://"); ?>
		
		<?php endif; ?>
	
		<?php get_footer(); ?><!-- Inclui o arquivo footer.php -->