<?php
session_start();
if(isset($_POST['login'])){
    if($_POST['user']=="admin" && $_POST['pass']=="1234"){
        $_SESSION['admin'] = true;
        echo "Welcome Admin!";
    } else {
        echo "Invalid credentials.";
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    echo "Logged out successfully.";
}
?>
<form method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" name="login" value="Login">
    <input type="submit" name="logout" value="Logout">
</form>
