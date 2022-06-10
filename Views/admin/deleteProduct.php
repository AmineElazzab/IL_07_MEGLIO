<?php
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new ProductController();
    $data->deleteProduct();
}else{
    Redirect::to("ShowProduct");
}