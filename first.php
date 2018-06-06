<style type="text/css">
	.title{
		margin-top: 0px;
		text-align: center
	}
		.main-body-part{
			width: 60%;
			margin: 6% auto;
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
    		width: 70%;
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

Template Name: first

*/
	get_header();
?>

<?php if ( Woocommerce_Pay_Per_Post_Helper::has_access() ): ?>
    


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="main-body-part">
			<!-- <form action="http://192.168.1.2/edu/diff/" method="POST"> -->
				<form action='http://13.56.215.142/edumatch/exam2/' method='POST'>
				<div class=""><h5 id="Proj_Categories"><ul>
     1).Te tenteaza sistemul educational de stat, mai mult decat cel privat?</ul></h5></div>
<div class="radio_btn">
    <input type='radio' name="first" value='1' class="radio_btn1" required>Yes<input type='radio' name="first" value='2' class="radio_btn1" required>No</div>
    <input type='submit' name='' value='Next' class="next-btn">
</form>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php else: ?>
    <?php echo Woocommerce_Pay_Per_Post_Helper::get_no_access_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>

