<?php
require_once 'dbcon.php';
require_once 'config.php';

// If submit button is clicked ...
if (isset($_POST['create'])) {

  $receiver = stripslashes($_POST["receiver"]);
  $sender = stripslashes($_POST["sender"]);
  $subject = stripslashes($_POST["subject"]);
  $content = stripslashes($_POST["content"]);
  $time = date("d/m/Y");


  $receiver = mysqli_real_escape_string($con, $receiver);
  $sender = mysqli_real_escape_string($con, $sender);
  $subject = mysqli_real_escape_string($con, $subject);
  $content = mysqli_real_escape_string($con, $content);


  // Get the current timestamp
  $timestamp = time();

  // Generate a random number
  $randomNumber = mt_rand(1000, 9999);

  // Generate a unique identifier based on the current timestamp
  $uniqueId = uniqid();

  // Concatenate timestamp, random number, and unique identifier
  $random = $timestamp . $randomNumber . $uniqueId;

  // Take the first six alphanumeric characters
  $random = substr(md5($random), 0, 6);

  // Output the random variable
  // echo $random;


  $sql = "INSERT INTO card (receiver, sender, subject, content, time, random) VALUES ('$receiver','$sender','$subject','$content','$time','$random')";

  // Execute save query
  $save = mysqli_query($con, $sql);

  if ($save) {

    $_SESSION["receiver"] = $receiver;
    $_SESSION["sender"] = $sender;
    $_SESSION["subject"] = $subject;
    $_SESSION["content"] = $content;
    $_SESSION["random"] = $random;

    echo "<script>window.alert('successfully created'); window.location='create.php';</script>";
  } else {
    echo "<script>window.alert('Not Successful!');</script>";
  }
}


// if (isset($_SESSION["content"])) {
//   header("Location:home.php");
// } else {
//   header("Location:index.php");
// }
