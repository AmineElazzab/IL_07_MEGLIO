
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
                        <a>Hoods</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Sweats.JPG">
                    <div class="instagram__text">
                        <a>Sweats</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/T-shirt.jpg">
                    <div class="instagram__text">
                        <a>T-shirts</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Accessoires.JPG">
                    <div class="instagram__text">
                        <a>Accessories</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Caps.JPG">
                    <div class="instagram__text">
                        <a>Caps</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/categories/Socks.JPG">
                    <div class="instagram__text">
                        <a>Shoes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categorie End -->



<!-- Banner Section Begin -->
<div class="banner set-bg mt-4 m-0" data-setbg="./Views/assets/img/collection/1.jpg"></div>   
    
</section>
<!-- Banner Section End -->

<p class="fs-2 text-center mt-5">Hot Product</p>
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
                    <div class="discount__text__title mt-5">
                        <span>Discount</span>
                        <h2>Summer 2022</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__text__desc">
                        <p> </p>
                    </div>
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
                    <p>For all oder</p>
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
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 

                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-2.png">
                    <div class="instagram__text">
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-3.png">
                    <div class="instagram__text">
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-4.png">
                    <div class="instagram__text">
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-5.png">
                    <div class="instagram__text">
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="./Views/assets/img/instagram/insta-6.png">
                    <div class="instagram__text">
                        <i href="https://www.instagram.com/meds_boutiquee/" class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/meds_boutiquee/" target="_blank">@ meds_boutiquee</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->







<?php include './Views/includes/footer.php'; ?>