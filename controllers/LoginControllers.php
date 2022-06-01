<?php

class LoginControllers{


    public function  auth(){    
        //Détermine si une variable est déclarée et est différente de null  
        if(isset($_POST['submit'])){   
            $data['email']=$_POST['email'];
            $data1['passwords']=$_POST['passwords'];    
            $result=LoginModels::login($data);  
            $resultAdmin=LoginModels::loginAdmin($data,$data1); 
           // die(print_r(!empty($resultAdmin->cin)));  
           
           
       
            //Vérifie qu'un mot de passe correspond à un hachage
            if($result->email === $_POST['email'] && password_verify($_POST['passwords'],$result->passwords)){  // compare this snippet from app\classes\LoginControllers.php:      
                     $_SESSION['logged']=true;  
                     $_SESSION['fullname']=$result->fullname; 
                    //  $_SESSION['prenom']=$result->prenom;   
                     $_SESSION['id_client']=$result->id_client; 
                     $_SESSION['role']=0;   // create a session with the role value     
                     Redirect::to('./landing');   
                
            }
            //Détermine si une variable est non vide
            elseif ((!empty($resultAdmin->email)) && ($resultAdmin->email ===$_POST['email']  && $resultAdmin->passwords === $_POST['passwords']) ){

              
                $_SESSION['logged']=true;
                $_SESSION['email']=$resultAdmin->email;
                $_SESSION['fullname']=$resultAdmin->fullname;
                $_SESSION['role']=1;
                Redirect::to('./dashboard');

              
           
            } 
            else{
                session::set('error','Pseudo ou mot de passe  est incorrect');     
                Redirect::to('login');        
                }
           

        }
    


    }
        
    



   public function logout (){
        session_destroy();
    }
}
?>
