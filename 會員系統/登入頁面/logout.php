<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>logout.php</title>
</head>
<body>
<?php
session_start();  

session_unset();

header("Location:../../首頁/index.html");
?>
</body>
</html>