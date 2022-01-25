// let des1 = Math.floor((Math.random() * 6) + 1)
// let des2 = Math.floor((Math.random() * 6) + 1)
// let des3 = Math.floor((Math.random() * 6) + 1)
// let scorep = 0;


// let score1;

// do{
//     if(des1==des2&&des1==des3){
//         scorep += 100;
//         console.log("aaaa");
//     }else if(des1 == des2||des1 == des3 || des2 == des3){
//         scorep += 50;
//     }    
//     console.log("Le dés 1 a fait : "+des1);
//     console.log("Le dés 2 a fait : "+des2);
//     console.log("Le dés 3 a fait : "+des3);
//     console.log("Le score est de : "+scorep);
// }while(window.confirm()==true);


// let email = "abdel@gmail.com";
// let domain = email.indexOf('@');
// console.log("votre domain est : "+email.substring(domain+1));
// console.log("votre email est : "+email.substring(0,domain));

// let panier=[];
// let entre = true;

// while(entre){
//     let lastArticle = window.prompt("Quel est l'article a ajouter ?");
//     if(panier.includes(lastArticle) == false)
//     {
//         panier.push(lastArticle)
//         console.log("ajouter !");
//     }else{
//         console.log("L'article est deja present !");
//     }
//     entre = window.confirm("Voulez vous mettre des articles dans votre pannier ?");
//   }
//   console.log("sortie !");
// entre = true;

// if(entre){
//     console.log("ajoute "+panier);
//     while(window.confirm("Voulez vous RETIRE des articles de votre pannier ?") == true){
//     let deleteArticle =  window.prompt("Quel est l'article a retire ?");
//     if(panier.includes(deleteArticle) == true)
//     {
//         let indexArticle = panier.indexOf(deleteArticle);
//         panier.splice(indexArticle,1);

//     }
//     }
//     console.log("fin " + panier);
    
// }