﻿<?php

include 'config.php';
include 'lib/db.php';


connectToDatabase();

?>


<!DOCTYPE html>
<html dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>فروشگاه</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap-rtl.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-rtl.css" />
<link rel="stylesheet" type="text/css" href="css/responsive-rtl.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />

<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  <div id="header">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>09121111111</li>
                <li class="email"><a href="mailto:shop@shahroodut.ac.ir"><i class="fa fa-envelope"></i>shop@shahroodut.ac.ir</a></li>
                
              </ul>
            </div>
            
           
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="login.php">ورود</a></li>
              <li><a href="register.php">ثبت نام</a></li>
            </ul>
          </div>
        </div>
      </div>

    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="index.php"><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              
              <ul class="dropdown-menu">
                <li>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-center"><a href="product.php"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="image/product/sony_vaio_1-50x75.jpg"></a></td>
                        <td class="text-left"><a href="product.php">کفش راحتی مردانه</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">32000 تومان</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                        <td class="text-center"><a href="product.php"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="image/product/samsung_tab_1-50x75.jpg"></a></td>
                        <td class="text-left"><a href="product.html">تبلت ایسر</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">98000 تومان</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>جمع کل</strong></td>
                          <td class="text-right">132000 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>کسر هدیه</strong></td>
                          <td class="text-right">4000 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>مالیات</strong></td>
                          <td class="text-right">11880 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>قابل پرداخت</strong></td>
                          <td class="text-right">139880 تومان</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
		  
		  
          <!-- Mini Cart End-->
          <!-- جستجو Start
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          جستجو End-->
		  
		  
        </div>
      </div>
    </header>
    <!-- Header End-->
    
    <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="about-us.php">درباره ما</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">درباره ما</h1>
          <div class="row">
            <div class="col-sm-12">
			<p>
				متن درباره ما
			</p>
             </div>
          </div>
          
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
   
   
  
  <footer id="footer">
    <div class="fpart-first">
      <div class="container">
        <div class="row">
          <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img alt="" src="image/logo-small.png">
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>اطلاعات</h5>
            <ul>
              <li><a href="about-us.php">درباره ما</a></li>
              <li><a href="ruls.php">شرایط و قوانین</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>خدمات مشتریان</h5>
            <ul>
              <li><a href="contact-us.php">تماس با ما</a></li>
              <li><a href="news.php">خبرنامه</a></li>
            </ul>
          </div>
          
          
        </div>
      </div>
    </div>
   
    <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
  
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->

</body>
</html>

