let btn = document.querySelector("button");
let bobo = document.querySelector("body")
function rdm() {
   return  Math.floor(Math.random() * 250)
}


btn.addEventListener("click",()=>{
bobo.style.backgroundColor = `rgb(  ${rdm()},${rdm()},${rdm()}  )`
btn.style.top = ` ${Math.floor(Math.random() * (window.innerHeight/2))}px   `
btn.style.left = ` ${Math.floor(Math.random() * (window.innerWidth/2))}px   `
})


// Probleme rencontre durant ce tuto : 
// j'avais oublier que bobo.style.backgroundColor c'est du code Js et que le resulta     =     va etre renvoyer en HTML MAIIIS attention si c'est du Js faut le mettre entre ${}

// (window.innerHeight