<?php
require_once 'dbcon.php';
require_once 'config.php';
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

if (!isset($_SESSION['random'])) {
  echo "<script>window.location='index.php';</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $header ?></title>

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

  <?php
  $random = $_SESSION["random"];
  // PHP code to generate the content to be copied
  $contentToCopy = $url_path . "view.php?code=" . $random;
  $currentUrl = $url_path . "view.php?code=" . $random;
  $title = "A Surprise Card";
  $message = "Hey friends! 🌟 . I have created a personalized surprise card just for you. 🎉 Click the link below to check it out and feel the warmth of the surprise! ";
  ?>

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
      <h3 class="back"><?php echo $_SESSION["subject"] ?></h3>
      <p>Dear <?php echo $_SESSION["receiver"] ?>,</p>
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

    <a class="all edit" href="edit.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="16px" height="16px" fill="white">
        <path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z" />
      </svg>
      Edit
    </a>

    <button class="all copy" onclick="copyToClipboard('<?php echo $contentToCopy; ?>')">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 64 64" width="12" height="12" fill="white">
        <path fill="white" d="M56.53 12.66C56.56 7.72 53.15 3.53 47.98 3.52Q34.89 3.51 21.03 3.52A1.52 1.52 0 0 1 19.52 1.85Q19.56 1.46 19.76 1.09A1.21 1.21 0 0 1 20.81 0.48Q31.67 0.62 45.46 0.44C54.34 0.33 59.61 4.58 59.56 13.80Q59.44 35.49 59.51 54.03A1.30 1.28 -24.5 0 1 59.18 54.89Q58.62 55.52 58.00 55.48Q56.55 55.38 56.54 53.93Q56.43 31.25 56.53 12.66Z" />
        <path fill="white" d="M37.52 11.52L12.99 11.52A3.49 3.49 0 0 0 9.50 15.01L9.50 56.26Q9.50 60.52 13.76 60.52L44.74 60.52A3.76 3.76 0 0 0 48.50 56.76L48.50 26.87Q48.50 25.71 49.65 25.56L50.19 25.49Q51.49 25.33 51.49 26.64Q51.52 41.49 51.47 56.36C51.46 61.18 48.49 63.52 44.09 63.52Q28.04 63.52 13.90 63.50C9.45 63.50 6.47 60.93 6.48 56.76Q6.53 35.70 6.50 15.14C6.49 11.42 9.42 8.45 13.17 8.49Q24.69 8.62 36.69 8.44Q42.14 8.36 44.80 9.60Q50.84 12.39 51.52 19.76A1.61 1.61 0 0 1 49.84 21.52C47.67 21.43 45.18 21.82 43.14 21.16Q37.81 19.43 38.57 12.69Q38.70 11.52 37.52 11.52ZM42.10 11.75Q41.61 11.60 41.55 12.11Q41.26 14.45 41.84 16.33Q42.46 18.31 44.53 18.43L47.00 18.56Q48.65 18.65 48.02 17.13Q46.31 13.06 42.10 11.75Z" />
      </svg>
      Copy Link
    </button>

    <button class="all share" id="shareButton">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="10px" height="10px" fill="white">
        <path d="M 40 0 C 34.535156 0 30.078125 4.398438 30 9.84375 C 30 9.894531 30 9.949219 30 10 C 30 13.6875 31.996094 16.890625 34.96875 18.625 C 36.445313 19.488281 38.167969 20 40 20 C 45.515625 20 50 15.515625 50 10 C 50 4.484375 45.515625 0 40 0 Z M 28.0625 10.84375 L 17.84375 15.96875 C 20.222656 18.03125 21.785156 21 21.96875 24.34375 L 32.3125 19.15625 C 29.898438 17.128906 28.300781 14.175781 28.0625 10.84375 Z M 10 15 C 4.484375 15 0 19.484375 0 25 C 0 30.515625 4.484375 35 10 35 C 12.050781 35 13.941406 34.375 15.53125 33.3125 C 18.214844 31.519531 20 28.472656 20 25 C 20 21.410156 18.089844 18.265625 15.25 16.5 C 13.71875 15.546875 11.929688 15 10 15 Z M 21.96875 25.65625 C 21.785156 28.996094 20.25 31.996094 17.875 34.0625 L 28.0625 39.15625 C 28.300781 35.824219 29.871094 32.875 32.28125 30.84375 Z M 40 30 C 37.9375 30 36.03125 30.644531 34.4375 31.71875 C 31.769531 33.515625 30 36.542969 30 40 C 30 40.015625 30 40.015625 30 40.03125 C 29.957031 40.035156 29.917969 40.058594 29.875 40.0625 L 30 40.125 C 30.066406 45.582031 34.527344 50 40 50 C 45.515625 50 50 45.515625 50 40 C 50 34.484375 45.515625 30 40 30 Z" />
      </svg>
      Share
    </button>
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

  <script>
    document.getElementById('shareButton').addEventListener('click', function() {
      if (navigator.share) {
        navigator.share({
            title: '<?php echo $title; ?>',
            text: '<?php echo $message; ?>',
            url: '<?php echo $currentUrl; ?>'
          })
          .then(() => console.log('Successful share'))
          .catch((error) => console.log('Error sharing:', error));
      } else {
        alert("Sharing not supported on this device/browser.");
      }
    });
  </script>
  <script src="copy.js"></script>
  <script src="main.js"></script>
</body>

</html>