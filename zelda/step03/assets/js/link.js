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
// Est-ce que link mache ?
link.isWalking = false;

/**
 * Affichage de link
 */
link.refresh = function (){

    console.log('Refresh');
}

/**
 * Mouvements de link
 */
link.moveLeft = function (){
    console.log('Vers la gauche');
}
// Idem mais vers la droite
link.moveRight = function (){
    console.log('Vers la droite');
}
// Idem mais vers le haut
link.moveUp = function (){
    console.log('Vers le haut');
}
// Idem mais vers le bas
link.moveDown = function (){
    console.log('Vers le bas');    
}
// il faut que link s'arrête (quand on relâche les touches du clavier en principe)
link.stop = function(){
    console.log('Stop');
}