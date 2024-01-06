<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Example</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>

    <h1>Your Content Here</h1>

    <?php
        $random = "your_random_value"; // Replace this with your actual random value
        $currentUrl = 'https://cardtoyou.000webhostapp.com/view.php?code=' . $random;
    ?>

    <button id="shareButton">Share</button>

    <script>
        document.getElementById('shareButton').addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Your Title',
                    text: 'Your Text',
                    url: '<?php echo $currentUrl; ?>'
                })
                .then(() => console.log('Successful share'))
                .catch((error) => console.log('Error sharing:', error));
            } else {
                alert("Sharing not supported on this device/browser.");
            }
        });
    </script>

</body>
</html>
