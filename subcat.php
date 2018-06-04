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
            width: 98%;
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

Template Name: subcate

*/
   get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

<?php   
include 'connect.php';
//session_start();
//include 'connect.php';
//$key_1=$_SESSION['max1'];
//$key_2=$_SESSION['max2'];

$key_1="";


//$_SESSION['y'$i]=$_POST['sd'$i];

$i="";
$eco='0';
$nat='0';
$rea='0';
$tal='0';
$uma='0';
for( $i = 1; $i<26; $i++ ) {
$var1[$i]=$_POST[$i];
$var[$i]=$_POST['sd'.$i];

    if($var1[$i]=='1' && $var[$i])
    {
    $eco++;
    }
    elseif($var1[$i]=='2' && $var[$i]){
    $nat++;
    }
    elseif($var1[$i]=='3' && $var[$i]){
        $rea++;
    }elseif($var1[$i]=='4' && $var[$i]){
        $tal++;
    }elseif($var1[$i]=='5' && $var[$i]){
        $uma++;
    }
  //echo $eco;
}
// echo $eco."<br>";
// echo $nat."<br>";
// echo $rea."<br>";
// echo $tal."<br>";
// echo $uma."<br>";

$array= array("ecologic" => $eco, " 
National" => $nat, "Real" => $rea, "Talent"=> $tal, "Uman" => $uma);
$max_1 = $max_2 = 0;
$key_1 = $key_2 = 0;

$pos2 = $pos1=0;

foreach($array as $key => $value){

  // echo "<pre>"; print_r($value); print_r($key);exit;

  if($value > $max_1)
    {
      $max_2 = $max_1;
      $max_1 = $value;

      $key_2 = $key_1;
      $key_1 = $key;
    }
    else if($value > $max_2)
    {//$pos2=$i;
      $max_2 = $value;
      $key_2=$key;
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

// echo "Max=".$max_1;
// echo "<br />"; 
// echo "Smax 2=".$max_2."<br>";
// echo $key_1."<br>";
// echo $key_2."<br>";

$_SESSION['max1']=$key_1;
$_SESSION['max2']=$key_2;



/*
//conflicts logic
if($rea=='5' && $nat=='5' && $eco=='5' && $tal=='5' && $uma=='5'){
    
    $sql="select * from quetions where conflicts_id in('1','2','3')";

    $resu=mysqli_query($con,$sql);
    $d=1;

        echo "<form action='concal.php' method='POST'>";
    while($row=mysqli_fetch_array($resu)){
        $ff='con'.$d;
        $fg='bh'.$d;
        echo $row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
        echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
            $d++;
        }
    echo "<input type='submit' name='conf1' value='Next'>";
    echo "</form>";
    }elseif($rea==$nat){
            $sql="select * from quetions where conflicts_id ='2'";
            $resu=mysqli_query($con,$sql);
            $d=1;
            echo "<form action='concal.php' method='POST'>";
        while($row=mysqli_fetch_array($resu)){
                $ff='sd'.$d;
                $fg='bh'.$d;
                echo $row['quetion']."<br/>";
                echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                        $d++;
            }
            echo "<input type='submit' name='category' value='Next'>";
            echo "</form>";
            }elseif ($rea==$eco) {
                        $sql="select * from quetions where conflicts_id='1'";
                        $resu=mysqli_query($con,$sql);
                        $d=1;
                        echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                            echo $row['quetion']."<br/>";
                            echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                            echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                            $d++;
                        }
                    echo "<input type='submit' name='category' value='Next'>";
                    echo "</form>";
                }
        elseif ($rea==$tal) {
                $sql="select * from quetions where conflicts_id='3'";
                $resu=mysqli_query($con,$sql);
                $d=1;
                echo "<form action='concal.php'='' method='POST'>";
            while($row=mysqli_fetch_array($resu)){
                $ff='sd'.$d;
                $fg='bh'.$d;
                echo $row['quetion']."<br/>";
                echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                $d++;
                }
            echo "<input type='submit' name='category' value='Next'>";
            echo "</form>";
        }
        elseif ($rea==$uma) {
            $sql="select * from quetions where conflicts_id='4'";
            $resu=mysqli_query($con,$sql);
            $d=1;
            echo "<form action='concal.php' method='POST'>";
        while($row=mysqli_fetch_array($resu)){
                $ff='sd'.$d;
                $fg='bh'.$d;
                echo $row['quetion']."<br/>";
                echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                $d++;
            }
        echo "<input type='submit' name='category' value='Next'>";
        echo "</form>";    
        }
        elseif ($nat==$eco) {
                $sql="select * from quetions where conflicts_id='5'";
                $resu=mysqli_query($con,$sql);
                $d=1;
                echo "<form action='concal.php'='' method='POST'>";
            while($row=mysqli_fetch_array($resu)){
                $ff='sd'.$d;
                $fg='bh'.$d;
                echo $row['quetion']."<br/>";
                echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
            elseif ($nat==$tal) {
                    $sql="select * from quetions where conflicts_id='6'";
                    $resu=mysqli_query($con,$sql);
                    $d=1;
                    echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                    echo $row['quetion']."<br/>";
                    echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                    echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                    $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
            elseif ($nat==$uma) {
                $sql="select * from quetions where conflicts_id ='7'";

                $resu=mysqli_query($con,$sql);
                $d=1;
                echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                    echo $row['quetion']."<br/>";
                    echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                    echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                    $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
            elseif ($eco==$tal) {
                $sql="select * from quetions where conflicts_id ='8'";

                $resu=mysqli_query($con,$sql);
                $d=1;

                echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                    echo $row['quetion']."<br/>";
                    echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                    echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                    $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
            elseif ($eco==$uma) {
                $sql="select * from quetions where conflicts_id ='9'";

                $resu=mysqli_query($con,$sql);
                $d=1;

                echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                    echo $row['quetion']."<br/>";
                    echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                    echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                    $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
            elseif ($tal==$uma) {
                $sql="select * from quetions where conflicts_id ='10'";

                $resu=mysqli_query($con,$sql);
                $d=1;

                echo "<form action='concal.php' method='POST'>";
                while($row=mysqli_fetch_array($resu)){
                    $ff='sd'.$d;
                    $fg='bh'.$d;
                    echo $row['quetion']."<br/>";
                    echo "<input type='text' name=".$d." value=".$row['conflicts_id']." style='display:none' >";
                    echo "<input type='radio' name=".$ff." value='1' >yes<input type='radio' name=".$ff." value='0'>no<br/>";
                    $d++;
                }
                echo "<input type='submit' name='category' value='Next'>";
                echo "</form>";
            }
*/
   



// echo var_dump(trim($key_1));

$key_1 = trim($key_1);

//$key_1='National';
if($key_1 =='ecologic'){
    $sql="select * from quetions where subcategory_id in('1','2','5')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
   
    $d=1;?>

     <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
        <?php
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next' class='next-btn'>";
    echo "</form></div>";
   // exit;

}elseif ($key_1 == "National"){
    //echo "sk";
    $sql="select * from quetions where subcategory_id in('1','2','3')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
   
    $d=1;
?>
         <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
            <?php
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next' class='next-btn'>";
    echo "</form></div>";
    //exit;

}elseif ($key_1=='Real'){
    $sql="select * from quetions where subcategory_id in('4','2','6')";
   mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
 
    $d=1;
?>
       <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
        <?php
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next' class='next-btn'>";
    echo "</form></div>";
   // exit;
}elseif ($key_1=='Talent'){
    $sql="select * from quetions where subcategory_id in('1','2','3')";
   mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
 
    $d=1;
?>
        <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'><?php
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next' class='next-btn'>";
    echo "</form></div>";
  //  exit;

}elseif ($key_1=='Uman'){
    $sql="select * from quetions where subcategory_id in('1','2','3')";
    mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);

    $d=1;

        ?>
        <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
            <?php
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next' class='next-btn'>";
    echo "</form></div>";
  //  exit;

}    ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

