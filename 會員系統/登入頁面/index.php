<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡樂一百點 | 登入頁面</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


  <div class="content">
    <div class="login">
      <div class="logo">
        <img src="images/logo2.png">
      </div>
    <?php
    session_start();
    if (isset($_SESSION['login_session']) && $_SESSION['login_session'] == TRUE){
      header( "../../雙溪店家頁面/index.php");
    }else{
    ?>
      <form action="login_test.php" method="post" id="login" name="login">
       <div class="accountw">
          帳號      
          <input type="text" class="account" name="Username" required maxlength="8" minlength="8">
      </div>
     <div class="accountw">
        密碼
        <input type="Password" class="account" name="Password" required>
      </div>
      <div class="bb">
        <div class="b button1">
            <input type ="button" onclick="javascript:location.href='../註冊頁面/index.html'" value="註冊"></input>
        </div>
        <div class="b button2">
          <input type="submit" value="登入" name= "submit" id = "submit"/>
        </div>
        <div class="b button3">
            <input type ="button" onclick="javascript:location.href='../忘記密碼/index.html'" value="忘記密碼"></input>
          
        </div>
      </div>

    </div>
  <div class="bottom">
    
  </div>
</form>
<?php
};
?>


</body>
</html>