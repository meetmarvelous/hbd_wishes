<?php
include "dbcon.php";
session_start();
// If submit button is clicked ...
if (isset($_POST['edit'])) {

  $receiver = stripslashes($_POST["receiver"]);
  $sender = stripslashes($_POST["sender"]);
  $subject = stripslashes($_POST["subject"]);
  $content = stripslashes($_POST["content"]);
  $time = date("d/m/Y");


  $receiver = mysqli_real_escape_string($con, $receiver);
  $sender = mysqli_real_escape_string($con, $sender);
  $subject = mysqli_real_escape_string($con, $subject);
  $content = mysqli_real_escape_string($con, $content);

  $random = $_SESSION["random"];


  $sql = "UPDATE card SET receiver='$receiver', sender='$sender', subject='$subject', content='$content', sender='$sender', time='$time' where random='$random' ";

  // Execute save query
  $save = mysqli_query($con, $sql);

  if ($save) {

    $_SESSION["receiver"] = $receiver;
    $_SESSION["sender"] = $sender;
    $_SESSION["subject"] = $subject;
    $_SESSION["content"] = $content;
    $_SESSION["random"] = $random;

    echo "<script>window.alert('successfully edited'); window.location='create.php';</script>";
  } else {
    echo "<script>window.alert('Not Successful!');</script>";
  }
}


