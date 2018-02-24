<?php  
include_once "inc.php";

if($_SESSION['user'] == 1): ?>

<!DOCTYPE html>
<html>
<head>
	<title>Wellcome</title>
</head>
<body>

	<div>
		
		<form action="add.php" method="post">
			
			<fieldset>
				<textarea name="msg" placeholder="Введите сообщение..."></textarea>
				<button name="submit" type="submit">Отправить</button>
			</fieldset>

		</form>

	</div>

	<div>
		<?php 

		$q = mysqli_query($link, "SELECT * FROM enter ORDER BY id DESC");

		while($row = mysqli_fetch_assoc($q)){
		
		$w = mysqli_query($link, "SELECT username FROM user ");

		$row2 = mysqli_fetch_assoc($w);
		

			echo "<div> <div>$row2[username]</div> <div>$row[msg]</div> <div>$row[data]</div> </div><br><br>";
			
		}

		?>
	</div>


</body>
</html>


<?php endif ?>