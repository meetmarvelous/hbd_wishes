<?php
include "dbcon.php";
session_start();

if (!isset($_SESSION["random"])) {
  // Your condition or code here
  header("Location: index.php");
} 

?>


<!DOCTYPE html>
<html>

<head>
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
          <label for="receiver">Receiver Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="receiver" name="receiver" placeholder="Receiver name.." value="<?php echo $_SESSION['receiver'] ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="sender">Sender Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="sender" name="sender" placeholder="Sender name.." value="<?php echo $_SESSION['sender'] ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write subject.." style="height:200px" required><?php echo $_SESSION['subject'] ?>"</textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="content">Content</label>
        </div>
        <div class="col-75">
          <textarea id="content" name="content" placeholder="Write something.." style="height:200px" required><?php echo $_SESSION['content'] ?></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <input type="submit" name="edit" value="Submit">
      </div>
    </form>
  </div>

</body>



</html>