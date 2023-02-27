<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>歡樂一百點｜雙溪店家頁面</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body> 
  <div class="header">
    <div class="nav"></div>
    <div class="logo1"><a href="../雙溪店家頁面/index.php"><img src="images/logo1.png"></a></div>
    <div class="search">
      <form action="../雙溪店家頁面/search.php" id="searchbox" method="post" name="searchbox">
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
        <a href="../雙溪店家頁面/choose.html">
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
</div>
  <div class="content">
<?php
include("../connect_mysql.php");
$A=$_POST['searchbox'];

    
    $sql="SELECT COUNT(*) from P where meal like '%$A%' ";
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
$sql = "SELECT * from P where meal like '%$A%' group by store;";
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
   
	if ($rows['store']=='四海遊龍'){

    echo'<div class="shop">      
        <a href="../shop/four.php">      
          <div class="bk">
            <img src="images/3.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 10:30～19:00<br>
            假日   ： 依學校公告為準<br>                 
        </div>
      </div>';
  }
	elseif ($rows['store']=='吳家豆花'){
   
    echo'<div class="shop">      
          <a href="../shop/wu.php">      
            <div class="bk bk3 ck">
              <img src="images/8.PNG">
            </div>
          </a>
          <div class="time">
              週一至週五： 11:00～19:00<br>
              假日    ： 不營業<br>                 

          </div>
        </div>
    </div>';
  }
	elseif ($rows['store']=='丼步喱'){
		
		echo'<div class="shop">      
        <a href="../shop/dong.php">      
          <div class="bk bk2">
            <img src="images/11.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 11:00～19:00<br>
            假日   ： 依學校公告為準<br>                 
        </div>
      </div>';
	}
	elseif ($rows['store']=='金鶴餃舍'){
		
		echo'<div class="shop">      
          <a href="../shop/golden.php">      
            <div class="bk bk3">
              <img src="images/1.PNG">
            </div>
          </a>
          <div class="time">
            週一至週五： 11:00～19:00<br>
            假日   ： 依學校公告為準<br>                 
        </div>
        </div>
    </div>';

	}
	elseif ($rows['store']=='金盃'){
		
		echo'<div class="shop">      
        <a href="../shop/cup.php">      
          <div class="bk ck ck1">
            <img src="images/10.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 7:00～14:00<br>
            假日   ： 依學校公告為準<br>                 
        </div>
      </div>';
	}
	elseif ($rows['store']=='涼麵菜單'){
		
		echo'<div class="shop">      
        <a href="../shop/eight.php">      
          <div class="bk dk">
            <img src="images/2.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 11:00～19:00<br>
            假日   ： 依學校公告為準<br>                 
        </div>
      </div>
  </div>';
	}
	else{
		
		echo'<div class="shop">      
        <a href="../shop/pu.php">      
          <div class="bk ck ck2">
            <img src="images/9.PNG">
          </div>
        </a>
        <div class="time">
            週一至週五： 11:00～19:00<br>
            假日   ： 依學校公告為準<br>                 
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