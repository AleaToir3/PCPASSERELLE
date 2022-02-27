let ici = document.querySelector('.ici');
// let txt = ['Bonjour Je Suis la '];
// let a = 0 ;
//     setInterval(()=>{
    //     // ici.innerHTML += txt[0][i];
    
    //     console.log(txt[0].length)
    //     if(a == txt[0].length ){
        //         a = 0;
        //     }
        //     ici.innerHTML += txt[0][a];
        //     a++;
        
        // },200)
        
        
        
let txt = '  Bonjour Je Suis la ';
let i = 0;
function write(){
    if(i==txt.length){
         i = 0
         ici.innerHTML = '';  
    }
    ici.innerHTML += txt[i];
    i++;
}
setInterval(write,100)

