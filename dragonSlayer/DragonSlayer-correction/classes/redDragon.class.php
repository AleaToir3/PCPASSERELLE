<?php

require_once "monster.class.php";

/**
 * Classe RedDragon
 * 
 * Représente un dragon rouge.
 * - Grande endurance
 * - Attaque puissante
 * - Très lent
 * 
 */
class RedDragon extends Monster {

    /**
     * Crée un dragon rouge
     *
     * 
     * @param string $name Nom du Dragon
     * @param string $punchLine [optional] Punch-line du dragon pour impressionner son adversaire
     */    
    public function __construct(string $name, string $punchLine=""){

        // On appelle le constructeur du parent avec les options prédéfinies
        // du dragon, sauf le name qui peut être précisé lors 
        // de la création de l'instance (new)     
        parent::__construct($name, "dragon-red.jpg", 200, 20, 50, 1 ,$punchLine);
    }
}
