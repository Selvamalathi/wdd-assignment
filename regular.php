<h2>Regular Expression</h2>
<form method="post">
Enter Text: <input type="text" name="input_text" required>
<input type="submit" value="Submit">
</form>
<?php

if(isset($_POST["input_text"])){
$txt=$_POST["input_text"];
echo "<h3>Applied Regular Expressions:</h3>";
// Check letters and numbers only
if(preg_match('/^[a-zA-Z0-9]+$/',$txt))
echo "<p>Input contains only letters and numbers.</p>";
else
echo "<p>Input contains characters other than letters and numbers.</p>";
// Find all letters
preg_match_all('/[a-zA-Z]/',$txt,$m);
echo "<p>Letters found: ".implode(", ",$m[0])."</p>";
// Replace spaces
echo "<p>Spaces replaced with underscores: ".preg_replace('/\s+/','_',$txt)."</p>";
// Split into characters
echo "<p>Split into characters: ".implode(",
",preg_split('//u',$txt,-1,PREG_SPLIT_NO_EMPTY))."</p>";
}
?>
