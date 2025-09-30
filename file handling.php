<h2>Conference Registration</h2>
<form method="post">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>
Organization: <input type="text" name="organization" required><br><br>
Select Sessions:<br>
<select name="sessions[]" multiple required>
<option>Session 1 - Topic 1</option>
<option>Session 2 - Topic 2</option>
<option>Session 3 - Topic 3</option>
</select><br><br>
<input type="submit" name="submit" value="Register">
</form>
<?php
if(isset($_POST['submit'])){
echo "<h3>Registration Details:</h3>";
echo "Name: ".$_POST['name']."<br>";
echo "Email: ".$_POST['email']."<br>";
echo "Organization: ".$_POST['organization']."<br>";
echo "Sessions:<ul>";
foreach($_POST['sessions'] as $s) echo "<li>$s</li>";

echo "</ul>";
}
?>
