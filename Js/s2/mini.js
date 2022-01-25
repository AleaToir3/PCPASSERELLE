let tableaux = [" PS5", "Nintendo","Mac"];

bodya = document.querySelector('body');

bodya.innerHTML = "<p> bonjour </p>";

bodya.innerHTML += "<ul></ul>";
ftab = document.querySelector('ul');
for (let index = 0; index < tableaux.length; index++) {
    ftab.innerHTML += ` <li> 
                        <label for="${tableaux[index]}"></label>
                        <input type="checkbox" name="${tableaux[index]}"> ${tableaux[index]} 
                        </li>`;    
}

bodya.innerHTML += `
<div>
    <input type="checkbox" name="scales">
    <label for="scales">Scales</label>
</div>
<br>

`;

let aaa = document.querySelector("input")
aaa.addEventListener("change",function(e){
console.log(e.target.checked)
})
