<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

if($_POST['submit']) {
  include_once("connection.php");
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  $sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";
  $query = mysqli_query($dbCon, $sql);

  if($query) {
    $row = mysqli_fetch_row($query);
    $userId = $row[0];
    $dbUsername = $row[1];
    $dbPassword = $row[2];
  }

  if($username == $dbUsername && $password == $dbPassword) {
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $userId;
    header('Location: user.php');
  }
  else {
    echo "Incorrect username or password.";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Simple Login with MySQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>PHP/MySQL Login</h1>

    <form action="index.php" method="post">
      <input type="text" placeholder="Username" name="username" /><br />
      <input type="password" placeholder="Password" name="password" /><br /><br />
      <input type="submit" name="submit" value="Log In" />
    </form>
  </body>
</html>