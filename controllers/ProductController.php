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
    
    public function getTotal(){
        $total = Product::getTotalPrice();
        return $total;
    }
    public function getTotalQuantitySold(){
        $total = Product::getTotalQuantity();
        return $total;
    }

    public function updateOrderStatus($id, $status) {
        $data = array(
            'id_order' => $id,
            'order_status' => $status
        );
        Product::updateOrderStatus($data);
        Redirect::to("dashboard");
    }

    public function newProduct(){
        if(isset($_POST["submit"])){
            $data = array(
                "nom_prod" => $_POST["nom_prod"],
                "descp_prod" => $_POST["descp_prod"],
                "prix_prod" => $_POST["prix_prod"],
                "image_prod" => $this->uploadPhoto(),
                "quantité" => $_POST["quantité"],
                "color" => $_POST["color"],
                "size" => $_POST["size"],
                "product_categorie_id" => $_POST["product_categorie_id"]
            );
            $result = Product::addProduct($data);
            if($result === "ok"){
                // Session::set("success", "Product added successfully");
                Redirect::to("ShowProduct");
            }else{
                echo $result;
            }
        }
        
    }
    public function uploadPhoto($oldImage = null){
        $dir = "public/uploads";    // The directory for the images to be saved in  
        $time = time();           // Sets the current time
        $name = str_replace(' ','-',strtolower($_FILES["image"]["name"]));  // Sets the name
        $type = $_FILES["image"]["type"];   // Gets the file type
        $ext = substr($name,strpos($name,'.')); // Gets the extension
        $ext = str_replace('.','',$ext);    //Strips the extension
        $name = preg_replace("/\.[^.\s]{3,4}$/", "",$name);   // Removes the extension from the name
        $imageName = $name.'-'.$time.'.'.$ext;  // Creates the new image name
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$imageName)){   // Moves the file to the folder 
            return $imageName; 
        }
        return $oldImage;
    }
}