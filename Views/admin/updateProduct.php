<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
        $categories = new CategorieController();
        $categories = $categories->getAllCategories();
        $productToUpdate = new ProductController();
        $productToUpdate = $productToUpdate->getProduct();
        if(isset($_POST["submit"])){
            $product = new ProductController();
            $product->updateProduct();
        }
    }else{
        Redirect::to("landing");
    }
?>






<div class="container" style="margin-top:200px; margin-bottom:150px;">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                    <a href="<?php echo BASE_URL; ?>ShowProduct" class="btn btn-sm btn-primary float-right">Back</a>
                        <h4>Update Product</h4> 
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- <div class="form-group">
                                <label for="name">Reference</label>
                                <input type="text" class="form-control" name="rfer" placeholder="Enter Product Reference" required>
                            </div> -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="nom_prod" placeholder="Enter Product Name" value="<?php echo $productToUpdate->nom_prod; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control"  name="descp_prod"  value ="<?php echo $productToUpdate->descp_prod; ?>" required></input>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="prix_prod" placeholder="Enter Product Price" value="<?php echo $productToUpdate->prix_prod; ?>" min="50" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src=<?= "./Views/assets/img/product/".$productToUpdate->image_prod ?> style="width:100px; height:200px;">
                                <input type="file" name="image" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="quantité">Quantity</label>
                                <input type="number" class="form-control" name="qte" placeholder="Enter Product Quantity" value="<?php echo $productToUpdate->quantité; ?>" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" class="form-control" name="color" placeholder="Enter Product Color" value="<?php echo $productToUpdate->color; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" name="size" placeholder="Enter Product Size" value="<?php echo $productToUpdate->size; ?>" required>
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-control" name="prId">
                                <?php foreach($categories as $categorie) :?>
                                    <option 
                                        <?php echo $productToUpdate->product_category_id === $categorie["id_categorie"] ? "selected" : "";?>
                                        value="<?php echo $categorie["id_categorie"]?>">
                                        <?php echo $categorie["name_categorie"]?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            </div> -->
                            <div class="form-group">
                            <button name="submit" class="btn btn-warning">Validate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>



    
    <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }
    </script>
