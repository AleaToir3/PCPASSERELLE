

let ss = document.getElementById('recherche')
let tab = document.getElementById('tab')
let bb = document.querySelector('body');

ss.addEventListener('keyup',(e)=>{



    // ----------------------------------------------
    // ----------------- LES SERIES -----------------
    // ----------------------------------------------
    window.fetch('https://api.themoviedb.org/3/search/tv?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr&query='+e.target.value)
    .then((httpResponse)=>{
        return httpResponse.json();
    })
    .then((result)=>{
    result = result.results
        result.forEach(e => {
            tab.innerHTML += `
            <div class="col">
            <a href="serie.html?id=${e.id}">
                <div class="card shadow-sm">
                    <img src="https://image.tmdb.org/t/p/w500/${e.poster_path}" class="bd-placeholder-img card-img-top" width="175px" height="225" alt="" aria-label="Placeholder: Thumbnail">
                    <div class="card-body">
                    <h5 class="card-title">${e.name}</h5>
                        <p class="card-text" id="demo-1">${e.overview}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                               <button type="button" class="btn btn-sm btn-outline-secondary">+d'infos</button>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        `
    });
    
})
tab.innerHTML =""     
    
})


