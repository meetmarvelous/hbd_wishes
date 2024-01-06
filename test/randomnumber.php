<?php

// Get the current timestamp
$timestamp = time();

// Generate a random number
$randomNumber = mt_rand(1000, 9999);

// Generate a unique identifier based on the current timestamp
$uniqueId = uniqid();

// Concatenate timestamp, random number, and unique identifier
$random = $timestamp . $randomNumber . $uniqueId;

// Take the first six alphanumeric characters
$random = substr(md5($random), 0, 6);

// Output the random variable
echo $random;

?>
