<?php require_once "templates/header.phtml";?>
<?php
/*
* Organise un combat entre un humain et un dragon
*
*/

// CHARGEMENT DES CLASSES NÉCESSAIRES
require_once "classes/human.class.php";
require_once "classes/redDragon.class.php";

// CRÉATIONS DES INSTANCES DES COMBATTANTS
$fighter1 = new Human('Le Chevalier Noir', Human::TYPE_KNIGHT, 'None shall pass !');
$fighter2 = new RedDragon('Smaug', 'Je suis le feu. Je suis… la Mort.');

// PRÉPARATION DES VARIABLES À UTILISER DANS LE TEMPLATE D'ENTETE DE COMBAT (ANNONCE LES COMBATTANTS)
// IL S'AGIT SIMPLEMENT DE CHARGER DES TABLEAUX ASSOCIATIFS AVEC DES VALEURS
$firstFighter = [
    'name' => $fighter1->getName(),
    'image' => $fighter1->getImageName(),
    'punchLine' => $fighter1->getPunchLine(),
];
$secondFighter = [
    'name' => $fighter2->getName(),
    'image' => $fighter2->getImageName(),
    'punchLine' => $fighter2->getPunchLine(),
];

// CHARGEMENT DU TEMPLATE D'ENTÊTE DE LA BATAILLE
// (ANNONCE LES COMBATTANTS)
require ("templates/battle-start.phtml");


// BATAILLE
?>

<section id="battle">
    <div class="w50">

        <?php

        // COMPTEUR DE ROUNDS
        $round = 1;

        // DANS QUE LES DEUX COMBATTANTS SONT EN VIE, ON CONTINUE
        while ($fighter1->isAlive() && $fighter2->isAlive()) {

            // AFFICHE LE NUMÉRO DU ROUND
            echo '<h2 class="round text-center">Round '.$round.'</h2><br>';

            // CALCUL DE L'INITIATIVE
            $max = $fighter1->getInitiative() + $fighter2->getInitiative();
            $initiative = rand(1, $max);

            // LE PREMIER COMBATTANT PREND L'INITIATIVE
            if ($initiative <= $fighter1->getInitiative())
                $fighter1->attack($fighter2);
            else // LE SECOND COMBATTANT PREND L'INITIATIVE
                $fighter2->attack($fighter1);
            
            // INCRÉMENTATION DU NUMÉRO DE ROUND
            $round++;
        }
        ?>

    </div>
</section>

<?php
// FIN DE BATAILLE
// UN PETIT TERNAIRE POUR SAVOIR QUI EST ENCORE DEBOUT
$lastAlive = $fighter1->isAlive() ? $fighter1 : $fighter2;

// CHARGEMENT DES DONNÉES POUR LE TEMPLATE DE FIN DE COMBAT
// AFFICHE DES DATAS SUR LE VAINQUEUR DU COMBAT
$winner = [
    'name' => $lastAlive->getName(),
    'image' => $lastAlive->getImageName(),
]; 

// CHARGEMENT DU TEMPLATE  DE FIN DE COMBAT
require ("templates/battle-end.phtml");
?>

<?php require_once "templates/footer.phtml"; ?>