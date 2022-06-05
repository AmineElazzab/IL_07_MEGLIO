
<?php include './Views/includes/navbar.php'; ?>

<div class="container" style="margin-top:200px;">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="card bg-light p-3">
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION as $name => $product) : print_r($_SESSION); ?>
                        <?php if (substr($name, 0,9)=="products_") : ?>
                            <tr>
                                <td> <img src=<?= $product['image']?> alt=""></td>
                                <td><?php echo $product["name"]; ?></td>
                                <td><?php echo $product["price"]; ?></td>
                                <td><?php echo $product["quantity"]; ?></td>
                                <td><?php echo $product["color"]; ?></td>
                                <td><?php echo $product["size"]; ?></td>
                                <td><?php echo $product["total"]; ?> MAD</td>

                                <td><?php echo $product["status"]; ?></td>     
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            </div>
        </div>
    </div> 
</div>

<?php include './Views/includes/footer.php'; ?>
