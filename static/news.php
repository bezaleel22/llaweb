<!DOCTYPE html>
<html lang="en">


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
<h2 class="banner-title">Blog Details</h2>
</div>
<div class="col-md-6 text-right">
<p class="breadcrumbs"><a href="index-2.html" rel="v:url"><i class="twi-home-alt1"></i>Home</a><span>/</span>Blog Details</p>
</div>
</div>
</div>
</section>


<section class="singleBlog">
<div class="container largeContainer">
<div class="row">
<div class="col-lg-8">
<div class="sic_details clearfix">


<h3 class="bshead">Efficiently monetize models </h3>
<figure class="wp-block-image">
<img src="assets/images/single-post/post.jpg" alt="">
</figure>

<div class="sic_the_content clearfix">




<blockquote class="wp-block-quote">
<p>
Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.
</p>
<cite>by David Smith <strong>Writer</strong></cite>
</blockquote>

</div>



</div>
</div>
<div class="col-lg-4">
<div class="sidebar">
<aside class="widget widget_search">
<h3 class="widget_title">Search</h3>
<form method="get" action="#" class="search_form">
<input type="search" name="s" id="s" placeholder="Search Here">
<button type="submit"><i class="twi-search2"></i></button>
</form>
</aside>
<div class="widget widget_categories">
<h3 class="widget_title">Categories</h3>
<ul>

 <?php include 'cms/dbConfig.php';
                    $query = $db->query("SELECT * FROM images where category='1' GROUP BY groupid ORDER BY uploaded_on DESC");
                    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageURL = $row["file_name"];
                        ?>
                                           
<li><a href=""><?php echo $row['title'];?></a></li>

                        <?php }
                    }else{ ?>
                        <p>No Post found...</p>
                <?php } ?>


</ul>
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