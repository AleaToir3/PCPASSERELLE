<?php
class Entity{
    public $name;
    public $hp;
    public $attackmin;
    public $attackmax;
    public $image;
    public $die;
  


    public function __construct($name,$hp,$attackmin,$attackmax)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attackmin = $attackmin;
        $this->attackmax = $attackmax;
      
    }

    public function attack($enemy){
        
        
        $attack = (rand($this->attackmax,$this->attackmin));
        $this->takedmg($attack,$enemy);

        if(get_class($enemy) == 'BlackDesigner'){
        switch ($attack) {
            case $attack > 0 && $attack < 20:
                echo  '<br> ATTACK FIGMA !!!!! <br>';
                break;
            case $attack > 20 && $attack < 40:
                echo  '<br> ATTACK ELEMENTEEEE !!!!! <br>';
                break;
            case $attack > 40 && $attack < 60:
                echo  '<br> ATTACK PHOTSHOP !!!!! <br>';
                break;
            case $attack > 60 && $attack < 100:
                echo  '<br> ATTACK PACK ADOBE !!!!! <br>';
                break;
            }
        }
        // echo  $this->name . ' Attack  -->'. $enemy->name;
        // $enemy->hp -=  $this->attackmax;
        // echo '<br>il rest '.$enemy->hp;
    }

    public function takedmg($attack,$enemy){
        $classEnemy = get_class($enemy);
       
        
        
        
        $enemy->hp -= $attack;
        $this->areUDie($enemy->hp);
    }

    public function areUDie($hp){
        if($hp<0){
            echo '  === You die ! === <br>';
            echo '=== Game Over! === <br>';
            die();
        }
    }
   
}