<?php
require_once 'dbcon.php';
require_once 'config.php';

if (isset($_POST['create'])) {
    $receiver = $_POST["receiver"];
    $sender = $_POST["sender"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $time = date("d/m/Y");

    // Generate a unique identifier based on the current timestamp
    $timestamp = time();
    $randomNumber = mt_rand(1000, 9999);
    $uniqueId = uniqid();
    $random = substr(md5($timestamp . $randomNumber . $uniqueId), 0, 6);  

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO card (receiver, sender, subject, content, time, random) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ssssss", $receiver, $sender, $subject, $content, $time, $random);
    $save = mysqli_stmt_execute($stmt);

    if ($save) {
        // Update session variables
        $_SESSION["receiver"] = $receiver;
        $_SESSION["sender"] = $sender;
        $_SESSION["subject"] = $subject;
        $_SESSION["content"] = $content;
        $_SESSION["random"] = $random;

        echo "<script>window.alert('Successfully created'); window.location='create.php';</script>";
    } else {
        echo "<script>window.alert('Not successful!');</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
