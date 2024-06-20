<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                <h1><a href="#"><img class="img-fluid" width="60%" src="images/logo.png"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Search</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a class="mt-4 mr-2" href="#">Cart</a><span class="mt-3">8</span>
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
            <div class="col" style="display: flex; justify-content: center; align-items: center">
                <form style="width: 560px; padding: 60px 0">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
