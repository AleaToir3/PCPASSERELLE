var link = new Object();

// Position de link à l'écran
link.x = 0;
link.y = 0;
link.deltaMove = 8;

// Ligne de l'animation à jouer
link.row = 1;
// Colonne actuelle de l'animation (max 10)
link.col = 1;

// Direction dans laquelle link regarde
link.direction = 'down';
// Est-ce que link marche ?
link.isWalking = false;

/**
 * Affichage de link
 */
link.refresh = function (){

    if (this.isWalking)
        console.log('Refresh : en marche vers ' + this.direction);
    else
        console.log('Refresh : à l\'arrêt vers ' + this.direction);

}

/**
 * Mouvements de link
 */
link.moveLeft = function (){
    this.direction = "left";
    this.isWalking = true;
}
// Idem mais vers la droite
link.moveRight = function (){
    this.direction = "right";
    this.isWalking = true;
}
// Idem mais vers le haut
link.moveUp = function (){
    this.direction = "up";
    this.isWalking = true;
}
// Idem mais vers le bas
link.moveDown = function (){
    this.direction = "down";
    this.isWalking = true;  
}
// il faut que link s'arrête (quand on relâche les touches du clavier en principe)
link.stop = function(){
    this.isWalking = false;
}