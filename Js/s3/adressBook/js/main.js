// --- Constantes et variables globales

// Objets DOM.

// Le carnet d'adresses (tableau d'objets représentant chacun un contact).
let contacts;

let vnom = document.getElementById('Nom');
let vprenom = document.getElementById('Prenom');
let vtel = document.getElementById('Telephone');
let vemail = document.getElementById('Email');
let btn = document.getElementById('btn');
let fofo = document.getElementById('fofo');
let i = 0 ;
let ajout = true
let valueid = '';
let tab = [
    {
        nom:"abdel",
        prenom:"jalil",
        telephone:"015544225",
        email:"abdel@gmail.com"
    },
    {
        nom:"abdel",
        prenom:"jalil",
        telephone:"015544225",
        email:"abdel@gmail.com"
    }
];

// --- Fonctions du carnet d'adresses
tab = RestoreStorage()
      affichage()

//    JSON.parse(window.localStorage.getItem('tab'));
    // window.localStorage.setItem('tab',JSON.stringify(tab));



btn.addEventListener("click",(e)=>{
    if(ajout){
          tab.push({
        nom:vnom.value,
        prenom:vprenom.value,
        telephone:vtel.value,
        email:vemail.value
    })
    }else{
        tab[valueid] = { 
            nom:vnom.value,
            prenom:vprenom.value,
            telephone:vtel.value,
            email:vemail.value}
         
        ajout= true
    }
  
affichage()
});



function RestoreStorage(){    
    let tab = window.localStorage.getItem('tab')
    if(tab == null)tab = window.localStorage.setItem('tab',JSON.stringify(tab))
    return tab = JSON.parse(window.localStorage.getItem('tab'));
}


// function clearinput(){
//     vnom.value = '';
//     vprenom.value = '';
//     vtel.value = '';

//     vemail.value = '';
//     // on peux faire aussi un reset() !!! SUR LES BALISE <FORM></FORM>
// }

function addcontacts(data) {
    let  con = document.getElementById('con');
     con.innerHTML += `
                <div class="cardContact" data-set=${i} >
                    <p>${data.nom}  ${data.prenom}</p>
                    <p>${data.telephone}</p>
                    <p>${data.email}</p>
                    <button class="btnSupCard" class type="button"data-set="${i}" >supprimer</button>
                    <button class="btnEditCard" type="button" data-set="${i}">Editer</button>
                </div>
                    `
                    i++;
                    let btnDelete = document.querySelectorAll('.btnSupCard');
                    let btnEditCard = document.querySelectorAll('.btnEditCard');


                    btnDelete.forEach(e => {
                        e.addEventListener('click',deleteCard)                        
                    });
                    btnEditCard.forEach(e => {
                        e.addEventListener('click',editCard)                        
                    });
                                        
                    window.localStorage.setItem('tab',JSON.stringify(tab))

}

function affichage() {
    con.innerHTML = ''
    tab.forEach(e => {
        addcontacts(e)
        ;})
    i=0;
}
function deleteCard(d){
let rm = d.currentTarget.dataset.set;
console.log(rm)
tab.splice(rm,1)
window.localStorage.setItem('tab',JSON.stringify(tab))
affichage()
}

function editCard(d){
    ajout= false
    let rm = d.currentTarget.dataset.set;

    vnom.value = tab[rm].nom
    vprenom.value = tab[rm].prenom
    vtel.value = tab[rm].telephone
    vemail.value = tab[rm].email
    valueid = rm
    window.localStorage.setItem('tab',JSON.stringify(tab))
    affichage()
    }
    





// function lolo() {
//     //   facon :  1  -- 
//     //     window.localStorage.setItem('monChat', 'Tom');
//     //   STOCKAGE EN JSON POUR TRAVAILLER LA DONNEE APRES
    
//     let COUCOU = JSON.parse(window.localStorage.getItem('tab'));
//          window.localStorage.setItem('tab',JSON.stringify(tab));
//         return COUCOU


// }


// lolo();


