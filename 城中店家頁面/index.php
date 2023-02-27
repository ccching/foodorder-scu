<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>歡樂一百點 | 城中店家頁面</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php
  session_start();
  if (!isset($_SESSION['login_session']) && $_SESSION['login_session'] == False){
    header("Location:../會員系統/登入頁面/index2.php");
  }else{
  ?>
  <div class="header">
    <div class="nav"></div>
    <div class="logo1"><img src="images/logo1.png"></div>
    <div class="search">
      <form action="../城中店家頁面/search.php" id="searchbox" method="post" name="searchbox">
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
        <a href="../城中店家頁面/choose.html">
          <i class="far fa-check-circle" title="選擇障礙點我！"></i>
        </a>
      </div>
      <div class="chart">
        <a href="../購物車2/ShoppingCart2.php"><img src="images/chart.png"></a>
      </div>
      <div class="dropdown">
          <img src="images/order.png" title="購物車">      
          <div class="dropdown-content">
          <a href="../雙溪店家頁面/index.php">點雙溪</a>

          <a href="../會員系統/會員資料&歷史訂單/member2.php">會員資料</a>
          <a href="../會員系統/登入頁面/logout.php">登出</a>
        </div>
      </div>
  </div>
  <div class="content">
    <!--一品滷味-->
    <div class="line1">
      <div class="shop">
        <a href="../shop2/luway.php">
        <div class="bk"><img src="images/c5.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:00<br>
          假日 ： 不營業<br>
        </div>
      </div><!--慕達早餐-->
      <div class="shop">
        <a href="../shop2/muda.php">
        <div class="bk bk2"><img src="images/c1.PNG"></div></a>
        <div class="time">
          週一至週五： 7:00～19:00<br>
          週六：7:00～13:00<br>
          週日 ： 不營業<br>
        </div>
      </div><!--qq麵-->
      <div class="shop">
        <a href="../shop2/qqman.php">
        <div class="bk bk3"><img src="images/c3.PNG"></div></a>
        <div class="time">
          週一至週五： 11:00～19:30<br>
          假日 ： 不營業<br>
        </div>
      </div>
    </div>
    <div class="line2">
      <div class="shop">
        <a href="../shop2/sea.php">
        <div class="bk ck ck1"><img src="images/c4.PNG"></div></a>
        <div class="time">
          週一至週五： 8:00～19:00<br>
          週六：9:00～14:00<br>
          週日 ： 不營業<br>
        </div>
      </div><!--一箱咖啡-->
      <div class="shop">
        <a href="../shop2/yee.php">
        <div class="bk ck ck2"><img src="images/c2.PNG"></div></a>
        <div class="time">
          週一至週五： 8:00～20:00<br>
          週六：8:00～14:00<br>
          週日 ： 不營業<br>
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