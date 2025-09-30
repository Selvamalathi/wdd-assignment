// login.php
<?php
session_start();
if($_POST["user"]=="admin" && $_POST["pass"]=="1234") {
    $_SESSION["admin"] = "loggedin";
    echo "Login successful.";
} else {
    echo "Invalid credentials.";
}
?>

// logout.php
<?php
session_start();
session_destroy();
echo "Logged out successfully.";
?>
