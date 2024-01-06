<?php
include "dbcon.php";
session_start();


//Get the specific item info 

$settings = "SELECT * FROM settings where id ='10' ";

$site_data = mysqli_query($con, $settings);
if (!$site_data) {
  die("unable to select from database" . mysqli_error($connection));
}
$site = mysqli_fetch_array($site_data);


$receiver = $site["receiver"];
$sender = $site["sender"];
$header = $site["header"];
$subject = $site["subject"];
$content = $site["content"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $header ?></title>

  <!-- Icons -->
  <link href="logo.png" rel="icon">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="birthdayCard">
    <div class="cardFront">
      <h3 class="happy"><?php echo $header ?></h3>
      <div class="balloons">
        <div class="balloonOne"></div>
        <div class="balloonTwo"></div>
        <div class="balloonThree"></div>
        <div class="balloonFour"></div>
      </div>
    </div>
    <div class="cardInside">
      <h3 class="back"><?php echo $subject ?></h3>
      <p>Dear <?php echo $receiver ?></p>
      <p><?php echo $content ?></p>
      <p class="name"><?php echo $sender ?></p>
    </div>
  </div>

  <div class="right-bottom">
    <a class="all create" href="form.php">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 50 50" width="16" height="16" fill="white">
        <path fill="white" d="M40.63 4.71A0.38 0.38 0 0 1 40.63 4.17L41.50 3.30A3.99 3.53 -45.0 0 1 46.81 2.97L47.03 3.19A3.99 3.53 -45.0 0 1 46.70 8.50L45.83 9.37A0.38 0.38 0 0 1 45.29 9.37L40.63 4.71Z"/>
        <path fill="white" d="M18.15 29.76L20.15 31.85Q20.36 32.07 20.58 31.85L42.19 10.25Q42.66 9.78 43.12 10.28L43.61 10.81Q44.05 11.29 43.58 11.75L21.67 33.66A1.73 1.70 16.6 0 1 20.78 34.13L15.28 35.17Q14.64 35.29 14.81 34.66C15.39 32.48 15.34 29.30 16.96 27.69Q27.60 17.15 38.26 6.39Q38.69 5.96 39.15 6.35L39.72 6.84A0.67 0.66 -47.6 0 1 39.76 7.81L18.15 29.44Q17.99 29.60 18.15 29.76Z"/>
        <path fill="white" d="M4.37 46.00L37.62 46.00A0.37 0.37 0 0 0 37.99 45.63L38.01 20.11A0.37 0.37 0 0 1 38.11 19.86L39.37 18.49A0.37 0.37 0 0 1 40.01 18.74L39.98 47.62A0.37 0.37 0 0 1 39.61 47.99L2.38 47.99A0.37 0.37 0 0 1 2.01 47.62L2.01 10.39A0.37 0.37 0 0 1 2.38 10.02L31.26 9.99A0.37 0.37 0 0 1 31.50 10.64L30.03 11.90A0.37 0.37 0 0 1 29.79 11.99L4.37 12.00A0.37 0.37 0 0 0 4.00 12.37L4.00 45.63A0.37 0.37 0 0 0 4.37 46.00Z"/>
      </svg>
      Create A New Card
    </a>

  </div>


  <!-- <script src="copy.js"></script> -->
  <script src="main.js"></script>
</body>

</html>