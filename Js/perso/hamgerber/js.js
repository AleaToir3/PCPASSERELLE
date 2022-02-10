let btn = document.querySelector('button');
let nav = document.querySelector('nav');

btn.addEventListener('click',()=>{
    nav.classList.toggle('viz');
    btn.classList.toggle('btnviz');
})