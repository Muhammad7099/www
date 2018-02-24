<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
	
		<div id="info">
			<h2>Login here</h2>
			<?php if($_GET['err'] == 1){ echo "<span class='red'> Вы ввели неправильные данные </span>"; } ?>
			<form action="singin.php" method="post">
				
				<label><b>Username:</b></label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label><b>Password:</b></label>
				<input type="text" name="password" placeholder="Password"><br><br>
				<button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b></button>	
			</form>

			<form action="singup.php" method="post">
				<h2>Dont have an account sing up here</h2>
				<label>Username:</label>
				<input type="text" name="uname" placeholder="Username"><br><br>
				
				<label>Email Add:</label>
				<input type="text" name="email" placeholder="Email"><br><br>
				
				<label>Password:</label>
				<input type="text" name="password" placeholder="Password"><br><br>

				<button style="background-color: #6495ed; color: white;" type="submit"><b>Signup</b></button>
			</form>

		</div>

	</div>


</body>
</html>