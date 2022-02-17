

let params = new URLSearchParams(document.location.search);
let id = params.get("id")
let listCB = document.getElementById('listCB');
let btnsaisson;
let i = 0;



// https://api.themoviedb.org/3/tv/${id}?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr




window.fetch('https://api.themoviedb.org/3/tv/'+id+'?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr')
.then((httpResponse)=>{return httpResponse.json()})
.then((result)=>{
    // console.log(result.seasons)

// CREACTION DE LA SAISSON
// CREACTION DE LA SAISSON
// CREACTION DE LA SAISSON
    result.seasons.forEach(e => {
    //  console.log(e)

        listCB.innerHTML += `
        <button class="btn btn-light mb-2 saisson" id="saisson" type="button" data-toggle="collapse" data-saisson="#${i}"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> 
        ${e.name} </button>
        <div class="collapse navbar-collapse black" id="${i}">
            <ul class="navbar-nav mr-auto">
               
                    <li class="nav-item active">
                        <input class="form-check-input" type="checkbox" id="${e.id}" name="${e.id}">
                        <label class="form-check-label" for="${e.id}">EPISODE 01</label>      
                    <li class="nav-item">  
                
            </ul>
        </div>
        
`
i++;
// CREACTION DES EPISODES
// CREACTION DES EPISODES
// CREACTION DES EPISODES

});
i=0;


btnsaisson = document.querySelectorAll('.saisson')
btnsaisson.forEach(e=>{
    e.addEventListener('click',()=>{
        let idsaisson = e.dataset.saisson.replace("#",'');
       
        // console.log(id)
        // console.log(idsaisson)

        window.fetch('https://api.themoviedb.org/3/tv/'+id+'/season/'+idsaisson+'?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr')
        .then((httpResponse)=>{return httpResponse.json()})
        .then((result)=>{

            // console.log(result)
        })




    })
})

})
// LES SAISSONS
// https://api.themoviedb.org/3/tv/1402/season/0?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr


// https://api.themoviedb.org/3/tv/1402/season/0?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr


 




       ul.innerHTML += `
        
        <li class="nav-item active">
        <input class="form-check-input" type="checkbox" id="${e.id}" name="${e.id}">
        <label class="form-check-label" for="${e.id}">EPISODE 
        ${e.episode_number} ${e.name}</label>      
    <li class="nav-item"> 
        `