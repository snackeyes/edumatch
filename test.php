<?php

/*

Template Name: test

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

				 <?php
                 echo "<form action='' method='POST'>";
    $args = array( 'post_type' => 'question', 'posts_per_page' => 10,'tax_query' => array(
        array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' => 'ecologic',
        ), ),);
    $loop = new WP_Query( $args );
$d=1;
    while ( $loop->have_posts() ) : $loop->the_post();
    the_title();
    the_content();
    echo '<div class="entry-content">';
    echo "<input type='radio' name=".$d." value='1'/>yes<input type='radio' name=".$d." value='0'/>no<br/>";
    $d++;
    ?>
   <!--  <p>Color: <?php //the_field('que'); ?></p> -->

<?php    echo '</div>';
    endwhile;
    echo "<input type='submit' value='Next'>";
echo "</form>";
?>
		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

