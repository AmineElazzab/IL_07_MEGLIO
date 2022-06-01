<?php include './Views/includes/navbar.php'; ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center fs-3 fw-semibold text-dark mt-5 pt-5">My Wishlist</p><br/>
                <p class="text-center w-auto p-3 text-dark">Your wishlist is empty</p> 
            </div>
        </div>
    </div>
</section>

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<?php include './Views/includes/footer.php'; ?>