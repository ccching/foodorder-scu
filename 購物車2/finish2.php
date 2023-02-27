<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>finish2.php</title>
</head>
<body>
	
<?php
include ("methods.php");
$cart2 = new Cart;
include ("../connect_mysql.php");
$orderID = $_SESSION['user'];
$place = $_POST["place"];
$remark = $_POST["remark"];
$cartItems = $cart2->contents2();
$sql = '';
foreach ($cartItems as $item){
	$sql = "INSERT INTO order_items2 (order_id, product_id, meal, quantity, price, subtotal, place, remark, created) VALUES ('".$orderID."', '".$item['id']."', '".$item['meal']."','".$item['qty']."','".$item['price']."','".$cart2->total2()."','".$place."','".$remark."', NOW())";
	$rs = $conn->query($sql);
	}
$url = "../城中店家頁面/index.php";
	if(@$rs === TRUE){
		echo '<script language="javascript">';
		echo 'alert("結算成功!")';
        echo '</script>';
		$cart2->destroy2();
		echo "<script>window.location.href = '$url'</script>";
	}
	else{
		echo '<script language="javascript">';
		echo "alert('結算失敗，系統將返回購物車頁面。');history.back()";
        echo '</script>';

	}
$conn->close();
?>
</body>
</html>

