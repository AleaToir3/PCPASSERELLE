let boutons = document.querySelectorAll('.btnSuppr');

for(let btn of boutons){
    btn.addEventListener('click', function(event){
        let cible = event.currentTarget;
        let id = cible.dataset.id;
        if(window.confirm('Etes vous sur de vouloir supprimer ?')){
            document.location.href = "suppression_cocktail.php?id=" + id;
        }
    })
}