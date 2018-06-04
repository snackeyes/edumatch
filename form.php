<?php

/*

Template Name: form

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				
<?php $user_id; ?>
<?php $user_id = get_current_user_id();
 ?>
				<?php echo do_shortcode( "[stickylist id='1' user='" . $user_id . "']"); ?>

				

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

