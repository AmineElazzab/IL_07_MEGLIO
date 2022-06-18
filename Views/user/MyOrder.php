
<?php include './Views/includes/navbar.php'; ?>

<?php
error_reporting(0);
  $order = new OrdersController();
    $orders = $order->getUserOrders();
   

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
        <!-- end -->
<div class="content">
    
<div class="container" style="margin-top:100px; margin-bottom:150px;">
            <div class="text-center mt-5">
            <i class="fa fa-shipping-fast"></i>
                <h1 class="text-2xl font-bold mt-2">My Orders</h1>
            </div>
            <?php if (!isset($_SESSION["logged"])) : { ?>
                <h2 class="pt-5 text-center" style="margin-top:200px;">You Don't Have Any Orders Yet ? Log In For Shipping</h2></br>
                <a href="<?php echo BASE_URL;?>login" class="btn btn-outline-dark btn-lg btn-block">LOGIN</a>
                    <?php }
                else : { ?>

      <div class="table-responsive custom-table-responsive">
      <?php if (count($orders) > 0) :?>
            <?php foreach ($orders as $product_order) :?>
        <table class="table custom-table">
          <thead>
            <tr>  

                        <th>Product</th>
                        <th>Quantity</th>
                        <th>prix</th>
                        <th>Total</th>
                        <th>Date of Order</th>
                        <th>Status</th>
            </tr>
          </thead>
          <tbody>
          
            <tr scope="row">
                                <td><?php echo $product_order->product; ?></td>
                                <td><?php echo $product_order->order_quantity; ?></td>
                                <td><?php echo $product_order->prix; ?> MAD</td>
                                <td><?php echo $product_order->total; ?> MAD</td>
                                <td><?php echo $product_order->date_order; ?></td>
                                <td><?php echo $product_order->order_status; ?></td>     
            </tr>
                                    <?php endforeach;
                                    endif; ?>

          </tbody>
        </table>
      </div>

<?php } ?>
                <?php endif; ?>
                <?php if (empty($product_order)) : ?>
                <p class="text-center w-auto p-3 fs-4 text-dark"> You Don't Have Any Orders Yet!! <i class="fa fa-frown-open"></i></p>    
            <?php endif; ?>
    </div>
  </div>
 

<?php include './Views/includes/footer.php'; ?>
