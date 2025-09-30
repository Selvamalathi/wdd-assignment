<?php
$visits = ($_COOKIE['visits'] ?? 0) + 1;
setcookie('visits', $visits, time() + 86400*365);
?>
<body style="background:#222; font-family:Arial, sans-serif; color:#fff;">
<h2 style="text-align:center; background:#444; color:#FFD700; padding:10px;
width:50%; margin:auto; font-weight:bold; border-radius:6px;">
HIT COUNTER USING COOKIES
</h2>
<div style="width:40%; margin:20px auto; text-align:center; border:2px dotted #FFD700;
padding:15px; background:#333; border-radius:6px;">
<?php
if($visits > 1)
echo "<p style='color:#00FF7F; font-weight:bold; font-size:18px;'>This is visit
number $visits</p>";
else
echo "<p style='color:#FF6347; font-weight:bold; font-size:18px;'>Welcome to my
Website! Click here for a tour!</p>";
?>
</div>
</body>
