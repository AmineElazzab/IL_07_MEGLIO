<?php
$id = $_POST['id_prod'];
$price = $_POST['prix_prod'] * $_POST['quantité'];
$data = new ProductController();
$data->emptyCart($id, $price);
