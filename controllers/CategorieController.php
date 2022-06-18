<?php

class CategorieController{
    public function getAllCategories(){
        $categories = Categorie::getAll();
        return $categories;
        
    }


    public function getProByCategorie(){  // returns all products by categorie  id  passed in url   ?id=1   ?id=2   ?id=3       etc...  ?id=1&id=2&id=3 etc...
        if(isset($_POST['try']))
        {
            $data=array('categorie'=>$_POST['categorie']);  // $_POST['categorie'] is the id of the categorie
            $ctr=Categorie::getProByCategorie($data);   // returns all products by categorie  id  passed in url   ?id=1   ?id=2   ?id=3       etc...  ?id=1&id=2&id=3 etc...
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
    public function newCategory(){
        if(isset($_POST['submit'])){
            $data = array(
                "name_categorie" => $_POST['name_categorie'],
            );
            $result=Categorie::addCategory($data);
            if($result === "ok"){
                Session::set("success", "Category added successfully");
                Redirect::to("Categorie");
            }else{
            echo $result;
            }
        }
    }
    public function deleteCategory(){
        if(isset($_POST["delete_cat_id"])){
            $data = array(
                "id_categorie" => $_POST["delete_cat_id"]
            );
            $result = Categorie::deleteCategory($data);
            if($result === "ok"){
                Session::set("success", "Category deleted successfully");
                Redirect::to("Categorie");
            }else{
                echo $result;
            }
        }
    }
}