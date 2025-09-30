<!DOCTYPE html>
<html>
<head><title>Division Form</title></head>
<body>
<h2>Division Form</h2>
<form method="post">
Dividend: <input type="number" name="dividend" required><br><br>
Divisor: <input type="number" name="divisor" required><br><br>
<input type="submit" value="Divide">
</form>
<?php
class DivideByZeroException extends Exception {}
class DivideByNegativeNoException extends Exception {}
function checkDivisor($a, $b){
try {
if($b == 0) throw new DivideByZeroException();
if($b < 0) throw new DivideByNegativeNoException();
echo "Result = " . ($a / $b);
}
catch(DivideByZeroException) { echo "Error: Cannot divide by Zero!"; }
catch(DivideByNegativeNoException) { echo "Error: Divisor cannot be Negative!"; }
}
if($_POST){

checkDivisor($_POST["dividend"], $_POST["divisor"]);
}
?>
</body>
</html>
