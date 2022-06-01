<?php
  

    $logoutuser = new LoginControllers();       
    $logoutuser->logout();  // On appelle la méthode logout() de la classe LoginControllers
    unset($_SESSION["fullname"]);   // On supprime la variable fullname de la session        
    Redirect::to('http://localhost/il-meglio/');
