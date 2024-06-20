<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if($_SESSION["usertype"] == "customer"){
	header("location: ..\index.php");
}
elseif($_SESSION["usertype"] == "vendor"){
	header("location: admin/product.php");
}

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] != true){
	header("location: login.php");
}

if($_SESSION["hub"] == "HCMC"){
	$haddress = "702 Nguyễn Văn Linh, Tân Hưng, Quận 7, Thành phố Hồ Chí Minh";
	$hub = "Ho Chi Minh Hub";
}
elseif($_SESSION["hub"] == "Hanoi"){
	$haddress = " Handi Resco Building, 521 Kim Mã, Ngọc Khánh, Ba Đình, Hanoi";
	$hub = "ha Noi Hub";
}
elseif($_SESSION["hub"] == "Danang"){
	$haddress = " Số 02 Đ. 2 Tháng 9, Bình Hiên, Hải Châu, Đà Nẵng";
	$hub = "Da Nang Hub";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

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
			<li><a href=""><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="shipping.php"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Shipper management</a></li>
			<li><a href="..\myaccount.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>MyAccount</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">ORDERS</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">ORDERS LIST</h1>
<?php
	echo "<h2>Distribution Hub:&nbsp"; echo $hub;
	echo "<h3>Address:&nbsp"; echo $haddress;	
	;

?>	

			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-default">
							<div class="panel-body">
								<table 
									data-toolbar="#toolbar"
									data-toggle="table">
		
									<thead>
									<tr>
										<th>Number</th>										
										<th data-field="id" data-sortable="true">Name</th>
										<th>Telephone</th>										
										<th>Address</th>
										<th>Price</th>
										<th>Action</th>
										
									</tr>
									</thead>
									<tbody>
<?php
$i = 0;
$file=fopen("orders.db","r+");
while(!feof($file))
{
	$line = fgets($file);
	$array = explode(";",$line);
	$status = $array[0];
	if ($status === ""){
		break;}
	if ($status != "On Going"){
		continue;
	}
	if($_SESSION["hub"] != trim($array[6])){
		continue;
	}

	$buyer = $array[1];
	$number = $array[2];
	$email = $array[3];
	$add = $array[4];
	$price = $array[5];
	$hub = $array[6];
	if(isset($_GET["deliver".$buyer])){
		$database = file_get_contents("orders.db");	
		$replacement = str_replace($line,"Deliver".";".$buyer.";".$number.";".$email.";".$add.";".$price.";".$hub,$database);
		file_put_contents("orders.db", $replacement);
		continue;
	}
	if(isset($_GET["cancel".$buyer])){
		$database = file_get_contents("orders.db");	
		$replacement = str_replace($line,"Cancelled".";".$buyer.";".$number.";".$email.";".$add.";".$price.";".$hub,$database);
		file_put_contents("orders.db", $replacement);
		continue;
	}
	$i++;
	echo "									
			<tr>
				<td style=''>$i</td>
				<td style=''>$buyer</td>
				<td style=''>$number</td>
				<td style=''>$add</td>
				<td style=''>$$price</td>
				<td class='form-group'>
					<a href='?deliver$buyer= yes' class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i></a>
					<a href='?cancel$buyer= yes' class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i></a>
				</td>
			</tr>";

}

fclose($file);

?>
									</tbody>
								</table>
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
