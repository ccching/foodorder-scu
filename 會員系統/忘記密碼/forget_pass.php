<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>forget_pass.php</title>
</head>
<body>
<?php
$phone = $_POST["u_phone"];
include ("../../connect_mysql.php");
$sql = "SELECT `login_name`,`login_pass1` FROM `member_list` WHERE `u_phone`=$phone";
$result = mysqli_query($conn,$sql);
if ($result) {
    $num = mysqli_num_rows($result);
}
$url = "../登入頁面/index.php";
while ($row = mysqli_fetch_array($result)) {
	$account = $row['login_name'] ;
	$pass = $row['login_pass1'];
    echo "<script>alert('帳號:$account 密碼：$pass')</script>";
    echo "<script>window.location.href = '$url'</script>";
}
mysqli_free_result($result);
if(!empty($result)){
         echo '<script language="javascript">';
         echo 'alert("查無此帳號!");history.back()';
         echo '</script>';
}	
mysqli_close($conn);
?>
</body>
</html>