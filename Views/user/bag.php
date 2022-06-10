
<?php include './Views/includes/navbar.php'; ?>
<?php {
    $data = new ProductController();
    $products = $data->getRandomProducts();

  
}
?>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white mt-5 ">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION as $name => $product) : ?>
                        <?php if (substr($name, 0,9)=="products_") : ?>
                            <tr>
                                <td> <img src=<?= "./Views/assets/img/product/".$product["image"] ?> alt=""></td>
                                <td><?php echo $product["name"]; ?></td>
                                <td><?php echo $product["price"]; ?></td>
                                <td><?php echo $product["quantity"]; ?></td>
                                <td><?php echo $product["color"]; ?></td>
                                <td><?php echo $product["size"]; ?></td>
                                <td><?php echo $product["total"]; ?> MAD</td>
                                <td>
                                    <form method="post" action="<?php echo BASE_URL;?>cancelbag">
                                        <input type="hidden" name="id_prod" value="<?php echo $product["id"];?>">
                                        <input type="hidden" name="prix_prod" value="<?php echo $product["price"];?>">
                                        <input type="hidden" name="quantité" value="<?php echo $product["quantity"];?>">
                                        <button type="submit" class="btn btn-sm  btn-outline-danger text-dark font-weight-bold ">&times;</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0 && isset($_SESSION["logged"])):?>
                    <div id="paypal-button-container"></div>
                <?php elseif(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                    <a href="<?php echo BASE_URL;?>login" class="btn btn-link">Connectez vous pour terminer vos achats</a>
                <?php endif;?>
           

            <div class="col-4 col-md-4 float-right ">
                    <table class="table table-bordered mt-3">
                    <tbody>
                   <tr>
                       <th scope="row">Produits</th>
                       <td>
                        <?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : 0;?>
                       </td>
                   </tr>
                   <tr>
                       <th scope="row">Total TTC</th>
                       <td>
                            <strong id="amount" data-amount="<?php if(isset($_SESSION["totaux"])) echo $_SESSION["totaux"];?>">
                                <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?>
                            </strong>
                       </td>
                   </tr>
               </tbody>
                    </table>
                    <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0) :?>
                        <form method="post" action="<?php echo BASE_URL;?>emptybag">
                             <button type="submit" class="btn btn-outline-secondary">empty bag</button>
                         </form>                     
                         <form method="post" id="addOrder" action="<?php echo BASE_URL;?>addOrder">

                         </form>

            <?php endif; ?>
            <?php if (!isset($_SESSION["logged"])) : { ?>
                
                    <?php }
                    else : { ?>
            <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Contact</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span><?php echo $_SESSION["fullname"]; ?></span>
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Billing Address</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span><?php echo $_SESSION["adresse"]; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

    <p class="fs-4 text-center mt-5">Recommended products <i class="fa fa-fire" aria-hidden="true"></i>
</p>
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



<script>
  let amount = document.querySelector('#amount').dataset.amount;
  let finalAmount = Math.floor(amount / 9.86);
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: finalAmount.toString()
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Commande effectuée par ' + details.payer.name.given_name);
        document.querySelector('#addOrder').submit();
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

<?php include './Views/includes/footer.php'; ?>