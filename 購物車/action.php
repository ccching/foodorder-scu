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
$redirectLoc = 'ShoppingCart.php';
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
		$redirectLoc = $insertItem?'ShoppingCart.php':'../會員系統/登入頁面/index.php';
	}elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
		$itemData = array(
			'rowid' => $_REQUEST['id'],
			'qty' => $_REQUEST['qty']
		);
		$updateItem = $cart->update($itemData);
	}elseif(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
		if($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
			$deleteItem = $cart->remove($_REQUEST['id']);
			$redirectLoc = 'ShoppingCart.php';
	}elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){ 
        $redirectLoc = 'pay.php'; 

	}
}
}
header("Location: $redirectLoc");
exit();
?>
</body>
</html>





