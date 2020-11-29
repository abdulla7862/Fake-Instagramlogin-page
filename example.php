<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Instaregistration1');

$name = $_POST['username'];
$pass = $_POST['pswd'];
$fullname = $_POST['fullname'];
$mobemail = $_POST['mobemail'];

$s = "SELECT * FROM usertable WHERE name='$name' && password='$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  $_SESSION['username'] = $name;
  header('location:Facebook.php');
}
else {
  header('location:Instagram.php');
}
?>
