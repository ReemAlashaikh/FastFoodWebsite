<?php
session_start();
include 'nav.php';
?>
<html>
    <head>
    <title>Account</title>
    </head>
<body>
    <div class="main"><center>
        <form method="post" action="edituserinfo.php">
        <?php
        $connection = mysql_connect("localhost","root","");
        $result = mysql_select_db("authentication");
            if( !isset($_SESSION['username']) )
                die( "Login is required" );
        $q = mysql_query("select username, name, email, password from users where username= '$_SESSION[username]'");
        
        $Row = mysql_fetch_row($q);
        if ($_SESSION['username'] == "admin") {
            header("location: admin.php");}
        else{
      //  do {
            echo "<div class=main><p>Username: {$Row[0]} </p>
                  <p>Name: {$Row[1]}</p>
                  <p>Email: {$Row[2]}</p>
                  <p>Password: {$Row[3]} </p>
                  <input type='submit' value='Edit' class='button'></div>";
            
        }
                //  $Row = mysql_fetch_row($q);}
       // } while ($Row);   }
        ?>
            </form>
        <input class="button" type="submit" value="Logout" 
    onclick="window.location='logout.php';"/></center>
    </div>
</body>
</html>