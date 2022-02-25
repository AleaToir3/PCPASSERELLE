<?php
require_once 'entity.php';

require_once 'monster/monster.php';

require_once 'monster/blackDesigner.php';
require_once 'monster/redDesigner.php';
require_once 'monster/boneDesigner.php';

require_once 'player/player.php';
require_once 'player/backEndDev.php';
require_once 'player/frontEndDev.php';

$monster1 = new BlackDesigner();
$chevalier = new FrontEndDev("Dev C++",100,10,55);

echo $monster1->name.'  hp :'.$monster1->hp .' <br> attack Max :'.$monster1->attackmax.' <br> attack Min :'.$monster1->attackmin;
echo '<br>';
echo '<hr>';
echo $chevalier->name.'  hp :'.$monster1->hp .' <br> attack Max:'.$chevalier->attackmax.' <br> attack Min :'.$chevalier->attackmin;
echo '<br>';
echo '<br>';
echo '======   FIGHT   ======';
echo '<br>';
echo '<br>';
$chevalier->attack($monster1);
echo '<br>';
echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
$chevalier->attack($monster1);
echo '<br>';

echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
echo '<br>';
$chevalier->attack($monster1);
echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
echo '<br>';

echo '<br>';
$chevalier->attack($monster1);
echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
echo '<br>';
echo '<br>';
$chevalier->attack($monster1);
echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
echo '<br>';
echo '<br>';
$chevalier->attack($monster1);
echo 'les HP de '.$monster1->name .'sont de : '.$monster1->hp;
echo '<br>';





?>