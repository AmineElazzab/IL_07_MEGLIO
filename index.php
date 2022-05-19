<?php

require_once ('./autoload.php');
require_once ('./Views/includes/header.php');
// require_once ('./controller/HomeController.php');
// require_once ('./controller/AdminController.php');

$home = new HomeController();

$page = [ 'landing','home','hoods','login','register','sweats','t-shirts','accessoires','caps','socks','contact','about-the-store','logout','bag','heart','payment','profil','return','shipping','terms-and-policies','dashboard'];

if(isset($_GET['page'])) {
    if (in_array($_GET['page'], $page)) {  // if the page is in the array
        $page = $_GET['page'];
        if( $page === "dashboard" || $page === "deleteProduct" || $page === "updateProduct" || $page === "addProduct" ||  $page === "products") {
            if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                $admin =new AdminController();
                $admin->index($page);
        }else{
            include ('views/includes/404.php');
        }
    }else{
        $home->index($page);
    }
}else{
    include ('views/includes/404.php');
}
}else{
    $home->index('landing');
}

// require_once ('./Views/includes/footer.php');
