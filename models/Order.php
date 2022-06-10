<?php

class Order{
    public static function getAll(){
        $stmt= DB::connect()->prepare("SELECT * FROM product_order");
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt=null;
    }
    static public function createOrder($data) {
        $stmt = DB::connect()->prepare('INSERT INTO product_order (fullname, product, order_quantity, prix, total, order_status , id_client)
        VALUES (:fullname, :product, :order_quantity, :prix, :total, :order_status , :id_client)');
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':product', $data['product']);
        $stmt->bindParam(':order_quantity', $data['order_quantity']);
        $stmt->bindParam(':prix', $data['prix']);
        $stmt->bindParam(':total', $data['total']);
        $stmt->bindParam(':order_status', $data['order_status']);
        $stmt->bindParam(':id_client', $_SESSION['id_client']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
    public static function countWaitingOrders() {
        $stmt = DB::connect()->prepare('SELECT COUNT(*) AS total FROM product_order WHERE order_status = "Waiting for validation"');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }
    

    static public function displayOrders() {
        $stmt = DB::connect()->prepare('SELECT * FROM product_order ORDER BY date_order DESC');
        $stmt->execute();
        $orders = $stmt->fetchAll();
        return $orders;
        $stmt = null;
    }
    static public function getUserOrders($id_client)
    {
      
        $stmt = DB::connect()->prepare("SELECT users.id_client,product_order.* FROM users JOIN product_order ON product_order.id_client = users.id_client WHERE users.id_client = :id_client");
        $stmt->bindParam(':id_client', $id_client);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}