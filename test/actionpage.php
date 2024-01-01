<?php
session_start();

if (isset($_POST['create'])) {

  $receiver = stripslashes($_POST["receiver"]);
  $sender = stripslashes($_POST["sender"]);
  $subject = stripslashes($_POST["subject"]);
  $content = stripslashes($_POST["content"]);

  $_SESSION["receiver"] = $receiver;
  $_SESSION["sender"] = $sender;
  $_SESSION["subject"] = $subject;
  $_SESSION["content"] = $content;

  echo "<script>window.alert('true'); window.location='home.php';</script>";
}
