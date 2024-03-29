<?php

class OrdersController{
    public function getAllOrders(){
        $orders = Order::getAll();
        return $orders;
    }

    public function addOrder($data){
        $result = Order::createOrder($data);
        if($result === 'ok'){
            foreach($_SESSION as $name => $product){
                if (substr($name, 0,9)=="products_") {
                    unset($_SESSION[$name]);
                    unset($_SESSION["count"]);
                    unset($_SESSION["totaux"]);
                }
            }
            Session::set('success', 'Votre commande a été prise en compte');
            Redirect::to("landing");
        }
    }
    public function getWaitingOrders()
    {
        $total = Order::countWaitingOrders();
        return $total;
    }

    public function displayOrders()
    {
        $orders = Order::displayOrders();
        return $orders;
    }
    public function getUserOrders()
    {
        $orders = Order::getUserOrders($_SESSION["id_client"]);
        return $orders;
    }
    
}