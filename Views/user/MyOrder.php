
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
            <?php if (count($res) > 0) :?>
            <?php foreach ($res as $product) :?>
                                <td> <img src=<?= $product['image']?> alt=""></td>
                                <td><?php echo $product["name"]; ?></td>
                                <td><?php echo $product["price"]; ?></td>
                                <td><?php echo $product["quantity"]; ?></td>
                                <td><?php echo $product["color"]; ?></td>
                                <td><?php echo $product["size"]; ?></td>
                                <td><?php echo $product["total"]; ?> MAD</td>
                                <td><?php echo $product["status"]; ?></td>     
                            </tr>
                            <?php endforeach;
                                    endif; ?>
                </tbody>
            </table>

            </div>
        </div>
    </div> 
</div>

<?php include './Views/includes/footer.php'; ?>
