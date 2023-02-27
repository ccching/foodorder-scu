<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡樂一百點 | QQ麵</title>
  <link rel="stylesheet" type="text/css" href="../四海遊龍/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
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
<body>
	<div class="header">
    	<div class="pic">
			<img src="../四海遊龍/images/010.jpeg">
		</div>
   		<nav class="navbar fixed-top">
		 	<ul>
		 		<li class="active"><a href="../城中店家頁面/index.php">首頁</a></li>
		 		<li><a href="#noodle">麵類</a></li>
		 		<li><a href="#set">套餐</a></li>
		 		<li><a href="#river">河粉</a></li>
		 		<li><a href="#dump">水餃、湯餃</a></li>
		 		<li><a href="#single">單點</a></li>
		 		<li><a href="#go">鍋燒</a></li>
		 		<li><a href="#soup">湯品</a></li>
		 		<li style="float: right;margin-right: 20px;" ><a href="../聯絡我們/index.html" target="_blank">聯絡我們</a></li>
		 		<li style="float: right"><a href="../Q&A/index.html" target="_blank">常見問題</a></li>
		 	</ul>
		 </nav>
	</div>
<div class="content">
	<?php 
	include ("../購物車2/methods.php");
	$cart2 = new Cart;
	include ("../connect_mysql.php");
	?>
	<a href="../購物車2/ShoppingCart2.php" title="View Cart">(<?php echo ($cart2->total_items2() > 0)?$cart2->total_items2().'件商品':'尚無商品';?>)</a>
	<h1>QQ麵</h1>
		<div class="meal">
	<table border="1" height="400px" width="550px" class="set">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td><br>
	<h2 id="noodle">麵類</h2>
<?php
$result = $conn->query("SELECT * FROM products2 limit 47,15");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60%;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div>
			</td>
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
	<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>
	<h2 id="set">套餐</h2>
<?php
$result = $conn->query("SELECT * FROM products2 limit 62,10");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
	<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>

	<h2 id="river">河粉</h2>
<?php
$result = $conn->query("SELECT * FROM products2 limit 72,13");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
	?>
	<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>

	<h2 id="dump">水餃、湯餃</h2>

<?php
$result = $conn->query("SELECT * FROM products2 limit 85,8");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>		
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
	<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>

	<h2 id="single">單點</h2>

<?php
$result = $conn->query("SELECT * FROM products2 limit 93,4");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>		
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
	<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>

	<h2 id="go">鍋燒</h2>

<?php
$result = $conn->query("SELECT * FROM products2 limit 97,8");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>		
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
<table border="1" height="400px" width="550px">
		<td width="79%" style="font-size: 80%;text-align: center">餐點</td>
		<td width="10%" style="font-size: 80%;text-align: center">價格</td>
		<td width="11%" style="font-size: 80%;text-align: center">操作</td>

	<h2 id="soup">湯品</h2>

<?php
$result = $conn->query("SELECT * FROM products2 limit 105,6");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['meal']?></td>
			<td style="text-align: center"><?php echo $row['price']?></td>
			<td style="font-size:60% ;color: red;text-align:center">
			<a href="../購物車2/action.php?action=addToCart&id=<?php echo $row["id"];?>" class="img"><div class="img1"><img src="../四海遊龍/images/cart.PNG"></a></div></td>		
		</tr>
	<?php }
}else{?>
<p>Product not found.....</p>
</table>
<?php }
?>
<a href="#" class="back-to-top"><i class="fas fa-arrow-circle-up"></i>
</a>
</div>
</div>
</body>
</html>