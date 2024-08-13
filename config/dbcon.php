<?php
ob_start();
session_start();

$host = "localhost";
$username = "ichwyqtl_marvelbyte" ;
$password = "Mahvellous1698.";
$db = "ichwyqtl_card";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
