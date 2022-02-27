<?php

require_once "monster.class.php";

/**
 * Classe BlackDragon
 * 
 * Représente un dragon noir.
 * - Très grande endurance
 * - Attaque moyenne
 * - Rapidité faible
 */
class BlackDragon extends Monster {

    /**
     * Crée un dragon noir
     *
     * @param string $name Nom du Dragon
     * @param string $punchLine [optional] Punch-line du dragon pour impressionner son adversaire
     */
    public function __construct(string $name, string $punchLine=""){

        // On appelle le constructeur du parent avec les options prédéfinies
        // du dragon, sauf le name et la punch-line qui peuvent-être précisés lors 
        // de la création de l'instance (new)
        parent::__construct($name, "dragon-black.jpg", 250, 10, 25, 2, $punchLine);
    }
}