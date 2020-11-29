<?php
session_start();
header('location:Instagram.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'Instaregistration1');

$name = $_POST['username'];
$pass = $_POST['pswd'];
$fullname = $_POST['fullname'];
$mobemail = $_POST['mobemail'];

$s = "SELECT * FROM usertable WHERE name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "username Already taken";
}
else {
    $reg = "Insert into usertable (name,password,fullname,mobemail)value('$name','$pass','$fullname','$mobemail')";
    mysqli_query($con, $reg);
    echo "Registration successfully";
}
?>
