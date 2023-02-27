<?php
include ("methods.php");
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡樂一百點 | 您的購物車</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../購物頁面/css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script language="javascript">
function updateCartItem(obj,id){
    $.get("action.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
    	location.reload();   
    });
}
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


		 	</ul>
		 	</nav>

<div class="content">
	<h1>您的雙溪購物車</h1>	
	<div class="table">
	<table border="1" height="900px" width="650px" class="table">
		<td class="s" width="45%" height="60px;">餐點</td>
		<td class="s" width="15%" height="60px">價錢</td>
		<td class="s" width="15%">數量</td>
		<td class="s" width="15%">小計</td>
		<td class="s" width="30%">操作</td>
	<?php 
	if($cart->total_items() > 0){
		$cartItems = $cart->contents();
		foreach($cartItems as $item){
			?>
			<tr>
				<td height="60px"><?php echo $item["meal"]; ?></td>
	            <td><?php echo '$'.$item["price"]; ?></td>
	            <td><input class="form-control"type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
	            <td><?php echo '$'.$item["subtotal"]; ?></td>
	            <td><button onclick="return confirm('確定要將此商品移除嗎')?window.location.href='action.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash"></i>刪除</button> </td></tr>
	            </tr>
			<?php

		}

	}else{ ?>   	</table>     
	<tr><p> * 尚無商品 * </p></tr>
	<?php
	}
	if($cart->total_items() > 0){?>
		<div class="total">Cart Total<?php echo '&nbsp'."$".$cart->total();?></div>
	</div>
	<i class="fas fa-shopping-cart"></i>

	</div>

	<?php
	} ?>
		<div class="dd"> <!--訂單流程圖-->
		<img src="../購物頁面/images/d3.png">
	</div>

	<div class="checkbt">
		<input type="button" name="btn" value="繼續購物" onclick="window.history.back()">
	<?php if($cart->total_items() > 0)
	{?>	
	<a href="pay.php" class="btn btn-lg btn-block btn-primary"><input type="button" name="btn" value="確認訂單"></a>

	</div>
<?php
	}
	?>




</body>
</html>







