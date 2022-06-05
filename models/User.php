<?php

class User{
    static public function login($data) {
        $username = $data['username'];
        try {
            $query = "SELECT * FROM users WHERE username=:username";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute((array(":username" => $username)));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function createUser($data){
     $stmt = DB::connect()->prepare("INSERT INTO users (fullname,username,telephone,email,adresse,passwords) VALUES (:fullname,:username,:telephone,:email, :adresse, :passwords)");
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':telephone', $data['telephone']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':passwords', $data['passwords']);        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
    static public function displayUsers() {
        $stmt = DB::connect()->prepare('SELECT * FROM users WHERE id_client != 7');
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
        $stmt = null;
    }
} 