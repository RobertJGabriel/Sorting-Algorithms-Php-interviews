<?php

include_once("assests/model/sorts.php");

class Controller {


    var $sorts;
    
    public
    function __construct()      {
        $this->sorts = new sorts();

    }

    public
    function invoke(){
      


                 include('assests/view/view.php');
        
        
        
        
    }

}

?>