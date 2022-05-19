<?php


class LoginModels{

    static public function login($data){
        $email=$data['email'];
        
        try{
           $query='SELECT * FROM client WHERE email=:email';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":email"=>$email)));
           $client=$stmt->fetch(PDO::FETCH_OBJ);
           return $client;
        
           
           
           if($stmt->execute()){
              return 'ok';
           }
           
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }

     static public function loginAdmin($data,$data1){
        $email=$data['email'];
        $passwords=$data1['passwords'];
        
        try{
           $query='SELECT * FROM admin WHERE email=:email AND passwords=:passwords';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array(":email"=>$email,":passwords"=>$passwords)));
           $admin=$stmt->fetch(PDO::FETCH_OBJ);
           return $admin;
        
           
           
           if($stmt->execute()){
              return 'ok';
           }
           
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }
}

?>