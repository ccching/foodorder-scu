<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>headache.php</title>
</head>
<body>
<?php
include ("../../connect_mysql.php");
$login_name = $_POST['login_name'];
$sql="SELECT * FROM `member_list` WHERE login_name ='$login_name'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums > 0){
    echo '<script language="javascript">';
    echo 'alert("此學號已註冊過!");history.back()';
    echo '</script>';
}else{
    $insert ="INSERT INTO member_list(login_name, realname, class,u_email, u_bday, u_sex, login_pass1, login_pass2,u_phone) VALUES ('".$_POST['login_name']."','".$_POST['realname']."','".$_POST['class']."','".$_POST['u_email']."','".$_POST['u_bday']."','".$_POST['u_sex']."','".$_POST['login_pass1']."','".$_POST['login_pass2']."','".$_POST['u_phone']."')";
    $url = "../登入頁面/index.php";
    if($conn->query($insert) === TRUE){
        echo "<script>alert('註冊成功！請重新登入')</script>";
        echo "<script>window.location.href = '$url'</script>";
    }else {
         echo '<script language="javascript">';
         echo 'alert("出現錯誤!請重新註冊!");history.back()';
         echo '</script>';

}
}
$conn->close();
?>
</body>
</html>




