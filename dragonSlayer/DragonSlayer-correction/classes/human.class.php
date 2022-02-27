<?php
require_once "entity.class.php";

/**
 * Classe Human
 * 
 * A utiliser pour créer des humains par héritage
 */
class Human extends Entity
{
    const TYPE_KNIGHT   = "TYPE_KNIGHT";
    const TYPE_WITCH    = "TYPE_WITCH";
    const TYPE_THIEF    = "TYPE_THIEF";
    const TYPE_ANGEL    = "TYPE_ANGEL";

    protected $type = "TYPE_KNIGHT";

    /**
     * Crée un personnage humainoïde
     *
     * @param string $name Nom du personnage
     * @param string $type [optional] Type e personnage
     * @param string $punchLine [optional] Punch-line du dragon pour impressionner son adversaire
     */
    public function __construct(string $name, string $type = self::TYPE_KNIGHT, string $punchLine = "")
    {

        // STOCKAGE DU TYPE D'HUMAIN
        $this->type = $type;

        // DÉTERMINE LES CARACTERISTIQUES SELON LE TYPE DE PERSONNAGE
        $imageName = "";
        $initiative = 1;
        $hp = 0;
        $attackMin = 0;
        $attackMax = 0;
        switch ($this->type) {
            case self::TYPE_ANGEL:
                $imageName = "human-angel.jpg";
                $hp = 120;
                $initiative = 3;
                $attackMin = 20;
                $attackMax = 25;
                break;
            case self::TYPE_WITCH:
                $imageName = "human-witch.jpg";
                $initiative = 3;
                $hp = 80;
                $attackMin = 10;
                $attackMax = 15;
                break;
            case self::TYPE_THIEF:
                $imageName = "human-thief.jpg";
                $hp = 80;
                $initiative = 5;
                $attackMin = 10;
                $attackMax = 20;
                break;
            default:
                $imageName = "human-knight.jpg";
                $hp = 150;
                $initiative = 2;
                $attackMin = 30;
                $attackMax = 40;
                break;
        }

        // APPEL DU CONSTUCTEUR DE L'ENTITÉ
        parent::__construct($name, $imageName, $hp, $attackMin, $attackMax, $initiative, $punchLine);
    }

    /**
     * Surcharge (redéfinition) de la fonction d'attaque d'une autre entité
     * La socière peut infliger des dégats spéciaux
     *
     * @param Entity $other L'autre entité que l'on va attaquer
     * @return void
     */    
    public function attack(Entity $other){
        
        // SI C'EST UNE SORCIÈRE, TRAITEMENT SPÉCIAL
        // LA SORCIÈRE A 1 CHANCE SUR 4 DE LANCER SON SORT
        if ($this->type == self::TYPE_WITCH && rand(1,4) == 1) {

            // CALCUL DE LA PUISSANCE D'ATTAQUE DU SORT
            $damage = rand(50, 100);
            // LOG DU COMBAT
            $this->shout("Je lance un sort sur ".$other->getName()." et lui inflige ".$damage." de dégats");
            // L'AUTRE PREND DES DÉGATS
            $other->takeDamage($damage);
            return;
        }

        // POUR LES AUTRES PERSONNAGES, ATTAQUE NORMALE
        // AINSI QUE POUR LA SORCIÈRE SI ELLE RATE SON SORT
        parent::attack($other);
    }

    /**
     * Surcharge (redéfinition) de la fonction de prise de dégats de Entity
     * Selon le type de personnage, celui-ci peut avoir utiliser une capacité spéciale
     * 
     * @param integer $damage Quantité de dégats reçus
     * @return void
     */
    public function takeDamage(int $damage)
    {

        switch ($this->type) {

            case self::TYPE_ANGEL:
                // L'ANGE À UNE CHANCE SUR 5 DE SE SOIGNER APRÈS CHAQUE COUP REÇU
                // PRISE DE DÉGATS NORMAUX
                parent::takeDamage($damage);
                // TEST DE SOINS
                if (rand(1, 5) == 1) {
                    // QUANTITÉ DE SOINS
                    $soins = rand(10, 30);
                    // NOUVEAUX HP
                    $this->hp += $soins;
                    // LOG
                    $this->shout('Je me soigne de ' . $soins . 'hp. Il me reste '.$this->hp.'hp.');
                }
                break;

            case self::TYPE_THIEF:
                // LE VOLEUR A UNE CHANCE SUR 3 DE COMPLETEMENT ESQUIVER
                if (rand(1, 3) == 1)
                    $this->shout('Hahaha ! Même pas mal !');
                else // PRISE DE DÉGATS NORMAUX
                    parent::takeDamage($damage);
                break;

            case self::TYPE_KNIGHT:
                // LE CHEVALIER REDUIT LES DEGATS REÇUS DE 30%
                parent::takeDamage($damage * .7);
                break;

            default:
                // RIEN DE SPÉCIAL
                parent::takeDamage($damage);
                break;
        }
    }
}
