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
	protected $cart_contents2 = array();

	public function __construct(){
		$this->cart_contents2 = !empty($_SESSION['cart_contents2'])?$_SESSION['cart_contents2']:NULL;
		if($this->cart_contents2 === NULL){
			$this->cart_contents2 = array('cart_total'=>0,'total_items'=>0);
		}
	}

	public function contents2(){
		$cart2 = array_reverse($this->cart_contents2);
		unset($cart2['total_items']);
		unset($cart2['cart_total']);
		return $cart2;
	}

	public function total_items2(){
		return $this->cart_contents2['total_items'];
	}

	public function total2(){
		return $this->cart_contents2['cart_total'];
	}


    
	public function insert2($item = array()){
		if(!isset($item['id'], $item['meal'], $item['price'], $item['qty'])){
				return FALSE;
			}else{
				$row_id = $item['id'];
				$old_qty = $this->cart_contents2[$row_id]['qty'];
				$item['rowid'] = $row_id;
				$item['qty'] += $old_qty;
				$this->cart_contents2[$row_id] = $item;
				if ($this->save_cart2()) {
					return isset($row_id) ? $row_id:TRUE;
				}else{
					return FALSE;
				}
			}
		}

	public function update2($item = array()){
		if(!isset($item['rowid'], $this->cart_contents2[$item['rowid']])){
			return FALSE;
		}else{
			if(isset($item['qty'])){
				$item['qty'] = (int) $item['qty'];
			}
			$keys = array_intersect(array_keys($this->cart_contents2[$item['rowid']]), array_keys($item));
			foreach(array_diff($keys, array('id','meal'))as $key){
				$this->cart_contents2[$item['rowid']][$key] = $item[$key];
			}
			$this->save_cart2();
			return TRUE;
		}
	}
	

	protected function save_cart2(){
		$this->cart_contents2['total_items'] = $this->cart_contents2['cart_total'] = 0;
		foreach($this->cart_contents2 as $key => $val){
			if(!is_array($val) OR !isset($val['price'], $val['qty'])){
				continue;
			}
			$this->cart_contents2['cart_total'] += ($val['price'] * $val['qty']);
			$this->cart_contents2['total_items'] += $val['qty'];
			$this->cart_contents2[$key]['subtotal'] = ($this->cart_contents2[$key]['price'] * $this->cart_contents2[$key]['qty']);
		}
		if(count($this->cart_contents2)<=0){
			unset($_SESSION['cart_contents2']);
			return FALSE;
		}else{
			$_SESSION['cart_contents2'] = $this->cart_contents2;
			return TRUE;
		}
	}

	public function remove2($row_id){
		unset($this->cart_contents2[$row_id]);
		$this->save_cart2();
		return TRUE;
	}

	public function destroy2(){
		$this->cart_contents2 = array('cart_total' => 0, 'total_items' => 0);
		unset($_SESSION['cart_contents2']);

	}
}
?>
</body>
</html>









