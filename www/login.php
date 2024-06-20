<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);


   if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
   {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    
       if(isset($_POST["user"]) && isset($_POST["pass"])){
       $file = fopen('..\accounts.db', 'r');
       $good=false;
       while(!feof($file)){
           $line = fgets($file);
           $array = explode(";",$line);
       if(trim($array[1]) == $_POST['user'] && password_verify($_POST['pass'], trim($array[2]))){
               $good=true;
               break;
           }
       }
    
       if($good){
       $_SESSION['user'] = $user;
       $_SESSION["loggedin"] = true;
          if(trim($array[0]) == "customer"){
            $_SESSION["username"] = $_POST['user'];
            $_SESSION["items"] = array();
            $_SESSION["usertype"] = "customer";
            header('location: index.php');
          }
          if(trim($array[0]) == "shipper"){
            $_SESSION["username"] = $_POST['user'];
            $_SESSION["usertype"] = "shipper";
            $_SESSION["hub"] = trim($array[4]);
            header('location: admin/shipping.php');
          }
          if(trim($array[0]) == "vendor"){
            $_SESSION["username"] = $_POST['user'];
            $_SESSION["usertype"] = "vendor";
            header('location: admin/product.php');
          }
       }
       fclose($file);
       }
      
  
   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="./assets/img/logo/TechMarket-logo.png" type="image/x-icon">
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
    <title>Document</title>
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
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Search here">
                            <div class="header__search-history">
                                <ul class="header__search-history-list">
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <button class="btn header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
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

    <main>
        <form method="post" action="">
            <div class="info">
                <fieldset>
                    <form method = "post">
                        <label for="username">Username:</label> 
                        <input type="text" class = 'info_input' name="user" id="username">
                        <label for="password">Password:</label> 
                        <input type="password" class = 'info_input' name="pass" id="password">                
                        <p></p><input type="submit" name="login" id="login" value = "Login">
                    </form>
                    <br><hr>

                    <h4>Don't have an account?</h4>
                    <div class = "register_req">
                        <a href="vendor_registry.php"><input type="button" name="registry" id="Register" value = "Vendor registry" class ="register"></a>

                        <a href="customer_registry.php"><input type="button" name="registry" id="Register" value = "Customer registry" class ="register"></a>
                        
                        <a href="shipper_registry.php"><input type="button" name="registry" id="Register" value = "Shipper registry" class ="register"></a>
                    </div>
                </fieldset>
            </div>
        </form>
    </main>
</body>
<div id="footer-top">
	<div class="container">
    	<div class="row">
        	<div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
            	<h2><a href="#"><img width="60%" src="images/logo.png"></a></h2>
                <p>
                    Over 20 years of establishment and development, We is proud to be one of the leading retail brands in the field of gaming gear in Vietnam.
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