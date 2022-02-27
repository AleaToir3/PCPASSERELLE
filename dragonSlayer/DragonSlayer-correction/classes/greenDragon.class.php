<?php

require_once "monster.class.php";

/**
 * Classe GreenDragon
 * 
 * Représente un dragon vert.
 * - Endurance moyenne
 * - Attaque faible
 * - Rapidité élevée
 */
class GreenDragon extends Monster {

    /**
     * Crée un dragon vert
     *
     * @param string $name Nom du Dragon
     * @param string $punchLine [optional] Punch-line du dragon pour impressionner son adversaire
     */
    public function __construct(string $name, string $punchLine=""){

        // On appelle le constructeur du parent avec les options prédéfinies
        // du dragon, sauf le name et la punch-line qui peuvent-être précisés lors 
        // de la création de l'instance (new)
        parent::__construct($name, "dragon-green.jpg", 150, 5, 20, 4, $punchLine);
    }
}