<style type="text/css">
body{
	    font-family: "Raleway", sans-serif !important;
}
	.title{
		margin-top: 0px;
		text-align: center
	}
		.main-body-part{
			width: 100%;
			margin: 0 auto;
			background: #fff;
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
    		width: 92%;
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
    margin-bottom: 0px;
    cursor: pointer;
    font-size: 19px;
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
    background-color: #890026;
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
.content-area h5{
	margin: 10px 0 10px !important;
	font-weight: 0 !important;
	font-size: 16px !important;
}
 .progressbar {
      counter-reset: step;

  }
  .progressbar li {
      list-style-type: none;
      width: 16%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 26px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 82%;
      height: 3px;
      content: '';
      position: absolute;
      background-color: #890026 !important;
      top: 15px;
      left: -41%;
      z-index: 0;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: green;
  }
  .progressbar li.active:before {
      border-color: #55b776;
  }
  .progressbar li.active + li:after {
      background-color: #55b776;
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
			<ul style="text-align: center;" class="progressbar">
		<li></li>
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
			<h2 style="font-size: 30px !important;font-weight: 600 !important;line-height: normal !important;padding-bottom: 10px !important;margin: 0 !important;"> Heading 1</h2>

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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
            	<label class="container1" style="font-weight: 300 !important;">Yes
    <input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
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

