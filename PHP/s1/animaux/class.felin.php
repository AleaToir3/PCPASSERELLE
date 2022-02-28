<?php 


class Felin extends Mammifere{
 protected $moveSpeed = 25;
 protected $patte = 4;
    public function move(){
        $this->shout('Fiooouuuuuvveeeeee'.$this->moveSpeed . $this->patte);

    }

}

?>