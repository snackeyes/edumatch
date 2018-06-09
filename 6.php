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
            width: 100%;
            margin: 0 auto;
            padding-left: 30px;
        }
        .radio_btn1{
            margin-left: 15px !important;
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
    background-color: #E44B53;
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
.text-font h5{
    margin: 10px 0 10px !important;
    font-weight: 0 !important;
    font-size: 16px !important;
}
    </style>

    <?php

define('WP_USE_THEMES', false);  
require_once('/var/www/html/edumatch/wp-load.php');

?><?php
$array = $_POST['array'];
$array = explode(",", $array);

if($_POST['category'] != NULL){
	unset($array[$_POST['category']]);
	$array = array_values($array);
} 

if(count($array) > 2){
	$fun1 = $array[0]."_".$array[1];
	$array = implode(",", $array);
	
	call_user_func($fun1,$array);

	
} else {
	// echo "cat_1=".
	$key_1 = $array[0];
	// echo "<br>";
	// echo "cat_2=".
	$key_2 = $array[1];

$_SESSION['max1']=$key_1;
$_SESSION['max2']=$key_2;
//echo ;

//$key_1 = trim($key_1);

//echo $key_2;
if($key_1 =='ecologic'){
 ?>

      <form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
        <?php
 

$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array('realist','investigativ','inteprinzator')
        ), ), );
    $loop = new WP_Query( $args );
// echo "<form action=' http://192.168.1.2/edu/subcat2/' method='POST'>";
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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important;font-family: "Raleway", sans-serif !important;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>


<?php


}elseif ($key_1 == "national"){
    
 ?>
          <form action='http://13.56.215.142/edumatch/exam5/' method='POST'>             <?php



$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array('social','investigativ','conventional')
        ), ), );
    $loop = new WP_Query( $args );
// echo "<form action=' http://192.168.1.2/edu/subcat2/' method='POST'>";
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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important;font-family: "Raleway", sans-serif !important;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='real'){
 ?>
        <form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
         <?php



$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array('social','realist','conventional','inteprinzator')
        ), ), );
    $loop = new WP_Query( $args );
// echo "<form action=' http://192.168.1.2/edu/subcat2/' method='POST'>";
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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important;font-family: "Raleway", sans-serif !important;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='talent'){
 ?>
         <form action='http://13.56.215.142/edumatch/exam5/' method='POST'><?php


$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>'artistic'
        ), ), );
     $loop = new WP_Query( $args );
// echo "<form action=' http://192.168.1.2/edu/subcat2/' method='POST'>";
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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important;font-family: "Raleway", sans-serif !important;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='uman'){
       ?>
    <form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
          <?php
    

$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array('inteprinzator','social','investigativ','realist','artistic')
        ), ), );
    $loop = new WP_Query( $args );
// echo "<form action=' http://192.168.1.2/edu/subcat2/' method='POST'>";
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
            
                <h5 align="left" id="Proj_Categories" style="font-weight: 300 !important;margin-bottom: 0px !important;"><ul style="margin-bottom: 0px !important;font-family: "Raleway", sans-serif !important;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php // echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
           <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php



}


}

function real_ecologic($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi mai mult cifrele decat protejarea naturii?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;" ><span class="checkmark"></span><input type="radio" name="question" value="real" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="ecologic" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function real_national($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi mai mult detaliile tehnice decat ai un program strict de lucru?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="real" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="national" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function real_talent($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi mai mult cifrele decat sa canti la un instrument?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="real" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="talent" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function real_uman($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi mai mult calculele decat sa analizezi aspectele vietii?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="real" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="uman" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function ecologic_national($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Te preocupa mai mult securitatea nationala decat defrisarile si efectul lor asupra mediului?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="ecologic" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="national" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function national_ecologic($array){
	echo "national ecologic";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="national" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="ecologic" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function national_talent($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi mai mult un program strict de lucru decat unul care implica un grad mare de creativitate?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="national" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="talent" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function national_uman($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Te pasioneaza mai mult subiectele legate de spionaj decat sa analizezi aspectele vietii?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="national" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="uman" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function ecologic_talent($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi sa citesti despre poluare si combatarea ei mai mult decat sa studiezi muzica?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="ecologic" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="talent" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function ecologic_uman($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Te pasioneaza mai mult fauna si flora decat sa analizize relatiile interumane?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="ecologic" class="remove radio_btn1 radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="uman" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}

function talent_uman($array){
	echo "<h5 align='left' id='Proj_Categories' style='font-weight: 300 !important;margin-bottom: 0px !important;'><ul style='margin-bottom: 0px !important;font-family: 'Raleway', sans-serif !important;'>Preferi maimult sa canti la un instrument decat predai un anumit subiect?</h5></ul>";
	echo "";
	echo ' <div class="radio_btn"><label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="talent" class="remove radio_btn1" data-category="1" data-array="'.$array.'"> Yes';
	echo '<label class="container1" style="font-weight: 300 !important;font-family: "Raleway", sans-serif !important;"><span class="checkmark"></span><input type="radio" name="question" value="uman" class="remove radio_btn1"  data-category="0" data-array="'.$array.'"> No</div>';
	exit;
}
?>