<?php
require_once 'dbcon.php';
require_once 'config.php';

//Get the specific item info 
$getcode = $_GET["code"];
$collect_one = "SELECT * FROM card where random ='$getcode' ";

$one = mysqli_query($con, $collect_one);
if (!$one) {
  die("unable to select from database" . mysqli_error($connection));
}
$item = mysqli_fetch_array($one);


$receiver = $item["receiver"];
$sender = $item["sender"];
$subject = $item["subject"];
$content = $item["content"];

$_SESSION["receiver"] = $receiver;
$_SESSION["sender"] = $sender;
$_SESSION["subject"] = $subject;
$_SESSION["content"] = $content;
$_SESSION["random"] = $getcode;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A SURPRISE CARD</title>

  <!-- Additional meta tags for SEO -->
  <meta name="description" content="Create stunning cards with our online card creation tool! Customize your cards with personalized messages">
  <meta name="keywords" content="birthday card, card creation, online card maker, custom cards, personalized cards, greeting">
  <meta name="author" content="Marvelbyte">

  <!-- Open Graph Meta Tags -->
  <meta property="og:url" content="https://card.marvelbyte.xyz/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Online Card Creation Tool">
  <meta property="og:description" content="Create stunning cards with our online card creation tool! Customize your cards with personalized messages">
  <meta property="og:image" content="https://card.marvelbyte.xyz/images/picture1.png">
  <meta property="og:image:alt" content="Preview of a personalized card">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:creator" content="@realmarvelous">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Online Card Creation Tool">
  <meta name="twitter:description" content="Create stunning cards with our online card creation tool! Customize your cards with personalized messages">
  <meta name="twitter:image" content="https://card.marvelbyte.xyz/images/picture1.png">
  <meta name="twitter:image:alt" content="Preview of a personalized card">


  <!-- Icons -->
  <link href="logo.png" rel="icon">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="styles.css">

</head>

<body>


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

  <div class="right-bottom">
    <a class="all create" href="form.php">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 50 50" width="16" height="16" fill="white">
        <path fill="white" d="M40.63 4.71A0.38 0.38 0 0 1 40.63 4.17L41.50 3.30A3.99 3.53 -45.0 0 1 46.81 2.97L47.03 3.19A3.99 3.53 -45.0 0 1 46.70 8.50L45.83 9.37A0.38 0.38 0 0 1 45.29 9.37L40.63 4.71Z" />
        <path fill="white" d="M18.15 29.76L20.15 31.85Q20.36 32.07 20.58 31.85L42.19 10.25Q42.66 9.78 43.12 10.28L43.61 10.81Q44.05 11.29 43.58 11.75L21.67 33.66A1.73 1.70 16.6 0 1 20.78 34.13L15.28 35.17Q14.64 35.29 14.81 34.66C15.39 32.48 15.34 29.30 16.96 27.69Q27.60 17.15 38.26 6.39Q38.69 5.96 39.15 6.35L39.72 6.84A0.67 0.66 -47.6 0 1 39.76 7.81L18.15 29.44Q17.99 29.60 18.15 29.76Z" />
        <path fill="white" d="M4.37 46.00L37.62 46.00A0.37 0.37 0 0 0 37.99 45.63L38.01 20.11A0.37 0.37 0 0 1 38.11 19.86L39.37 18.49A0.37 0.37 0 0 1 40.01 18.74L39.98 47.62A0.37 0.37 0 0 1 39.61 47.99L2.38 47.99A0.37 0.37 0 0 1 2.01 47.62L2.01 10.39A0.37 0.37 0 0 1 2.38 10.02L31.26 9.99A0.37 0.37 0 0 1 31.50 10.64L30.03 11.90A0.37 0.37 0 0 1 29.79 11.99L4.37 12.00A0.37 0.37 0 0 0 4.00 12.37L4.00 45.63A0.37 0.37 0 0 0 4.37 46.00Z" />
      </svg>
      Create A New Card
    </a>

  </div>

  <div class="created">
    <a href="https://marvelbyte.vercel.app/" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 141.732 141.732" viewBox="0 0 141.732 141.732" width="16" height="16" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Livello_107" fill="#ffffff">
          <path d="M57.217,63.271L20.853,99.637c-4.612,4.608-7.15,10.738-7.15,17.259c0,6.524,2.541,12.653,7.151,17.261c4.609,4.608,10.74,7.148,17.259,7.15h0.002c6.52,0,12.648-2.54,17.257-7.15L91.738,97.79c7.484-7.484,9.261-18.854,4.573-28.188l-7.984,7.985c0.992,4.667-0.443,9.568-3.831,12.957l-37.28,37.277l-0.026-0.023c-2.652,2.316-6.001,3.579-9.527,3.579c-3.768,0-7.295-1.453-9.937-4.092c-2.681-2.68-4.13-6.259-4.093-10.078c0.036-3.476,1.301-6.773,3.584-9.39l-0.021-0.02l0.511-0.515c0.067-0.071,0.137-0.144,0.206-0.211c0.021-0.021,0.043-0.044,0.064-0.062l0.123-0.125l36.364-36.366c2.676-2.673,6.23-4.144,10.008-4.144c0.977,0,1.947,0.101,2.899,0.298l7.993-7.995c-3.36-1.676-7.097-2.554-10.889-2.554C67.957,56.124,61.827,58.663,57.217,63.271M127.809,24.337c0-6.52-2.541-12.65-7.15-17.258c-4.61-4.613-10.74-7.151-17.261-7.151c-6.519,0-12.648,2.539-17.257,7.151L49.774,43.442c-7.479,7.478-9.26,18.84-4.585,28.17l7.646-7.646c-0.877-4.368,0.358-8.964,3.315-12.356l-0.021-0.022l0.502-0.507c0.064-0.067,0.134-0.138,0.201-0.206c0.021-0.02,0.04-0.04,0.062-0.06l0.126-0.127l36.363-36.364c2.675-2.675,6.231-4.147,10.014-4.147c3.784,0,7.339,1.472,10.014,4.147c5.522,5.521,5.522,14.51,0,20.027L76.138,71.629l-0.026-0.026c-2.656,2.317-5.999,3.581-9.526,3.581c-0.951,0-1.891-0.094-2.814-0.278l-7.645,7.645c3.369,1.681,7.107,2.563,10.907,2.563c6.523,0,12.652-2.539,17.261-7.148l36.365-36.365C125.27,36.988,127.809,30.859,127.809,24.337" />
        </g>
        <g id="Livello_1_1" />
      </svg>
      Created by Marvelbyte</a>
  </div>


  <script src="main.js"></script>
</body>

</html>