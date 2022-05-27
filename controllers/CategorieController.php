<?php

class CategorieController{
    public function getAllCategories(){
        $categories = Categorie::getAll();
        return $categories;
        
    }


    public function getProByCategorie(){
        if(isset($_POST['try']))
        {
            $data=array('categorie'=>$_POST['categorie']);
            $ctr=Categorie::getProByCategorie($data);
            // var_dump($ctr);
            // die();
            return $ctr;
        }
    }
    public function getProduct()
    {
        if(isset($_POST['pst']))
        {
            $data=array('id'=>$_POST['id']);
            $ctr=Categorie::getProduct($data);
            return $ctr;
        }
    }

}