let txt = document.querySelector('.div')
let btn = document.querySelector('button')
let bye = document.querySelectorAll('.backPopUp, .popup, .iconClosePopUp')
let popUp = document.querySelectorAll('.popup')

 btn.addEventListener('click',()=>{

bye.forEach(e => {
    e.classList.remove('bye')
});
 })

//  popUp.forEach(e=>{
//  e.addEventListener('click',()=>{
//     bye.classList.add('bye')
//  })

//  })

 popUp[0].addEventListener('click',()=>{
    bye.forEach(e => {
        e.classList.add('bye');
    });


})