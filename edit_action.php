<?php
require_once 'dbcon.php';
require_once 'config.php';

if (isset($_POST['edit'])) {
    $receiver = $_POST["receiver"];
    $sender = $_POST["sender"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $time = date("d/m/Y");

    $random = $_SESSION["random"];

    // Use prepared statement to prevent SQL injection
    $sql = "UPDATE card SET receiver=?, sender=?, subject=?, content=?, time=? WHERE random=?";

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

        echo "<script>window.alert('Successfully edited');</script>";
        header('Location: create.php');
        exit();
    } else {
        echo "<script>window.alert('Not successful!');</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

