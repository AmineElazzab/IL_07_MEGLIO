<?php include './Views/includes/navbar.php'; ?>


<?php
    $data = new ProductController();
    $product = $data->getProduct();
?>



<section class="bg-light ">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo $product->image_prod; ?>" alt="Card image cap" id="product-detail">
                    </div>
                    
                </div>
                <!-- col end -->
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
                                    <p class="text-muted"><strong>White / Black</strong></p>
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
        </div>
    </section>


      
<!-- Search End -->

<?php include './Views/includes/footer.php'; ?>