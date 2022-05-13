<?php

require_once ('./autoload.php');
require_once ('./Views/includes/header.php');

$home = new HomeController();

$page = ['home','hoods','login','register','sweats','t-shirts','accessoires','caps','socks','contact','a&s','bag','heart','payment','profil','return','shipping','t&p'];

if(isset($_GET['page'])) {
    if (in_array($_GET['page'], $page)) {  // if the page is in the array
        $page = $_GET['page'];
        if($page === "admin/dashboard" || $page === "admin/deleteProduct" || $page === "admin/updateProduct" || $page === "admin/addProduct" ||  $page === "admin/products") {
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
    $home->index('home');
}

// require_once ('./Views/includes/footer.php');
