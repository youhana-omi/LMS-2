<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "select * from category";
	$cat_name = "";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="admin.css">
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
<body>
	<section class="header">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="logo.png" height="50" width="50" alt=""></a>

					<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
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
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
			</div>
		</nav>
	</section><span><marquee bgcolor = " whitesmoke " behavior="" direction = "left"> This is CSE Seminar Library official website. Library opens at 9.00 AM
			and close at 4.00 PM
		</marquee></span><br><br>
		<center><h4>Registered Book's Category</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Category Name</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['cat_name'];?></td>
						</tr>

					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</body>
</html>
