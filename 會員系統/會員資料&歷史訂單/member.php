<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡樂一百點 | 會員資料</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"></head>
<body>
<div class="header">
    <div class="nav"></div>
    <div class="logo1"><img src="images/logo1.png"></div>
    <div class="search">
      <form action="../../雙溪店家頁面/search.php" id="searchbox" method="post" name="searchbox">
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
        <a href="../../雙溪店家頁面/choose.html">
          <i class="far fa-check-circle" title="選擇障礙點我！"></i>
        </a>
      </div>
      <div class="chart">
        <a href="../../購物車/ShoppingCart.php"><img src="images/chart.png"></a>
      </div>
      <div class="dropdown">
          <img src="images/order.png" title="購物車">      
          <div class="dropdown-content">
          <a href="../../雙溪店家頁面/index.php">點雙溪</a>
          <a href="../../城中店家頁面/index.php">點城中</a>
          <a href="member.php">會員資料</a>
          <a href="../登入頁面/logout.php">登出</a>
        </div>
      </div>
  </div>

    <nav class="navbar fixed-top">
		 	<ul>
		 		<li class="active"><a href="../../雙溪店家頁面/index.php">首頁</a></li>

		 		<li><a href="../../Q&A/index.html" target="_blank">常見問題</a></li>
		 		<li><a href="../../聯絡我們/index.html" target="_blank">聯絡我們</a></li>


		 	</ul>
		 	</nav>
<div class="content">
	<div class="memberinfo">
		<h2>會員資料</h2>
	<?php
	session_start();
	include ("../../connect_mysql.php");
	$id = $_SESSION['user'];
	$sql = "SELECT * FROM member_list WHERE login_name = '".$id."'";
	$result = mysqli_query($conn,$sql);
	if ($result) {
	    $num = mysqli_num_rows($result);
	}
	while ($row = mysqli_fetch_array($result)){
	?>
		學號：<?php echo $row['login_name'];?><br>
		姓名：<?php echo $row['realname'];?><br>
		系級：<?php echo $row['class'];?><br>
		手機號碼：<?php echo $row['u_phone'];?><br>
		電子信箱：<?php echo $row['u_email'];?><br>
		生日：<?php echo $row['u_bday'];?><br>
	<?php
	}
	?>
	</div>
	<div class="historyinfo"> 
		<h2>歷史訂單</h2>
		<h3>雙溪校區</h3>
	<?php
	$sql = "SELECT DISTINCT created , subtotal, place FROM order_items WHERE order_id = '".$id."' " ;
	$result = mysqli_query($conn,$sql);
	if ($result) {
	    $num = mysqli_num_rows($result);
	};
	while ($row = mysqli_fetch_array($result)){
		?>
		成立時間：<?php echo $row['created'];?><br>
		總金額：<?php echo '$'.$row['subtotal'];?><br>
		領餐地點：<?php echo $row['place'];?><br>
		<a href='info.php?created=<?php echo $row['created'];?>&place=<?php echo $row['place'];?>&subtotal=<?php echo $row['subtotal'];?>'>詳細內容</a><br>
	<?php
	};
	?>
		<h3>城中校區</h3>
	<?php
	$sql = "SELECT DISTINCT created , subtotal, place FROM order_items2 WHERE order_id = '".$id."' " ;
	$result = mysqli_query($conn,$sql);
	if ($result) {
	    $num = mysqli_num_rows($result);
	};
	while ($row = mysqli_fetch_array($result)){
		?>
		成立時間：<?php echo $row['created'];?><br>
		總金額：<?php echo '$'.$row['subtotal'];?><br>
		領餐地點：<?php echo $row['place'];?><br>
		<a href='info2.php?created=<?php echo $row['created'];?>&place=<?php echo $row['place'];?>&subtotal=<?php echo $row['subtotal'];?>'>詳細內容</a><br>
	<?php
	};
	?>
	<?php	
	mysqli_close($conn);
	?>
<script language="javascript">
window.open (info.php)
</script>
	</div>
</div>
</body>
</html>









