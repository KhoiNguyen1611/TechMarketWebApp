<?php
    session_start();
    if($_SESSION["usertype"] == "shipper"){
        header("location: shipping.php");
    }
    elseif($_SESSION["usertype"] == "customer"){
        header("location: ..\index.php");
    }
    if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] != true){
        header("location: login.php");
    }
    error_reporting(E_ERROR | E_PARSE);

    ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tech  Market - Administrator</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Tech</span>Market</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="product.php"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Current</a></li>
			<li class="active"><a href="#"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Add Product</a></li>
            <li><a href="..\myaccount.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>MyAccount</a></li>

        </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Product</a></li>
				<li class="active">Add</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Product</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Product name</label>
                                    <input name ="product_name" class="form-control" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Price</label>
                                    <input  name ="price" type="number" min="0" class="form-control">
                                </div>
                 
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10" maxlength = "300"></textarea>

                                </div>  
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input name= "pimage" type="file" accept ="image/png, image/jpeg">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="cat_id" class="form-control">
                                        <option value="razer">Razer</option>
                                        <option value="logitech">Logitech</option>
                                        <option value="hyperx">HyperX</option>
                                        <option value="others">Others...</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Stock" selected>Stock</option>
                                        <option value="Out of Stock">Out of stock</option>
                                    </select>
                                </div>
                                
                                <button name="sbm" type="submit" class="btn btn-success">Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>

                            </div>
                        </form>
                        <?php
        if(isset($_POST["product_name"]) && isset($_POST["price"]) && isset($_POST["description"]) && isset($_POST["cat_id"]) && isset($_POST["status"]) && is_uploaded_file($_FILES['pimage']['tmp_name'])){
            $file = fopen("items.db", "a");
            $pimage = $_FILES["pimage"];
            move_uploaded_file($pimage["tmp_name"], "product_images/".$_SESSION["username"].$_POST["product_name"]."img.png");
            fputs($file,$_POST["product_name"].";".$_POST["price"].";"."admin\product_images\\".$_SESSION["username"].$_POST["product_name"]."img.png".";".$_POST["description"].";".$_POST["status"].";".$_POST["cat_id"].";".$_SESSION["username"]."\r\n");
            fclose($file);
            echo $_SESSION["username"];
            echo " registered successfully!";
        }

?>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	
</body>

</html>
