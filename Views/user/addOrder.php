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
			"date_order" => date("Y-m-d"),
			"order_status" => "En cours"
		);
		$order->addOrder($data);
	}else{
		// Redirect::to("landing"); 
	}
}