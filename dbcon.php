<?php
ob_start();
session_start();

$host = "localhost";
$username = "root" ;
$password = "";
$db = "ayo_card";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
