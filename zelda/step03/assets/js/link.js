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
link.direction = 0;
// Est-ce que link mache ?
link.isWalking = false;

/**
 * Affichage de link
 */
link.refresh = function (){
    console.log('Refresh');
    let phrase ;
    if(link.isWalking){
        phrase = "Marche vers :"  ;
    }else{
        phrase = "Regarde  vers :" ;
    }

    
    switch (link.direction) {
        case 'gauche':
            phrase += 'gauche';
            break;
        case 'droite':
            phrase += 'droite';
            break;
        case 'haut':
            phrase += 'haut';
            break;
        case 'bas':
            phrase += 'bas';
            break;
    }
    console.log(phrase)
}

/**
 * Mouvements de link
 */
link.moveLeft = function (){
    // console.log('Vers la gauche');
    link.direction = 'gauche';
    link.isWalking = true;

}
// Idem mais vers la droite
link.moveRight = function (){
    // console.log('Vers la droite');
    link.direction = 'droite';
    link.isWalking = true;

}
// Idem mais vers le haut
link.moveUp = function (){
    // console.log('Vers le haut');
    link.direction = 'haut';
    link.isWalking = true;

}
// Idem mais vers le bas
link.moveDown = function (){
    // console.log('Vers le bas');  
    link.direction = 'bas';
    link.isWalking = true;
  
}
// il faut que link s'arrête (quand on relâche les touches du clavier en principe)
link.stop = function(){
    console.log('Stop');
    link.isWalking = false;

}

