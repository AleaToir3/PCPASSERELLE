// setInterval("link.refresh()",1000)

document.addEventListener('keydown',keydown)
function keydown(e){
switch (e.key) {
    case 'ArrowUp':
        link.moveUp();
    break;
    
    case 'ArrowDown': 
    link.moveDown();   
    break;
    
    case 'ArrowLeft':
        link.moveLeft();
    break;
    
    case 'ArrowRight':
        link.moveRight();
        break;
                        
    default:
        break;
}}
document.addEventListener('keyup',keyup)
function keyup() {
    link.stop();
}