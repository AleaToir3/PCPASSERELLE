let toast = document.getElementById('toast');
let btn = document.querySelector('button');

btn.addEventListener('click',()=>{
let div = document.createElement('div')
div.classList.add('toast')
div.innerHTML = "Je suis relou !!"
})
