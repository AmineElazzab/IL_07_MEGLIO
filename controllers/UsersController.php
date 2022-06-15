<?php

class UsersController{
    public function auth()
    {
        if (isset($_POST["submit"])) {
            $data["email"] = $_POST["email"];
            $result = User::login($data);
            if ($result->email == $_POST["email"] && password_verify($_POST["passwords"], $result->passwords)) {
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $result->username;
                $_SESSION["fullname"] = $result->fullname;
                $_SESSION["id_client"] = $result->id_client;
                $_SESSION["adresse"] = $result->adresse;
                $_SESSION["email"] = $result->email;
                $_SESSION["phone"] = $result->telephone;
                $_SESSION["admin"] = $result->admin;
                
                if($result->admin == 1) {
                    Redirect::to('dashboard');
                }else if($result->admin == 0) {
                    Redirect::to("landing");
                }
            } else {
                Session::set("error", "Wrong username or password!");
                Redirect::to("login");
            }
        }
    }
    public function getAllWishlist()
    {
        $result = Wishlist::getAll();
        return $result;
    }

    public function unlike($pid)
    {
        $result = Wishlist::remove($pid);
        if ($result == "ok") {
            Session::set("error", "Product removed from your wishlist");
            Redirect::to("wishlist");
        } else {
            Session::set("error", "Product is not in your wishlist");
            Redirect::to("wishlist");
        }
    }

    public function register(){
        $options = [
            'cost' => 12,
        ];
        $passwords = password_hash($_POST["passwords"], PASSWORD_BCRYPT, $options);
        $data =array(
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "telephone" => $_POST["telephone"],
            "email" => $_POST["email"],
            "adresse" => $_POST["adresse"],
            "passwords" => $passwords
        );
        $result = User::createUser($data);
        if($result === "ok"){
            Session::set("success", "Votre compte a été créé avec succès");
            Redirect::to("login");
        }else{
            Session::set("error", "Une erreur est survenue lors de la création de votre compte");
            Redirect::to("register");
        }
    }
    public function displayUsers()
    {
        $users = User::displayUsers();
        return $users;
    }
    public function updateUser()
    {
        $data = array(
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "telephone" => $_POST["telephone"],
            "email" => $_POST["email"],
            "adresse" => $_POST["adresse"],
            "id_client" => $_SESSION["id_client"],
        );
        // var_dump($data);
        // die();
        $result = User::update($data);
        if ($result === "ok") {
            Session::set("success", "user updated");
            // header('location:profil');
            // header('location:landing');
            Redirect::to("profil");
        } else {
            echo $result;
        }
        
    }
    public function getUser(){
        if(isset($_POST['id_client'])){
            $data = array(
                'id' => $_POST['id_client']
            );
            $user = User::getUserById($data);	
            return $user;
        }
    }
    public function addToWhishlist()
    {
        if (isset($_POST["submit"])) {
            $data = array(
                "id_client" => $_SESSION["id_client"],
                "id_prod" => $_POST["id_prod"]
            );
            $result = Wishlist::add($data);
            if ($result == "ok") {
                
                Session::set("success", "product added to wishlist!");
                // Redirect::to("wishlist");
                header('location:wishlist');
            } else {
                Session::set("error", "Product already in wishlist!");
                Redirect::to("wishlist");
            }
        }
    }
    public function logout (){
        
   session_destroy();
   // On supprime la variable admin de la session
        Redirect::to("login");
    }
}

?>
    
    