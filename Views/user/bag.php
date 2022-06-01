
<?php include './Views/includes/navbar.php'; ?>


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
                                <td> <img src=<?= $product['image']?> alt=""></td>
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
                
            </table>
           

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
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php include './Views/includes/footer.php'; ?>