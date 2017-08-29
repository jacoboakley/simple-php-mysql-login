<?php

$dbCon = mysqli_connect("localhost", "root", '', "learn_login");

if(mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_err();
}
?>