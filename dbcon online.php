<?php
$host = "localhost";
$username = "id21735414_marvel" ;
$password = "Mahvellous1698.";
$db = "id21735414_card";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
?>