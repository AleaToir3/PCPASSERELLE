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

btn.addEventListener("click",(e)=>{   

tab.push({
    nom:vnom.value,
    prenom:vprenom.value,
    telephone:vtel.value,
    email:vemail.value
})
// clearinput();
// fofo.reset();
con.innerHTML = ''
tab.forEach(e => {
    addcontacts(e);})
});

function clearinput(){
    vnom.value = '';
    vprenom.value = '';
    vtel.value = '';
    vemail.value = '';
    // on peux faire aussi un reset() !!! SUR LES BALISE <FORM></FORM>
}

function addcontacts(data) {
    let  con = document.getElementById('con')
     con.innerHTML += ` 
                <div class="lol">
                    <p>${data.nom}  ${data.prenom}</p>
                    <p>${data.telephone}</p>
                    <p>${data.email}</p>
                </div>        
    `
}







function lolo() {
    //   facon :  1  -- 
    //     window.localStorage.setItem('monChat', 'Tom');
    //   STOCKAGE EN JSON POUR TRAVAILLER LA DONNEE APRES
       window.localStorage.setItem('allo',JSON.stringify(tab));

        let COUCOU = JSON.parse(window.localStorage.getItem('allo'));
        return COUCOU
}


lolo();


