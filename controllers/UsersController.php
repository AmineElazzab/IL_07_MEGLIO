<?php

class UsersController{
    public function auth()
    {
        if (isset($_POST["submit"])) {
            $data["username"] = $_POST["username"];
            $result = User::login($data);
            if ($result->username == $_POST["username"] && password_verify($_POST["passwords"], $result->passwords)) {
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $result->username;
                $_SESSION["fullname"] = $result->fullname;
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
    public function logout (){
        
   session_destroy();
   // On supprime la variable admin de la session
        Redirect::to("login");
    }
}
?>
    
    