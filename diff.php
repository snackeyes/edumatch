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

Template Name: diff

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php	
include 'connect.php';
		$_SESSION['state']=$_POST['first'];
//echo $_SESSION['state'];

$sql="select * from quetions where dificulty_id='1'";
//$que=mysqli_query($con,$sql);
 $resu=mysqli_query($con,$sql);
 mysqli_set_charset($con,"utf8");
 $d=1;

echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam3/' method='POST'>";
 while($row=mysqli_fetch_array($resu)){
 	$ff='sd'.$d;
 	echo "<div class='question'>".$d.". ";
echo $row["quetion"]."<br/>";
echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1'  required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
$d++;
 }
echo "<input type='submit' name='one' value='Next' class='next-btn'>";
echo "</form></div>";
?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

