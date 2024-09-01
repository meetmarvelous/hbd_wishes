<?php
ob_start();
session_start();

$host = "localhost";
$username = "root" ;
$password = "";
$db = "ayo_card";
$charset 	= "utf8";

$con = mysqli_connect($host, $username, $password);
if (!$con) {
	echo "there is a problem with the sql connection";
}

mysqli_select_db($con,$db);
mysqli_set_charset($con,$charset);
