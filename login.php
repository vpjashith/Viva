<?php
session_start();
require_once("db.php");

$username = $_POST['user'];
$password = $_POST['pass'];

$query = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
$result = mysqli_query($conn, $query) or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
if($num == 0) {
  echo "<script> alert('Username or Password wrong!'); window.location.href = 'index.php';</script>";
} else {
  $played_on = date('Y-m-d H:i:s');
  $update = "UPDATE user SET played_on = '$played_on' WHERE username='$username'";
  $runupdate = mysqli_query($conn, $update) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  $_SESSION['user'] = $row['username'];
  $_SESSION['name'] = $row['name'];
  header('location: account.php');
}
?>
