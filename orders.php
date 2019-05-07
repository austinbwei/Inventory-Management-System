<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author"
	content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.8.5">
<title>Orders Page</title>
<!-- BootstrapCDN from https://getbootstrap.com/ -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
<
link rel ="canonical" href ="https: //getbootstrap.com /docs/4.3
	/examples/dashboard/"><!--Bootstrap core CSS --> <link href ="/docs/4.3
	/dist/css/bootstrap.min.css " rel ="stylesheet" integrity
	="sha384-ggOyR0iXCbMQv3Xipma34MD+dH
	/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin ="anonymous"> <style>.bd-placeholder-img
	{
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
@media ( min-width : 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>
<!-- Custom styles for this template -->

<link href="dashboard.css" rel="stylesheet">

</head>
<body>
	<nav
		class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company
			name</a> <input class="form-control form-control-dark w-100" type="text"
			placeholder="Search" aria-label="Search">
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap"><a class="nav-link" href="login.php">Sign
					out</a></li>
		</ul>
	</nav>
	
		<canvas class="my-4 w-100" id="myChart" width="0" height="0"></canvas>
	
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item"><a class="nav-link" href="Dashboard.php"> <span
								data-feather="shopping-cart"></span> Dashboard
						</a></li>
						<li class="nav-item"><a class="nav-link" href="product_list.php"> <span
								data-feather="file"></span> Products
						</a></li>
						<li class="nav-item"><a class="nav-link" href="account_information.php"> <span
								data-feather="users"></span> Account Information
						</a></li>
					</ul>
				</div>
			</nav>
			
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div
				class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h1">Orders</h1>
			</div>
	 
	 	<h2>Order History</h2>
			
			<table>
				<div class="container">
				<div class="row">
				<div class="col-md-4">
				<table class="table table-responsive">
      				<thead>
        				<tr>
          					<th>Product ID</th>
							<th>Account ID</th>
							<th>Title</th>
							<th>First</th>
							<th>Middle</th>
							<th>Last</th>
							<th>Amount Shipped</th>
							<th>Date of Order</th>
							<th>Total Price</th>
        				</tr>
      				</thead>
				
			<?php 
			$servername = "avl.cs.unca.edu";
			$username = "ewarren1";
			$password = "sql4you";
			$dbname = "ewarren1DBCSCI338";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			$sql = "SELECT * FROM Orders";
			
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["Product_idProduct"]. "</td><td>" . $row["Account_idAccount"]. "</td><td>" . $row["Title"]. "</td><td>" .$row["First"]. 
			        "</td><td>" .$row["Middle"]. "</td><td>" .$row["Last"]. "</td><td>"  .$row["amountShipped"]. "</td><td>" . $row["dateOfOrder"]. 
			        "</td><td>" . $row["price_Total"]. "</td></tr>";
			    }
			    echo "</table>";
			} else {
			    echo "0 Results";
			}
			
			?>
			</table>
<br>

<h3>Order Inventory</h3>
<div class="form-group"><div class="col-md-6">
			<form method="post" action="order_php.php">
				*Product ID: <input name="idProduct" type="number" min="1" max="9999" class = "form-control" required>
				 <div class="help-block with-errors"></div>
                
				<br>
				*Title: <input name="title" type="text" class = "form-control" required>
				<br>
				*First: <input name="first" type="text" class = "form-control" required>
				<br>
				*Middle: <input name="middle" type="text" class = "form-control" required>
				<br>
				*Last: <input name="last" type="text" class = "form-control" required>
				<br>
				*Amount Shipped: <input name="amountShipped" type="number" class = "form-control" required>
				<br>
				*Date: <input name="date" type="date" class = "form-control" required>
				<br>
				*Account ID: <input name="accountID" type="number" class = "form-control" required>
				<br>
				*Total Price: <input name="priceTotal" type="number" class = "form-control" required>
				<br>
				<input type = "submit" value = "Order">
				
			
                </div>
            </div>
			</form> 
</center>
</body>
</html>