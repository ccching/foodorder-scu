<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>歡樂一百點 | 訂單確認</title>
  	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

	<link href="../訂單確認/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class="header">
    <div class="nav"></div>
    <div class="logo1"><img src="../訂單確認/images/logo1.png"></div>
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
        <a href="../購物車/ShoppingCart.php"><img src="../購物頁面/images/chart.png"></a>
      </div>
      <div class="dropdown">
          <img src="../訂單確認/images/order.png" title="購物車">      
          <div class="dropdown-content">
          <a href="../城中店家頁面/index.php">點城中</a>

          <a href="../會員系統/會員資料&歷史訂單/member.php">會員資料</a>
          <a href="../會員系統/登入頁面/logout.php">登出</a>
        </div>
      </div>
  </div>


   	<nav class="navbar fixed-top">
		<ul>
			<li class="active">
				<a href="../雙溪店家頁面/index.php">首頁</a>
			</li>
			<li>
				<a href="../Q&A/index.html" target="_blank">常見問題</a>
			</li>
			<li>
				<a href="../聯絡我們/index.html" target="_blank">聯絡我們</a>
			</li>
		</ul>
	</nav>
	<div class="content">
		<div class="checktab">
			<?php
			                include ("../connect_mysql.php");
			                include ("methods.php");
			                $cart = new Cart;?>
			<h1>確認訂單</h1><?php echo '餐點總數：'.$cart->total_items() ."<br/>";
			                if($cart->total_items() > 0){ $cartItems = $cart->contents();
			                    echo "訂單內容：" ."<br>";
			                foreach($cartItems as $item){echo $item["meal"];?><?php echo "&nbsp".'$'.$item["price"];?>(<?php echo $item["qty"]; ?>) <?php echo '$'.$item["subtotal"] ."<br/>";}
			                }?>
			<div class="total">
				<?php echo "<br>" .'總金額：'.'$'.$cart->total() ."</br/>";?>
			</div>
		</div>
		<div class="keep">
			<a class="btn btn-block btn-info" href="../雙溪店家頁面/index.php"><input name="btn" type="button" value="繼續購物"></a>
		</div>
		<hr class="line" size="550" width="1" noshade>
		<div class="dd"> <!--訂單流程圖-->
			<img src="../訂單確認/images/d2.png">
		</div>
		<div class="id">
			<form action="finish2.php" id="order" method="post" name="order">
			<div class="place">領餐地點 : <input checked id="place" name="place" required="" type="radio" value="望星廣場">望星廣場 <input id="place" name="place" type="radio" value="B棟4樓">B棟4樓 <input id="place" name="place" type="radio" value="R棟1樓">R棟1樓 <br>
			</div>
				備註 :&nbsp&nbsp
				<textarea class="account" cols="30" name="remark" rows="3"></textarea> 
			<div class="submit">
			<input type="submit" value="結帳" class="submit">
			</div>
			</form>
		</div>
	</div>
</body>
</html>