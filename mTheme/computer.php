<!DOCTYPE html>
<html>
<head>
  <title>مرکز آموزش</title>
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link href="img/favicon.png" rel="shortcut icon">

  <link rel='stylesheet' href="css/docs.css">
  <link rel='stylesheet' href="css/buttons/social-icons.css">
  <link rel='stylesheet' href="css/buttons/animation.css">
  <link rel='stylesheet' href="css/font-awesome.min.css">
  <link rel='stylesheet' href="css/bootstrap.min.css">
  <link rel='stylesheet' href="css/jslider.css">
  <link rel='stylesheet' href="css/settings.css">
  <link rel='stylesheet' href="css/jquery.fancybox.css">
  <link rel='stylesheet' href="css/animate.css">
  <link rel='stylesheet' href="css/video-js.css">
  <link rel='stylesheet' href="css/morris.css">
  <link rel='stylesheet' href="css/style.css">
  <link rel='stylesheet' href="css/responsive.css">
  <link rel='stylesheet' href="css/pages.css">
    
  <style>
	#top-box,
	.carousel-box .next:hover,
	.carousel-box .prev:hover,
	.product .product-hover,
	#footer .up:hover,
    .btn,
    .btn:visited,
    .slider .slider-nav,
    .active .accordion-heading .accordion-toggle,
    .banner-set .pagination a:hover,
    .employee .employee-hover,
    .carousel-box .pagination a:hover,
    .sidebar .menu li.active > a,
    .pagination ul > li > a:hover,
    .sidebar .tags a:hover,
    .sidebar .banners .banner-text,
    #catalog .category-img .description,
    .county-days-wrapper,
    .county-hours-wrapper,
    .county-minutes-wrapper,
    .county-seconds-wrapper,
    .product-bottom .related-products header:before,
    #slider.rs-slider .tparrows:hover,
    .toolbar .sort-catalog .dropdown-toggle,
    .toolbar .grid-list .grid,
    .toolbar .grid-list .list,
    .toolbar .up-down,
    .toolbar .up-down.active,
    .toolbar .grid-list a.grid:hover,
    .toolbar .grid-list a.list:hover,
    .pagination ul > .active > a,
    .pagination ul > .active > span,
    .sidebar .tags a,
    .sidebar .menu li.parent > a .open-sub:before,
    .sidebar .menu li.parent > a .open-sub:after,
    .accordion-heading .accordion-toggle:before,
    .accordion-heading .accordion-toggle:after,
    .new-radio.checked span,
	.list .product .actions a:hover,
	.product-page .span7 .actions a:hover,
	.product-page .image-box .thumblist-box .prev:hover,
	.product-page .image-box .thumblist-box .next:hover,
    .btn.btn-inverse:hover,
    .btn.btn-inverse:focus,
    .btn.btn-inverse:active,
    .btn.btn-inverse.active,
    .btn.btn-inverse.disabled,
    .btn.btn-inverse[disabled],
	.accordion-tab > li > a .open-sub:before,
	.accordion-tab > li > a .open-sub:after,
	.products-tab .accordion-tab > li > a .open-sub:before,
	.products-tab .accordion-tab > li > a .open-sub:after {
	  background-color: #c10841;
	}
    .slider .slider-nav {
      background-color: rgba(193,8,65,.97);
    }
    .county-days-wrapper,
    .county-hours-wrapper,
    .county-minutes-wrapper,
    .county-seconds-wrappe,
	.product .product-hover,
	.rotation .employee-hover {
      background-color: rgba(193,8,65,.9);
    }
    .btn:hover,
    .btn:focus,
    .btn:active,
    .btn.active,
    .btn.disabled,
    .btn[disabled] {
      background-color: #c10841;
      background-color: rgba(193,8,65,.8);
    }
    #catalog .category-img .description,
    .toolbar .sort-catalog .dropdown-toggle,
    .toolbar .grid-list .grid,
    .toolbar .grid-list .list,
    .toolbar .up-down,
    .toolbar .up-down.active,
    .pagination ul > .active > a,
    .pagination ul > .active > span,
    .sidebar .tags a {
      background-color: rgba(193,8,65,.7);
    }
    .sidebar .banners .banner-text {
      background-color: rgba(193,8,65,.65);
    }
    #slider.rs-slider .tparrows,
	.product-page .add-cart-form .number .regulator a:hover {
      background-color: rgba(193,8,65,.5);
    }
	.pricing .bottom-box {
	  background-color: rgba(193,8,65,.05);
	}
	.pricing {
	  background-color: rgba(193,8,65,.06);
	}
	.pricing .options li,
	.pricing .bottom-box {
	  border-color: rgba(193,8,65,.1);
	}
	.header .cart-header .dropdown-toggle,
	#footer .newsletter input:focus + .submit,
    .icon,
    .big-icon,
    .big-icon:visited,
    .service .icon,
    .close:hover,
    .close:focus,
    .img-thumbnail:hover .bg-images i:before,
    .box-404 h1,
    .gallery-images:hover .bg-images i:before,
    .features-block .header-box .icon-box,
    .features-block .header-box,
    .sidebar .newsletter input:focus + .submit,
	.sidebar .section .selected .close:hover,
    .package .title a,
    .package .price-box .price,
    .package .price-box .icon,
    .pricing .title a,
    .pricing .options li span,
	.pricing .options li.active {
	  color: #c10841;
	}
	.pricing .bottom-box .more {
	  color: rgba(193,8,65,.7);
	}
	.pricing .options li {
	  color: rgba(193,8,65,.4);
	}
	.phone-header a svg path,
	.search-header a svg path,
	.product .actions a svg path,
    .product-remove:hover path,
    .sidebar .wishlist .add-cart:hover path,
    .header .cart-header .dropdown-toggle .icon svg path,
    .search-active .search-submit svg path,
    .new-checkbox svg polygon,
	.product-bottom .related-products li .button-box .wishlist:hover svg path,
	.jslider .jslider-pointer svg path,
	.rating-box .rating svg polygon {
	  fill: #c10841;
	}
    .carousel-box .pagination a.selected,
    .banner-set .pagination a.selected {
      background: #ccc;
	  background: rgba(0,0,0,.3);
    }
	@media (max-width: 979px) {
	  .header .primary .navbar .nav > .parent.active > a,
	  .header .primary .navbar .nav > .parent.active:hover > a,
	  .header .primary .navbar .nav .open-sub span,
	  .header .primary .navbar .btn-navbar .icon-bar,
	  .header.header-two .primary .navbar .btn-navbar.collapsed .icon-bar,
	  .accordion-tab > .active > a,
	  .accordion-tab > .active:hover > a,
	  .products-tab .accordion-tab > .active > a,
	  .products-tab .accordion-tab > .active:hover > a {
		background-color: #c10841;
	  }
	}
	.navbar-inverse .brand,
	.navbar-inverse .nav > li > a,
	.btn-group.btn-select .dropdown-toggle,
	.product .product-hover,
	.employee .employee-hover,
	.slider .slid-content{
	  color: #fff;
	}
	.product .product-hover ul li {
	  background-image: url("img/svg/check-icon-white.svg"), none;
	}
  </style>
  
  <!--[if IE]>
	<link rel='stylesheet' href="css/ie/ie.css">
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if IE 9 ]>
    <link rel='stylesheet' href="css/ie/ie9.css">
  <![endif]-->
</head>
<body class="fixed-header">
<div class="page-box">
<div class="page-box-content">

<?php 
	include("menu.php");
?>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="#"> دوره های عمومی و تخصصی کامپیوتر</a> <span class="divider">/</span></li>
	  <li><a href="download/poblic&en.pdf"> مشاهده تقویم آموزشی</a> <span class="divider">/</span></li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  
  <div class="container">
    <div class="row">
      <div class="content span12 portfolio portfolio4">
		<div class="filter-buttons pull-left">
		  <a href="#" class="active" data-filter="*">همه</a>
		  <a href="#" data-filter=".web-design">مهندسی</a>
		  <a href="#" data-filter=".graphic-design">برنامه نویسی-گرافیک</a>
		  <a href="#" data-filter=".ecommerce">عمومی-شبکه</a>
		</div><!-- .filter-buttons -->
		
		<div class="clearfix"></div>
		
		<div class="row filter-elements">
		  <div class="span3 web-design">
			<a href="tb-enpoblic.php" class="work">
			  <img src="img/content/portfolio-1.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">عمومی مهندسی</h3>
			<div class="description">AutoCAD-Matlab</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 web-design">
			<a href="tb-mech.php" class="work">
			  <img src="img/content/mech.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">مکانیک</h3>
			<div class="description">AutoCAD-Matlab</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 web-design">
			<a href="tb-shimi.php" class="work">
			  <img src="img/content/shimi.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">شیمی</h3>
			<div class="description">AutoCAD-Matlab</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 graphic-design">
			<a href="tb-gr.php" class="work">
			  <img src="img/content/graphic.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">گرافیک و انیمیشن </h3>
			<div class="description">Web design</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 web-design">
			<a href="tb-bargh.php" class="work">
			  <img src="img/content/bargh.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">برق</h3>
			<div class="description">Web design</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 ecommerce">
			<a href="tables.php" class="work">
			  <img src="img/content/icdl.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">ICDL</h3>
			<div class="description">IT- Windows-MicrosoftWord- Internet</div>
			<div class="description">MicrosoftExcel-MicrosoftAccess-MicrosoftPoerPoint</div>
			  </div>
			</a>
		  </div>
		  
		  		  
		  <div class="span3 web-design">
			<a href="tb-omran.php" class="work">
			  <img src="img/content/omran.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">عمران</h3>
			<div class="description">Other</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 ecommerce">
			<a href="tb-nt.php" class="work">
			  <img src="img/content/nt.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">شبکه</h3>
			<div class="description">cisco-MicroSoft</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 graphic-design">
			<a href="tb-pro.php" class="work">
			  <img src="img/content/program.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">برنامه نویسی</h3>
			<div class="description">Web design-C#.NET-SQL-و...</div>
			  </div>
			</a>
		  </div>
		  
		  <div class="span3 web-design">
			<a href="tb-san.php" class="work">
			  <img src="img/content/sanaye.jpg" width="370" height="270" alt="">
			  <span class="shadow"></span>
			  <div class="bg-hover"></div>
			  <div class="work-title">
			<h3 class="title">صنایع</h3>
			<div class="description">Web design</div>
			  </div>
			</a>
		  </div>
		</div>
      </div><!-- .content -->
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->

<?php
	include("footer.php");
	?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="js/price-regulator/tmpl.js"></script>
<script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="js/price-regulator/draggable-0.1.js"></script>
<script src="js/price-regulator/jquery.slider.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.elevateZoom-2.5.5.min.js"></script>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/country.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/raphael.min.js"></script>
<script src="js/video.js"></script>
<script src="js/selectBox.js"></script>
<script src="js/blur.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>