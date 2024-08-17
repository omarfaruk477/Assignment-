<?php

if ( file_exists( __DIR__ .'/autoload.php')){
	 require_once __DIR__ .'/autoload.php';
}

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="custom.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $headerTop['email'];?></p></li>
				<li class="phone"><p><?php echo $headerTop['phpne'];?></p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><?php echo $headerTop['topIcon']['twitter'];?></a></li>
				<li><a href="#"><?php echo $headerTop['topIcon']['facebook'];?></a></li>
				<li><a href="#"><?php echo $headerTop['topIcon']['g+'];?></a></li>
				<li><a href="#"><?php echo $headerTop['topIcon']['linkdin'];?></a></li>
				<li><a href="#"><?php echo $headerTop['topIcon']['youtube'];?></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="<?php echo $logo['img'];?>"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $logoText['text'];?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="index.html">
				<?php echo $navBar['title1']; ?>
			</a></li>
			<li class="colour-2"><a href="menu.html"><?php echo $navBar['title2']; ?></a></li>
			<li class="colour-3"><a href="location.html"><?php echo $navBar['title3']; ?></a></li>
			<li class="colour-4"><a href="archive.html"><?php echo $navBar['title4']; ?></a></li>
			<li class="colour-5"><a href="reservation.html"><?php echo $navBar['title5']; ?></a></li>
			<li class="colour-6"><a href="staff.html"><?php echo $navBar['title6']; ?></a></li>
			<li class="colour-7"><a href="news.html"><?php echo $navBar['title7']; ?></a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul>
    </nav>
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<?php foreach($sliders as $slide) : ?>

				<li>
					<img src="<?php echo $slide['slider_img'];?>" alt="">
					<div class="caption">
						<h2><?php echo $slide['slider_desc']['title'];?></h2></br>
						<p><?php echo $slide['slider_desc']['dec'];?></p>
					</div>
				</li>
				
				<?php endforeach; ?>

			</ul>
		</div>
	</div>
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2>“<?php echo $bannerText['title'];?>”</h2>
					<span><?php echo $bannerText['desc'];?></span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2><?php echo $wlComeSec['title'];?></h2>
						<hr class="line">
						<span><?php echo $wlComeSec['seb_title'];?></span>
					</div>


					<div class="row">
						<?php foreach($foodCardSec as $items) : ?>

						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span style="background-color:<?php echo $items['bg_color']; ?>" class="ribbon"><?php echo $items['img_title'];?><b></b></span>
									<img src="<?php echo $items['img'];?>" alt="" width="340px"; height="240px";>
									<p><?php echo $items['img_desc'];?></p>
									<a style="background-color:<?php echo $items['bg_color']; ?>" href="#" class="button button-1"><?php echo $items['btn'];?></a>
								</div>
							</div>
						</div>
						
						<?php endforeach; ?>
					</div>

				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["title"];?></h4>
					<div class="row">
						<img src="<?php echo $footer["card"]["img"];?>">
						<h5><?php echo $footer["card"]["name"];?></h5>
						<p><?php echo $footer["card"]["desc"];?></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="<?php echo $footer["card"]["location"];?>" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
		<?php echo $copyright["text"];?> <a href="<?php echo $copyright["link"];?>"><?php echo $copyright["designby"];?></a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>