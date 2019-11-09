<?php
session_start();
require_once("db.php");

$username = $_POST['user'];
$password = $_POST['pass'];

$query = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
$result = mysqli_query($conn, $query) or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
if($num == 0) {
  $error = $$_GET['error'];
  $error = "<span class='red'>Incorrect Username or Password</span>";
  header('location:login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['user'] = $row['username'];
  $_SESSION['name'] = $row['name'];
  header('location: account.php');
}
?>
