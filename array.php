<h2>Quiz Application</h2>
<form method="post">
Q1: Capital of France?<br><br>
<input type="radio" name="q1" value="Paris" required>Paris <br>
<input type="radio" name="q1" value="London">London <br>
<input type="radio" name="q1" value="Berlin">Berlin<br><br>
Q2: 2 + 2 = ?<br><br>
<input type="radio" name="q2" value="3">3 <br>
<input type="radio" name="q2" value="4" required>4 <br>

<input type="radio" name="q2" value="5">5<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
$correct=['q1'=>'Paris','q2'=>'4'];
$user=['q1'=>$_POST['q1'],'q2'=>$_POST['q2']];
$score=0;
foreach($user as $q=>$ans){ if($ans==$correct[$q]) $score++; }
echo "<h3>Result: $score / 2</h3>";
}
?>
