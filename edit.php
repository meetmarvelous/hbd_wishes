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



if (!isset($_SESSION["random"])) {
  // Your condition or code here
  header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $header ?></title>

  <!-- Icons -->
  <link href="logo.png" rel="icon">
  <style>
    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <h2>Data Form</h2>
  <p>Input all your details correctly.</p>

  <div class="container">
    <form action="edit_action.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="receiver">Receiver's Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="receiver" name="receiver" placeholder="Receiver's name.." value="<?php echo $_SESSION['receiver'] ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="sender">Sender's Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="sender" name="sender" placeholder="Sender's name.." value="<?php echo $_SESSION['sender'] ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Card Title</label>
        </div>
        <div class="col-75">
          <input type="text" id="subject" name="subject" placeholder="Write Title of the message.." required oninput="validateTitleLength()" value="<?php echo $_SESSION['subject'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="content">Card Message</label>
        </div>
        <div class="col-75">
          <textarea id="content" name="content" placeholder="The body of the message..." style="height:200px" required oninput="validateContentLength()"><?php echo $_SESSION['content'] ?></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <input type="submit" name="edit" value="Submit">
      </div>
    </form>
  </div>

</body>
<script>
  function validateContentLength() {
    const contentInput = document.getElementById('content');
    if (contentInput.value.length > 350) {
      contentInput.value = contentInput.value.substring(0, 350);
      alert('Content cannot exceed 350 characters.');
    }
  }

  function validateTitleLength() {
    const titleInput = document.getElementById('subject');
    if (titleInput.value.length > 40) {
      titleInput.value = titleInput.value.substring(0, 40);
      alert('Card Title cannot exceed 40 characters.');
    }
  }
</script>

</html>