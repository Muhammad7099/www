<?php  

$link = mysqli_connect( "localhost", "root", "", "webChat");

if(mysqli_connect_error($link)){
	echo "error";
}

session_start();



?>