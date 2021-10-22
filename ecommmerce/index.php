<?php
session_start();
$pageTitle='home page';
include 'init.php';
// include 'init.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="google-site-verification" content="yyUEaRSMxa0GKTR7rHf4w7W80faLaU3CYGQNnblaKm8" />
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">
<meta name="description" content="New ui kit for website, e-commerce ui kit framework for web sites, HTML, CSS, Bootstrap 4 framework">
<meta name="keywords" content="ui kit, for website, e-commerce, uikit framework, HTML, CSS, Bootstrap 4, framework">

<title>Deer page</title>

<link rel="shortcut icon" type="image/x-icon" href="layout/images/favicon.ico" >

<!-- jQuery -->
<script src="layout/js/jquery-3.6.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<link href="layout/css/bootstrap-custom.css" rel="stylesheet" type="text/css"/>
<script src="layout/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<!-- Font awesome 5 -->
<link href="layout/css/fontawesome.min.css" type="text/css" rel="stylesheet">


<!-- custom style -->
<link href="layout/css/custom.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code
	//////////////////////// Bootstrap tooltip
	if($('[data-toggle="tooltip"]').length>0) {  // check if element exists
		$('[data-toggle="tooltip"]').tooltip()
	}

	///////////////// fixed menu on scroll for desctop
    if ($(window).width() > 768) {
        
        $(window).scroll(function(){  
            if ($(this).scrollTop() > 125) {
                 $('.header').addClass("scrolled");
            }else{
                $('.header').removeClass("scrolled");
            }   
        });
    }

	

}); 
// jquery end
</script>

</head>
<body>
<!-- ========================= SECTION HEADER ========================= -->
<!-- <header class="header navbar-fixed">
	<nav class="navbar navbar-light  navbar-expand-md">
<a class="navbar-brand" href="http://bootstrap-ecommerce.com"> 
	<img src="admin/layout/images/logo.png" class="logo"> 
	<div class="slogan">Bootstrap <br> Ecommerce UI</div>
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="login.php"> login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main/html-components.html">HTML components</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="design.html">Design blocks </a>
      </li>
      <li class="nav-item">
	    <a class="nav-link" href="templates.html">Templates</a>
	  </li>
    	<li><a class="nav-link" href="#hireme" data-toggle="modal">Hire me</a></li>
    </ul>

  </div>
</nav>
</header> -->
<!-- ========================= SECTION HEADER END // ========================= -->

<svg class="intro-bg-shape"  viewBox="0 0 827 827" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Rectangle 3</title>
    <desc>Created with Sketch.</desc>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-294.000000, -236.000000)" fill="#5D3C90">
            <rect id="Rectangle-3" x="294" y="236" width="827" height="827" rx="150"></rect>
        </g>
    </g>
</svg>


<!-- ========================= SECTION INTRO  ========================= -->
<section class="section-intro">
<div class="container">

<div class="row">
	<main class="col-sm-6 intro-text">
<h2 class="title-intro">Welcome Deer</h2>
<h4 class="lead b">E-commerce site  </h4>
<span class="special"> E-commerce</span> <span  class="special"> fashion products </span>  <br> 
<span  class="special"> Booking products </span> <span  class="special">software and hardware product  </span> 

<p class="text-white-50 small mt-3"> <i class="fa fa-sync"></i> 
Last update: <time datetime="2021-10">october 15, 2021</time></p>



	</main>
	<aside  class="col-sm-6">
	<br>
		<img src="layout/images/cpu-main.png" alt="Ecommerce html template components uikit" title="Bootstrap 4 E-commerce uikit on html5" class="img-fluid">
	</aside>
</div> <!-- row.// -->
</div><!-- container //  -->
</section>
<!-- ========================= SECTION INTRO  END// ========================= -->


<!-- ========================= SECTION ABOUT  ========================= -->
<section class="section-about pb-5">
<div class="container">

<div class="row">
	<div class="col-sm-7">
		<article class="block-info mr-5">
<p>
what is Deer website (electronic commerce) is the activity of electronically buying or selling of products on online services or over the Internet. E-commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data 
</p>
<p> what is Deer website (electronic commerce) is the activity of electronically buying or selling of products on online services or over the Internet. E-commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data </p>
<p></p>
		</article>
	</div> <!-- col.// -->
	<div class="col-sm-5">
		

</article> <!-- itemside.// -->


</section>
<!-- ========================= SECTION ABOUT  END// ========================= -->




<!-- ========================= SECTION FEATURES 1 ========================= -->



<!-- ========================= SECTION FEATURES 2 ========================= -->
<section class="section-feature padding-y-lg relative">
	<div class="container">
<div class="row">
<div class="col-sm-7">
	<img src="layout/images/undraw_web_shopping_re_owap.png" class="img-fluid">
</div> <!-- col // -->
<div class="col-sm-5">

<h3 class="title-section purple">clothing
 and fashion</h3>



<p>men and women clothing
.
</p>
<p>fashion product</p>

</div> <!-- col // -->

</div> <!-- row.// -->

<svg class="bg-shape-right" viewBox="0 0 578 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Rectangle 3 Copy</title>
    <desc>Created with Sketch.</desc>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.565783514">
        <g id="Artboard" transform="translate(-1277.000000, -361.000000)" fill="#F3F0F7">
            <rect id="Rectangle-3-Copy" transform="translate(1566.000613, 650.000613) rotate(-360.000000) translate(-1566.000613, -650.000613) " x="1277.50061" y="361.500613" width="577" height="577" rx="150"></rect>
        </g>
    </g>
</svg>

	</div> <!-- container.// -->
</section>
<!-- ========================= SECTION FEATURES 2 END// ========================= -->

<!-- ========================= SECTION FEATURES 3 ========================= -->


<!-- ========================= SECTION FEATURES 4 ========================= -->
<section class="section-feature padding-y-lg">
	<div class="container">
<div class="row">
<div class="col-sm-5">
	<img src="layout/images/undraw_programming_2svr.png" class="img-fluid">
</div> <!-- col // -->
<div class="col-sm-7">

<h3 class="title-section purple">software and hardware products</h3>


<p> labtops and hards and keyboards.. </p>
<p>
software and hardware products
</p>

</div> <!-- col // -->

</div> <!-- row.// -->


	</div> <!-- container.// -->
</section>
<!-- ========================= SECTION FEATURES 4 END// ========================= -->
<section class="section-feature padding-y-lg">
	<div class="container">
<div class="row">
<div class="col-sm-5">
	<img src="layout/images/undraw_video_game_night_8h8m.png" class="img-fluid">
</div> <!-- col // -->
<div class="col-sm-7">

<h3 class="title-section purple">playstation games and toy </h3>


<p> playstation games and toy  </p>
<p>
playstation games and toy 
</p>

</div> <!-- col // -->

</div> <!-- row.// -->


	</div> <!-- container.// -->
</section>
<!-- ========================= SECTION LAYOUTS ========================= -->
<section class="section-feature padding-y-lg">
	<div class="container">
<div class="row">
<div class="col-sm-5">
	<img src="layout/images/undraw_smart_home_re_orvn.png" class="img-fluid">
</div> <!-- col // -->
<div class="col-sm-7">

<h3 class="title-section purple">smart home </h3>


<p> smart home  </p>


</div> <!-- col // -->

</div> <!-- row.// -->


	</div> <!-- container.// -->
</section>





<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115916444-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115916444-1');
</script>

</body>
</html>






<?php
include  $tpl . 'footer.php';