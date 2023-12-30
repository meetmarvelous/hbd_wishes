<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Copy Content Button</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .copy-button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <?php
    // PHP code to generate the content to be copied
    $contentToCopy = "Hello, world!";
  ?>

  <button class="copy-button" onclick="copyToClipboard('<?php echo $contentToCopy; ?>')">
    Copy Content
  </button>

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
</body>
</html>
