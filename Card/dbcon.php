<?php
$host = "localhost";
$username = "root" ;
$password = "";
$db = "card";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
?>