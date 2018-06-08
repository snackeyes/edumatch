<?php

/*

Template Name: result12

*/
    get_header();
?>
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<?php
// include 'connect.php';
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

    if($var1[$i]=='realist' && $var[$i]=='1')
        {
        $realist++;
    }
    elseif($var1[$i]=='investigativ' && $var[$i]=='1'){
        $investigativ++;
    }
    elseif($var1[$i]=='artistic' && $var[$i]=='1'){
        $artistic++;
    }elseif($var1[$i]=='social' && $var[$i]=='1'){
       $social++;
    }elseif($var1[$i]=='inteprinzator' && $var[$i]=='1'){
        $inteprinzator++;
    }elseif($var1[$i]=='conventional
' && $var[$i]=='1'){
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


$cat1 = trim($cat1);
$cat2 = trim($cat2);



 $_SESSION['fincat1']=$cat1;
$_SESSION['fincat2']=$cat2;
$_SESSION['finsubcat1']=$sub1;
$_SESSION['finsubcat1']=$sub_1;

  $state=$_SESSION['state'];
  $difficulty=$_SESSION['diff'];

//state value get

 $state_val='';
  if($state=='1')
  {
    $state_val='Stat';
  }else
  {
     $state_val='Privat';
  }
$_SESSION['stata']=$state_val;
  //difficulty value get
$diff_val='';
  if($difficulty==0){
$diff_val=array('low 2');
$_SESSION['difff']=$diff_val;
  }elseif($difficulty==1){
$diff_val=array('low 1','low 2');
$_SESSION['difff']=$diff_val;
    }elseif($difficulty==2){
$diff_val=array('med 1','med 2','high 1');
$_SESSION['difff']=$diff_val;
      }elseif($difficulty==3){
$diff_val=array('med 2','high 2','high 2');
$_SESSION['difff']=$diff_val;
        }elseif($difficulty==4){

          }

//echo $cat1.$cat2.$sub1.$sub_1.$diff_val.$state_val;



          $city = array('Bucuresti','Cluj','Iasi' );
foreach ($city as $key => $value) {

  

$args = array( 'post_type' => 'universities', 'posts_per_page' => 100,'tax_query' => array(
   'relation' => 'AND',
            array(
            'taxonomy' => 'Categories',
            'field' => 'slug',
            'terms' =>array($cat1,$cat2,$sub1,$sub_1)
        ),array(
            'taxonomy' => 'Difficuly',
            'field' => 'slug',
            'terms' =>$diff_val
        ), array(
            'taxonomy' => 'State/Private',
            'field' => 'slug',
            'terms' =>$state_val
        ),array(
            'taxonomy' => 'Town',
            'field' => 'slug',
            'terms' =>$value
        ),), );
    $loop = new WP_Query( $args );
echo "<div class='main-body-part'><form action=' http://192.168.1.2/edu/result/' method='POST'>";
  
echo "<table border='1'>";
echo "<tr><th>".$value."</th></tr>";
echo "<tr><th>Univercity</th><th>Faculty</th></tr>";
    while ( $loop->have_posts() ) : $loop->the_post();?>
 <?php 
                $terms = get_the_terms( $post->ID, 'Faculty' );
                        
                    if ( $terms && ! is_wp_error( $terms ) ) : 

                $portfolio = array();
            
                foreach ( $terms as $term ) {
                    $portfolio[] = $term->name;
                }
                                    
                $portfolio_category = join( " | ", $portfolio );
            ?>
          
                <h5 id="Proj_Categories"><ul>
                   <tr><td> <?php  echo '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?></td><td>
                    <?php echo $term->name ?></td>
                </ul></h5>
            
            <?php $d++; endif; ?>
 
 <?php endwhile;?>

 <?php }

// $sql="SELECT `uni_id`, `univercity_name`, `faculty_id` FROM `univercity` WHERE state_id='$state' && category_id IN(select category_id from category where category_name IN ('$cat1','$cat2')) && subcategory IN (select subcategory_id from subcategory where subcategory_name IN('$sub1','$sub1')) &&   dificulty_id='$difficulty' ";

// mysqli_set_charset($con,"utf8");
// $resu=mysqli_query($con,$sql);
    
// while($row=mysqli_fetch_array($resu)){
// echo"<tr><td>" .$row['univercity_name'];
// echo"</td><td>".$row['faculty_id']."</td></tr>";
// }
echo "</table>";
echo "</form>";


?>
<form class="form-inline" method="post" action=" http://13.56.215.142/edumatch/pdf/">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>
</form>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

