
let params = new URLSearchParams(document.location.search);
let id = params.get("id")
let listCB = document.getElementById('listCB');
let btnsaisson;
let i = 0;
let desc = document.querySelector('.description')
let img = document.querySelector('.imgserie')
let tabSave = [] 
if(window.localStorage.getItem('viewEpisode')==''){
    
}




if(window.localStorage.getItem('popo') == null){
        console.log('y a qlqc')
}else{
    console.log('bout')

}

// https://api.themoviedb.org/3/tv/${id}?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr




window.fetch('https://api.themoviedb.org/3/tv/'+id+'?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr')
.then((httpResponse)=>{return httpResponse.json()})
.then((result)=>{
// DESCRIPTION
// DESCRIPTION
// DESCRIPTION
// console.log(result)
img.innerHTML = ` <img src="https://image.tmdb.org/t/p/w500/${result.poster_path}" class="bd-placeholder-img card-img-top" alt="" aria-label="Placeholder: Thumbnail">  `


desc.innerHTML += `
<h1> ${result.name}</h1>
`
result.genres.forEach(e => {
    desc.innerHTML += `
    <p>${e.name}</p>
    `
});

// CREACTION DE LA SAISSON
// CREACTION DE LA SAISSON
// CREACTION DE LA SAISSON
    result.seasons.forEach(e => {
    //  console.log(i)

        listCB.innerHTML += `
        <button class="btn btn-light mb-2 saisson" id="saisson" type="button" data-toggle="collapse" data-target="#${e.id}" data-saisson="${i}"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> 
        ${e.name} </button>
        <div class="collapse navbar-collapse black" id="${e.id}">
            <ul class="navbar-nav mr-auto" id="ul${i}">                 
            </ul>
        </div>
`
i++;
// CREACTION DES EPISODES
// CREACTION DES EPISODES
// CREACTION DES EPISODES
addEpisode();
});

function addEpisode() {
    btnsaisson = document.querySelectorAll('.saisson')
    btnsaisson.forEach(e=>{
    e.addEventListener('click',()=>{
        let idsaisson = e.dataset.saisson;
        let ul = document.getElementById('ul'+idsaisson)
        ul.innerHTML = ""
        // console.log(ul)
        // console.log(idsaisson)

 
        window.fetch('https://api.themoviedb.org/3/tv/'+id+'/season/'+idsaisson+'?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr')
        .then((httpResponse)=>{return httpResponse.json()})
        .then((result)=>{

            // console.log(result)

            result.episodes.forEach(e => {
                let ul = document.getElementById('ul'+idsaisson)
                ul.innerHTML += `        
                <li class="nav-item active">
                    <input class="form-check-input" type="checkbox" id="${e.id}" name="${e.id}">
                    <label class="form-check-label" for="${e.id}">EPISODE${e.episode_number} ${e.name}</label>      
                <li class="nav-item"> 
                `
            });
                let episode = document.querySelectorAll('.form-check-input')
                console.log(episode)
                episode.forEach(e=>{
                    e.addEventListener('click',()=>{
                        if(e.checked) {
                            tabSave.push(e.id)
                        }
                        else {
                            tabSave.splice(tabSave.indexOf(e.id),1);
                        }
                        localStorage.setItem(tabSave,'viewEpisode');

                    })                   
                })
        })
    })
})  
}


})

