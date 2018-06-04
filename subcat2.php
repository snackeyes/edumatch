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

Template Name: subcat2

*/
get_header();
?>
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

<?php
include 'connect.php';
$key_1=$_SESSION['max1'];
$key_2=$_SESSION['max2'];

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
 $_SESSION['realist']= $realist;
  $_SESSION['investigativ']= $investigativ;
   $_SESSION['artistic']= $artistic;
    $_SESSION['social']= $social;
     $_SESSION['inteprinzator']= $inteprinzator;
      $_SESSION['conventional']= $conventional;

$key_2 = trim($key_2);

// echo $key_2;

if($key_2=='ecologic'){
    $sql="select * from quetions where subcategory_id in('1','2','5')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
    mysqli_set_charset($con,"utf8");
    $d=1;

        echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam6/' method='POST'>";
    while($row=mysqli_fetch_array($resu)){
        $ff='sd'.$d;
        $fg='bh'.$d;
        echo "<div class='question'>".$row['quetion']."<br/>";
        echo "<input type='text' name=".$d." value=".$row['subcategory_id']." style='display:none' >";
        echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
            $d++;
        }
    echo "<input type='submit' name='category' value='Next'>";
    echo "</form></div>";
   // exit;

}elseif ($key_2=='National'){
    $sql="select * from quetions where subcategory_id in('1','2','3')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
    mysqli_set_charset($con,"utf8");
    $d=1;

        echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam6/' method='POST'>";
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

}elseif ($key_2=='Real'){
    $sql="select * from quetions where subcategory_id in('4','2','6')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
    mysqli_set_charset($con,"utf8");
    $d=1;

        echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam6/' method='POST'>";
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
}elseif ($key_2=='Talent'){
    $sql="select * from quetions where subcategory_id in('1','2','3')";
 mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
    mysqli_set_charset($con,"utf8");
    $d=1;

        echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam6/' method='POST'>";
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

}elseif ($key_2=='Uman'){
    $sql="select * from quetions where subcategory_id in('1','2','3')";
mysqli_set_charset($con,"utf8");
    $resu=mysqli_query($con,$sql);
    
    $d=1;

        echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam6/' method='POST'>";
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

}
//echo "virus";
?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

