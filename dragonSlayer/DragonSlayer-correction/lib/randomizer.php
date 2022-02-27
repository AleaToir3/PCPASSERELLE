<?php
require_once "classes/human.class.php";
require_once "classes/redDragon.class.php";
require_once "classes/blackDragon.class.php";
require_once "classes/greenDragon.class.php";

// LISTE DES PARTICIPANTS POSSIBLES
$fighters = [
    [
        'type' => 'RedDragon',
        'name' => 'Smaug',
        'punchLine' => 'Je suis le feu. Je suis… la Mort.',
    ],
    [
        'type' => 'BlackDragon',
        'name' => 'Fáfnir',
        'punchLine' => 'Cet or que j’ai possédé te mènera à la mort.',
    ],    
    [
        'type' => 'GreenDragon',
        'name' => 'Quetzalcoatl',
        'punchLine' => 'Je suis un Eco-Dragon.',
    ],       
    [
        'type' => Human::TYPE_KNIGHT,
        'name' => 'Le Chevalier Noir',
        'punchLine' => 'None Shall Pass.'
    ],
    [
        'type' => Human::TYPE_WITCH,
        'name' => 'Charlotte',
        'punchLine' => 'Hééé ! J.S. ! T\'oublieras pas la correctiong ! Heing !'
    ],       
    [
        'type' => Human::TYPE_ANGEL,
        'name' => 'Harry',
        'punchLine' => 'Vas-y, fais moi plaisir !'
    ],
    [
        'type' => Human::TYPE_THIEF,
        'name' => 'Bonnie',
        'punchLine' => 'On me voit, on me voit plus.'
    ],    
];

/**
 * Renvoie un combattant au hasard
 *
 * @return Entity Une instance de personnage ou de monstre
 */
function getRandomFighter():Entity{
    global $fighters;

    // CHOIX DU COMBATTANT AU HAZARD
    $irand = rand (0, count($fighters)-1);

    // ON RÉCUPÈRE LES DONNÉES DU COMBATTANT DÉSIGNÉ AU HASARD
    $fighter = $fighters[$irand];

    // IL FAUT ALORS RETIRER LE COMBATTANT DE LA LISTE 
    // POUR NE PAS RISQUER DE TIRER 2 FOIS LE MÊME

    // POUR CELA, UN SIMPLE UNSET SUFFIT
    unset($fighters[$irand]);

    // MAIS, ATTENTION ! IL FAUT RÉ-INDEXÉ, ENTIÈREMENT LE TABLEAU
    $fighters = array_values($fighters);

    // ON REGARDE LE TYPE DE COMBATTANT QUI A ÉTÉ CHOISI, 
    // ET ON RENVOIE LA BONNE INSTANCE D'OBJET EN UTILISANT LA BONNE CLASS
    switch($fighter['type']){
        case 'RedDragon' :
            return new RedDragon($fighter['name'], $fighter['punchLine']);
            break;

        case 'BlackDragon' :
            return new BlackDragon($fighter['name'], $fighter['punchLine']);
            break;

        case 'GreenDragon' :
            return new GreenDragon($fighter['name'], $fighter['punchLine']);
            break;

        case Human::TYPE_KNIGHT :
        case Human::TYPE_ANGEL :
        case Human::TYPE_THIEF :
        case Human::TYPE_WITCH :
            // NOTEZ COMMENT ON PEUT ENCHAÎNER TOUS LES CASES POUR LA CLASSE HUMAN
            return new Human($fighter['name'], $fighter['type'], $fighter['punchLine']);
            break;

        default :
            // SI LE TYPE EST INCONNU, TAMPIS, ON CRÉE UN CHEVALIER
            return new Human($fighter['name'], Human::TYPE_KNIGHT, $fighter['punchLine']);
            break;
    }
}

