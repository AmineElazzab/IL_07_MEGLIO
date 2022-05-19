<?php
  

    $logoutuser = new LoginControllers();       
    $logoutuser->logout();  // On appelle la méthode logout() de la classe LoginControllers
    unset($_SESSION["nom"]);        
    unset($_SESSION["prenom"]); 
    Redirect::to('http://localhost/il-meglio/');
