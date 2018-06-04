<?php

/*

Template Name: result

*/
    get_header();
?>
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<?php include 'connect.php';
$cat1=$_SESSION['max1'];
$cat2=$_SESSION['max2'];

$i="";
$realist='0';
$investigativ='0';
$artistic='0';
$social='0';
$inteprinzator='0';
$conventional='0';

for( $i = 1; $i<16; $i++ ) {
    $var1[$i]=$_POST[$i];
    $var[$i]=$_POST['sd'.$i];

    if($var1[$i]=='1' && $var[$i]=='1')
        {
        $realist++;
    }
    elseif($var1[$i]=='2' && $var[$i]=='1'){
        $investigativ++;
    }
    elseif($var1[$i]=='3' && $var[$i]=='1'){
        $artistic++;
    }elseif($var1[$i]=='4' && $var[$i]=='1'){
       $social++;
    }elseif($var1[$i]=='5' && $var[$i]=='1'){
        $inteprinzator++;
    }elseif($var1[$i]=='6' && $var[$i]=='1'){
        $conventional++;
    }
 
}
 // echo $realist;
 //  echo $investigativ;
 //   echo $artistic;
 //    echo $social;
 //     echo $inteprinzator;
 //      echo $conventional;

      

$array= array("Realist" => $realist, "investigativ" => $investigativ, "Artistic" => $artistic, "Social"=> $social, "Inteprinzator" => $inteprinzator,"Conventional" => $conventional);
$max_1 = $max_2 = 0;
$sub1 = $sub2 = 0;

$pos2 = $pos1=0;

foreach($array as $key => $value){

  // echo "<pre>"; print_r($value); print_r($key);exit;

  if($value > $max_1)
    {
      $max_2 = $max_1;
      $max_1 = $value;

      $sub2 = $sub1;
      $sub1 = $key;
    }
    else if($value > $max_2)
    {//$pos2=$i;
      $max_2 = $value;
      $sub2=$key;
    } 
}





// $array= array($eco,$nat,$rea,$tal,$uma);

// $max_1 = $max_2 = 0;
// $pos2=$pos1=0;

// for($i=0; $i<count($array); $i++)
// {
//     if($array[$i] > $max_1)
//     {
//       $max_2 = $max_1;
//       $max_1 = $array[$i];
//       $pos1=$i;
//     }
//     else if($array[$i] > $max_2)
//     {//$pos2=$i;
//       $max_2 = $array[$i];
//       $pos2=$i;
//     }
// }

// echo "Max1=".$max_1;
// echo "<br />"; 
// echo "Smax1=".$max_2."<br>";
// echo $sub1."<br>";
// //echo $sub2."<br>";



$realist1= $_SESSION['realist'];
$investigativ1=  $_SESSION['investigativ'];
$artistic1=   $_SESSION['artistic'];
 $social1= $_SESSION['social'];
$inteprinzator1= $_SESSION['inteprinzator'];
$conventional1=  $_SESSION['conventional'];



$array= array("Realist" => $realist1, "investigativ" => $investigativ1, "Artistic" => $artistic1, "Social"=> $social1, "Inteprinzator" => $inteprinzator1,"Conventional" => $conventional1);
$max_1 = $max_2 = 0;
$sub_1 = $sub_2 = 0;

$pos2 = $pos1=0;

foreach($array as $key => $value){

  // echo "<pre>"; print_r($value); print_r($key);exit;

  if($value > $max_1)
    {
      $max_2 = $max_1;
      $max_1 = $value;

      $sub_2 = $sub_1;
      $sub_1 = $key;
    }
    else if($value > $max_2)
    {//$pos2=$i;
      $max_2 = $value;
      $sub_2=$key;
    } 
}





// $array= array($eco,$nat,$rea,$tal,$uma);

// $max_1 = $max_2 = 0;
// $pos2=$pos1=0;

// for($i=0; $i<count($array); $i++)
// {
//     if($array[$i] > $max_1)
//     {
//       $max_2 = $max_1;
//       $max_1 = $array[$i];
//       $pos1=$i;
//     }
//     else if($array[$i] > $max_2)
//     {//$pos2=$i;
//       $max_2 = $array[$i];
//       $pos2=$i;
//     }
// }

// echo "Max1=".$sub1;
// echo "<br />"; 
// echo "Smax1=".$sub_1."<br>";
// echo $sub_1='1'."<br>";
// //echo $sub_2."<br>";
// echo $cat1."<br>".$cat2;

$cat1 = trim($cat1);
$cat2 = trim($cat2);

 $state=$_SESSION['state'];
 $difficulty=$_SESSION['diff'];


$sql="SELECT `uni_id`, `univercity_name`, `faculty_id` FROM `univercity` WHERE state_id='$state' && category_id IN(select category_id from category where category_name IN ('$cat1','$cat2')) && subcategory IN (select subcategory_id from subcategory where subcategory_name IN('$sub1','$sub1')) &&   dificulty_id='$difficulty' ";
echo "<table border='1'>";
echo "<tr><th>Univercity</th><th>Faculty</th></tr>";
mysqli_set_charset($con,"utf8");
$resu=mysqli_query($con,$sql);
    
while($row=mysqli_fetch_array($resu)){
echo"<tr><td>" .$row['univercity_name'];
echo"</td><td>".$row['faculty_id']."</td></tr>";
}echo "</table>";


?>
<form class="form-inline" method="post" action="">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>
</form>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

