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
            width: 98%;
            margin: 0 auto;
            padding-left: 40px;
            height: 32px;
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
.content-area h5{
    margin: 10px 0 10px !important;
    font-weight: 0 !important;
    font-size: 16px !important;
}
label{
    font-weight: 300 !important;
}

    </style>
}
<?php

/*

Template Name: subcate

*/
   get_header();
?>
<?php if ( Woocommerce_Pay_Per_Post_Helper::has_access() ): ?>
    

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h2 style="font-size: 30px !important;font-weight: 600 !important;line-height: normal !important;padding-bottom: 10px !important;margin: 0 !important;"> Heading 1</h2>

<?php   
//include 'connect.php';
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




    if($var1[$i]=='ecologic' && $var[$i])
    {
    $eco++;
    }
    elseif($var1[$i]=='national' && $var[$i]){
    $nat++;
    }
    elseif($var1[$i]=='real' && $var[$i]){
        $rea++;
    }elseif($var1[$i]=='talent' && $var[$i]){
        $tal++;
    }elseif($var1[$i]=='uman' && $var[$i]){
        $uma++;
    }
  //echo $eco;
}
// echo $eco."<br>";
// echo $nat."<br>";
// echo $rea."<br>";
// echo $tal."<br>";
// echo $uma."<br>";




//conflicts logic

if($rea=='5' && $nat=='5' && $eco=='5' && $tal=='5' && $uma=='5'){
    
    
$array = "real,ecologic,national,talent,uman";
?>
<div class='main-body-part'><div id="contents"></div>
<script type="text/javascript">
    $( document ).ready(function() {
        var array       = '<?php echo $array;?>';
        
        $.ajax({
            url: "http://13.56.215.142/edumatch/wp-content/themes/sydney/page-templates/6.php",
            type: "POST",
            data:  {array: array}, 
            success: function(response) {
                $("#contents").html(response);
            }
        });
    });

    $(document).on('click','.remove',function(){
        var array = $(this).data("array");
        var category = $(this).data("category");

        $.ajax({
            url: "http://13.56.215.142/edumatch/wp-content/themes/sydney/page-templates/6.php",
            type: "POST",
            data:  {array:array, category:category}, 
            success: function(response) {
                $("#contents").html(response);
            }
        });
    });
</script></div>

   
  <?php  }else{
            $array= array("ecologic" => $eco, " 
national" => $nat, "real" => $rea, "talent"=> $tal, "uman" => $uma);
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

$_SESSION['max1']=$key_1;
$_SESSION['max2']=$key_2;


 //echo var_dump(trim($key_1));

$key_1 = trim($key_1);

//$key_1='National';
if($key_1 =='ecologic'){
 ?>

      <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
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
            
                <h5  align="left"id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;font-weight: 300;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
           <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300px !important;font-size: 19px;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300px !important;font-size: 19px;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>


<?php


}elseif ($key_1 == "national"){
    
 ?>
          <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>             <?php



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
            
                <h5 align="left" id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;font-weight: 300;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300px !important;font-size: 19px;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300px !important;font-size: 19px;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='real'){
 ?>
        <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
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
            
                <h5 align="left" id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;font-weight: 300;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300px !important;font-size: 19px;>Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300px !important;font-size: 19px;>No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='talent'){
 ?>
         <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'><?php


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
            
                <h5 align="left" id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;font-weight: 300;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300px !important;font-size: 19px;>Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300px !important;font-size: 19px;>No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php


}elseif ($key_1=='uman'){
       ?>
     <div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam5/' method='POST'>
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
            
                <h5 align="left" id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;font-weight: 300;">
                    <?php echo $d.". "; echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php // echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300px !important;font-size: 19px;>Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300px !important;font-size: 19px;>No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>
<?php



}
        }

   
    ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

?>


        </main><!-- #main -->
    </div><!-- #primary -->
    <?php else: ?>
    <?php echo Woocommerce_Pay_Per_Post_Helper::get_no_access_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>

