<?php

/*

Template Name: resumod

*/
    get_header();
?>
<?php include 'connect.php';

$sql="Select * from result ";
$resu=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($resu)){
 	$ec=$row['result'];
 }
$ec=html_entity_decode($ec);
echo $ec;
 ?>
<?php get_footer(); ?>