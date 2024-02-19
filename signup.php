<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CSE Library Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style_sheet.css">
	<style type="text/css">
		#side_bar {
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}

	</style>


</head>

<body>
	<section class="header">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container-fluid">
				<div class="navbar-header">


					<a class="navbar-brand" href="index.php"><img src="logo.png" height="50" width="50" alt=""></a>

					<a class="navbar-brand" href="index.php">CSE Library Management System (LMS)</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="admin/index.php">Admin Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signup.php"></span>Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">User Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</section><br>
	<span>
		<marquee bgcolor=" whitesmoke " behavior="" direction="left"> This is CSE Seminar Library official website. Library opens at 9.00 AM
			and close at 4.00 PM
		</marquee>
	</span>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 9:00 AM</li>
				<li>Closing: 4:00 PM</li>
				<li>(Thursday and Friday Off)</li>
			</ul>
			<h5>Library Services :</h5>
			<ul>
				<li>Seating Capacity of 100</li>
				<li>lending Facility</li>
				<li>Plagiarism Checking Service</li>
				<li>Digital library and Internet Facility</li>
				<li>Open Access for All Students</li>
				<li>News Papers</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>

		<div class="col-md-8" id="main_content">
			<center>
				<h3>User Registration Form</h3>
			</center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address" ></textarea>
				</div>		
					<button type="submit" class="btn btn-primary">Register</button>
						
				</form>
			</div>
		</div>
	</div>




</body>

</html>