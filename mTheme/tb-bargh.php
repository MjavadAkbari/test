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
      <li class="active">نرم افزار - مهندسی - برق</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->
		<div class="separate">
		  <table class="table">
			<thead>
			  <tr bgcolor="#9999FF">
				<th>ردیف</th>
				<th>نام دروه</th>
				<th>مدت زمان دروه</th>
				<th>سرفصل دوره</th>
                <th>ثبت نام اینترنتی</th>
			  </tr>
			</thead>
			
			  <tr bgcolor="#99CCCC">
				<td>1</td>
				<td>OrCAD</td>
				<td>30</td>
				<td><a href="sylabes/fani/orcad.pdf">دانلود</a></td>
                <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
		    </tr>
			  <tr bgcolor="#CCFFFF">
				<td>2</td>
				<td>FPGA</td>
				<td>30</td>
				<td><a href="sylabes/fani/fpga.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>3</td>
				<td>AVR</td>
				<td>30</td>
				<td><a href="sylabes/fani/avr.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>4</td>
				<td>شبیه سازی مدولاسیون ها با Matlab</td>
				<td>20</td>
				<td><a href="sylabes/fani/matlabTakhasosi.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>5</td>
				<td>HFSS</td>
				<td>20</td>
				<td><a href="sylabes/fani/hfss.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>6</td>
				<td>طراحی PCB با نرم افزار Altium Designer</td>
				<td>38</td>
				<td><a href="sylabes/fani/AltiumDesigner.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  
		  </table>
	</div>
  <pre class="prettyprint linenums">
  <a href="download/poblic&en.pdf"> مشاهده لیست کامل </a>
  </pre>
  
		</article><!-- .content -->
    </div>
  </div>
</div><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->
</body>
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="span3 social">
          <h3>Follow Us</h3>
          <p>Follow us in social media</p>
          <a class="sbtnf sbtnf-rounded sbtnf-icon-white sbtnf-icon-bg-black color icon-tumblr" href="http://www.telegram.me/jdiust"></a>
          
		</div>
		
        
		<div class="span3 nav-box">
          <h3>گروه های آموزشی</h3>
		  <nav>
			<ul>
			  <li><a href="khas.html">گروه دوره های ویژه صنایع</a></li>
			  <li><a href="hse.html"> گروه HSE  </a></li>
			  <li><a href="computer.html">گروه کامپیوتر(عمومی و فنی مهندسی)</a></li>
			  <li><a href="zaban.html">گروه IELTS </a></li>
			</ul>
		  </nav>
        </div>
		
        <div class="span3 nav-box">
          <h3>درباره ما</h3>
		  <nav>
			<ul>
			    <li><a href="about-us.html">درباره ما</a></li>
				<li><a href="elements-animations.html">درباره اساتید</a></li>
			</ul>
		  </nav>
        </div>
        <div class="span3 nav-box">
          <h3>تماس با ما</h3>
		  <nav>
			<ul>
			  <li><a href="contact.html">آدرس و تلفن</a></li>
			</ul>
		  </nav>
        </div>
      </div>
    </div>
  </div><!-- .footer-top -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="span3 copyright">Copyright &copy; jdiust., 2016</div>
        <div class="span3 phone">
          <div class="footer-icon">
			<svg xmlns="http://www.jdiust.ir" xmlns:xlink="http://www.jdiust.ir" x="0px" y="0px"
				width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
			   c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
				M11.001,12H5V2h6V12z"/>
			</svg>
		  </div>
          <strong class="title">تماس با ما:</strong> +98 (021) 77453199 <br>
          <strong>or</strong> +98 (021) 77452708
        </div>
        <div class="span3 address">
          <div class="footer-icon">
			<svg xmlns="http://www.jdiust.ir" xmlns:xlink="http://www.jdiust.ir" x="0px" y="0px"
				width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <g>
				<g>
				  <path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
					c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
					c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"/>
				</g>
				<g>
				  <circle fill="#c6c6c6" cx="8.001" cy="6" r="2"/>
				</g>
			  </g>
			</svg>
		  </div>
          j.asas@jdevs.com
        </div>
        <div class="span3">
          <a href="#" class="up pull-right"><i class="icon-arrow-up icon-white"></i></a>
        </div>
      </div>
    </div>
  </div><!-- .footer-bottom -->
</footer>
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