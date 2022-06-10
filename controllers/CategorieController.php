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
        if(isset($_POST["delete_id_categorie"])){
            $data = array(
                "id_categorie" => $_POST["delete_id_categorie"]
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