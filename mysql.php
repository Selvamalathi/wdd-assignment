<?php 
$conn = new mysqli("localhost:3306", "root", "", "employeedb"); 
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); 
function agg($conn, $q, $l) { 
$r = $conn->query($q)->fetch_assoc(); 
echo "$l: " . $r[array_key_first($r)] . "<br>"; 
} 
agg($conn, "SELECT COUNT(*) as total_users FROM user", "Total Users"); 
agg($conn, "SELECT SUM(salary) as total_salary FROM user", "Total Salary"); 
agg($conn, "SELECT AVG(salary) as avg_salary FROM user", "Average Salary"); 
agg($conn, "SELECT MIN(salary) as min_salary FROM user", "Minimum Salary"); 
agg($conn, "SELECT MAX(salary) as max_salary FROM user", "Maximum Salary"); 
$conn->close(); 
?>
