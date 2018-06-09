<?php

/*

Template Name: pdf

*/
    get_header();
require_once __DIR__ . '/vendor/autoload.php';
?>
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<?php
//include connection file
require_once __DIR__ . '/vendor/autoload.php';
include 'connect.php';
// $hh="jhgdsljhfldshjfld";
// $sql="SELECT * FROM `univercity` where uni_id=24";

$cat1=$_SESSION['fincat1'];
$cat2=$_SESSION['fincat2'];
$sub1=$_SESSION['finsubcat1'];
$sub_1=$_SESSION['finsubcat1'];
$diff_val=$_SESSION['difff'];
$state_val=$_SESSION['stata'];



// $resu=mysqli_query($con,$sql);
// mysqli_set_charset($con,"utf8");
// $hh="";
// while($row=mysqli_fetch_array($resu)){
// $hh.="<tr><td>" .$row['univercity_name']."</td><td></td>".$row['faculty_id']."</tr>";
// }echo "</table>";
 $city = array('Bucuresti','Cluj','Iasi' );
foreach ($city as $key => $ress) {
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
        ),array(
            'taxonomy' => 'State/Private',
            'field' => 'slug',
            'terms' =>$state_val
        ), ), );
    $loop = new WP_Query( $args );
echo "<div class='main-body-part'><form action=' http://192.168.1.2/edu/result/' method='POST'>";
// echo "<table border='1'>";
// echo "<tr><th>Univercity</th><th>Faculty</th></tr>";

$stri="<table border='1'><tr><th>Univercity</th><th>Faculty</th></tr>";

    while ( $loop->have_posts() ) : $loop->the_post();?>
 <?php //echo $ress;
                $terms = get_the_terms( $post->ID, 'Faculty' );
                        
                    if ( $terms && ! is_wp_error( $terms ) ) : 

                $portfolio = array();
            
                foreach ( $terms as $term ) {
                    $portfolio[] = $term->name;
                }
                                    
                $portfolio_category = join( " | ", $portfolio );
?>
            
                <h5 id="Proj_Categories"><ul>
                   <tr><td> <?php '<a href="http://www.slarc.com/projects/'.$term->slug.'">'.the_title().'</a>'; ?></td><td>
                    <?php //echo $term->name ?></td>
                </ul></h5>
                <?php $stri.="<tr><td>" .get_the_title()."</td><td>".$term->name."</td></tr>";?>
            
            <?php $d++; endif; ?>
 
 <?php endwhile;?>

<?php }
$stri.="</table>";



echo $stri;
$mpdf = new \Mpdf\Mpdf();
$mpdf=new mPDF('win-1252','A4-L','','',5,5,5,5,5,5); 
//$mpdf->allow_charset_conversion = true;
//$mpdf->charset_in = 'iso-8859-4';
$mpdf->WriteHTML("<html><body>".$stri."</body></html>");
$mpdf->Output('result.pdf','D');
$mpdf->debug = true;
?>
      </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
