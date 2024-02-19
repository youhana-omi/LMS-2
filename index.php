<?php
	session_start();
?>
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

					<a class="navbar-brand" href="index.php">CSE Library Management System (LMS)</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="admin/index.php">Admin Login</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="index.php">User Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signup.php"></span>Register</a>
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
		<div class="col-md-7" id="main_content">
    <center>
        <h3>User login</h3>
    </center>
    <form action="" method="post">

        <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="login" class="btn btn-primary">Login</button> |
        <a href="signup.php"> Not registered yet ?</a>

    </form>

    <?php 
				if(isset($_POST['login']))
				{
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>


</div>
</div>
</div>

</body>
</html>