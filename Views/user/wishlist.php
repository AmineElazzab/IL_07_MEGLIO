<?php
// error_reporting(0);
$user = new UsersController();
$result = $user->getAllWishlist();

if (isset($_POST["remove"])) {
    $pid = $_POST["remove"];
    $user->unlike($pid);
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
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>profil" class="justify-between hover:text-red-800">My Profile </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>MyOrder">My Orders</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>wishlist">Wishlist</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>logout">Log out</a></li>
                    </ul>
                </div>
            <?php } ?>
        <?php endif; ?>
        <li><a href="bag"><i class="fa-solid fa-cart-shopping">
                    <?php if (isset($_SESSION["count"]) && $_SESSION["count"] > 0) : ?>
                        (<?php echo $_SESSION["count"]; ?>)
                    <?php else : ?>
                        (0)
                    <?php endif; ?>
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
                                    <?php if (isset($_SESSION["count"]) && $_SESSION["count"] > 0) : ?>
                                        (<?php echo $_SESSION["count"]; ?>)
                                    <?php else : ?>
                                        (0)
                                    <?php endif; ?>
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
<div class="instagram">
    <div class="container-fluid">
        <div class="row">

            <img src="./Views/assets/img/aa.png" class="img-fluid" style=" height:300px;">


        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($result as $result) : ?>
                <div class="text-center mt-4">
                        <i class="fa-solid fa-heart"></i>
                </div>
                <p class="text-center fs-3 fw-semibold text-dark mt-5">My Wishlist</p><br />
                <!-- <p class="text-center w-auto p-3 text-dark">Your wishlist is empty</p>  -->
            </div>
        </div>
    </div>
</section>
<div class="container">
    <table class="table p-4">
        <thead class="bg-light">
            <tr>
                <th>Product Image</th>
                <th>Product name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="<?= "./Views/assets/img/product/" . $result['image_prod'] ?>" alt="" style="width: 45px; height: 90px" />
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $result["nom_prod"]; ?></p>
                </td>
                <td>
                    <span class="fw-normal mb-1"><?php echo $result["name_categorie"]; ?></span>
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="remove" value="<?= $result['id_prod'] ?>">
                        <button type="submit" name="remove" value="<?= $result['id_prod'] ?>"><i class="fas fa-heart-broken"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php if (empty($result)) : ?>
    <div class="text-center mt-4">
    <i class="fa fa-heart-broken"></i>
   
    <p class="text-center fs-3 fw-semibold text-dark mt-5">My Wishlist</p><br />
    <p class="text-center w-auto p-3 text-dark">Your wishlist is empty </p>
    </div>
<?php endif; ?>



<?php include './Views/includes/footer.php'; ?>