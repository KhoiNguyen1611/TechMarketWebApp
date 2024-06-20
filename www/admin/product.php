<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    if($_SESSION["usertype"] == "shipper"){
        header("location: shipping.php");
    }
    elseif($_SESSION["usertype"] == "customer"){
        header("location: ..\index.php");
    }
    if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] != true){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    
    Tech Market - Administrator</title>

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
            <li class="active"><a href="#"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Current</a></li>
            <li><a href="add_product.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Add product</a></li>
            <li><a href="..\myaccount.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>MyAccount</a></li>

        </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Products list</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Products list</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">

						    <thead>
						    <tr>
						        <th data-field="name"  data-sortable="true">Name</th>
                                <th data-field="price" data-sortable="true">Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Category</th>
						    </tr>
                            </thead>
                            <tbody>
<?php                                
$file=fopen("items.db","r");
while(!feof($file))
    {
        $line = fgets($file);
        $array = explode(";",$line);
        if(trim($array[0]) == ""){
            break;
        }

        $vendor = trim($array[6]);
        if($_SESSION["username"] == $vendor){
            $name = $array[0];
            $price = $array[1];
            $tmp_image = $array[2];
            $image = str_replace('admin\\', '', $tmp_image);
            $status = $array[4];
            $category = $array[5];
    
        
            echo "									
            <tr>
            <td style=''>$name</td>
            <td style=''>$$price</td>
            <td style='text-align: center'><img width='130' height='180' src='$image' /></td>
            <td><span class='label label-success'>$status</span></td>
            <td>$category</td>
            </tr>";
        }

}

fclose($file);


                                    
?>   

                                 </tbody>
						</table>
                    </div>
                    <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>	
</body>

</html>
