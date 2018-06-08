<style type="text/css">
	.title{
		margin-top: 0px;
		text-align: center
	}
		.main-body-part{
			width: 80%;
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
    		width: 90%;
    		margin: 0 auto;
    		padding-left: 10px;
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
		.container1 {
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 50%;
        margin-top: 8px;
    margin-left: 9px;
}
.container1 input:checked ~ .checkmark {
    background-color: #E44B53;
        margin-top: 6px;
}
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
.container1 input:checked ~ .checkmark:after {
    display: block;
}
.container1 .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
	</style>
<?php

/*

Template Name: difff

*/
	get_header();
?>

<?php if ( Woocommerce_Pay_Per_Post_Helper::has_access() ): ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2> Heading 1</h2>

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
            
                <h5 align="left" id="Proj_Categories"><ul>
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
            	<label class="container1">Yes
    <input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>



		


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php else: ?>
    <?php echo Woocommerce_Pay_Per_Post_Helper::get_no_access_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>

