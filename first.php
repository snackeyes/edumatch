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
    		width: 91%;
    		margin: 0 auto;
    		padding-left: 0px;
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
.text-font{
	font-size: 16px !important;
	font-weight: 300 !important;
	margin: 10px 0 10px !important;
}
.text-font h5{
	margin: 10px 0 10px !important;
	font-weight: 0 !important;
	font-size: 16px !important;
}
h1{
	font-size: 30px;
font-weight: 600;
line-height: normal;
padding-bottom: 10px;
margin: 0;
}

	</style>
}
<?php

/*

Template Name: first

*/
	get_header();
?>

<?php if ( Woocommerce_Pay_Per_Post_Helper::has_access() ): ?>
    


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 style="font-size: 30px !important;font-weight: 600 !important;line-height: normal !important;padding-bottom: 10px !important;margin: 0 !important;"> Heading 1</h1>
			<div class="main-body-part">
			<!-- <form action="http://192.168.1.2/edu/diff/" method="POST"> -->
				<form action='http://13.56.215.142/edumatch/exam2/' method='POST'>
				<div class="text-font"><h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important">
     1).Te tenteaza sistemul educational de stat, mai mult decat cel privat?</ul></h5></div>
<div class="radio_btn">
	<label class="container1" style="font-weight: 300 !important;">Yes
    <input type='radio' name="first" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;">No<input type='radio' name="first" value='2' class="radio_btn1" required><span class="checkmark"></span></label></div>
    <input type='submit' name='' value='Next' class="next-btn">
</form>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php else: ?>
    <?php echo Woocommerce_Pay_Per_Post_Helper::get_no_access_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>

