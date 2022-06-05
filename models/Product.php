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
 }
