let perso = document.getElementById('link')

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
    this.col++;
    if (this.col > 10)
        this.col = 1;

    if (this.isWalking){
        console.log('Refresh : en marche vers ' + this.direction + "aaaaa" + this.isWalking)  
    }else{
        console.log('Refresh : à l\'arrêt vers ' + this.direction);
    }

    switch (this.direction) {
        case 'left':
           link.row = 2
        break;
        case 'right':    
           link.row = 4
        break;
        case 'up':  
           link.row = 3
        break;
        case 'down':   
           link.row = 1
        break;
    }

    if (this.isWalking)
        this.row += 4;


    perso.style.backgroundPositionX = -(this.col-1)*60 +"px"
    perso.style.backgroundPositionY = -(this.row-1)*65 +"px"
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