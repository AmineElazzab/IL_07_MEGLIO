<?php

class Order{
    static public function createOrder($data) {
        $stmt = DB::connect()->prepare('INSERT INTO product_order (fullname, product, order_quantity, prix, total, order_status)
        VALUES (:fullname, :product, :order_quantity, :prix, :total, :order_status)');
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':product', $data['product']);
        $stmt->bindParam(':order_quantity', $data['order_quantity']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':total', $data['total']);
        $stmt->bindParam(':order_status', $data['order_status']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
}