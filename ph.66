<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $dir = __DIR__."/uploads/";
    if(!is_dir($dir)) mkdir($dir);
    $name = basename($_FILES['file']['name']);
    $dest = $dir.$name;

    if(file_exists($dest)){
        echo "Error: '$name' already exists.";
    } else {
        echo move_uploaded_file($_FILES['file']['tmp_name'], $dest)
            ? "Uploaded '$name'."
            : "Upload failed.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="file" required>
  <button>Upload</button>
</form>
