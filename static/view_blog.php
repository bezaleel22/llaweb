<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(0);
session_start();
function safe_encode($string) {
    return strtr(base64_encode($string), '+/=', '-_-');
}

/*
* function to decode the encoded string
* accepts encoded string
* returns the original string
*/
function safe_decode($string) {
    return base64_decode(strtr($string, '-_-', '+/='));
} ;
$pid=safe_decode($_GET["pid"]);
//echo $id;
?>
<?php $groupid=safe_decode($_GET['groupid']);
//echo $groupid;?>

<head>
<title>Read Blog - Lighthouse Leading Academy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/themewar-font.css" />
<link rel="stylesheet" href="assets/css/quera-icon.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/lightcase.css">

<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
<link rel="stylesheet" href="assets/css/preset.css" />
<link rel="stylesheet" href="assets/css/ignore_for_wp.css" />
<link rel="stylesheet" href="assets/css/theme.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />


<link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>
<body>
<?php include "header2.php";?>

<section class="page_banner" style="background-image: url(assets/images/bg/banner.jpg);">
<div class="container largeContainer">
<div class="row">
<div class="col-md-6">
<h2 class="banner-title">News Alerts</h2>
</div>

</div>
</div>
</section>


<section class="singleBlog">
<div class="container largeContainer">
<div class="row">
<div class="col-lg-12">
<div class="sic_details clearfix">





<div class="sic_the_content clearfix">



 <?php include 'cms/dbConfig.php';
                    $query = $db->query("SELECT * FROM images where category='1' GROUP BY groupid ORDER BY uploaded_on DESC");
                    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = $row["file_name"];
                        ?>
<style>
h6 {text-align: center;}

</style>
                        <blockquote class="wp-block-quote">
                        	<div class="postThumb">
<img src="cms/<?php echo $row['file_name'];?>" alt="" width="500px" height="auto">
</div>
         
                        	<h4 class="bshead"><?php echo $row['title'];?> | <?php echo $row['uploaded_on'];?> </h4>
<h6>
<?php echo $row['details'];?></h6>

</blockquote>


                                           


                        <?php }
                    }else{ ?>
                        <p>No Post found...</p>
                <?php } ?>






</div>



</div>
</div>

</div>
</div>
</section>



<?php include "footer.php";?>
<a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/shuffle.min.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/jquery.datetimepicker.full.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/gmaps.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>

<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>

<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/theme.js"></script>

</body>


</html>