<?php include './Views/includes/navbar.php';?>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
            <?php if (!isset($_SESSION["logged"])) : { ?>
                <h2 class="pt-5 text-center" style="margin-top:200px;">Become a Member — you'll enjoy exclusive deals, offers, invites and rewards.</h2></br>
                <a href="<?php echo BASE_URL;?>login" class="btn btn-outline-dark btn-lg btn-block">LOGIN</a>
                    <?php }
                else : { ?>
                <p class="fs-1 text-dark">Welcome back, <?php echo $_SESSION["fullname"]; ?></p>
                <p class="fs-5 text-gray text-decoration-underline mt-3">Your Address: <?php echo $_SESSION["adresse"]; ?></p>
                <p class="fs-5 text-gray text-decoration-underline mt-3">Your Email: <?php echo $_SESSION["email"]; ?></p>
                <p class="fs-5 text-gray text-decoration-underline mt-3">Your Phone: <?php echo $_SESSION["phone"]; ?></p>

                <p class="fs-4 text-dark mt-5">You have <?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : 0;?> items in your bag</p>
                <p class="fs-4 text-dark mt-5">Total: <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?> MAD</p>
                <a href="<?php echo BASE_URL;?>bag" class="btn btn-outline-dark btn-lg btn-block mt-5">View Bag</a>
       
                <a href="<?php echo BASE_URL;?>updateProfil" class="btn btn-outline-dark btn-lg btn-block">Edit Your Profil</a>
                <a href="<?php echo BASE_URL;?>MyOrder" class="btn btn-outline-dark btn-lg btn-block">View orders</a>
                <a href="<?php echo BASE_URL;?>logout" class="btn btn-outline-dark btn-lg btn-block">Logout</a>

                <?php } ?>
                <?php endif; ?>
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