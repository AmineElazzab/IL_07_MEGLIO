<?php
    if($_SESSION['role']==1){   // Si l'utilisateur est un admin
        header("Location: http://localhost/il-meglio/");
    
    }
    ?>
   <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="heart"><span class="icon_heart_alt"></span>
            </a></li>
            <li><a href="bag"><span class="icon_bag_alt"></span>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="home"><img src="./Views/assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="login">Login</a>
            <a href="register">Register</a>
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
                            <li><a href="home">Home</a></li>
                            <li><a>Collection</a>
                                <ul class="dropdown">
                                    <li><a href="hoods">Hoods</a></li>
                                    <li><a href="sweats">Sweats</a></li>
                                    <li><a href="t-shirts">T-shirts</a></li>
                                    <li><a href="accessoires">Accessories</a></li>
                                    <li><a href="caps">Caps</a></li>
                                    <li><a href="socks">Socks</a></li>
                                </ul>
                        </li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">Product Details</a></li>
                                    <li><a href="#">Shop Cart</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href=".#">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="./blog.html">Blog</a></li> -->
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="header__logo">
                        <a href="home"><img src="./Views/assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                <div class="header__right">
                        <div class="header__right__auth">
                            <a href="login">Login</a>
                            <a href="register">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="heart"><span class="icon_heart_alt"></span>
                            </a></li>
                            <li><a href="bag"><span class="icon_bag_alt"></span>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="brand-logo">
                <p>Every Product has a Story</p>
            </div>
        </div>
    </div>
    <!-- Header Section End -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5 pt-5">
            <p class="text-center fs-4 text-dark">Shipping and handling</p><br/>
            <p class="text -md-start w-auto p-3 text-dark">After confirming the purchase, we ship and send the product via the method you have chosen, either through our shipping official or through the Express Amana service.</p>
            </div>
            <div class="col-lg-6 mt-5 pt-5">
            <p class="text-center fs-4 text-dark">Shipping and handling</p><br/>
            <p class="text -md-start w-auto p-3 text-dark">Express Secretariat: A service that guarantees the delivery of consignments to the desired address in a period ranging between 3 and 7 days towards the main destinations.</p><br/>
            <p class="text -md-start w-auto p-3 text-dark">Shipping official: Our store contracts with a group of shipping officials in a group of cities who deliver products in a period ranging between 1 and 3 days</p><br/>
            </div>
        </div>
    </div>
    <br/><br/><br/><br/><br/><br/>
</section>

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<?php include './Views/includes/footer.php'; ?>