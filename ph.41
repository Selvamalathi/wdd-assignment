<?php
if(isset($_FILES["file"])) {
    $fileType = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
    if($fileType != "jpg" && $fileType != "png") {
        echo "Error: Only JPG or PNG files are allowed.";
    } else {
        echo "File uploaded successfully.";
    }
}
?>
