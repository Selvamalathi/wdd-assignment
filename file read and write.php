<!DOCTYPE html>
<html>
<head><title>File Read and Write</title></head>
<body>
<?php
$filename = "test.txt"; // keep file in same folder as PHP file
// Read before writing
if(file_exists($filename)){
echo "File size: " . filesize($filename) . " bytes<br>";
echo "<pre>" . file_get_contents($filename) . "</pre>";
}
// Write new content
file_put_contents($filename, "This is a simple test");
// Read after writing
echo "<br>File size after writing: " . filesize($filename) . " bytes<br>";
echo "Content after writing: " . file_get_contents($filename);
echo "<br>File name: $filename";
?>
</body>
</html>
