<?php

class ProductController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
        
    }
    public function getProductByCategorie(){
        if(isset($id)){
            $data = array(
                'id' => $id
            );
            $products = Product::getProductByCat($data);	
            return $products;
        }
    }
    public function getProduct(){
        if(isset($_POST['id_prod'])){
            $data = array(
                'id' => $_POST['id_prod']
            );
            $product = Product::getProductById($data);	
            return $product;
        }
    }
    public function emptyCart($id, $price){
      unset($_SESSION["products_" . $id]);
      $_SESSION["count"] -= 1;
      $_SESSION["totaux"] -= $price;
        Redirect::to("bag");


    }
}