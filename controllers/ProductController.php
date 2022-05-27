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
}