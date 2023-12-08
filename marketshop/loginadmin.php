<?php


include 'config.php';
include 'lib/db.php';

//var_dump($_SERVER);

session_start();
$message = '';

connectToDatabase();

if(count($_POST)){
	
	
	if(isaAdmin($_POST['username'],$_POST['password']))
	
	
	{
		$_SESSION['is_valid'] = 1;
		header("location: dashboardadmin.php?username=$_POST[username]");
		exit;
	}else{
	
		$message = 'Username or password is invalid';
	}
	
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
                <li class="email"><a href="mailto:shop@shahroodut.ac.ir"><i class="fa fa-envelope"></i>shop@shahroodut.ac.ir</a></li>
                
              </ul>
            </div>
            
           
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="login.php">ورود کاربران</a></li>
              <li><a href="register.php">ثبت نام کاربران</a></li>
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
          
         
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- Main آقایانu Start-->
    
    <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="loginadmin.php">ورود مدیران</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">ورود به حساب  مدیران</h1>
          <div class="row">
            <div class="col-sm-6">
              
             <div class="col-sm-6">
              
			  <div><?php echo $message?></div>
			 <?php //var_dump($_POST);?>
			
			 <form action="" method="post" >
			   <div class="form-group">
			   
                  <label class="control-label" for="input-username">نام کاربری</label>
				  
                  <input type="text" name="username" value="" placeholder="نام کاربری" id="input-username" class="form-control" />
                </div>
				
				
                <div class="form-group">
                  <label class="control-label" for="input-password">رمز عبور</label>
				  
                  <input type="password" name="password" value="" placeholder="رمز عبور" id="input-password" class="form-control" />
                  <br />
				 </div>
				 
				 <div>
					<input type="submit" value="ورود" name="sb"  class="btn btn-primary"  />
				 </div>
				 
			</form>
				
				  
                
            </div>
          </div>
        </div>
        <!--Middle Part End -->
       
      </div>
    </div>
  </div></div>
  
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

