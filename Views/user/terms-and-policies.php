
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
                            <li><a href="<?php echo BASE_URL ?>">Home</a></li>
                            <li class="active"><a>Collection</a>
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

    <div class="container">
        <div class="row">
        <div class="col-lg-12 ">
            <div>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
            <div class="introduction">
                <p class="text-decoration-underline fw-bold fs-5">Introduction</p><br/>
                <p class="text -md-start">These Terms of Use apply to the Site and to all of its divisions, subsidiaries and affiliate websites to which these Terms and Conditions are referenced.</p><br/>
                <p class="text -md-start">When visiting the site, the customer acknowledges his acceptance of the current terms and conditions. If you do not agree to them, you should not use this site. The site administrators reserve the right to change, modify, add information to, or remove parts of the Terms of Use and Conditions at any time. Changes will become effective when posted on the Site without prior notice. Please review the Terms of Use and Conditions regularly for any updates. Your continued use of the Site, following the posting of changes to these Terms and Conditions of Use, constitutes your acceptance of those changes.</p><br/>
            </div>
            <div class="Use of the site">
                <p class="text-decoration-underline fw-bold fs-5">Use of the site</p><br/>
                <p class="text -md-start">To visit this site, you must be at least 18 years of age or visit the site under the supervision of a parent or legal guardian.</p><br/>
                <p class="text -md-start">We grant you a non-transferable or revocable license to use the Site under the specified terms and conditions. The purpose of this license is to shop for personal items sold on the Site. Commercial use or use on behalf of any third party is prohibited, except as expressly and transparently permitted in advance by us. Any breach of these Terms and Conditions will result in the immediate revocation of the license granted in this paragraph without any notice to you.</p><br/>
                <p class="text -md-start">The content appearing on this website is provided for informational purposes only. Explanations of the products expressed on this site belong to the sellers themselves and have nothing to do with them. Comments or opinions on this website are those of the party that posted them and therefore do not reflect our opinions.</p><br/>
                <p class="text -md-start">Certain services and related features that may be available on the Site require registration or subscription. By choosing to register or subscribe to any such services or related features, you agree to provide accurate and current information about yourself and to update it in a timely manner if there are any changes. Each user of the site is solely responsible for keeping passwords and other methods of determining the usage account in a proper manner. The entire responsibility lies with the account holder for all activities that occur using his password or account. In addition, you must report any unauthorized use of your password or account to us. In no event shall the Site be liable, directly or indirectly, or in any way, for any loss or damage of any kind, which may result from or in connection with your failure to comply with this section.</p><br/>
                <p class="text -md-start">During the registration process, the customer agrees to receive promotional emails from the site. You may, at a later time, opt out of this option and not receive any promotional emails by clicking on the link at the bottom of any promotional email.</p><br/>
            </div>
            <div class="User posts">
                <p class="text-decoration-underline fw-bold fs-5">User posts</p><br/>
                <p class="text -md-start">All of your posts on the Site and/or what you provide to us, including but not limited to questions, criticisms, comments and suggestions (collectively “Posts”) become our sole and exclusive property, and in no way belong to you. In addition to the rights that apply to any type of posting, once you share your comments or criticism with us on the Site, you also grant us the right to use the name you display that is directly related to that review, comment or other content. You may not use a false e-mail address, pretend to be someone else, or attempt to mislead us or any third party as to the authenticity and reliability of any Submissions. We may delete or edit any Submissions, but we are not obligated to do so.</p><br/>
            </div>
            <div class="Approval of requests and pricing details">
                <p class="text-decoration-underline fw-bold fs-5">Approval of requests and pricing details</p><br/>
                <p class="text -md-start">Please note that in some cases, an application may not be approved for a variety of reasons. The site administrators reserve the right to refuse or cancel any request for any reason at any time. Before we accept the request, we may ask you to provide additional information or other data to verify something, including but not limited to phone number and address.</p><br/>
                <p class="text -md-start">We are keen to provide the most accurate price information to all users who visit the site. However, errors may occur sometimes, such as cases where the price of the product is not correctly specified on the site. Therefore, we reserve the right to refuse or cancel any order. In the event that the product price is not set correctly, we may, at our sole discretion, contact you for instructions or cancel your order and notify you of such cancellation. We have the right to refuse or cancel any orders, whether they have been confirmed or not, and after adding the fees to the credit card.</p><br/>
            </div>
            <div class="Trademarks and copyrights">
                <p class="text-decoration-underline fw-bold fs-5">Trademarks and copyrights</p><br/>
                <p class="text -md-start">All intellectual property rights, whether registered or unregistered, in the Site, and all content information and designs on the Site, are owned by us, including but not limited to text, graphics, software, images, video, music, audio, and their selection and coordination, as well as All software classifiers, source codes, and major software. All contents of the Site are also protected by copyright collectively as a single work. all rights are save.</p><br/>
            </div>

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