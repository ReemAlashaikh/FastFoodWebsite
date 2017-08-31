<?php session_start();
$username= $_POST['username'];
$password= $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("authentication");

$result = mysql_query("select * from users where username = '$username' and password = '$password'")
    or die("failed to query database ".mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == 'admin') {
$_SESSION['username'] = $_POST['username'];
header('Location: admin.php');
}
elseif($row['username']== $username && $row['password'] == $password) {
    $_SESSION['username']=$username;
    header("Location: welcome.php");
}
else{
    ?> <script> window.alert("Login failed!"); </script> <?php
}

?>