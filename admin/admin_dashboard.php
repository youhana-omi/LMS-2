<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
	</section>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#a0eaee80">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>
		    </ul>
		</div>
	</nav><br>

	<span><marquee bgcolor = " whitesmoke " behavior="" direction = "left"> This is CSE Seminar Library official website. Library opens at 9.00 AM
			and close at 4.00 PM
		</marquee></span><br><br>
		<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
					<a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Total Book</div>
				<div class="card-body">
					<p class="card-text">No of books available: <?php echo get_book_count();?></p>
					<a class="btn btn-success" href="Regbooks.php" target="_blank">View All Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Categories</div>
				<div class="card-body">
					<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
					<a class="btn btn-warning" href="Regcat.php" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">No. of Authors</div>
				<div class="card-body">
					<p class="card-text">No of Authors: <?php echo get_author_count();?></p>
					<a class="btn btn-primary" href="Regauthor.php" target="_blank">View Authors</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"> Issued Book</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
					<a class="btn btn-success" href="view_issued_book.php" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
	
</body>
</html>