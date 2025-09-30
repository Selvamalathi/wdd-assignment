Registration.php
<h2>Course Registration</h2>
<form method="get">
Name:<input type="text" name="name"><br>
SSLC Mark:<input type="number" name="sslcmrk"><br>
HSC Mark:<input type="number" name="hscmrk"><br>
Course:
<select name="course">
<option>Computer Science</option>
<option>CS with Cognitive Systems</option>

<option>CS with AI</option>
<option>Information Technology</option>
<option>B.Sc CS with Cyber Security</option>
</select><br>
<input type="submit" name="submit" value="Register">
</form>

Course.php
<?php
if(isset($_GET["submit"])){
echo "<h3>Registration Details</h3>";
echo "NAME: ".$_GET["name"]."<br>";
echo "SSLC MARK: ".$_GET["sslcmrk"]."<br>";
echo "HSC MARK: ".$_GET["hscmrk"]."<br>";
echo "COURSE: ".$_GET["course"];
}
?>
