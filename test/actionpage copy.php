<?php
session_start();
unset($_SESSION["receiver"]);
unset($_SESSION["sender"]);
unset($_SESSION["subject"]);
unset($_SESSION["username"]);
unset($_SESSION["content"]);

$receiver = stripslashes($_POST["receiver"]);
$sender = stripslashes($_POST["sender"]);
$subject = stripslashes($_POST["subject"]);
$content = stripslashes($_POST["content"]);


$_SESSION["receiver"] = $receiver;
$_SESSION["sender"] = $sender;
$_SESSION["subject"] = $subject;
$_SESSION["content"] = $content;
// header("Location:home.php");
echo "<script>window.alert('successfully set'); window.location='home.php';</script>";

// if (isset($_POST['create'])) {

//   $receiver = stripslashes($_POST["receiver"]);
//   $sender = stripslashes($_POST["sender"]);
//   $subject = stripslashes($_POST["subject"]);
//   $content = stripslashes($_POST["content"]);


//   $_SESSION["receiver"] = $receiver;
//   $_SESSION["sender"] = $sender;
//   $_SESSION["subject"] = $subject;
//   $_SESSION["content"] = $content;
//   echo "<script>window.alert('successfully moved'); window.location='home.php';</script>";
// }

?>