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
      <li class="active">ویژه صنایع - برق</li>
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
				<td>آشنایی با اصول و عملکرد و انتخاب UPS و شارژرهای صنعتی</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/ups.jpg">دانلود</a></td>
                <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
		    </tr>
			  <tr bgcolor="#CCFFFF">
				<td>2</td>
				<td>آشنایی با اصول عملکرد، محاسبات و 
					نگهداری باتری‌های صنعتی.
				</td>
				<td>4 روز</td>
				<td><a href="sylabes/khas/bargh/batri.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>3</td>
				<td>طراحي عمومي و سفارش باتري شارژر و UPSهاي صنعتی
				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/upsDesign.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>4</td>
				<td>آشنایی با منابع تغذیه سوئیچینگ
				</td>
				<td>4 روز</td>
				<td><a href="sylabes/khas/bargh/switching.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>5</td>
				<td>آشنایی با ابزار دقیق
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/utility.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>6</td>
				<td>کیفیت توان (حفاظت تجهیزات و عدم قطع فرآیند تولید در برابر مشکلات شبکه‌ی برق)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/powerqulity.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>7</td>
				<td>آشنایی با پردازنده‌های سیگنال دیجیتال وکاربردهای آن  (DSP)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/dsp.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>8</td>
				<td>آشنایی با درایو پیشرفته
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/driveA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>9</td>
				<td>آشنایی با موتورهای الکتریکی ونحوه‌ی کنترل آن‌ها
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/motor.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>10</td>
				<td>اتصال زمین در شبکه‌های الکتریکی(Earthing)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/earth.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>11</td>
				<td>اصول و فلسفه حفاظت و هماهنگی رله‌ها در شبکه‌های صنعتی
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/osol rele.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>12</td>
				<td>نرم افزار DIgSILENT (آموزش پایه‌ای) در مطالعات شبکه‌های صنعتی
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/digsilentB.pdf">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>13</td>
				<td>محاسبات انتخاب کلید قدرت و CT در رله های مختلف
				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/ct.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>14</td>
				<td>مطالعات حفاظتی توسط نرم‌افزار DIgSILENT در شبکه‌های صنعتی
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/digsilenet motaleat.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>15</td>
				<td>آموزش پيشرفته نرم‌افزار DIgSILENT- مطالعات شبيه¬سازي زماني و پايداري
				</td>
				<td>5روز</td>
				<td><a href="sylabes/khas/bargh/digsilentA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>16</td>
				<td>مطالعات حالت گذرای شبکه انتقال توسط نرم افزار DIgSILENT
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/digsilentHalatgozari.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>17</td>
				<td>حفاظت فیدرهای صنعتی(خط و ترانسفورماتور) توسط رله‌ی اشنایدر
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/schnaider.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>18</td>
				<td>حفاظت فیدرهای صنعتی(خط و ترانسفورماتور) توسط رله‌ی ABB
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/abbline.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>19</td>
				<td>حفاظت فیدرهای صنعتی(خط و ترانسفورماتور) توسط رله‌ی Areva
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/alestomline.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>20</td>
				<td>حفاظت فیدرهای صنعتی(خط و ترانسفورماتور) توسط رله‌ی زیمنس
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/simens.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>21</td>
				<td>حفاظت فیدرهای صنعتی(خط و ترانسفورماتور) توسط رله‌ی VAMP
				</td>
				<td>4 روز</td>
				<td><a href="sylabes/khas/bargh/wamp.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>22</td>
				<td>
				نحوه مدل‌سازي، محاسبه و هماهنگي تنظيمات رله‌ها در نرم‌افزار DIgSILENT
				</td>
				<td>4 روز</td>
				<td><a href="sylabes/khas/bargh/digModel.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>23</td>
				<td>
				حفاظت پیشرفته ترانسفورماتور توسط رله‌ی زیمنس
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/simenslineA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>24</td>
				<td>
				حفاظت پیشرفته ترانسفورماتور توسط رله‌یABB
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/abbA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>25</td>
				<td>
				حفاظت پيشرفته در نيروگاه¬¬ها و هماهنگي با رله¬هاي شبکه قدرت با محوريت رله حفاظت (7UM623) SIEMENS
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/simensA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>26</td>
				<td>
				حفاظت پيشرفته در نيروگاه¬¬ها و هماهنگي با رله¬هاي شبکه قدرت با محوريت رله حفاظت (G60) GE
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/ge.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>27</td>
				<td>
				حفاظت پيشرفته در نيروگاه¬¬ها و هماهنگي با رله¬هاي شبکه قدرت با محوريت رله حفاظت ALSTOM
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/alestomA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>28</td>
				<td>
				حفاظت پیشرفته خط انتقال توسط رله‌ی  ABB (تنظیمات و معرفی نرم افزار مربوطه)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/abbA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>29</td>
				<td>
				حفاظت پیشرفته خط انتقال توسط رله‌ی زیمنس (تنظیمات و معرفی نرم‌افزار مربوطه)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/simenalineA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  
			   <tr bgcolor="#CCFFFF">
				<td>30</td>
				<td>
				حفاظت پیشرفته خط انتقال توسط رله‌یAREVA (تنظیمات و معرفی نرم‌افزار مربوطه)
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/alestom-averaA.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>31</td>
				<td>
				حفاظت باس¬بار، راکتور و بانک خازني در
شبکه‌های صنعتی

				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/bas ractor khazen.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>32</td>
				<td>
				اصول و فلسفه حفاظت باس بار، راکتور و بانک خازنی و بررسی رله‌هایALSTOM, SIMENS, ABB
				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/osolH.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>33</td>
				<td>
				حفاظت جامع الکتروموتورها توسط رله¬هاي
SIEMENS و Schneiderو VAMP

				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/wampSchniderSimens.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>34</td>
				<td>
				حفاظت جامع الکتروموتورها توسط رله¬هاي
Alstom و ABB

				</td>
				<td>5 روز</td>
				<td><a href="sylabes/khas/bargh/alstom-abb.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>35</td>
				<td>
				استفاده کاربردي از زبان برنامه نويسي DSL 
در نرم‌افزار DIgSILENT

				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/dsl.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>36</td>
				<td>
				استفاده کاربردي از زبان برنامه نويسي DPL 
در نرم‌افزار DIgSILENT

				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/dpl.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>37</td>
				<td>
				کنترل ولتاژ و توان راکتیو در شبکه‌های توزیع
				</td>
				<td>4 روز</td>
				<td><a href="sylabes/khas/bargh/controlVoltag.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>38</td>
				<td>
				تولید پراکنده در شبکه‌های توزیع (DG)
				</td>
				<td>2 روز</td>
				<td><a href="sylabes/khas/bargh/dg.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#99CCCC">
				<td>39</td>
				<td>
				آشنایی با سیستم‌های غبارگیر صنعتی
				</td>
				<td>3 روز</td>
				<td><a href="sylabes/khas/bargh/filter elcrostatic.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  <tr bgcolor="#CCFFFF">
				<td>40</td>
				<td>
				آشنایی با اصول و مبانی فشار قوی
				</td>
				<td>2 روز</td>
				<td><a href="sylabes/khas/bargh/hivoltag.jpg">دانلود</a></td>
                 <td><a href="http://91.98.155.84:8081/reg/RegClass.aspx">ثبت نام</a></td>
			  </tr>
			  			  
		  </table>
	</div>
  <pre class="prettyprint linenums">
  <a href="download/khas.pdf"> مشاهده لیست کامل </a>
  </pre>
  
		</article><!-- .content -->
    </div>
  </div>
</div><!-- #main -->

</div><!-- .page-box -->
</div><!-- .page-box-content -->
</body>
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