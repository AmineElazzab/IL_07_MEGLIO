<?php

class ProductController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
        
    }
    public function getRandomProducts()
    {
        $products = Product::getRandom(3);
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
    public function newProduct(){
        if(isset($_POST["submit"])){
            $data = array(
                'nom_prod' => $_POST['nom_prod'],
                'descp_prod' => $_POST['descp_prod'],
                'prix_prod' => $_POST['prix_prod'],
                'image_prod' => $this->uploadPhoto(),
                'qantité' => $_POST['qantité'],
                'color' => $_POST['color'],
                'size' => $_POST['size'],
                'product_catetgory_id' => $_POST['product_catetgory_id']
            );
            $result = Product::addProduct($data);
            if($result == true){
                Session::set("success", "Product added successfully");
                Redirect::to("admin/products");
            }
        }
    }
}