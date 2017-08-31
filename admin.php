<?php session_start();
include 'nav.php';

$db = mysql_connect("localhost","root","");
$select = mysql_select_db("menu");

?>

<html>
<head><title>Admin Page</title></head>
<body>
    <div class="main">
        <center><input class="button" type="submit" value="Add Item" onclick="window.location='additem.php';"/><br>
            <input class="button" type="submit" value="Display Users" onclick="window.location='displayusers.php';"/><br>
            <input class="button" type="submit" value="Logout" onclick="window.location='logout.php';"/></center>
    </div>
    </body>
</html>