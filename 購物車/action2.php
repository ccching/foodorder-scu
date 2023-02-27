<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>action.php</title>
</head>
<body>
<?php  
session_start();
include ("methods.php");
$cart = new Cart;
include ("../connect_mysql.php");
$redirectLoc = 'eight2.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
	if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
		if (isset($_SESSION['login_session']) && $_SESSION['login_session'] == TRUE){
			$productID = $_REQUEST['id'];
			$query = $conn->query("SELECT * FROM products WHERE id = ".$productID);
			$row = $query->fetch_assoc();
			$itemData = array(
				'id' => $row['id'],
				'meal' => $row['meal'],
				'price' => $row['price'],
				'qty' => 1
			);
			$insertItem = $cart->insert($itemData); 
		}
		$redirectLoc = $insertItem?'../shop/eightsauce.php':'../會員系統/登入頁面/index.php';
	}
}
header("Location: $redirectLoc");
exit();
?>
</body>
</html>
