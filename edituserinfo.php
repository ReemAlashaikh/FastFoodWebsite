<?php 
session_start();
include 'nav.php';
$db = mysql_connect("localhost","root","");
$select = mysql_select_db("authentication");
?>

<html>
<head><title>Edit Info</title></head>
    <body>
    <div class="main">
        
        <?php      
        
        $q = mysql_query("select username, name, email, password from users where username= '$_SESSION[username]'"); 
        while($row = mysql_fetch_assoc($q)){
            $email = $row['email'];
            $name = $row['name'];
            $password = $row['password'];
        }
        
        ?>
        <center>
        <form method="post" action="editedinfo.php">
        <p>Username: <?php echo"$_SESSION[username]"; ?></p>
        <p>Name: <input type="text" name="u" value="<?php echo"$name"; ?>" ></p>
        <p>Email: <input type="email" name="e" value="<?php echo"$email"; ?>" ></p>
        <p>Password: <input type="password" name="p" value="<?php echo"$password"; ?>" ></p>
        <input class="button" type="submit" value="Update">
        </form>
        </center>
        </div>
    </body>
</html>