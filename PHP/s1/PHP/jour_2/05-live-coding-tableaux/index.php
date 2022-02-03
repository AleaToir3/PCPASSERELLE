<style>
      h2 { padding: 20px; background-color: #333; color: white; }
</style>
<h2>Les tableaux de données array</h2>

<?php

// déclaration d'un tableau array
$tab = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

$tab = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

$tab = [];

// pour rajouter :
$tab[] = 'janvier';
$tab[] = 'février';
$tab[] = 'mars';
$tab[] = 'avril';

array_push($tab, 'juin');

// pour changer une des valeurs :
$tab[2] = 'décembre';

// pour voir le contenu du tableau : 
// deux instructions d'affichage améliorées : var_dump() et print_r()
// les balises sont présentes pour la mise en forme dans l'html
echo '<pre>'; print_r($tab); echo '</pre>';

echo '<pre>'; var_dump($tab); echo '</pre>';

// Affichez l'information jeudi en piochant dans le tableau.
echo $tab[3] . '<br>';

// Affichage du tableau sous forme de liste ul li 
// pour connaitre la taille d'un tableau array : count() ou sizeof()
echo 'Nombre d\'élément dans le tableau array $tab : ' . count($tab) . '<hr>';
echo '<ul>';
for($i = 0; $i < count($tab); $i++) {
      echo '<li>' . $tab[$i] . '</li>';
      // echo "<li>$tab[$i]</li>";
}
echo '</ul>';


// autre façon de déclarer un tableau array
$autre_tab[] = 'pommes';
$autre_tab[] = 'poires';
$autre_tab[] = 'cerises';
$autre_tab[] = 'ananas';
$autre_tab[] = 'kiwis';
$autre_tab[] = 'fraises';


echo '<pre>'; print_r($autre_tab); echo '</pre>';

// Il est possible de forcer les indices (numérique ou chaine de caractères) :
$infos_membre = array(
      'pseudo' => 'admin',
      'mdp' => 'soleil',
      'mail' => 'admin@mail.fr'
);

$infos_membre['telephone'] = '0102030405';
$infos_membre['date_inscription'] = '2021-01-01';

echo '<pre>'; print_r($infos_membre); echo '</pre>';

echo 'Bonjour ' . $infos_membre['pseudo'] . ', bienvenue sur notre site<hr>';

echo '<hr>';

// affichage du tableau complet via une boucle, nous ne pouvons pas utiliser for ou while car les indices sont en chaine de caractères

// Boucle foreach() {} pour les tableaux et les objets

echo '<ul>';
// une seule variable après le mot clé AS, cette variable contient la valeur en cours à chaque tour.
foreach($infos_membre AS $valeur) {
      echo '<li>' . $valeur . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach($infos_membre as $key => $val) {
      echo '<li>cle : ' . $key . ' - valeur : '.$val.'</li>';
}
echo '</ul>';

echo '<hr>';


$tableTest = array('Michel', 'Adriel', 'Emma', 'Marilyne');

foreach($tableTest as $toto){
      echo ''.$toto.'<br/>';
}



echo '<ul>';
// deux variables après le mot clé AS, la première contient l'indice en cours et la deuxième contient la valeur en cours à chaque tour.

$infos_membre = array(
      'pseudo' => 'admin',
      'mdp' => 'soleil',
      'mail' => 'admin@mail.fr',
      'telephone' => '0000000000'
);


foreach($infos_membre AS $indice => $valeur) {
      if($indice != 'mdp') {
          echo '<li><b>' . $indice . '</b> : ' . $valeur . '</li>';  
      }      
}

echo '</ul>';
