let dates = new Date();
let hours = dates.getHours();
let minutes =  dates.getMinutes();
let secondes = dates.getSeconds();

let smallHand = document.querySelector('.petiteaiguille');
let bigHand = document.querySelector('.grandeaiguille');
let secondHand = document.querySelector('.trotteuse');

smallHand.style.transform = "translate3d(-50%,-50%,0)rotate(90deg)"

let start = ()=>{
    setInterval(() => {
    dates = new Date();
    secondHand.style.transform = `translate3d(-50%,-50%,0)rotate(${(6*dates.getSeconds())}deg)`;
    smallHand.style.transform = `translate3d(-50%,-50%,0)rotate(${(30*dates.getHours())}deg)`;
    bigHand.style.transform = `translate3d(-50%,-50%,0)rotate(${(6*dates.getMinutes())}deg)`;
    }, 1000);
}
start();
// 360 / 60 = 6
// 360 / 12 = 6
// 360 / 60 = 6