<!DOCTYPE html>
<html>
<head><title>Bank Transactions</title></head>
<body>
<h2>Bank Transactions</h2>
<form method="post">
Initial Balance: <input type="number" name="initialBalance" required><br><br>
Number of Transactions: <input type="number" name="numTransactions"
required><br><br>
Type:
<select name="transactionType">
<option value="deposit">Deposit</option>
<option value="withdraw">Withdraw</option>
</select><br><br>
Amount: <input type="number" name="amount" required><br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$bal=$_POST["initialBalance"];
$n=$_POST["numTransactions"];
$type=$_POST["transactionType"];
$amt=$_POST["amount"];
echo "<h3>Results:</h3>Initial Balance: $bal<br>";
for($i=1;$i<=$n;$i++){
if($type=="deposit"){ $bal+=$amt; echo "Transaction $i: +$amt<br>"; }
elseif($type=="withdraw"){
if($amt<=$bal){ $bal-=$amt; echo "Transaction $i: -$amt<br>"; }
else echo "Transaction $i: Insufficient funds!<br>";
}

}
echo "Final Balance: $bal";
}
?>
</body>
</html>
