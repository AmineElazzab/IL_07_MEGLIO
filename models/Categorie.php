<?php

class  Categorie{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM categorie');
        $stmt->execute();
        return $stmt->fetchAll();
       //  $stmt->close();
        $stmt = null;
    }


    public static function getProByCategorie($data)
    {
        $stmt= DB::connect()->prepare('SELECT * FROM product p INNER JOIN categorie c on p.product_categorie_id=c.id_categorie and c.name_categorie=:categorie');
        $stmt->bindParam(':categorie',$data['categorie']);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProduct($data) 
    {

        $stmt= DB::connect()->prepare('SELECT * FROM product WHERE id_prod=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
