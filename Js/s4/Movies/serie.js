
let params = new URLSearchParams(document.location.search);
let id = params.get("id")
let listCB = document.getElementById('listCB');


// https://api.themoviedb.org/3/tv/${id}?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr




window.fetch('https://api.themoviedb.org/3/tv/'+id+'?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr')
.then((httpResponse)=>{return httpResponse.json()})
.then((result)=>{
    // console.log(result.seasons)


    result.seasons.forEach(e => {

        listCB.innerHTML += `
        <button class="btn btn-light mb-2" id="saisson" type="button" data-toggle="collapse" data-target="#s${e.season_number}"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> 
        ${e.name} </button>
        <div class="collapse navbar-collapse black" id="s${e.season_number}">
            <ul class="navbar-nav mr-auto">
               
                    <li class="nav-item active">
                        <input class="form-check-input" type="checkbox" id="toi" name="toi">
                        <label class="form-check-label" for="toi">EPISODE 01</label>      
                    <li class="nav-item">  
                
            </ul>
        </div>
`
let btnsaisson = document.querySelectorAll('#btnsaisson')
    
});


})



// https://api.themoviedb.org/3/tv/1402/season/0?api_key=3d036b0952aafe04795e01bae549bb8a&language=fr


