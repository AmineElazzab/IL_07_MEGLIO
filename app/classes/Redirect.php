<?php

class Redirect{

    static public function to ($page){ // static method
        header('Location:'.$page ); // header method

    }   // end of static method

    static public function client (){   
        header('Location:../client/login' );    

    }
}

?>