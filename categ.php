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
        height: 32px;
      /* padding-left: 5px;*/
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
    background-color: #ccc;
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
.content-area h5{
    margin: 10px 0 10px !important;
    font-weight: 0 !important;
    font-size: 16px !important;
}
  </style>
<?php

/*

Template Name: categ

*/
	get_header();
?>

<?php if ( Woocommerce_Pay_Per_Post_Helper::has_access() ): ?>
 


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <h2 style="font-size: 30px !important;font-weight: 600 !important;line-height: normal !important;padding-bottom: 10px !important;margin: 0 !important;"> Heading 1</h2>

		<?php	
//include 'connect.php';
		//include 'connect.php';


$_SESSION['w']=$_POST['sd1'];
$_SESSION['v']=$_POST['sd2'];
$_SESSION['x']=$_POST['sd3'];
$_SESSION['z']=$_POST['sd4'];


	// echo $w."<br>";
	// echo $_SESSION['v']."<br>";
	// echo $x."<br>";
	// 	echo $z."<br>";
		
$var=$_SESSION['w']+$_SESSION['v']+$_SESSION['x']+$_SESSION['z'];
//echo $var;

switch ($var) {
    case 0:
    $_SESSION['diff']=0;
        break;
    case 1:
        //echo "dificulty level is 1 ";
    $_SESSION['diff']=1;
        break;
    case 2:
        //echo "dificulty level is 2";
           $_SESSION['diff']=2;
        break;
    case 3:
       // echo "dificulty level is 3";
       $_SESSION['diff']=3;
        break;

          case 4:
        //echo "dificulty level is 4";
             $_SESSION['diff']=4;
        break;
    
    default:
       // code to be executed if n is different from all labels;
}





// $sql="select * from quetions where category_id LIKE '1%' OR category_id LIKE '2%' OR category_id LIKE '3%' OR category_id LIKE '4%' OR category_id LIKE '5%'";
// //$que=mysqli_query($con,$sql);
//  $resu=mysqli_query($con,$sql);
//  mysqli_set_charset($con,"utf8");
//  $d=1;

echo "<div class='main-body-part'><form action='http://13.56.215.142/edumatch/exam4/' method='POST'>";
//  while($row=mysqli_fetch_array($resu)){
//  	$ff='sd'.$d;
//  	$fg='bh'.$d;
// echo "<div class='question'>".$row['quetion']."<br/>";
// echo "<input type='text' name=".$d." value=".$row['category_id']." style='display:none' >";
// echo "<div class='radio_btn'><input type='radio' name=".$ff." value='1' class='radio_btn1' required>Yes<input type='radio' name=".$ff." value='0' class='radio_btn1'>No</div></div>";
// $d++;
//  }
// echo "<input type='submit' name='category' value='Next' class='next-btn'>";
// echo "</form></div>";


$d=1;

$args = array( 'post_type' => 'question', 'posts_per_page' => 25,'tax_query' => array(array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array('ecologic','national','real','talent','uman')
        ), ), );
    $loop = new WP_Query( $args );
// echo "<div class='main-body-part'><form action='http://192.168.1.2/edu/subcat/' method='POST'>";
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
            
                <h5 align='left' id="Proj_Categories" style="margin-bottom: 0px !important; font-size: 16px !important;font-weight: 300px !important;"><ul style="margin-bottom: 0px !important;    font-weight: 300;">
                    <?php echo $d.". ";echo'<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <label class="container1" style="font-weight: 300 !important;">Yes<input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required><span class="checkmark"></span></label><label class="container1" style="font-weight: 300 !important;">No<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required><span class="checkmark"></span></label></div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>













		</main><!-- #main -->
	</div><!-- #primary -->
  <?php else: ?>
    <?php echo Woocommerce_Pay_Per_Post_Helper::get_no_access_content(); ?>
<?php endif; ?>

<?php get_footer(); ?>

