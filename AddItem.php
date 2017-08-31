<?php 
session_start();
include 'nav.php';

$db = mysql_connect("localhost","root","");

$editFormAction = $_SERVER['PHP_SELF'];

					   
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	                  $namee = $_POST['name'];
                     $descriptione = $_POST['description'];
                     $pricee = $_POST['price'];
                     $pice  = $_POST['pic'];
  $insertSQL = sprintf("INSERT INTO food (name, description, price, pic) VALUES ('$namee', '$descriptione', '$pricee',  '$pice')");										

  mysql_select_db("menu", $db);
  $Result1 = mysql_query($insertSQL, $db) or die(mysql_error());

  $insertGoTo = "admin.php?State=AddDone";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:</td>
      <td><input type="text" name="name" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Description:</td>
      <td><input type="text" name="description" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Price:</td>
      <td><input type="text" name="price" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pic:</td>
      <td><input type="text" name="pic" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>