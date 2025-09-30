<?php
session_start();
if(!isset($_SESSION['start_time'])){
    $_SESSION['start_time'] = date('c');
}
$_SESSION['message'] = "Hello, session!";
echo "Started at: ".$_SESSION['start_time']."<br>";
echo "Message: ".$_SESSION['message'];
?>
