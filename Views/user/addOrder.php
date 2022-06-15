<?php
$order = new OrdersController();
 foreach($_SESSION as $name => $product){
	if (substr($name, 0,9)=="products_") {
		$data = array(
			"fullname" => $_SESSION['fullname'],
			"product" => $product['name'],
			"order_quantity" => $product['quantity'],
			"prix" => $product['price'],
			"total" => $product['total'],
			"order_status" => "Waiting for Shipping",
		);
		$order->addOrder($data);
	}else{
		Redirect::to("landing");
	}
	
}
