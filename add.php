<?php  
include_once "inc.php";

$msg = $_POST['msg'];

$q = mysqli_query( $link, "INSERT INTO enter VALUES ( NULL, $_SESSION[user_id], '$msg', now(), 1 )" );

header("location: enter.php");
?>