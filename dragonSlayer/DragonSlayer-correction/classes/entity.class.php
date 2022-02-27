<?php

/**
 * Class Entity
 * 
 * Principale classe du jeu, permet de construire 
 * des classes de monstres et de joueurs par héritage.
 * 
 * La classe est "abstact" (abstraite) pour qu'elle ne soit utilisable
 * que par héritage. Ainsi, il est impossible de faire un "new Entity()".
 * Il faut obligatoirement utiliser une classe enfant de Entity
 */
abstract class Entity {

    protected $name = "";        // Nom de l'entité
    protected $imageName = "";   // Fichier image de l'entité
    protected $hp = 1;              // Points de vie de l'entité
    protected $attackMin = 0;       // Dégats minimum que l'entité peut infliger à une autre entité
    protected $attackMax = 0;       // Dégats maximum que l'entité peut infliger à une autre entité
    protected $initiative = 1;      // Niveau d'initiative (rapidité) de l'entité, le plus, le mieux
    protected $punchLine = "";   // Une petite punch-line que l'entité lâche en début de combat
    /**
     * Entity
     *
     * @param string  $name Nom de l'entité
     * @param string  $imageName Nom du fichier image à utiliser pour cette entité
     * @param integer $hp Points de vie de l'entité
     * @param integer $attackMin Dégats minimum que l'entité peut infliger 
     * @param integer $attackMax Dégats maximum que l'entité peut infliger
     * @param integer $initiative Niveau d'initiative (rapidité)
     */
    public function __construct(string $name, string $imageName, int $hp, int $attackMin, int $attackMax, int $initiative=1, string $punchLine = ""){
        $this->name         = $name;
        $this->imageName    = $imageName;
        $this->hp           = $hp;
        $this->attackMin    = $attackMin;
        $this->attackMax    = $attackMax;
        $this->initiative   = $initiative;
        $this->punchLine    = $punchLine;
    }

    /**
     * Attaque une autre entité
     *
     * @param Entity $other L'autre entité que l'on va attaquer
     * @return void
     */
    public function attack(Entity $other){

        // Calcul de la puissance d'attaque entre min et max
        $damage = rand($this->attackMin, $this->attackMax);
        // Log du combat
        $this->shout("Grrr, j'attaque ".$other->getName()." et lui inflige <strong>".$damage."</strong> de dégats");
        // L'autre prend des dégats
        $other->takeDamage($damage);
    }
    
    /**
     * L'entité prend des dégats
     *
     * @param integer $damage Quantité de dégats reçus
     * @return void
     */
    public function takeDamage(int $damage){

        // Calcul des nouveaux points de vies de l'entité
        $this->hp -= $damage;
        // Petite sécurité pour ne pas passer sous 0HP
        if ($this->hp < 0) $this->hp = 0;
        // Log du combat
        $this->shout("Arh ! Je prends  <strong>".$damage."</strong> de dégats. Il me reste  <strong>".$this->hp."hp</strong>.");
        
    }

    /**
     * Permet à l'entité de crier (fonction de log)
     * 
     * Pour éviter de faire des "echo" dans le PHP, 
     * on a préféré intégrer un template phtml.
     * C'est, quand-même, beaucoup plus propre.
     */
    public function shout($message){

        // TABLEAU CONTENANT DES DONNÉES QUI SERONT AFFICHÉES DANS LE TEMPLATE
        $shout = [
            'image' => $this->imageName,
            'name'  => $this->name,
            'text'  => $message
        ];

        // CHARGEMENT DU TEMPLATE PHTML
        include "templates/shout.phtml";
    }

    /**
     * Renvoie le nom de l'entité
     *
     * @return string Nom de l'entité
     */
    public function getName():string{
        return $this->name;
    }
    
    /**
     * Renvoie le nom de l'image de l'entité
     *
     * @return string Nom de l'image de l'entité
     */
    public function getImageName():string{
        return $this->imageName;
    }

    /**
     * Renvoie le score d'initiative de l'entité
     *
     * @return integer Initiative de l'entité
     */
    public function getInitiative():int{
        return $this->initiative;
    }

    /**
     * Renvoie la punch-line de l'entité
     *
     * @return string Punch-line qu'utilise l'entité
     */
    public function getPunchLine():string{
        return $this->punchLine;
    }

    /**
     * Dit si l'entité est toujours en vie
     *
     * @return boolean True : l'entité est vivante, FALSE : elle est morte
     */
    public function isAlive():bool{
        return $this->hp > 0;
    }
}
?>
