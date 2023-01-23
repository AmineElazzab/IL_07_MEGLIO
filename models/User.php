<?php

class User{
    static public function login($data) {
        $email = $data['email'];
        try {
            $query = "SELECT * FROM users WHERE email=:email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute((array(":email" => $email)));
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
    static function update($data){
        $stmt = DB::connect()->prepare('UPDATE users SET fullname = :fullname, username = :username, telephone = :telephone, email = :email, adresse = :adresse WHERE id_client = :id_client');
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':telephone',$data['telephone']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':adresse',$data['adresse']);
        $stmt->bindParam(':id_client',$data['id_client']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
    static public function getUserById($data){
        $id = $data['id'];
        try {
               $stmt = DB::connect()->prepare('SELECT * FROM users WHERE id_client = :id');
               $stmt->execute(array(":id" => $id));
               $user = $stmt->fetch(PDO::FETCH_OBJ);
               return $user;
               $stmt = null;
        }catch(PDOException $ex){
            echo "error" .$ex->getMessage();
        }
    }
} 