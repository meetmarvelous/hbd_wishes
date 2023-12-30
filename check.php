<?php
include "dbcon.php";
session_start();


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
    // PHP code to generate the content to be copied
    $contentToCopy = "Hello, world!";
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
      <h3 class="back"><?php echo $subject ?></h3>
      <p>Dear <?php echo $receiver ?></p>
      <p><?php echo $content ?></p>
      <p class="name"><?php echo $sender ?></p>
    </div>
  </div>
 
  <script src="main.js"></script>
</body>

</html>