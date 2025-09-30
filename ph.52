<?php
$email = "admin@example.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid Email<br>";
    $domain = substr(strrchr($email, "@"), 1);
    echo "Domain: " . $domain;
} else {
    echo "Invalid Email";
}
?>
