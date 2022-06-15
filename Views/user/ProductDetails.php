

<?php
// error_reporting(0);
    $data = new ProductController();
    $product = $data->getProduct();
    $products = $data->getRandomProducts();
    $id = $_POST['id_prod'];

    if (isset($_POST["submit"])) {
        $data = new UsersController();
        $product = $data->addToWhishlist();

    }
?>

<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
        <?php if (!isset($_SESSION["logged"])) : { ?>
                        <button tabindex="0" class="flex-wrap">
                            <div class="w-10 rounded-full">
                                <a href="<?php echo BASE_URL; ?>login">
                                <i class="fa-solid fa-user"></i></a>
                            </div>
                </button>
                    <?php }
                else : { ?>
                     
                        <div class="dropdown">
  <a class="btn btn dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-user"></i>                               
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <span class="dropdown-item"><?php echo $_SESSION["fullname"]; ?></span>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/profil" class="justify-between hover:text-red-800">My Profile </a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>MyOrder">My Orders</a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>wishlist">Wishlist</a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>logout">Log out</a></li>
  </ul>
</div>
                    <?php } ?>
                <?php endif; ?>
                <li><a href="bag"><i class="fa-solid fa-cart-shopping">
                            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                             (<?php echo $_SESSION["count"];?>)      
                                <?php else:?>
                                   (0)
                            <?php endif;?> 
                            </i>
                            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="<?php echo BASE_URL ?>"><img src="./Views/assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap">
            <ul>
                <li href="<?php echo BASE_URL ?>"><a>Home</a></li>
                <span class="dropdown">
                <li><a class="dropbtn">Collection</a>
                    <ul class="dropdown-content">
                                    <form action="products" method="post">
                                        <input type="hidden" name="id" value="12">
                                        <input type="hidden" name="categorie" value="hoods">
                                        <input type="submit" name="try" value="Hoods" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="sweats">
                                        <input type="submit" name="try" value="Sweats" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="t-shirts">
                                        <input type="submit" name="try" value="T-shirts" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="accessoires">
                                        <input type="submit" name="try" value="Accessoires" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="caps">
                                        <input type="submit" name="try" value="Caps" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="shoes">
                                        <input type="submit" name="try" value="Shoes" style="color:#000;margin-left:20px;margin-bottom:10px;">
                                    </form>
                    </ul>
                </li>
                </span> 
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-xl-4 col-lg-4">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?php echo BASE_URL ?>">Home</a></li>
                            <li><a>Collection</a>
                                <ul class="dropdown">
                                <form action="products" method="post">
                                        <!-- <li><a href="hoods?id=12">Hoods</a></li> -->
                                        <input type="hidden" name="id" value="12">
                                        <input type="hidden" name="categorie" value="hoods">
                                        <input type="submit" name="try" value="Hoods" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <!-- <li><a href="sweats">Sweats</a></li> -->
                                        <input type="hidden" name="categorie" value="sweats">
                                        <input type="submit" name="try" value="Sweats" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <!-- <li><a href="sweats">Sweats</a></li> -->
                                        <input type="hidden" name="categorie" value="t-shirts">
                                        <input type="submit" name="try" value="T-shirts" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <!-- <li><a href="sweats">Sweats</a></li> -->
                                        <input type="hidden" name="categorie" value="accessoires">
                                        <input type="submit" name="try" value="Accessoires" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <!-- <li><a href="sweats">Sweats</a></li> -->
                                        <input type="hidden" name="categorie" value="caps">
                                        <input type="submit" name="try" value="Caps" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <!-- <li><a href="sweats">Sweats</a></li> -->
                                        <input type="hidden" name="categorie" value="shoes">
                                        <input type="submit" name="try" value="Shoes" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                </ul>
                        </li>
                            
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="header__logo">
                        <a href="<?php echo BASE_URL ?>"><img src="./Views/assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                <div class="header__right">
                       
                <?php if (!isset($_SESSION["logged"])) : { ?>
                        <button tabindex="0" class="flex-wrap">
                            <div class="w-10 rounded-full">
                                <a href="<?php echo BASE_URL; ?>login">
                                <i class="fa-solid fa-user"></i></a>
                            </div>
                </button>
                    <?php }
                else : { ?>
                     
                        <div class="dropdown">
  <a class="btn btn dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-user"></i>                               
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <span class="dropdown-item"><?php echo $_SESSION["fullname"]; ?></span>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/profil" class="justify-between hover:text-red-800">My Profile </a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>MyOrder">My Orders</a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>wishlist">Wishlist</a></li>
    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>logout">Log out</a></li>
  </ul>
</div>
                    <?php } ?>
                <?php endif; ?>
                        <ul class="header__right__widget">
                            <li><a href="bag"><i class="fa-solid fa-cart-shopping">
                            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                             (<?php echo $_SESSION["count"];?>)      
                                <?php else:?>
                                   (0)
                            <?php endif;?> 
                            </i>
                            </a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <div class="row">
            <div class="col-lg-12 px-0">
                <div class="brand-logo">
                    <p>Every Product has a Story</p>
                </div>
            </div>
    </div>

    <!-- component -->
<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
    <img class="card-img img-fluid" src=<?= "./Views/assets/img/product/".$product->image_prod ?> alt="Card image cap" id="product-detail" style="width:400px; height:600px;" >
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h1 class="text-gray-900 text-4xl title-font font-medium mb-1"><?php echo $product->nom_prod; ?></h1>
        
        <p class="leading-relaxed"><?php  echo $product->descp_prod;?></p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex">
            <span class="mr-3">Color : </span>
            <?php  echo $product->color;?>
          </div>
          
          <div class="flex ml-6 items-center">
          <div class="flex">
            <span class="mr-3 ">Size : </span>
            <?php  echo $product->size;?>
          </div>
          </div>
        </div>
        <span class="title-font font-medium text-2xl text-gray-900"><?php  echo $product->prix_prod;?>.00 MAD</span></br>
        <div class="flex">
          <h3 class="text-secondary m-3 text-center">Quantity</h3>
                                <form method="post" action="<?php echo BASE_URL; ?>checkout" >
                                <div class="form-group">
                                    <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                                    <input type="hidden" name="nom_prod" value="<?php echo $product->nom_prod; ?>">
                                    <input type="hidden" name="id_prod" value="<?php echo $product->id_prod; ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Add to Cart</button>
                                </div>
                                </form>
                                <?php if (isset($_SESSION["logged"])) : ?>
                                    <form method="post" >
                                        <div class="form-group">
                                            <input type="hidden" name="id_prod" value="<?php echo $product->id_prod ?>">
                                           
                                            <button name="submit" class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                    </svg>
                                </button>
                                        </div>
                                    </form>
                            </div>
                        <?php elseif (!isset($_SESSION["logged"])) : ?>
                            
                        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- component -->
<!-- component -->
<p class="text-center text-gray-500 fs-2">A proposal for you</p>
<section class="flex gap-14 justify-center my-5 cards flex-wrap">
            <?php foreach ($products as $product) {  ?>
                <!-- loop through the products -->
                <div class="">
                    <div>
                        <img src=<?= "./Views/assets/img/product/".$product['image_prod'] ?> style="width: 200px;">
                    </div>
                    
                    <div class="flex gap-2 justify-center">

                       
                        <form id="form" method="post" action="<?php echo BASE_URL ?>ProductDetails">
                            <input type="hidden" name="id_prod" id="id_prod">
                        </form>

                        <a onclick="submitForm(<?php echo $product['id_prod'];?>)" class=" text-black rounded-full w-2/3 text-center h-10 pt-2 cursor-pointer font-bold font-proza duration-500 ease-in-out hover:scale-95 ">SEE MORE</a>

                    </div>
                </div>

            <?php } ?>

        </section>


      
<!-- Search End -->

<?php include './Views/includes/footer.php'; ?>