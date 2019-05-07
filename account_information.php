<?php
session_start();
include('dbconnection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Account Information</title>
<!-- BootstrapCDN from https://getbootstrap.com/ -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
								data-feather="users"></span> Products
						</a></li>
						<li class="nav-item"><a class="nav-link" href="orders.php"> <span
								data-feather="file"></span> Orders
						</a></li>
					</ul>
				</div>	
			</nav>
			
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div
				class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h1">Account Information</h1>
			</div>			
		
			 <?php echo " Your username is ". $_SESSION['username'] . ""?>
			
			<h2>Update Your Account Information</h2>
			<div class="form-group"><div class="col-md-6">
			<form method="post" action="update_account.php">
				Account ID: <input name="accountID" type="number" class = "form-control">
				<br>
				Email: <input name="email" type="text" class = "form-control">
				<br>
				First Name: <input name="firstName" type="text" class = "form-control">
				<br>
				Middle Name: <input name="middleName" type="text" class = "form-control">
				<br>
				Last Name: <input name="lastName" type="text" class = "form-control">
				<br> 
				Company Name: <input name="companyName" type="text" class = "form-control">
				<br> 
				Password: <input name="password" type="text" class = "form-control">
				<br> 
				<input type = "submit" value = "Update">
			</form></div></div>
			
			</main>
		</div>
	</div>
	
</body>
</html>