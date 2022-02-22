

/**
 * "boucle" principale du programme
 */
var timer = window.setInterval(refresh, 100);
function refresh(){
    link.refresh();
}

/**
 * Gestion de l'évènement keydown
 */
document.addEventListener("keydown", keyDown);
function keyDown(evt){

    // Fait marcher link dans la bonne direction si nécessaire
    switch(evt.key){
        case "ArrowRight":
            link.moveRight();
            break;
        case "ArrowLeft":
            link.moveLeft();
            break;
        case "ArrowUp":
            link.moveUp();
            break;
        case "ArrowDown":
            link.moveDown();
            break;     
        default:
            break;                                           
    }
}

/**
 * Gestion de l'évènement keydown
 */
document.addEventListener("keyup", keyUp);
function keyUp(evt){
    link.stop();
}
