<style type="text/css">
  .title{
    margin-top: 0px;
    text-align: center
  }
    .main-body-part{
      width: 60%;
      margin: 6% auto;
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

Template Name: categ

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
            
                <h5 id="Proj_Categories"><ul>
                    <?php echo $d.". ";echo'<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?>
                    <?php //echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.$term->name.'</a>'; ?>
                </ul></h5>
            <div class="radio_btn">
              <input type='text' name="<?php echo $d?>" value="<?php echo $term->name?>" style='display:none' >
    <input type='radio' name="<?php echo $ff ?>" value='1' class="radio_btn1" required>Yes<input type='radio' name="<?php echo $ff ?>" value='0' class="radio_btn1" required>No</div>
            <?php $d++; endif; ?>
 
 <?php endwhile;?>
 <input type='submit' name='' value='Next' class="next-btn">
</form>













		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

