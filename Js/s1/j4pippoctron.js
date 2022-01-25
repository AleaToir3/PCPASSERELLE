let pipotron = [
	// 0
	[
        "Avec", "Considérant", "Où que nous mène", "Eu égard à", "Vu",
        "En ce qui concerne", "Dans le cas particulier de", "Quelle que soit", 
        "Du fait de", "Tant que durera", "Quoi qu'on dise concernant", "Nonobstant", 
        "Compte tenu de", "Malgré", "Pour réagir face à", "Afin de circonvenir à", 
        "Dans le but de pallier à", "Si vous voulez mon avis concernant" 
    ],
    // 1
    [
    	"la restriction", "l'orientation", "la crise", "l'inertie", 
        "la difficulté","l'austérité", "la dégradation", "cette rigueur", 
        "la dualité de la situation", "la baisse de confiance", "la morosité", 
        "la situation", "l'ambiance", "la politique", "la fragilité", 
        "complexité", "l'inconstance","cette inflexion"
     ],
     // 2
     [
     	"présente", "actuelle", "générale", "induite", "conjoncturelle", 	
        "observée","contextuelle", "de ces derniers temps", 
        "de l'époque actuelle", "intrinsèque", "que nous constatons"
     ],
     // 3
     [
     	"il convient d#", "il faut", "on se doit d#", 
        "il est préférable d#", "il serait intéressant d'", "il ne faut pas négliger d#", 
        "on ne peut se passer d#", "il est nécessaire d#",
        "il serait bon d#", "il faut de toute urgence", 
        "je recommande d#", "je préconise un audit afin d#", 
        "il est très important d#", "il ne faut pas s'interdire d#", 
        "nous sommes contraints d#", "je suggère fortement d#", 
        "je n'exclus pas d#", "je vous demande d#"
     ],
     // 4
     [
     	"étudier", "examiner", "favoriser", "prendre en considération", 
        "anticiper", "imaginer", "uniformiser", "remodeler", "avoir à l'esprit", 
        "se remémorer", "gérer", "fédérer", "comprendre", "analyser", "appréhender", 
        "expérimenter", "essayer", "caractériser", "façonner", "revoir", "prendre en compte", 
        "arrêter de stigmatiser", "considérer", "réorganiser", "inventorier"
     ],
     // 5
     [
          "toutes les", "chacune des", "la majorité des" ,"la simultanéité des",
          "l'ensemble des", "la somme des", "la totalité des", "la globalité des",
          "les relations des", "certaines", "la plus grande partie des", "les principales",
          "systématiquement les", "précisément les"
     ],
     // 6
     [
     	"solutions", "issues", "problématiques", "voies", "alternatives", 
        "organisations matricielles", "améliorations","ouvertures",
        "synergies","actions","options", "décisions", "modalités",
        "hypothèses", "stratégies"
     ],
     // 7
     [
     	"imaginables", "possibles", "s'offrant à nous", "de bon sens", "envisageables", 							"éventuelles", "réalisables", "déclinables", "pertinentes", "que nous connaissons", 
        "évidentes", "optimales", "opportunes", "emblématiques", "draconiennes"
     ],
     // 8
     [
     	"à long terme", "pour longtemps", "à l'avenir", "pour le futur", "depuis longtemps",
        "à court terme", "rapidement", "dans une perspective correcte", 
        "avec toute la prudence requise", "de toute urgence", "même si ce n'est pas facile",
        "même si nous devons en tirer des conséquences", "très attentativement", 
        "avec beaucoup de recul", "parce que la nature a horreur du vide", 
        "parce que nous ne faisons plus le même métier","toutes choses étant égales par ailleurs",
        "et déjà en notre possession", "en prenant toutes les précautions qui s'imposent", 
        "si l'on veut s'en sortir un jour", "parce qu'il est temps d'agir", 
        "parce qu'il s'agit de notre dernière chance", 
        "parce que les mêmes causes produisent les mêmes effets", "parce que nous le valons bien"
	]
];

let phrase = "";
for (let i = 0; i < pipotron.length; i++) {
    let vAlea = Math.floor(Math.random() * pipotron[i].length);
    phrase += pipotron[i][vAlea]+" ";
}
phrase = "allo super #e ou pas #non";

if(phrase.includes('#')){
    let modif = phrase.indexOf('#');
    if(phrase[modif+1] == "a" || phrase[modif+1] == "e" || phrase[modif+1] == "i" || phrase[modif+1] == "o" || phrase[modif+1] == "u"  ){
        phrase = phrase.replace(/#/g,"'")
    }
}
console.log(phrase)

// On déclare une variable pour notre phrase (chaine vide au départ)
let phrase = '';
// On boucle sur notre tableau pipotron
for(let i =0; i < pipotron.length; i++)
{
	 // On prend une des phrases au hasard dans le sous tableau dans le but de construire la phrase
	 // Math.floor(Math.random()*pipotron[i].length)
     phrase += pipotron[i][Math.floor(Math.random()*pipotron[i].length)]+' ';
}
// Vérifiez avec un console.log que votre phrase est correcte
console.log(phrase);
// On regarde si il y a le caractere # dans notre chaine
let pos = phrase.indexOf('#');

// si il y a le caractere # dans notre chaine (*** != -1)
if(pos != -1)
{
	// récupérer le caractere apres le # et l'espace (pos+2 à pos+3)
	let char = phrase.substring(pos+2,pos+3);
    // si c'est une voyelle
    if(char == 'a' || char == 'e'|| char == 'é' || char == 'i' || char == 'o' || char == 'u' || char == 'y') 
	//if(char.match(/[aeéiouy]/i))
    {
    	// on remplace # et l'espace par une apostrophe ' (phrase.replace("# ", "'"))
        phrase = phrase.replace("# ", "'");
    } 
    // sinon c'est une consonne
    else
    {
    	// on remplace # par un e (phrase.replace("#", "e"))
        phrase = phrase.replace("#", "e");
    }
}
// On affiche notre phrase pipotron dans le document
document.write(phrase);
