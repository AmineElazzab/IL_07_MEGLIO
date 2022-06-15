<?php

class  Categorie{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM categorie');
        $stmt->execute();
        return $stmt->fetchAll();
       //  $stmt->close();
        $stmt = null;
    }


    static public function getProByCategorie($data)
    {
        $stmt= DB::connect()->prepare('SELECT * FROM product p INNER JOIN categorie c on p.product_categorie_id=c.id_categorie and c.name_categorie=:categorie');
        $stmt->bindParam(':categorie',$data['categorie']);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getProduct($data) 
    {

        $stmt= DB::connect()->prepare('SELECT * FROM product WHERE id_prod=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function addCategory(){
        $stmt = DB::connect()->prepare('INSERT INTO categorie (name_categorie) VALUES (:name_categorie)');
        $stmt->bindParam(':name_categorie',$_POST['name_categorie']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
    static public function deleteCategory($data){
            $id = $data['id_categorie'];
            $stmt = DB::connect()->prepare('DELETE FROM categorie WHERE id_categorie=:id');
            $stmt->execute(array(':id' => $id));
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt = null;
      
       
    }

}
