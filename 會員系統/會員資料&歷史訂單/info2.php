<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>訂單詳細資料</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <div class="nav"></div>
    <div class="logo1"><a href="index.php"><img src="images/logo1.png"></a></div>
	    <nav class="navbar fixed-top">
		 	<ul>
		 		<li class="active"><a href="../../首頁/index.html">首頁</a></li>
		 		<li><a href="../../Q&A/index.html" target="_blank">常見問題</a></li>
		 		<li><a href="../../聯絡我們/index.html" target="_blank">聯絡我們</a></li>
		 		<li style="float: right"><a href="member2.php">回上一頁</a></li>


		 	</ul>
		 	</nav>
	<div class="content">
		<div class="info">
		<h1>訂單詳細資料</h1>
			<?php
			session_start();
			include ("../../connect_mysql.php");
			$id = $_SESSION['user'];
			$time = $_REQUEST['created'];
			$money = $_REQUEST['subtotal'];
			$where = $_REQUEST['place'];
			$sql = "SELECT * FROM order_items2 WHERE order_id = '".$id."' AND created = '".$time."'";
			$result = mysqli_query($conn,$sql);
			if ($result) {
				    $num = mysqli_num_rows($result);
				};
				?>
				成立時間：<?php echo $time;?><br>
				<p>
				訂單內容：<br>
				<?php
				while ($row = mysqli_fetch_array($result)){
					$meal = $row['meal'];
					$quantity = $row['quantity'];
					echo $meal.'*'.$quantity."<br>";
				};
				?>
			</p>
			總金額：<?php echo $money;?><br>
			領餐地點: <?php echo $where;
				
				
			mysqli_close($conn);
			?>
		</div>
	</div>
</body>
</html>