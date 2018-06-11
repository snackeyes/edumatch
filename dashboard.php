<style type="text/css">
	.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
    background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}
</style>


<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/user-registration/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion UserRegistration will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.wpeverest.com/user-registration/template-structure/
 * @author  WPEverest
 * @package UserRegistration/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>

<p><?php
require_once __DIR__ . '/vendor/autoload.php';
	/* translators: 1: user display name 2: logout url */
	// printf(
	// 	__( 'Hello %1$s (not %1$s? <a href="%2$s">Sign out</a>)', 'user-registration' ),
	// 	'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
	// 	esc_url( ur_logout_url( ur_get_page_permalink( 'myaccount' ) ) )
	// );
echo "<h2> Test Result</h2>";
	include 'connect.php';
 $current_user = wp_get_current_user();
  $name=$current_user->user_login;
$sql="Select * from result where email='$name'";
$resu=mysqli_query($con,$sql);
$mpdf = new \Mpdf\Mpdf();
//$mpdf->WriteHTML('<h1>Hello world!</h1>');

 while($row=mysqli_fetch_array($resu)){
 	
 	
  $ec=$row['result'];
  $ec=html_entity_decode($ec);
  ?>

<button class="accordion">Exam Date <?php echo $row['date'];?> </button>
<div class="panel">
	<form action="http://13.56.215.142/edumatch/wp-content/plugins/user-registration/templates/myaccount/download.php" method="POST">
		<input type="text" name="downl" value="<?php echo $row['id']?>" style="display: none;">
	<input type="submit" name="test" value="Download">
	<!-- <a href="?click=1" class="btn">Click me</a> -->
	</form>




</button>
<p> <?php echo $ec;?> </p>
</div>


 	
 <?php }







  if($_GET['click']){
   $mpdf->WriteHTML("<html><body>".$row['result']."</body></html>");
$mpdf->Output('result.pdf','D');
  }
?>


 

</p>

<p><?php
	/* translators: %1$s is replaced with the number of href */
	// printf(
	// 	__( 'From your account dashboard you can manage your profile details and <a href="%1$s">edit your password and account details</a>.', 'user-registration' ),
	// 	esc_url( ur_get_endpoint_url( 'edit-account' ) )
	// );
?></p>
<script type="text/javascript">
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'user_registration_account_dashboard' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
