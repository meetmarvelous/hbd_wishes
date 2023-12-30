<?php
include "dbcon.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A SURPRISE CARD</title>

  <!-- Icons -->
  <link href="logo.png" rel="icon">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <?php
  $random = $_SESSION["random"];
  // PHP code to generate the content to be copied
  $contentToCopy = "check.php?code=$random";


  ?>


  <div class="birthdayCard">
    <div class="cardFront">
      <h3 class="happy">A SURPRISE CARD!</h3>
      <div class="balloons">
        <div class="balloonOne"></div>
        <div class="balloonTwo"></div>
        <div class="balloonThree"></div>
        <div class="balloonFour"></div>
      </div>
    </div>
    <div class="cardInside">
      <h3 class="back"><?php echo $_SESSION["subject"] ?></h3>
      <p>Dear <?php echo $_SESSION["receiver"] ?></p>
      <p><?php echo $_SESSION["content"] ?></p>
      <p class="name"><?php echo $_SESSION["sender"] ?></p>
    </div>
  </div>

  <div class="left-bottom">
    <button class="copy-button" onclick="copyToClipboard('<?php echo $contentToCopy; ?>')">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
        <path d="M17 9l-7 7-4-4"></path>
      </svg>
      Copy Link
    </button>
  </div>

  <script>
    function copyToClipboard(content) {
      // Create a temporary textarea element
      const tempTextarea = document.createElement('textarea');
      tempTextarea.value = content;

      // Append the textarea to the document
      document.body.appendChild(tempTextarea);

      // Select the text in the textarea
      tempTextarea.select();
      tempTextarea.setSelectionRange(0, 99999); /* For mobile devices */

      // Copy the selected text to the clipboard
      document.execCommand('copy');

      // Remove the temporary textarea
      document.body.removeChild(tempTextarea);

      // You can add additional logic or UI feedback here if needed
      alert('Content copied to clipboard: ' + content);
    }
  </script>
  <script src="main.js"></script>
</body>

</html>