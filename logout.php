<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <p>You have been logged out</p>
    <a href="index.php">Login</a>
  </body>
</html>