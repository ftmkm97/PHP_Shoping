﻿<?php

include 'config.php';
include 'lib/db.php';

connectToDatabase();


$message = "";
//var_dump($_POST);
$username=$_GET['username'];
$status=$_GET['status'];

if(count($_POST)){

$PID=$_POST['productID'];
$ID=$_POST['productID'];
editProduct($_POST['productID'],$_POST['oldname'],$_POST['newname'],$_POST['number'],$_POST['price'],$_POST['factory'],$_POST['product'],$_POST['expirat'],$_POST['wight'],$_POST['discount']);
	
	
	  $date= date("Y/m/d");
// var_dump($date);
 addToManagement($PID,$username,$status,$date);
		
	
	header("location: dashboardadmin.php?username=$_GET[username]");
	exit;
	
	$message = "edited.";
	
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
            <li><a class="home_link" title="خانه" href="dashboardadmin.php?<?php $_GET['username']?>">خانه</a></li>
            
          </ul>
        </div>
        </div>
      </nav>
    
    <!-- Main End-->
  </div>
  <div id="container">
    
    <div class="container">
		<ul class="breadcrumb">
        <li><a href="dashboardadmin.php?<?php $_GET['username']?>"><i class="fa fa-home"></i></a></li>
        <li><a href="dashboardadmin.php?<?php $_GET['username']?>">حساب مدیر</a></li>
        <li><a href="">ویرایش محصول </a></li>
      </ul>
		
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
			
			
           <form class="form-horizontal"   action="" method="post"  >
            <fieldset id="account">
			
			<legend>اطلاعات محصول مورد نظر</legend>
			
				<div class="form-group required">
                <label for="input_productID" class="col-sm-2 control-label">کدمحصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input_productID" placeholder="کد محصول" value="" name="productID">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-name" class="col-sm-2 control-label">نام محصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-name" placeholder="نام محصول" value="" name="oldname">
                </div>
              </div>
			
              <legend>اطلاعات جدید محصول</legend>
			  
			  
			  
			  
             
              <div class="form-group required">
                <label for="input-name" class="col-sm-2 control-label">نام محصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-name" placeholder="نام محصول" value="" name="newname">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-number" class="col-sm-2 control-label">تعداد محصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-number" placeholder="تعداد محصول" value="" name="number">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-price" class="col-sm-2 control-label">قیمت محصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-price" placeholder="قیمت محصول" value="" name="price">
                </div>
              </div>
              
            
              
              <div class="form-group required">
                <label for="input-factory" class="col-sm-2 control-label">نام کارخانه </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-factory" placeholder="نام کارخانه " value="" name="factory">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-product" class="col-sm-2 control-label">تاریخ تولید</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-product" placeholder="تاریخ تولید" value="" name="product">
                </div>
              </div>

              
              
            
              <div class="form-group required">
                <label for="input-expirat" class="col-sm-2 control-label">تاریخ انقضا</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-expirat" placeholder="تاریخ انقضا" value="" name="expirat">
                </div>
              </div>
              
              <div class="form-group required">
                <label for="input-wight" class="col-sm-2 control-label">وزن محصول</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-wight" placeholder="وزن محصول" value="" name="wight">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-discount" class="col-sm-2 control-label">درصد تخفیف</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-discount" placeholder="درصد تخفیف" value="" name="discount">
                </div>
              </div>
			  
			
				 
				 
            </fieldset>
           
            <div class="buttons">
              <div class="pull-right">
                
                
                <input type="submit" class="btn btn-primary" value="ادامه">
              </div>
            </div>
          </form>  
			
			
		    
         
          
         
         
         
          
          
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
              <li><a href="aboutdashboard.php?<?php $_GET['username']?>">درباره ما</a></li>
              <li><a href="rulsdashboard.php?<?php $_GET['username']?>">شرایط و قوانین</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>خدمات مشتریان</h5>
            <ul>
              <li><a href="contactdashboard.php?<?php $_GET['username']?>">تماس با ما</a></li>
              
            </ul>
          </div>
          
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>حساب من</h5>
            <ul>
              
              <li><a href="news.php?<?php $_GET['username']?>">خبرنامه</a></li>
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

