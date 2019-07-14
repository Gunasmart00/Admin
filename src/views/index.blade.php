<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<center>
		<h2>Admin Login</h2>
		<form method="POST" action='/login'>
			@csrf
			<input type="text" name="username" placeholder="Enter Username" required></br></br>
			<input type="password" name="pass" placeholder="Enter Password"  required ></br></br>
			<input type="submit" >
		</form>
	</center>

</body>
</html>