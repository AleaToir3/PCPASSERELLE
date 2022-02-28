var link = new Object();

// Position de link à l'écran
link.x = 0;
link.y = 0;
link.deltaMove = 20;

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

    // Calcul de la colonne à afficher
    // Pour animer link, on passe juste à la colonne suivante
    // Et si on dépasse la 10ème colonne, on recommence ) la première
    this.col++;
    if (this.col > 10)
        this.col = 1;

    // Calcul de la ligne à afficher
    // Ce calcul se fait selon la direction
    switch(this.direction){
        case 'down' : 
           this.row = 1;        
            break;        
        case 'left' : 
         this.row = 2;
            break;
        case 'up' : 
          this.row = 3;
            break;
        case 'right' : 
          this.row = 4;  
            break; 
            default :   
    }
    // Et si link marche ou pas (dans ce cas on utilise les 4 dernières ligne)
    if (this.isWalking)
        this.row += 4;

    // On applique les nouveaux CSS de position
    document.getElementById('link').style.top = this.y + 'px';
    document.getElementById('link').style.left = this.x + 'px';

    // Et on appliqueles nouveaux CSS du background (image suivante de l'animation)
    document.getElementById('link').style.backgroundPositionX = -(this.col-1)*60 + 'px';
    document.getElementById('link').style.backgroundPositionY = -(this.row-1)*65 + 'px';

}
 
/**
 * Mouvements de link
 */
link.moveLeft = function (){
    this.direction = "left";
    this.isWalking = true;
    if (this.x > 10)    
        this.x -= this.deltaMove;
}
// Idem mais vers la droite
link.moveRight = function (){
    this.direction = "right";
    this.isWalking = true;
    if (this.x < document.body.clientWidth - 70)
        this.x += this.deltaMove; 
}
// Idem mais vers le haut
link.moveUp = function (){
    this.direction = "up";
    this.isWalking = true;
    if (this.y > 10)
        this.y -= this.deltaMove;
}
// Idem mais vers le bas
link.moveDown = function (){
    this.direction = "down";
    this.isWalking = true;  
    if (this.y < document.body.clientHeight - 75)        
        this.y += this.deltaMove;   
}
// il faut que link s'arrête (quand on relâche les touches du clavier en principe)
link.stop = function(){
    this.isWalking = false;
}