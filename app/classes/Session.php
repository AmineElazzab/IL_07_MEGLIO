<?php

class session {

    static public function set ($type,$message){    // static method
        setcookie($type,$message,time()+5,"/"); //creation de cookie    // time()+5 = 5 secondes
    }
}

?>