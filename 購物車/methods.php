<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>歡樂一百點｜訂單確認</title>
</head>
<body>

<?php
if(!session_id()){
	session_start();
}

class Cart{
	protected $cart_contents = array();

	public function __construct(){
		$this->cart_contents = !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;
		if($this->cart_contents === NULL){
			$this->cart_contents = array('cart_total'=>0,'total_items'=>0);
		}
	}

	public function contents(){
		$cart = array_reverse($this->cart_contents);
		unset($cart['total_items']);
		unset($cart['cart_total']);
		return $cart;
	}

	public function total_items(){
		return $this->cart_contents['total_items'];
	}

	public function total(){
		return $this->cart_contents['cart_total'];
	}


    
	public function insert($item = array()){
		if(!isset($item['id'], $item['meal'], $item['price'], $item['qty'])){
				return FALSE;
			}else{
				$row_id = $item['id'];
				$old_qty = $this->cart_contents[$row_id]['qty'];
				$item['rowid'] = $row_id;
				$item['qty'] += $old_qty;
				$this->cart_contents[$row_id] = $item;
				if ($this->save_cart()) {
					return isset($row_id) ? $row_id:TRUE;
				}else{
					return FALSE;
				}
			}
		}

	public function update($item = array()){
		if(!isset($item['rowid'], $this->cart_contents[$item['rowid']])){
			return FALSE;
		}else{
			if(isset($item['qty'])){
				$item['qty'] = (int) $item['qty'];
			}
			$keys = array_intersect(array_keys($this->cart_contents[$item['rowid']]), array_keys($item));
			foreach(array_diff($keys, array('id','meal'))as $key){
				$this->cart_contents[$item['rowid']][$key] = $item[$key];
			}
			$this->save_cart();
			return TRUE;
		}
	}

	protected function save_cart(){
		$this->cart_contents['total_items'] = $this->cart_contents['cart_total'] = 0;
		foreach($this->cart_contents as $key => $val){
			if(!is_array($val) OR !isset($val['price'], $val['qty'])){
				continue;
			}
			$this->cart_contents['cart_total'] += ($val['price'] * $val['qty']);
			$this->cart_contents['total_items'] += $val['qty'];
			$this->cart_contents[$key]['subtotal'] = ($this->cart_contents[$key]['price'] * $this->cart_contents[$key]['qty']);
		}
		if(count($this->cart_contents)<=0){
			unset($_SESSION['cart_contents']);
			return FALSE;
		}else{
			$_SESSION['cart_contents'] = $this->cart_contents;
			return TRUE;
		}
	}

	public function remove($row_id){
		unset($this->cart_contents[$row_id]);
		$this->save_cart();
		return TRUE;
	}

	public function destroy(){
		$this->cart_contents = array('cart_total' => 0, 'total_items' => 0);
		unset($_SESSION['cart_contents']);
	}
}
?>
</body>
</html>









