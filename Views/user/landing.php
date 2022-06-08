
<?php include './Views/includes/navbar.php'; ?>

<?php {
    $data = new ProductController();
    $products = $data->getRandomProducts();
}
?>

<!-- Categorie Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-2 col-ld-4 col-sm-4 px-0 ">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Hoods.jpg">
                    <div class="instagram__text">
                        <a href="hoods">Hoods</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Sweats.JPG">
                    <div class="instagram__text">
                        <a href="sweats">Sweats</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/T-shirt.jpg">
                    <div class="instagram__text">
                        <a href="t-shirts">T-shirts</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Accessoires.JPG">
                    <div class="instagram__text">
                        <a href="accessoires">Accessories</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Caps.JPG">
                    <div class="instagram__text">
                        <a href="caps">Caps</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Socks.JPG">
                    <div class="instagram__text">
                        <a href="socks">Shoes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categorie End -->



<!-- Banner Section Begin -->
<section class="banner set-bg mt-4 m-0" data-setbg="./Views/assets/img/collection/1.jpg">
    
</section>
<!-- Banner Section End -->
<section id="services" class="relative py-60 bg-green-50" data-scroll-section>
  <h2 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -skew-x-12 whitespace-nowrap text-6xl sm:text-9xl font-extrabold py-4">
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="3" data-scroll-call="randomizeTextColor">S</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="2" data-scroll-call="randomizeTextColor">e</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="3" data-scroll-call="randomizeTextColor">r</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="2" data-scroll-call="randomizeTextColor">v</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="3" data-scroll-call="randomizeTextColor">i</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="2" data-scroll-call="randomizeTextColor">c</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="3" data-scroll-call="randomizeTextColor">e</span>
    <span class="inline-block" data-scroll data-scroll-repeat data-scroll-speed="2" data-scroll-call="randomizeTextColor">s</span>
  </h2>
  <div class="transform rotate-6 skew-x-12">
    <div data-scroll data-scroll-direction="horizontal" data-scroll-speed="20" data-scroll-target="#services">
      <span class="text-3xl sm:text-4xl md:text-6xl 2xl:text-7xl bg-green-400 p-5 whitespace-nowrap">Social Media — Email Marketing — Digital Advertising</span>
    </div>
  </div>
  <div class="transform -rotate-6 -skew-x-12 mt-40">
    <div data-scroll data-scroll-direction="horizontal" data-scroll-speed="-20" data-scroll-target="#services">
      <span class="text-3xl sm:text-4xl md:text-6xl 2xl:text-7xl bg-green-400 p-5 whitespace-nowrap">Web Development - Motion Design - Graphic Design</span>
    </div>
  </div>
</section>
<p class="text-center fs-2 mt-5">New Arrivals</p>
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

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="./Views/assets/img/collection/3.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Summer 2022</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <!-- <a href="">Shop now</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad ms-5 ps-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-1.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-2.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-3.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-4.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-5.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-6.png">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->







<?php include './Views/includes/footer.php'; ?>