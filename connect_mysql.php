<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>connect_mysql.php</title>
</head>
<body>
<?php
$conn = new mysqli('localhost','root','scu09170219','Happy_Ding');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>
</body>
</html>