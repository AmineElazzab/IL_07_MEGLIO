<?php

require_once ('./autoload.php');
require_once ('./Views/includes/header.php');
// require_once ('./controller/HomeController.php');
// require_once ('./controller/AdminController.php');

$home = new HomeController();

$pages = [ 'ProductDetails','landing','home','hoods','login','register','sweats','t-shirts','accessoires','caps','addOrder','contact','about-the-store','logout','bag','heart','payment','profil','return','shipping','terms-and-policies','dashboard','updateProduct','deleteProduct','addProduct','emptybag','cancelbag','checkout','orders','MyOrder','products','Showproducts'];

if(isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {  // if the page is in the array
        $page = $_GET['page'];
        if( $page === "dashboard" || $page === "deleteProduct" || $page === "updateProduct" || $page === "addProduct" ||  $page === "Showproducts" || $page === "orders") {
            if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                $admin =new AdminController();
                
                $admin->index($page);
        }else{
            include ('Views/includes/404.php');
        }
    }else{
        $home->index($page);
    }
}
else
{
    include ('views/includes/404.php');
}
}else{
    $home->index('landing');
}

// require_once ('./Views/includes/footer.php');
