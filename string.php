<?php
if(isset($_POST['disp'])){
$s=$_POST['s']; $ch=$_POST['ch'];
switch($ch){
case 'STRING LENGTH': $res=strlen($s); break;
case 'WORD COUNT': $res=str_word_count($s); break;
case 'STRING REVERSE': $res=strrev($s); break;
case 'POSITION OF A CHARACTER': $res=strpos($s,"a"); break;
case 'STRING REPLACE': $res=str_replace("hello","world",$s); break;
case 'STRING SPLIT': $res=implode(" ",str_split($s)); break;
case 'PASSWORD GENERATOR':
$res=substr(str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghij
klmnopqrstuvwxyz"),0,7); break;
}
}
?>
<h2 style="text-align:center;">STRING HANDLING</h2>
<form method="post">
<table border="1" align="center" cellpadding="8">
<tr>
<td>Enter String</td>
<td><input type="text" name="s"></td>
</tr>
<tr>
<td>Select Choice</td>
<td>
<select name="ch">
<option>STRING LENGTH</option>
<option>WORD COUNT</option>
<option>STRING REVERSE</option>
<option>POSITION OF A CHARACTER</option>
<option>STRING REPLACE</option>
<option>STRING SPLIT</option>
<option>PASSWORD GENERATOR</option>
</select>
</td>
</tr>
<tr>

<td colspan="2" align="center">
<input type="submit" name="disp" value="Submit">
</td>
</tr>
<tr>
<td>Result</td>
<td><input type="text" value="<?php echo @$res; ?>" readonly></td>
</tr>
</table>
</form>
