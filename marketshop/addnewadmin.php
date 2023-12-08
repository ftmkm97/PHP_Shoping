<?php

include 'config.php';
include 'lib/db.php';

session_start();
$message = '';

connectToDatabase();
$ID= $_GET['username'];
if(count($_POST)){
	
	
	if($_POST['password']==$_POST['rpassword'])
	{
		newAdmin($_POST['username1'],$_POST['password'],$_POST['firstname'],$_POST['lastname'],$_POST['city'] );
		 echo "ثبت شد ";
		header("location: dashboardadmin.php?username=$ID");
		exit;
	   
	}else{
	
		echo"ثبت نشد";
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
            <div id="logo"><a href=""><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
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
        <li><a href="dashboardadmin.php?username=<?php echo $_GET['username']?>"><i class="fa fa-home"></i></a></li>
        <li><a href="">ثبت نام مدیر جدید</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div class="col-sm-9" id="content">
          <h1 class="title">ثبت نام حساب مدیر</h1>
         
          <form class="form-horizontal"   action="" method="post"  >
            <fieldset id="account">
              <legend>اطلاعات شخصی مدیر</legend>
              
              <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-firstname" placeholder="نام" value="" name="firstname">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">نام خانوادگی</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-lastname" placeholder="نام خانوادگی" value="" name="lastname">
                </div>
              </div>
             
              
           
              <div class="form-group required">
                <label for="input-city" class="col-sm-2 control-label">شهر</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-city" placeholder="شهر" value="" name="city">
                </div>
              </div>

              
              
            </fieldset>
            <fieldset>
			<legend>نام کاربری و رمز عبور مدیر</legend>
              <div class="form-group required">
                <label for="input-username" class="col-sm-2 control-label">نام کاربری</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-username" placeholder="نام کاربری" value="" name="username1">
                </div>
              </div>
              
              <div class="form-group required">
                <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="input-password" placeholder="رمز عبور" value="" name="password">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="input-confirm" placeholder="تکرار رمز عبور" value="" name="rpassword">
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
        <!--Middle Part End -->
        
        
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
              <li><a href="aboutdashboard.php?username=<?php echo $_GET['username']?>">درباره ما</a></li>
              <li><a href="rulsdashboard.php?username=<?php echo $_GET['username']?>">شرایط و قوانین</a></li>
            </ul>
          </div>
          <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <h5>خدمات مشتریان</h5>
            <ul>
              <li><a href="contactdashboard.php?username=<?php echo $_GET['username']?>">تماس با ما</a></li>
               <li><a href="news.php?username=<?php echo $_GET['username']?>">خبرنامه</a></li>

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

