<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
    <?php include 'nav.php'; ?>
        <div style="text-align: center" class="main">
        <h3>Welcome <?php echo $_SESSION['username'] ?>!</h3>
        <p>You are now logged in</p>
        <p><a href="account.php">Go to Account</a></p></div>
</body>
</html>