<?php

class Mammifere extends Animal{

    private $milkDuration= 1 ;
    private $fur= 1 ;
    
    public function __construct($name ,$weight,$height,$dietAlimentaire,$moveSpeed,$liveTime,$fur){
        $this->fur = $fur;
        parent::__construct($name ,$weight,$height,$dietAlimentaire,$moveSpeed,$liveTime);
        
        
    }
}




?>