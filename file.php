<!DOCTYPE html> 
<html> 
<head><meta charset="ISO-8859-1"><title>File Upload</title> 
</head> 
<body> 
<h2>Upload a File</h2> 
<form method="post" enctype="multipart/form-data"> 
<input type="file" name="fileToUpload" required><br><br> 
<input type="submit" name="submit" value="Upload File"> 
</form> 
<?php 
if(isset($_POST['submit'])){ 
$dir="uploads"; if(!is_dir($dir)) mkdir($dir,0777,true); 
$f=$dir."/".basename($_FILES["fileToUpload"]["name"]); $ok=1; 
if($_FILES["fileToUpload"]["error"]==0){ 
$ext=strtolower(pathinfo($f,PATHINFO_EXTENSION)); 
if(!getimagesize($_FILES["fileToUpload"]["tmp_name"])) $ok=0; 
elseif(file_exists($f) || $_FILES["fileToUpload"]["size"]>500000 || 
!in_array($ext,["jpg","jpeg","png","gif"])) $ok=0; 
echo $ok? 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$f)?"The file 
".htmlspecialchars(basename($f))." has been uploaded.<br>":"Error 
uploading<br>":"File not uploaded or invalid<br>"; 
} 
} 
?> 
</body> 
</html>
