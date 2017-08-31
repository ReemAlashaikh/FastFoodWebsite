<!DOCTYPE html>
<?php session_start(); ?>
<html>   
<head>
    <title>Login</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
<?php include 'nav.php'; ?>
        
        <div style="text-align: center" class="main">
        <h3>Login</h3>
    <form action="process.php" method="post">
    	<input id="username" type="text" name="username" placeholder="Username" required="required" /><br><br>
        <input id="password" type="password" name="password" placeholder="Password" required="required" /><br><br>
        <button class="button" type="submit">Log in</button>
    </form>
        </div>
    </body>
</html>