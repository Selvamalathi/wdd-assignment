<?php 
$conn = new mysqli("127.0.0.1:3306", "root", "", "login"); 
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$u = $_POST['username']; 
$p = $_POST['password']; 
if ($conn->query("INSERT INTO employee (username, password) VALUES 
('$u','$p')") === TRUE) { 
echo "Employee Login successful!"; 
} else { 
echo "Error: " . $conn->error; 
} 
} 
?> 
<form method="post"> 
Username: <input type="text" name="username" required><br> 
Password: <input type="text" name="password" required><br> 
<button type="submit">Submit</button> 
</form> 
