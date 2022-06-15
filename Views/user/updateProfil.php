
<?php
 $userToUpdate = new UsersController();
 $userToUpdate = $userToUpdate->getUser();
    if (isset($_POST["update"])) 
    {
        $data = new UsersController();
        $data = $data->updateUser();
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
                <li>
                    <a href="bag"><i class="fa-solid fa-cart-shopping">
                            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                             (<?php echo $_SESSION["count"];?>)      
                                <?php else:?>
                                   (0)
                            <?php endif;?> 
                            </i>
                            </a>
                            
                        </li>
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
                            <li>
                                <a href="bag"><i class="fa-solid fa-cart-shopping">
                            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                             (<?php echo $_SESSION["count"];?>)      
                                <?php else:?>
                                   (0)
                            <?php endif;?> 
                            </i>
                            </a>
                        </li>
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
<div class="col-lg-12 text-center justify-content-center">
<form method="POST">

                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-xl font-proza text-[#080808]">Full Name</label>
                            <input type="text" name="fullname"  value ="<?php echo $_SESSION["fullname"]; ?>"required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none " />
                        </div>
                        <div class="mb-6">
                            <label for="username" class="block mb-2 text-xl font-proza text-[#080808]">Username</label>
                            <input type="text" name="username" value ="<?php echo $_SESSION["username"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none " />
                        </div>
                        <div class="mb-6">
                            <label for="telephone" class="block mb-2 text-xl font-proza text-[#080808]">Phone</label>
                            <input type="telephone" name="telephone" value ="<?php echo $_SESSION["phone"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none " />
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-xl font-proza text-[#080808]">Email Address</label>
                            <input type="email" name="email" value ="<?php echo $_SESSION["email"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none " />
                        </div>
                        <div class="mb-6">
                            <label for="adresse" class="block mb-2 text-xl font-proza text-[#080808]"> Address</label>
                            <input type="text" name="adresse" value ="<?php echo $_SESSION["adresse"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none " />
                        </div>
                        <div class="mb-6">
                            <button type="submit" name="update" class="bg-[#CC0000] text-[#FBF8F3] rounded-full w-full h-10 cursor-pointer font-bold font-proza duration-500 ease-in-out hover:scale-95">Update</button>
                        </div>

                    </form>
                </div>
                

<?php include './Views/includes/footer.php'; ?>