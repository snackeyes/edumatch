<style type="text/css">
	.title{
		margin-top: 0px;
		text-align: center
	}
		.main-body-part{
			width: 60%;
			margin: 0 auto;
			background: #DAD9D9;
			min-height: 181px;
			padding: 2%;
			text-align: center;
			border: 0 none;
			border-radius: 3px;
			box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
		}
		.question{
			background: #fff;
			width: 70%;
			padding: 2%;
			border: 0 none;
			border-radius: 5px;
			box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
			margin: 0 auto;
			min-height: 40px;
			text-align: left;
			margin-bottom: 2%;
		}
		.radio_btn{
			vertical-align: top;
			text-align: left;
    		width: 99%;
    		margin: 0 auto;
		}
		.radio_btn1{
			margin-left: 10px !important;
			margin-right: 7px !important;
		}
		.next-btn{
			width: 20%;
			height: 40px;
			border-radius: 20px;
			border: none;
			background: #F44556;
			font-size: 16px;
			font-weight: 500;
			outline: none;
			cursor: pointer;
			padding: 0px !important;
		}
		.next-btn:hover, .next-btn:active, .next-btn:focus{
			color: #fff;
			opacity: 0.7;
		}
	</style>
<?php

/*

Template Name: difff

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php	

		$_SESSION['state']=$_POST['first'];


echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam3/' method='POST'>";

?>

	<div id="primary" class="content-area">
<?php

$d=1;
$args = array( 'post_type' => 'question', 'posts_per_page' => 10,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>'difficult'
        ), ), );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();?>
 <?php $ff='sd'.$d;
                $terms = get_the_terms( $post->ID, 'Categories' );
                        
                    if ( $terms && ! is_wp_error( $terms ) ) : 

                $portfolio = array();
            
                foreach ( $terms as $term ) {
                    $portfolio[] = $term->name;
                }
                                    
                $portfolio_category = join( " | ", $portfolio );
            ?>
            
                <h5 id="Proj_Categories"><ul>
                    <?php echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
    <input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required>Yes<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required>No</div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>



		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

