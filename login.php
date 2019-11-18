<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">

			<!--login-->
		<div class="col-md-6 login-left">
			<h2>LOGIN HERE</h2>
			<form action="validation.php" method="POST">
				<div class="form-group">
				<label>Username</label>	
				<input type="text" name="user" class="form-control" required="">
				</div>

				<div class="form-group">
				<label>Password</label>	
				<input type="password" name="password" class="form-control" required="">
				</div>

				<button type="submit" class="btn btn-primary">Login</button>
			</form>
			
		</div>	
	


	<!--registr-->		
           <div class="col-md-6 login-right">
			<h2>REGISTER HERE</h2>
			<form action="registration.php" method="POST">
				<div class="form-group">
				<label>Username</label>	
				<input type="text" name="user" class="form-control" required="">
				</div>

				<div class="form-group">
				<label>Password</label>	
				<input type="password" name="password" class="form-control" required="">
				</div>

				

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		    </div>	


</div>
</div>
</div>

</body>
</html>