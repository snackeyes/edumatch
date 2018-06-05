<?php

/*

Template Name: testdemo

*/
	get_header();
?>



	<div id="primary" class="content-area">
<?php 
$myquery['tax_query'] = array(
    array(
        'taxonomy' => 'Categories',
        'terms' => array('national'),
        'field' => 'slug',
    ),
    array(
        'taxonomy' => 'Categories',
        'terms' => array('ecologic'),
        'field' => 'slug',
    ),
);
query_posts($myquery);
 while ( $loop->have_posts() ) : $loop->the_post();
?>

            
                <h3 id="Proj_Categories"><ul>
                    <?php echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h3>
            
            <?php endif; ?>

 <?php endwhile;?>



	</div><!-- #primary -->

<?php get_footer(); ?>

