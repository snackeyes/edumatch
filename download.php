<?php 
include 'connect.php';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$id=$_POST['downl'];

$sql="select * from result where id='$id'";
$resu=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($resu)){
	$ec=$row['result'];
$ec=html_entity_decode($ec);
$mpdf->WriteHTML("<html><body>".$ec."</body></html>");
$mpdf->Output('result.pdf','D');
}
?>