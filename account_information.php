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
		<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item"><a class="nav-link" href="Dashboard.php"> <span
								data-feather="shopping-cart"></span> Dashboard
						</a></li>
						<li class="nav-item"><a class="nav-link" href="orders.php"> <span
								data-feather="file"></span> Orders
						</a></li>
						<li class="nav-item"><a class="nav-link" href="finance.php"> <span
								data-feather="users"></span> Finances
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
				<h1 class="h1">Account Information</h1>
				<div class="btn-toolbar mb-2 mb-md-0">
					<div class="btn-group mr-2">
						<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
						<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
					</div>
					<button type="button"
						class="btn btn-sm btn-outline-secondary dropdown-toggle">
						<span data-feather="calendar"></span> This week
					</button>
				</div>
			</div>
			
			<table>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>First Name </th>
					<th>Middle Name </th>
					<th>Last Name </th>
					<th>Company Name</th>
				</tr>
			
			<?php 
			        echo "<tr><td>" . $_SESSION["userName"]. "</td><td>" . $_SESSION["email"]. "</td><td>" . $_SESSION["firstName"]. "</td><td>";
				    echo "</table>";		
			?>
			</table>
			
			<canvas class="my-4 w-100" id="myChart" width="900" height="100"></canvas>
			
			<h3>Update Your Account Information</h3>
			<form method="post" action="update_account.php">
				
				Username: <input name="userName" type="text" >
				<br>
				Email: <input name="email" type="text" >
				<br>
				First Name: <input name="firstName" type="text" >
				<br>
				Middle Name: <input name="middleName" type="text">
				<br>
				Last Name: <input name="lastName" type="text" >
				<br> 
				Company Name: <input name="companyName" type="text">
				<br> 
				Password: <input name="password" type="text">
				<br> 
				<input type = "submit" value = "Update">
			</form>
			</main>
		</div>
	</div>
	
</body>
</html>
