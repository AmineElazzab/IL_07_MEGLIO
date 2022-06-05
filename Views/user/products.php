<?php include './Views/includes/navbar.php'; ?>


<?php
    // $data = new ProductController();
    // $products = $data->getAllProducts();
    if(isset($_POST['try']))
    {
        $ctr=new CategorieController();
        $res=$ctr->getProByCategorie();
        // var_dump($res);
        // die();
    }
?>  


        <!-- start -->
        <div class="instagram">
    <div class="container-fluid">
        <div class="row">
        <div class=" p-0">
        <img src="./Views/assets/img/1.jpg" class="float-start">
        </div>
      
    </div>
</div>
</div>

        <!-- end gallery -->
        
    <div class="container">
    <div class="row text-center text-lg-start mt-4">
   
    <?php
    if (count($res) > 0) :
    ?>
      <?php
      foreach ($res as $product) :
      ?>
        <div class="col-lg-3 col-md-4 col-6">
            <form id="form" method="post" action="<?php echo BASE_URL;?>ProductDetails">
                <input type="hidden" name="id_prod" id="id_prod">
            </form>
            <a onclick="submitForm(<?php echo $product['id_prod']; ?>)">
                <img class="img-fluid rounded-3 shadow" src="<?php echo $product['image_prod']; ?>" style="cursor:pointer" alt="">      
                <p  class=" text-start fs-6 mt-3"><?php echo $product['nom_prod'];?></p>
                <p  class=" text-start fs-6 fw-bolder">MAD <?php echo $product['prix_prod'];?></p>
            </a>
            
        </div>
    <?php
        endforeach;
        endif;
    ?>
  </div>

</div>                     
    

<?php include './Views/includes/footer.php'; ?>