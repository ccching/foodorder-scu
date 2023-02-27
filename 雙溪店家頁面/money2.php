<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>歡樂一百點 | 預算限制</title>
	<link href="css/style3.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/a076d05399.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>
	<script>
	   jQuery(document).ready(function() {
	   var offset = 200;
	   var duration = 500;
	   jQuery(window).scroll(function() {
	   if (jQuery(this).scrollTop() > offset) {
	   jQuery('.back-to-top').fadeIn(duration);
	   } else {
	   jQuery('.back-to-top').fadeOut(duration);
	   }
	   });
	   jQuery('.back-to-top').click(function(event) {
	   event.preventDefault();
	   jQuery('html, body').animate({scrollTop: 0}, duration);
	   return false;
	   })
	   });
	</script>
</head>
<body>
  <div class="header">
    <div class="nav"></div>
    <div class="logo1"><img src="../購物頁面/images/logo1.png"></div>
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
          <img src="../購物頁面/images/order.png" title="購物車">      
          <div class="dropdown-content">
          <a href="../城中店家頁面/index.php">點城中</a>

          <a href="../會員系統/會員資料&歷史訂單/member.php">會員資料</a>
          <a href="../會員系統/登入頁面/logout.php">登出</a>
        </div>
      </div>
  </div>

    <nav class="navbar fixed-top">
		 	<ul>
		 		<li class="active"><a href="../雙溪店家頁面/index.php">首頁</a></li>

		 		<li><a href="../Q&A/index.html" target="_blank">常見問題</a></li>
		 		<li><a href="../聯絡我們/index.html" target="_blank">聯絡我們</a></li>

		 		<li style="float: right;margin-right: 7%;"><a href="../雙溪店家頁面/choose.html">回上一頁</a></li>
		 	</ul>
		 	</nav>

	<div class="content">
	<?php 
	include ("../購物車/methods.php");
	$cart = new Cart;
	include ("../connect_mysql.php");
	?><a href="../購物車/ShoppingCart.php" title="View Cart">(<?php echo ($cart->total_items() > 0)?$cart->total_items().'件商品':'尚無商品';?>)</a>
<div class="meal">
<table border="1" height="400px" width="550px" class="set">
	<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
	<td width="10%" style="font-size: 80%;text-align: center">價格</td>
	<td width="11%" style="font-size: 80%;text-align: center">操作</td><br>
<?php
$aa = array();
$aa = $_REQUEST['money'];
if(in_array("0", $aa)){
	$result = $conn->query("SELECT * FROM products WHERE price > 0 AND price <= 40");
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td style="text-align: center"><?php echo $row['price']?></td>
				<td style="font-size:60% ;text-align:center">
				<a href="../購物車/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">			</div>
				</a>
				</td>
			</tr>
		<?php }
	}else{?>
	<p>Product not found.....</p>
	</table>
	<?php }
}
if(in_array("1", $aa)){
	$result = $conn->query("SELECT * FROM products WHERE price > 40 AND price <= 60 ORDER BY price");
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td style="text-align: center"><?php echo $row['price']?></td>
				<td style="font-size:60% ;text-align:center">
				<a href="../購物車/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">			</div>
				</a>
				</td>
			</tr>
		<?php }
	}else{?>
	<p>Product not found.....</p>
	</table>
	<?php }
}
if(in_array("2", $aa)){
	$result = $conn->query("SELECT * FROM products WHERE price > 60 AND price <= 80");
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td style="text-align: center"><?php echo $row['price']?></td>
				<td style="font-size:60% ;text-align:center">
				<?php
				if(strpos($row['meal'], "紅龍果麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "藜麥麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "綠藻麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "蕎麥麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "竹炭麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "仙草麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}elseif(strpos($row['meal'], "黃涼麵")!==False){
				?>
					<a href="../購物車/action2.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
				<?php
				}else{
					?>
					<a href="../購物車/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">	
							</div>
					<?php
				}
				?>
				</a>
				</td>
			</tr>
		<?php }
	}else{?>
	<p>Product not found.....</p>
	</table>
	<?php }
}
if(in_array("3", $aa)){
	$result = $conn->query("SELECT * FROM products WHERE price > 80 AND price <= 100");
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td style="text-align: center"><?php echo $row['price']?></td>
				<td style="font-size:60% ;text-align:center">
				<a href="../購物車/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">			</div>
				</a>
				</td>
			</tr>
		<?php }
	}else{?>
	<p>Product not found.....</p>
	</table>
	<?php }
}
if(in_array("4", $aa)){
	$result = $conn->query("SELECT * FROM products WHERE price > 100");
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['meal']?></td>
				<td style="text-align: center"><?php echo $row['price']?></td>
				<td style="font-size:60% ;text-align:center">
				<a href="../購物車/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.png">			</div>
				</a>
				</td>
			</tr>
		<?php }
	}else{?>
	<p>Product not found.....</p>
	</table>
	<?php }
}
?>

<a href="#" class="back-to-top"><i class="fas fa-arrow-circle-up"></i>
</a>
</div>
</div>
</body>
</html>