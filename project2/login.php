<?php
include("dbconnection.php");

if(isset($_POST["loginbtn"]))
{
$un=$_POST["username"];
$pwd=$_POST["password"];


$qry="SELECT * FROM `register` WHERE username='$un' AND password='$pwd'";
$result=mysqli_query($connect,$qry);
$row=mysqli_num_rows($result);
if($row>0)
{
	echo "Welcome";
}
else
{
	echo "Invalid username or password";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link href="css/style.css" rel="stylesheet">	

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 mx-auto">
			<div class="card-header bg-primary text-light">
				<b><h4>login Form</h4></b>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="username">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password">
					</div>
					<div>
						<button class="btn btn-primary" type="submit" name="loginbtn">login</button>
					</div>
					<p>Don't have an Account?<a href="register.php">Sign Up</a></p>
				</form>	
			</div>
		</div>
	</div>
</div>






























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>