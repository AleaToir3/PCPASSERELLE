<!-- lion est une instance de la 'Class' Objet 'La 1er lettre est en MAJ'-->
<!-- nous allons cree un des class  -->
<?php 
require_once 'class.animal.php';
require_once 'class.mammifere.php';
require_once 'class.felin.php';

$souris = new Mammifere('souris',"100gr","5cm","Omnivore",6,2,"poil");
$elephan = new Animal('elephant','3T','3m',Animal::HERBIVORE,30,45);
$chat = new Felin ('mimi','10kl','60cm','Carnivor',20,15,"poil");

$souris->eat();
$souris->move();
$elephan->move();
$elephan->mate($souris);
$elephan->die();