<?php

session_start();

include 'nav.php';

$ud_id = "-1";
if (isset($_GET['item_id'])) {
  $ud_id = $_GET['item_id'];
}
$db = mysql_connect("localhost","root","");
 mysql_select_db("menu", $db);

  mysql_select_db("menu", $db);
$query_EditIteme = sprintf("SELECT * FROM food WHERE id=".$ud_id." ");

$EditIteme = mysql_query($query_EditIteme, $db) or die(mysql_error());
$row_EditIteme = mysql_fetch_assoc($EditIteme);
$totalRows_EditIteme = mysql_num_rows($EditIteme);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Item </title>
</head>

<body>

 <div style="margin: 150px auto; width: 700px; text-align: center;">
<span><h1 >Edit Item</h1></span>
<form action="UPItem.php?item_id=<?php echo htmlentities($row_EditIteme['id'], ENT_COMPAT, 'utf-8'); ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:</td>
      <td><input type="text" name="item_name" value="<?php echo htmlentities($row_EditIteme['name'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Description:</td>
      <td><input type="text" name="description" value="<?php echo htmlentities($row_EditIteme['description'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Price:</td>
      <td><input type="text" name="price" value="<?php echo htmlentities($row_EditIteme['price'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pic:</td>
      <td><input type="text" name="pic" value="<?php echo htmlentities($row_EditIteme['pic'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
        <tr valign="baseline">
      <td nowrap="nowrap" align="right"></td>
      <td><img src="<?php echo htmlentities($row_EditIteme['pic'], ENT_COMPAT, 'utf-8'); ?>" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update Item" /></td>
    </tr>
  </table>
  <input type="hidden" name="item_id" value="<?php echo $row_EditIteme['id']; ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="item_id" value="<?php echo $row_EditIteme['id']; ?>" />
</form><br /><br />
</div>
<p>&nbsp;</p>


</body>
</html>
<?php
mysql_free_result($EditIteme);
?>
