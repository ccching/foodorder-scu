<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>contact_us.php</title>
</head>
<body>
<?php
include ("../connect_mysql.php");
$sql = "INSERT INTO contact_us(name, email, title, content) VALUES('$_POST[name]','$_POST[email]','$_POST[title]','$_POST[content]')";
if ($conn->query($sql) === TRUE){
		 echo '<script language="javascript">';
         echo 'alert("感謝您寶貴的意見，請耐心等候我們的回覆!");history.back()';
         echo '</script>';
} else {
         echo '<script language="javascript">';
         echo 'alert("error!");history.back()';
         echo '</script>';}
$conn->close();
?>
</body>
</html>