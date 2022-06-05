 <?php

 class Product{
     static public function getAll(){
         $stmt = DB::connect()->prepare('SELECT * FROM product');
         $stmt->execute();
         return $stmt->fetchAll();
        //  $stmt->close();
         $stmt = null;
     }
     static public function getRandom($count)
     {
         $stmt = DB::connect()->prepare("SELECT * FROM product order by rand() limit " . $count);
         $stmt->execute();
         return $stmt->fetchAll();
         $stmt = null;
     }
     static public function getProductByCat($data){
         $id = $data['id'];
         try {
                $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_categorie_id = :id');
                $stmt->execute(array(":id" => $id));
                return $stmt->fetchAll();
                $stmt = null;
         }catch(PDOException $ex){
             echo "error" .$ex->getMessage();
         }
     }
     static public function getProductById($data){
         $id = $data['id'];
         try {
                $stmt = DB::connect()->prepare('SELECT * FROM product WHERE id_prod = :id');
                $stmt->execute(array(":id" => $id));
                $product = $stmt->fetch(PDO::FETCH_OBJ);
                return $product;
                $stmt = null;
         }catch(PDOException $ex){
             echo "error" .$ex->getMessage();
         }
     }
     static public function getTotalPrice() {
        $stmt = DB::connect()->prepare('SELECT SUM(total) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }

    static public function getTotalQuantity() {
        $stmt = DB::connect()->prepare('SELECT SUM(order_quantity) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }
    
    static public function updateOrderStatus($data) {
        $id = $data['id_order'];
        $status = $data['order_status'];
        try{
            $stmt = DB::connect()->prepare('UPDATE product_order SET order_status = :status_order WHERE id_order = :id');
            $stmt->execute(array(':status_order' => $status, ':id' => $id));
            $stmt = null;
        }catch(PDOException $ex){
            echo 'Error' .$ex->getMessage();
        }
    }
     static public function addProduct($data){
        $stmt = DB::connect()->prepare("INSERT INTO product (nom_prod,descp_prod,prox_prod,image_prod,quantité,color,size,product_categorie_id) VALUES (:nom_prod,:descp_prod,:prox_prod,:image_prod,:quantité,:color,:size,:product_categorie_id)");
        $stmt->bindParam(':nom_prod',$data['nom_prod']);
        $stmt->bindParam(':descp_prod',$data['descp_prod']);
        $stmt->bindParam(':prox_prod',$data['prox_prod']);
        $stmt->bindParam(':image_prod',$data['image_prod']);
        $stmt->bindParam(':quantité',$data['quantité']);
        $stmt->bindParam(':color',$data['color']);
        $stmt->bindParam(':size',$data['size']);
        $stmt->bindParam(':product_categorie_id',$data['product_categorie_id']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
 }
