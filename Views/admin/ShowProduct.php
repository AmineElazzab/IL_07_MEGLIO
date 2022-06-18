<?php
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $data = new ProductController();
    $products = $data->getProductA();
    
}else{
    Redirect::to("landing");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <script src="./Views/assets/js/main1.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>



</head>
<style>
    body{
    
    background-color:#B3E5FC;

}


.card-1{

  border: none;
    border-radius: 10px;
    width: 100%;
    background-color: #fff;
}


.icons i {
 
  margin-left: 20px;
 
}
</style>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


<div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

    <div class="w-1/2 pl-2 md:pl-0">
        <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
            <i class="fas fa-sun text-pink-600 pr-3"></i> Admin Dashboard
        </a>
    </div>
    <div class="w-1/2 pr-0">
        <div class="flex relative float-right">

            <div class="relative text-sm">
                <button id="userButton" class="flex items-center focus:outline-none mr-3">
                    <img class="w-8 h-8 rounded-full mr-4" src="https://github.com/AmineElazzab.png"> <span class="hidden md:inline-block">Hi</span>
                    <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                        <g>
                            <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                        </g>
                    </svg>
                </button>
                <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute top-0 right-0 min-w-full overflow-auto z-30 invisible">
                    <ul class="list-reset">
                        <li><a class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline"><?php echo $_SESSION["fullname"]; ?></a></li>
                        <li><a href="<?php echo BASE_URL; ?>logout" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                    </ul>
                </div>
            </div>


            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>


    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white z-20" id="nav-content">
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
            <li class="mr-6 my-2 md:my-0">
                <a href="<?php echo BASE_URL; ?>dashboard" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                    <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            <li class="mr-6 my-2 md:my-0">
                <a href="<?php echo BASE_URL; ?>ShowProduct" class="block py-1 md:py-3 pl-1 align-middle text-red-500 no-underline hover:text-gray-900 border-b-2 ">
                <i class="fas fa-tshirt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Products</span>
                </a>
            </li>
            <li class="mr-6 my-2 md:my-0">
                <a href="<?php echo BASE_URL; ?>Categorie" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                    <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Category</span>
                </a>
            </li>
            <li class="mr-6 my-2 md:my-0">
                <a href="<?php echo BASE_URL; ?>orders" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                <i class="fas fa-shipping-fast fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Orders</span>
                </a>
            </li>
            <li class="mr-6 my-2 md:my-0">
                <a href="<?php echo BASE_URL; ?>Clients" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                <i class="fas fa-users fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Clients</span>
                </a>
            </li>
        </ul>
    </div>

</div>
</nav>


<div class="container" style="margin-top:200px; margin-bottom:200px;">
<a href="<?= BASE_URL; ?>addProduct" class="btn btn-warning mb-4">Add Product <i class="fa fa-plus-circle"></i></a>
        <form id="form" action="<?php echo BASE_URL?>updateProduct" method="post">
            <input type="hidden" name="id_prod" id="id_prod">
        </form>
        <form id="delete_form" action="<?php echo BASE_URL?>deleteProduct" method="post">
            <input type="hidden" name="delete_id_prod" id="delete_id_prod">
        </form>

            <table class="table table-borderless table-responsive card-1 p-4">
  <thead>
    <tr class="border-bottom">
    <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <!-- <th scope="col">Description</th> -->
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Category</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($products as $product): ?>
    <tr class="border-bottom">
                            <td><?= $product['id_prod']; ?></td>
                            <td><img src=<?= "./Views/assets/img/product/".$product['image_prod'] ?> alt=""></td>
                            <td><?= $product['nom_prod']; ?></td>
                            <!-- <td><?= $product['descp_prod']; ?></td> -->
                            <td><?= $product['prix_prod']; ?></td>
                            <td><?= $product['quantité']; ?></td>
                            <td><?= $product['name_categorie']; ?></td>
                            <td><?= $product['color']; ?></td>
                            <td><?= $product['size']; ?></td>
                            <td>
                                 <div class="p-2 icons">
                                <form action="updateProduct" method="post">
                                    <!-- <a onclick="submitForm(<?php echo $product['id_prod'];?>)" class="fas fa-edit text-success"></a> -->
                                    <input type="hidden" name="id_prod" value="<?= $product['id_prod'];?>">
                                    <a onclick="submitForm(<?php echo $product['id_prod'];?>)" class="fas fa-edit text-success"></a>
                                </form>
                                <a onclick="deleteForm(<?php echo $product['id_prod'];?>)" class="fa fa-trash-alt text-danger"></a>
                                </div>
                            </td>
                           
      
    </tr>

    <?php endforeach; ?>


  </tbody>
</table>
    
         
     </div>


    <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }
    </script>
    
</body>
</html>
