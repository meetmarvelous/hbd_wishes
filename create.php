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
  $contentToCopy = "view.php?code=$random";


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
    <a class="all create" href="form.php">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 50 50" width="16" height="16" fill="white">
        <path fill="white" d="M40.63 4.71A0.38 0.38 0 0 1 40.63 4.17L41.50 3.30A3.99 3.53 -45.0 0 1 46.81 2.97L47.03 3.19A3.99 3.53 -45.0 0 1 46.70 8.50L45.83 9.37A0.38 0.38 0 0 1 45.29 9.37L40.63 4.71Z"/>
        <path fill="white" d="M18.15 29.76L20.15 31.85Q20.36 32.07 20.58 31.85L42.19 10.25Q42.66 9.78 43.12 10.28L43.61 10.81Q44.05 11.29 43.58 11.75L21.67 33.66A1.73 1.70 16.6 0 1 20.78 34.13L15.28 35.17Q14.64 35.29 14.81 34.66C15.39 32.48 15.34 29.30 16.96 27.69Q27.60 17.15 38.26 6.39Q38.69 5.96 39.15 6.35L39.72 6.84A0.67 0.66 -47.6 0 1 39.76 7.81L18.15 29.44Q17.99 29.60 18.15 29.76Z"/>
        <path fill="white" d="M4.37 46.00L37.62 46.00A0.37 0.37 0 0 0 37.99 45.63L38.01 20.11A0.37 0.37 0 0 1 38.11 19.86L39.37 18.49A0.37 0.37 0 0 1 40.01 18.74L39.98 47.62A0.37 0.37 0 0 1 39.61 47.99L2.38 47.99A0.37 0.37 0 0 1 2.01 47.62L2.01 10.39A0.37 0.37 0 0 1 2.38 10.02L31.26 9.99A0.37 0.37 0 0 1 31.50 10.64L30.03 11.90A0.37 0.37 0 0 1 29.79 11.99L4.37 12.00A0.37 0.37 0 0 0 4.00 12.37L4.00 45.63A0.37 0.37 0 0 0 4.37 46.00Z"/>
      </svg>
      Create A New Card
    </a>

    <a class="all edit" href="edit.php?code=<?php echo $random ?> ">
      <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="16px" height="16px" fill="white"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/>
      </svg>
      Edit
    </a>

    <button class="all copy" onclick="copyToClipboard()">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 64 64" width="16" height="16" fill="white">
        <path fill="white" d="M56.53 12.66C56.56 7.72 53.15 3.53 47.98 3.52Q34.89 3.51 21.03 3.52A1.52 1.52 0 0 1 19.52 1.85Q19.56 1.46 19.76 1.09A1.21 1.21 0 0 1 20.81 0.48Q31.67 0.62 45.46 0.44C54.34 0.33 59.61 4.58 59.56 13.80Q59.44 35.49 59.51 54.03A1.30 1.28 -24.5 0 1 59.18 54.89Q58.62 55.52 58.00 55.48Q56.55 55.38 56.54 53.93Q56.43 31.25 56.53 12.66Z"/>
        <path fill="white" d="M37.52 11.52L12.99 11.52A3.49 3.49 0 0 0 9.50 15.01L9.50 56.26Q9.50 60.52 13.76 60.52L44.74 60.52A3.76 3.76 0 0 0 48.50 56.76L48.50 26.87Q48.50 25.71 49.65 25.56L50.19 25.49Q51.49 25.33 51.49 26.64Q51.52 41.49 51.47 56.36C51.46 61.18 48.49 63.52 44.09 63.52Q28.04 63.52 13.90 63.50C9.45 63.50 6.47 60.93 6.48 56.76Q6.53 35.70 6.50 15.14C6.49 11.42 9.42 8.45 13.17 8.49Q24.69 8.62 36.69 8.44Q42.14 8.36 44.80 9.60Q50.84 12.39 51.52 19.76A1.61 1.61 0 0 1 49.84 21.52C47.67 21.43 45.18 21.82 43.14 21.16Q37.81 19.43 38.57 12.69Q38.70 11.52 37.52 11.52ZM42.10 11.75Q41.61 11.60 41.55 12.11Q41.26 14.45 41.84 16.33Q42.46 18.31 44.53 18.43L47.00 18.56Q48.65 18.65 48.02 17.13Q46.31 13.06 42.10 11.75Z"/>
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