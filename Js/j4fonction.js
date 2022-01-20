// // LES FONCTIONS

// function direBonjour()
// {
//     window.alert('Hello world !');
// }

// function direBonjour2(prenom)
// {
//     window.alert(`Hello ${prenom} !`);
// }

// let allo = window.prompt("nom?");

// direBonjour2(allo);

let operateur = window.prompt( "1-Addition 2-multiplcation 3-soustraction 4-division")
let nb1 = parseInt(window.prompt( "nb1"));
let nb2 = parseInt(window.prompt( "nb2"));
function calculette(operateur,nb1,nb2){
    if(operateur==1){
        return nb1 + nb2;
    }else if(operateur==2){
        return nb1 * nb2;
    }else if(operateur==3){ 
        return nb1 - nb2;
    }else if(operateur==4){
        return nb1 / nb2;
    }
}
console.log(calculette(operateur,nb1,nb2));
