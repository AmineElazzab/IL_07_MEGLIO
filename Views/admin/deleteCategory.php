<?php
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new CategorieController();
    $data->deleteCategory();
}else{
    Redirect::to("Categorie");
}