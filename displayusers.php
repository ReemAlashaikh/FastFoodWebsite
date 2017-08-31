<?php session_start();
include 'nav.php';

$db = mysql_connect("localhost","root","");
$select = mysql_select_db("authentication");
?>

<html>
<head>
    <title>Registered Users</title>
    </head>
<body>
    
    <div class="main"><center>
    <h2>Registered Users</h2>
    <table align="center" border ='1'>
    <tr>
    <th width="10%">ID</th>
    <th width="20%">Username</th>
    <th width="40%">Name</th>
    <th width="50%">Email</th>
    </tr>
    <?php
    $query = "SELECT id, username, name, email FROM users";
	$q = mysql_query($query);

		$Row = mysql_fetch_row($q);
        do
		{
            echo "<tr><td>{$Row[0]}</td>
                  <td>{$Row[1]}</td>
                  <td>{$Row[2]}</td>
                  <td>{$Row[3]}</td></tr>"; 
                      $Row = mysql_fetch_row($q);
        } while ($Row);
        
        ?>
        </table>
        </center>
    </div>
    </body>
</html>