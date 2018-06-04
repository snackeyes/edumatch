<?php

/*

Template Name: testdemo

*/
	get_header();
?>



	<div id="primary" class="content-area">
<?php
$args = array( 'post_type' => 'question', 'posts_per_page' => 10, );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();?>
 <?php
                $terms = get_the_terms( $post->ID, 'Categories' );
                        
                    if ( $terms && ! is_wp_error( $terms ) ) : 

                $portfolio = array();
            
                foreach ( $terms as $term ) {
                    $portfolio[] = $term->name;
                }
                                    
                $portfolio_category = join( " | ", $portfolio );
            ?>
            
                <h3 id="Proj_Categories"><ul>
                    <?php echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h3>
            
            <?php endif; ?>

 <?php endwhile;?>



	</div><!-- #primary -->

<?php get_footer(); ?>

