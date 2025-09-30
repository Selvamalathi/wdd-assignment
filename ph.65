<?php
session_start();
if(!isset($_SESSION["count"])) {
    $_SESSION["count"] = 1;
} else {
    $_SESSION["count"]++;
}
echo "Visit count: " . $_SESSION["count"];

$target = "uploads/" . basename($_FILES["file"]["name"]);
if(file_exists($target)) {
    echo "Error: File already exists.";
} else {
    move_uploaded_file($_FILES["file"]["tmp_name"], $target);
    echo "File uploaded.";
}
?>
