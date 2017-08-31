<?php

session_start();

include 'navAdmin.php';

$colname_EditIteme = "-1";
if (isset($_GET['item_id'])) {
  $colnameEditIteme = $_GET['item_id'];
}
$db = mysql_connect("localhost","root","");
 mysql_select_db("menu", $db);
$editFormAction = $_SERVER['PHP_SELF'];


if ((isset($_GET['item_id'])) && ($_GET['item_id'] != "")) {
		             $namee = $_POST['item_name'];
                     $descriptione = $_POST['description'];
                     $pricee = $_POST['price'];
                     $pice  = $_POST['pic'];	
  $deleteSQL = sprintf("UPDATE `food` SET `name`='$namee', `description`='$descriptione', `price`='$pricee', `pic`='$pice'  WHERE id='$colnameEditIteme'");

  mysql_select_db("menu", $db);
  $Result1 = mysql_query($deleteSQL, $db) or die(mysql_error());

  $deleteGoTo = "admin.php?Stete=UpDone";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edite Item</title>
</head>

<body>
</body>
</html>