<?php

class Animal{
    
    private $moveSpeed = 0;
    private $dietAlimentaire = "";
    private $liveTime = "";
    private $weight = "";
    private $height = "";
    private $name = "";
    CONST HERBIVORE = "HERBIVORE";

    public function __construct($name ,$weight,$height,$dietAlimentaire,$moveSpeed,$liveTime){
        $this->moveSpeed = $moveSpeed;
        $this->dietAlimentaire  = $dietAlimentaire;
        $this->liveTime  = $liveTime;
        $this->weight  = $weight;
        $this->height  = $height;
        $this->name  = $name;
        
    }
    public function mate($autresAnimal){
        $this->shout("je copule avec ". $autresAnimal->name);
    }
    public function die(){
        $this->liveTime = 0;
        $this->shout('Rhaaa ! je meur');
    }

    public function eat(){
        switch ($this->dietAlimentaire) {
            case self::HERBIVORE:
                $this->shout("Je miam de l'herbe");
                break;
            case 'Carnivore':
                $this->shout("Je miam de la viande");
                break;
            case 'Instectivore':
                $this->shout("Je miam des insectes");
                break;
            default:
                $this->shout("Je miam tout");
                break;
        }

    }

    public function move(){
        $this->shout('Fiooouuuuuvveeeeee'.$this->moveSpeed);

    }

    public function shout($msg){
        echo $this->name .' : ' . $msg . '<br>';
    }

}
?>