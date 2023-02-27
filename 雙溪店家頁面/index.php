<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>歡樂一百點 | 雙溪店家頁面</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  session_start();
  if (!isset($_SESSION['login_session']) && $_SESSION['login_session'] == False){
    header("Location:../會員系統/登入頁面/index.php");
  }else{
    ?>
  <div class="header">
    <div class="nav"></div>
    <div class="logo1"><img src="images/logo1.png"></div>
    <div class="search">
      <form action="search.php" id="searchbox" method="post" name="searchbox">
        <div class="searchbox">
          <input name="searchbox" placeholder="來點什麼..." type="search">
        </div>
        <div class="searchpic">
          <input type="submit" value="搜尋">
        </div>
      </form>
    </div>
    <div class="rightbox">
      <div class="choose">
        <a href="choose.html">
          <i class="far fa-check-circle" title="選擇障礙點我！"></i>
        </a>
      </div>
      <div class="chart">
        <a href="../購物車/ShoppingCart.php"><img src="images/chart.png"></a>
      </div>
      <div class="dropdown">
          <img src="images/order.png" title="購物車">      
          <div class="dropdown-content">
          <a href="../城中店家頁面/index.php">點城中</a>

          <a href="../會員系統/會員資料&歷史訂單/member.php">會員資料</a>
          <a href="../會員系統/登入頁面/logout.php">登出</a>
        </div>
      </div>
  </div>
  <div class="content">
    <!--四海游龍-->
    <div class="line1">
      <div class="shop">
        <a href="../shop/four.php">
        <div class="bk"><img src="images/3.PNG"></div></a>
        <div class="time">
          週一至週五： 10:30～19:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div><!--丼不哩-->
      <div class="shop">
        <a href="../shop/dong.php">
        <div class="bk bk2"><img src="images/11.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div><!--金鶴餃舍-->
      <div class="shop">
        <a href="../shop/golden.php">
        <div class="bk bk3"><img src="images/1.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div>
    </div>
    <div class="line2">
      <div class="shop">
        <a href="../shop/cup.php">
        <div class="bk ck ck1"><img src="images/10.PNG"></div></a>
        <div class="time">
          週一至週五： 7:00～14:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div><!--蒲家廚房-->
      <div class="shop">
        <a href="../shop/pu.php">
        <div class="bk ck ck2"><img src="images/9.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div><!--吳家豆花-->
      <div class="shop">
        <a href="../shop/wu.php">
        <div class="bk bk3 ck"><img src="images/8.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 不營業<br>
        </div>
      </div>
    </div>
    <div class="line3">
      <div class="shop">
        <a href="../shop/eight2.php">
        <div class="bk dk"><img src="images/2.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 依學校公告為準<br>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="a qa">
        <a href="../Q&A/index.html" target="_blank">常見問題</a>
      </div>
      <div class="a contact">
        <a href="../聯絡我們/index.html" target="_blank">聯絡我們</a>
      </div>
    </div>
  </div>
<?php
};
?>
</body>
</html>