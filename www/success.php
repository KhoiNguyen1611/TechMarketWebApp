<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    if($_SESSION["usertype"] == "shipper"){
        header("location: admin/shipping.php");
    }
    elseif($_SESSION["usertype"] == "vendor"){
        header("location: admin/product.php");
    }
    ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Order Success</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/success.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/grid.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="login.css" type="text/css">
</head>


<body>
    <!-- main -->
    <div class="app">
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Seller </li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Become TechMarket Seller</li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate header__show-qr">
                            Download App
                        </li>
                        <!-- qr code -->
                        <div class="header__qrcode">
                            <img src="./assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                
                                
                            </div>
                        </div>
                        <li class="header__nav-item">
                            Social Media                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-facebook"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-bell"></i>
                                Notification                            </a>
                            <!-- Notification -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>Notification</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/casio.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Casio fx 580 VN Plus
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Casio 580 LTP 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    iPhone 13 Pro 128GB
                                                </div>
                                                
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Apple iPhone 12 Pro Max 128GB
                                                </div>
                                                <div class="header__notifi-desc">
                                                    iPhone 12 Pro Max. Super Retina XDR 6.7 inch
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop HP 650 g1 
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Laptop HP 650 g1  ssd 120gb 15,6inh FULL HD
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop thinkpad x240 
                                                </div>
                                                <div class="header__notifi-desc">
                                                    HP 650 g1 chip M 4th gen, cpu i5 4200M ram 4gb -8gb
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">See all</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-question-circle"></i>
                                Helps
                            </a>
                        </li>
                        
                        
                        <li class="header__nav-item header__nav-item--bold">
                            <a href="myaccount.php" class="header__nav-item-link">My Account</a>
                        </li>
                        
                        
                    </ul>
                </nav>
                <!-- search -->
                <div class="header__contain">
                    <label for="mobile-search" class="header__mobile-search">
                        <i class="header__mobile-search-icon fas fa-search"></i>
                    </label>
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">
                            <img src="./assets/img/logo/logo-full.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <form method="post">
                    <div class="header__search">
                      
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" name ="keyword" placeholder="Search here">
                            <div class="header__search-history">
                                <ul class="header__search-history-list">
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <input type="submit" class="btn header__search-btn" name = "searchbtn" value = "🔎">

                    </div>
                     </form>
                    <!-- header__cart--no-cart --><!-- header__cart--has-cart -->
                    
                    
                         
                    <div id="header__cart header__cart--has-cart" class="col-lg-3 col-md-3 col-sm-12">
                        <div class="header__cart header__cart--has-cart">
                    
            	        <a class="header__cart-icon fas fa-shopping-cart" href="cart.php">Cart</a><span class="header__cart-count">
                        
                        <?php
                        if(isset($_SESSION["items"])){
                        echo count($_SESSION["items"]);}
                        else{
                            echo"0";
                        }
                        ?>
                        </span> 
                        </div>
                    </div>


                    </div>
                </div>
            </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
    
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<nav>
                	<div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <li class="menu-item"><a href="#">Razer</a></li>
                            <li class="menu-item"><a href="#">Logitech</a></li>
                            <li class="menu-item"><a href="#">Steelserie</a></li>
                            <li class="menu-item"><a href="#">HyperX</a></li>
                            <li class="menu-item"><a href="#">ASUS</a></li>
                            <li class="menu-item"><a href="#">Corsair</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
                <div id="slide" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                    <li data-target="#slide" data-slide-to="3"></li>
                    <li data-target="#slide" data-slide-to="4"></li>
                    <li data-target="#slide" data-slide-to="5"></li>
                  </ul>
                
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/slide-1.png" alt="Tech Market Academy">
                    </div>
                    <div class="carousel-item">
                      <img src="images/slide-2.png" alt="Tech Market Academy">
                    </div>
                     <div class="carousel-item">
                      <img src="images/slide-3.png" alt="Tech Market Academy">
                    </div>
                     <div class="carousel-item">
                      <img src="images/slide-4.png" alt="Tech Market Academy">
                    </div>
                     <div class="carousel-item">
                      <img src="images/slide-5.png" alt="Tech Market Academy">
                    </div>
					<div class="carousel-item">
                      <img src="images/slide-6.png" alt="Tech Market Academy">
                    </div>
                  </div>
                
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                
                </div>
                <!--	End Slider	-->
                
                <!--	Order Success	-->
                <div id="order-success">
                	<div class="row">
                    	<div id="order-success-img" class="col-lg-3 col-md-3 col-sm-12"></div>
                        <div id="order-success-txt" class="col-lg-9 col-md-9 col-sm-12">
                        	<h3>YOU SUCCESSFULLY ORDERED!</h3>
                            <p>Please check your email to review your order information.</p>
                            <a href="index.php"><input type="button" name="registry" id="Register" value = "Return to homepage">
                        
                        </div>
                    </div>    
                </div>
                <!--	End Order Success	-->
                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<div id="banner">
                	<div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-1.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-2.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-3.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-4.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-5.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-6.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
    <div class="container">
        <div class="row">
            <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                <h2><a href="#"><img width="60%" src="images/logo.png"></a></h2>
                <p>
                    Over 20 years of establishment and development, We is proud to be one of the leading retail brands in the field of telephone in Vietnam.
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Address</h3>
                <p>RMIT Building, 7 Distric, Ho Chi Minh</p>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Dịch vụ</h3>
                <p>Warranty for breakage, water absorption</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Hotline</h3>
                <p>Phone Sale: 12345668</p>
                <p>Email: techmarket@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p>
                    © 2021 TechMarket copyright - Product by PK
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->













</body>
</html>
