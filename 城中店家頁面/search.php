<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>歡樂一百點｜城中店家頁面</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body> 
  <div class="header">
    <div class="nav"></div>
    <div class="logo1"><a href="../城中店家頁面/index.php"><img src="images/logo1.png"></a></div>
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
</div>
  <div class="content">
<?php
include("../connect_mysql.php");
$A=$_POST['searchbox'];

    
    $sql="SELECT COUNT(*) from P2 where meal like '%$A%' ";
    $result=mysqli_query($conn,$sql);
  
  
while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $num=$rows['COUNT(*)'];
}

if($num=='0' or $A==''){
  echo '<script language="javascript">';
  echo 'alert("找不到您搜尋的商品喔！");window.history.back() ';
  echo '</script>';

}
else{
$sql = "SELECT * from P2 where meal like '%$A%' group by store;";
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
   
  if ($rows['store']=='一品滷味'){

    echo'<div class="shop">      
        <a href="../shop2/luway.php">      
          <div class="bk">
            <img src="images/c5.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 11:00～19:00<br>
            假日   ： 不營業<br>                 
        </div>
      </div>';
  }
  elseif ($rows['store']=='沐達早餐'){
   
    echo'<div class="shop">      
          <a href="../shop2/muda.php">      
            <div class="bk bk2">
              <img src="images/c1.PNG">
            </div>
          </a>
          <div class="time">
              週一至週五： 7:00～19:00<br>
              週六：7:00～13:00<br>
              週日 ： 不營業<br>               

          </div>
        </div>
    </div>';
  }
  elseif ($rows['store']=='QQ麵'){
    
    echo'<div class="shop">      
        <a href="../shop2/qqman.php">      
          <div class="bk bk3">
            <img src="images/c3.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 11:00～19:30<br>
            假日   ： 不營業<br>                 
        </div>
      </div>';
  }
  elseif ($rows['store']=='海因咖啡'){
    
    echo'<div class="shop">      
          <a href="../shop2/sea.php">      
            <div class="bk ck ck1">
              <img src="images/c4.PNG">
            </div>
          </a>
          <div class="time">
            週一至週五： 8:00～19:00<br>
            週六：9:00～14:00<br>
            週日 ： 不營業<br>                
        </div>
        </div>
    </div>';

  }
  else{
    
    echo'<div class="shop">      
        <a href="../shop2/yee.php">      
          <div class="bk ck ck2">
            <img src="images/c2.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 8:00～20:00<br>
            週六：8:00～14:00<br>
            週日 ： 不營業<br>                 
        </div>
      </div>';
  }
}
}
?>
</div>
  <div class="footer">
    <div class="a qa">
      <a href="../Q&A/index.html" target="_blank">常見問題</a>
    </div>
    <div class="a contact">
      <a href="../聯絡我們/index.html" target="_blank">聯絡我們</a>
    </div>
  </div>

</body>
</html>