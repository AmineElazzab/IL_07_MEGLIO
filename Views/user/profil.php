<?php include './Views/includes/navbar.php'; ?>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                
                <p class="fs-1 text-dark">Welcome back, <?php echo $_SESSION["fullname"]; ?></p>
                <p class="fs-4 text-dark mt-5">You have <?php echo $_SESSION["count"]; ?> items in your bag</p>
                <p class="fs-4 text-dark mt-5">Total: <?php echo $_SESSION["totaux"]; ?> MAD</p>
                <a href="<?php echo BASE_URL;?>bag" class="btn btn-outline-dark btn-lg btn-block mt-5">View Bag</a>
       
                <a href="<?php echo BASE_URL;?>addaddress" class="btn btn-outline-dark btn-lg btn-block">Add new address</a>
                <a href="<?php echo BASE_URL;?>editaddress" class="btn btn-outline-dark btn-lg btn-block">Edit address</a>
                <a href="<?php echo BASE_URL;?>MyOrder" class="btn btn-outline-dark btn-lg btn-block">View orders</a>
                <a href="<?php echo BASE_URL;?>logout" class="btn btn-outline-dark btn-lg btn-block">Logout</a>


                </div>
            </div>
            <div class="col-md-6 ">
                <div class="">
                   <img class="" src="./Views/assets/img/Artboard 1.png">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<?php include './Views/includes/footer.php'; ?>