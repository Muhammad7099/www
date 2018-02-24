<?php  

include_once "inc.php";

$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];

$q = mysqli_query($link, "SELECT * FROM user WHERE username = '$uname' AND password = '$password' ");
	$row = mysqli_num_rows($q);
echo mysqli_error($link);
if($row == 1){
	$_SESSION['user'] = 1;
	$_SESSION['user_id'] = mysqli_fetch_assoc($q)['id'];
	header("Location:enter.php");
}
else{
	header("Location:index.php?err=1");
}

?>