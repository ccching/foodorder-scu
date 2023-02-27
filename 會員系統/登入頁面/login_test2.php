<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login_test2.php</title>
</head>
<body>
<?php
session_start();  
$username = "";  $password = "";
$username = $_POST["Username"];
$password = $_POST["Password"];
$_SESSION['user'] = $username;
include ("../../connect_mysql.php");
mysqli_query($conn, 'SET NAMES utf8'); 
$sql = "SELECT * FROM member_list WHERE login_pass1='".$password."' AND login_name='".$username."'";
$result = mysqli_query($conn, $sql);
$total_records = mysqli_num_rows($result);

if ( $total_records > 0 ) {
   $_SESSION["login_session"] = true;
   header("Location:../../城中店家頁面/index.php");
} else { 
      echo '<script language="javascript">';
      echo 'alert("帳號或密碼錯誤!");history.back()';
      echo '</script>';
   $_SESSION["login_session"] = false;
}
mysqli_close($conn);   

?>

</body>
</html>