<?php  
include_once "inc.php";

$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];

$q = mysqli_query( $link, "INSERT INTO user ( username, email, password ) VALUES ( '$uname', '$email', '$password')" );


?>