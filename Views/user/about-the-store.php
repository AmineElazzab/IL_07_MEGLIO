 
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
            <a href="<?php echo BASE_URL ?>"><img src="./Views/assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap">
            <ul>
                <li class="active"><a>Home</a></li>
                <span class="dropdown">
                <li><a class="dropbtn" href="">Collection</a>
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
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="hoods">
                                        <input type="submit" name="try" value="Hoods" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="sweats">
                                        <input type="submit" name="try" value="Sweats" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="t-shirts">
                                        <input type="submit" name="try" value="T-shirts" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="accessoires">
                                        <input type="submit" name="try" value="Accessoires" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
                                        <input type="hidden" name="categorie" value="caps">
                                        <input type="submit" name="try" value="Caps" style="color:#fff;margin-left:20px;margin-bottom:10px;">
                                    </form>
                                    <form action="products" method="post">
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
            <div class="col-lg-12 border-bottom">
                <div class="brand-logo">
                    <p>Every Product has a Story</p>
                </div>
            </div>
        </div>
<!-- Header Section End -->

    <section class="discount">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-8 mt-5">
                    <div class="">
                    <br/>
                <br/>
                <br/>
                <br/>
                        <h2 class="fs-1">About the Store</h2><br/>
                        <p class="text -md-start fs-5 fw-normal">This store is your new gateway to online shopping in an easy and simple way.</p><br/>
                        <p class="text -md-start fs-5 fw-normal">We provide you with many high quality products for you to choose from the best at a competitive price that you will not find anywhere else. Shopping with us is an enjoyable and safe process. We provide you with all the facilities you need, whether in choosing the product, in the payment process, or in the shipping process.</p>
                        <br/>
                <br/>
                <br/>
                <br/>
                    </div>
                    </div>
                    <div class="col-lg-4  mt-5 ">
                            <div class="">
                            <br/>
                <br/>
                <br/>
                <br/>

                            </div>
                         </div>
                    
                </div>
            </div>
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