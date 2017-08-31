<?php
session_start();
include 'nav.php';
$db = mysql_connect("localhost","root","");
$select = mysql_select_db("authentication");

        $u = $_POST['u'];
        $e = $_POST['e'];
        $p = $_POST['p'];
        $query= mysql_query("update users set name='".$u."', email='".$e."', password='".$p."'where username= '$_SESSION[username]'");
        header("Location: account.php");
        ?>