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
    dates = new Date().getSeconds();
    secondHand.style.transform = `translate3d(-50%,-50%,0)rotate(${(6*dates)}deg)`

    console.log(dates)

    }, 1000);
}
start();