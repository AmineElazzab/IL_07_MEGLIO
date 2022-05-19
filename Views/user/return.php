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

    <!-- Breadcrumb Section Begin -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="font-monospace">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <h2 class="fs-1">Return</h2><br/>
                        <div class="return">
                            <p class="text-md-start"> - Replacement and return is the guaranteed right of all our customers, and it includes all the products that we offer on our store.</p>
                            <p class="text-md-start"> - All products displayed on our store are subject to the exchange and return policy according to the terms and conditions stipulated in this page.</p>
                            <p class="text-md-start"> - It is possible to return or exchange if the product is in the same original condition when purchased and wrapped in the original packaging.</p>
                            <p class="text-md-start"> - Return within three (3) days and exchange within seven (7) days from the date of purchase.</p>
                            <p class="text-md-start"> - Please contact us via the Contact Us page or via our phone numbers in order to request a return or replacement.</p>
                            <p class="text-md-start"> - Please photograph the product and send it with specifying the city, address and order number to be replaced with another product in case the product is corrupt or has a specific defect, or is not used according to the agreed upon.</p>
                            <p class="text-md-start"> - The amount will be refunded to the customer in full in the event that the product he received is completely different from the product description on the product page on our website.</p>
                            <p class="text-md-start"> - We are not responsible for any expectations of the use of products by the customer that we did not mention on the product page of our website.</p>
                            <p class="text-md-start"> - 30% discount or a value of not less than 25 dirhams if the customer does not want the product and has no defect or any problem mentioned.</p>
                            <p class="text-md-start"> - The customer is responsible for the return of the product.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>

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