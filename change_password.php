<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User Dashboard</title>
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

		/* #main_content{
		padding: 50px;
		background-color: whitesmoke;
	} */
	</style>


</head>

<body>
	<section class="header">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="logo.png" height="50" width="50" alt=""></a>

					<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
				</div>
				<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			    <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
				<ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
			</div>
		</nav>
	</section><br>
	<span>
		<marquee bgcolor=" whitesmoke " behavior="" direction="left"> This is CSE Seminar Library official website. Library opens at 9.00 AM
			and close at 4.00 PM
		</marquee>
	</span><br><br>
	<center><h4>Change Student Password</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update_password.php" method="post">
					<div class="form-group">
						<label for="password">Enter Current Password:</label>
						<input type="password" class="form-control" name="old_password">
					</div>
					<div class="form-group">
						<label for="New Password">Enter New Password:</label>
						<input type="password" name="new_password" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Password</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>

</body>
</html>