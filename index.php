<?php
// Set the new URL
$new_url = "https://www.example.com/new-page.php";

// Redirect to the new URL
header("Location: " . $new_url);
exit(); // Stop further script execution
?>
