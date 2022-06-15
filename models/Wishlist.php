<?php

class Wishlist
{
    static public function add($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM wishlist WHERE id_client = :user AND id_prod = :product');
        $stmt->execute(array(":user" => $data["id_client"], ":product" => $data["id_prod"]));
        $result = $stmt->fetchAll();
        if (count($result) > 0) 
        {
            return "Product already in wishlist";
        } 
        else 
        {
            $stmt = DB::connect()->prepare('INSERT INTO wishlist (id_client, id_prod) VALUES (:user, :product)');
            $stmt->execute(array(":user" => $data["id_client"], ":product" => $data["id_prod"]));
            return "ok";
        }
            
    }

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM wishlist JOIN product JOIN categorie on product.id_prod = wishlist.id_prod and categorie.id_categorie = product.product_categorie_id WHERE id_client = :id;');
        $stmt->execute(array(":id" => $_SESSION["id_client"]));
        return $stmt->fetchAll(); // returns an array of arrays
        $stmt = null; // close connection
    }
    static public function remove($id_prod)
    {
        $stmt = DB::connect()->prepare("DELETE FROM wishlist WHERE id_prod = :product");
        $stmt->execute(array(":product" => $id_prod));
        return "ok";
    }
}