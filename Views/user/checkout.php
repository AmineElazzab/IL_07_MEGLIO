<?php
if(isset($_POST['id_prod'])){
    $id = $_POST['id_prod'];
    $data = new ProductController();
    $product = $data->getProduct();

    if (isset($_SESSION["products_" . $id])) {
        Session::set("info", "You already added this product to your cart!");
        Redirect::to("bag");

    }else{
        if($product->quantité < $_POST["product_qte"]){
            Session::set("info", "Oops! We don't have enough of this product in stock! $product->quantité left in stock");
            Redirect::to("bag");
        }else{
            $_SESSION["products_".$product->id_prod] = array(
                "id" => $product->id_prod,
                "image" => $product->image_prod,
                "name" => $product->nom_prod,
                "price" => $product->prix_prod,
                "quantity" => $_POST["product_qte"],
                "color" => $product->color,
                "size" => $product->size,
                "total" => $product->prix_prod * $_POST["product_qte"]
            
            );
            // $tt=$_SESSION['totaux'];
            if(isset($_SESSION['totaux']))
            {
                $_SESSION['totaux']=$_SESSION['totaux']+($product->prix_prod * $_POST["product_qte"]);
            }
            else
            {
                $_SESSION['totaux']=$product->prix_prod * $_POST["product_qte"];
            }

            // $cpt=$_SESSION['count'];
            if(isset($_SESSION['count']))
            {
                $_SESSION['count']=$_SESSION['count']+1;
            }
            else
            {
                $_SESSION['count']=1;
            }
            // $_SESSION["totaux"] += $_SESSION["products_".$product->id_prod]["total"];
            // $_SESSION["count"] += 1;
            Redirect::to("bag");
        }
    }
}else{
    Redirect::to("bag");
}
?>
 