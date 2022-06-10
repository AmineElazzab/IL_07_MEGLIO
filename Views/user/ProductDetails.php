<?php include './Views/includes/navbar.php'; ?>


<?php
    $data = new ProductController();
    $product = $data->getProduct();
    $products = $data->getRandomProducts();
?>



<!-- <section class="bg-light ">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src=<?= "./Views/assets/img/product/".$product->image_prod ?> alt="Card image cap" id="product-detail">
                    </div>
                    
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body mt-5 pt-5">
                            <h1 class="h2"><?php echo $product->nom_prod; ?></h1>
                            <p class="h3 py-2 fs-3 text-dark"><?php  echo $product->prix_prod;?> MAD</p>
                          

                            <h6 class="fs-3">Description:</h6>
                            <p class="fs-4 text-dark"><?php  echo $product->descp_prod;?></p><br/>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6 class="fs-3">Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><?php  echo $product->color;?></p>
                                </li>
                            </ul><br/>

                            <h6 class="fs-3">Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul><br/>

                            <h6 class="fs-3">Size: <?php echo $product->size; ?></h6>


                          
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-secondary m-3 text-center">Quantity</h3>
                                <form method="post" action="<?php echo BASE_URL; ?>checkout" >
                                <div class="form-group">
                                    <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                                    <input type="hidden" name="nom_prod" value="<?php echo $product->nom_prod; ?>">
                                    <input type="hidden" name="id_prod" value="<?php echo $product->id_prod; ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Add to Cart</button>
                                </div>
                                </form>

 
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
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
            <span class="mr-3">Color</span>
            <?php  echo $product->color;?>
          </div>
          <div class="flex ml-6 items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <!-- <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span> -->
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