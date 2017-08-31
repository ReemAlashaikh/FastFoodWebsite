<?php
session_start();

$db = mysql_connect("localhost","root","");
$select = mysql_select_db("authentication");

if(isset($_POST['register_btn'])){
    session_start();
    $username = mysql_real_escape_string($_POST['username']);
    $name = mysql_real_escape_string($_POST['name']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $password2 = mysql_real_escape_string($_POST['password2']);
    
    if($password == $password2){
        // $password = md5($password);
        $sql = mysql_query("INSERT INTO users(username, name, email, password) VALUES('$username','$name','$email','$password')");
        mysql_query($db,$sql);
        $_SESSION['message']="You are now Logged in";
        $_SESSION['username']=$username;
        header("location: index.php");

    } else{
        $_SESSION['message']="The two passwords do not match";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
<?php include 'nav.php'; ?>
        
        <div style="text-align: center" class="main"> 
        <h3>Sign up</h3>
    <form method="post" action="signup.php">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="E-mail"><br><br>
    	<input type="text" name="username" placeholder="Username" required="required" /><br><br>
        <input type="password" name="password" placeholder="Password" required="required" /><br><br>
        <input type="password" name="password2" placeholder="Confirm Password" required="required" /><br><br>

        <input type="submit" name="register_btn" value="Sign up" class="button">
            </form>
        </div> 
    </body>
</html>