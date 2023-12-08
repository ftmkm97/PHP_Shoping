﻿<?php

include 'config.php';
include 'lib/db.php';

connectToDatabase();
$products=getallproducts();

$message = "";
//var_dump($_POST);

if(count($_POST)){
	
	//isaCustomer($_POST['username'],$_post['password']);
	
	//header('location: dashboard.php?');	
		$locat="location: dashboard.php?username=$_POST[username] " ;  
		header($locat);
	exit;
	
	$message = "correct user.";
}

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
                <li class="email"><a href="mailto:shop@shahroodut.ac.ir"><i class="fa fa-envelope"></i>shop@shahroodut.ac.irF</a></li>
                
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
            <div id="logo"><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></div>
          </div>
          <!-- Logo End -->
		  
		  
		  
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle">
			  
              <span class="cart-icon pull-left flip"></span>
              <span id="cart-total">سبد خرید</span></button>
              <ul class="dropdown-menu">
                
                <li>
                  <div>
                    
                    <p class="checkout"><a href="cart.php?  username=<?php echo $_GET['username']?> "  class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main  Start-->
    
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="dashboard.php?username=<?php echo $_GET['username']?> " >خانه</a></li>
            <li><a class="home_link" title="خانه" href="logout.php">خروج</a></li>
            
            <li class="dropdown information-link"><a>برگه ها</a>
              <div class="dropdown-menu">
                <ul>
                  
                  
                  
                  <li><a href="cart.php?username=<?php echo $_GET['username']?>">سبد خرید</a></li>
				<li><a href="search.php ?username=<?php echo $_GET['username']?>">جستجو</a></li>
                </ul>
                <ul>
                  <li><a href="aboutdashboard.php?  username=<?php echo $_GET['username']?>">درباره ما</a></li>
                  <li><a href="questiondashboard.php?  username=<?php echo $_GET['username']?>">سوالات متداول</a></li>
                  
                  <li><a href="contactdashboard.php?  username=<?php echo $_GET['username']?>">تماس با ما</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </div>
        </div>
      </nav>
    
    <!-- Main  End-->
  </div>
  <div id="container">
    
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
          <!-- Slideshow Start
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
          </div>
          Slideshow End-->
          
         
          <!-- محصولات Tab Start -->
          <div id="product-tab" class="product-tab">
  <ul id="tabs" class="tabs">
    <li><a href="#tab-featured">محصولات</a></li>
   
  </ul>
			
			 <div class="owl-carousel product_carousel_tab">
	  
	  
			 <?php foreach($products as $i=>$product){?>	
            <div class="product-thumb clearfix">
              <div class="image" style="width:200px;hight:200px"><img src="image/product/<?php echo $product['productID']?>.jpg"   alt=<?php echo $product['name']?> title=<?php echo $product['name']?> class="img-responsive" /></div>
              <div class="caption">
			  
                <h4 style="text-align:right"> 	کد محصول:	<?php echo $product['productID']?>			</h4>
				<h4 style="text-align:right"> 	نام محصول:	<?php echo $product['name']?>		</h4>
				<h4 style="text-align:right">	تعداد محصول:	<?php echo $product['number']?>			</h4>
				<h4 style="text-align:right">	قیمت محصول :<?php echo $product['firstPrice']?>تومان</h4>
				<h4 style="text-align:right"> 	نام کارخانه:	<?php echo $product['factoryname']?>		</h4>
				<h4 style="text-align:right"> 	تاریخ تولید:	<?php echo $product['productionDate']?>  </h4>
				<h4 style="text-align:right"> 	تاریخ انقضا:	<?php echo $product['expirationDate']?>			</h4>
				<h4 style="text-align:right"> 	ورزن محصول:	<?php echo $product['weight']?>			</h4>
				<h4 style="text-align:right">	درصد تخفیف:	%<?php echo $product['discountPercent']?>			</h4>
				<h4 style="text-align:right;color:#CC9900">قیمت نهایی :	<?php echo $product['price']?> تومان</h4>
             </br>
              
				
				
              </div>
			  <form action=""  method="post" >
			   <div class="button-group">
			   
               
				<a class="btn-primary" href="addtocart.php?
				productID=<?php echo $product['productID']?>
				&
				username=<?php echo $_GET['username']?> 
				&
				name=<?php echo $product['name']?>
				&
				price=<?php echo $product['price']?>
				" ><span>افزودن به سبد</span></a>
                
            </div>
            	</form>  
            </div>
			<?php
				}
				?>
	



	
		  </div>
 
</div>
 
          
      </div>
    </div>
  </div>
  
    <!-- Feature Box End-->
  <!--Footer Start-->
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
              <li><a href="aboutdashboard.php?  username=<?php echo $_GET['username']?>">درباره ما</a></li>
              <li><a href="rulsdashboard.php?  username=<?php echo $_GET['username']?>">شرایط و قوانین</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>خدمات مشتریان</h5>
            <ul>
              <li><a href="contactdashboard.php?  username=<?php echo $_GET['username']?>">تماس با ما</a></li>
              
            
          
          
          
           
           
            <!--  <li><a href="?username=<?php echo $_GET['username']?>">حساب کاربری</a></li> -->
             <!-- <li><a href="#">تاریخچه سفارشات</a></li> -->
              <li><a href="news.php?  username=<?php echo $_GET['username']?>">خبرنامه</a></li>
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

