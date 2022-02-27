// ----------------- MA COORECTION  -------
let users = window.fetch('https://jsonplaceholder.typicode.com/users')
let ul = document.querySelector('#todo-list') ;
users = [];
window.fetch('https://jsonplaceholder.typicode.com/todos')
   .then(function(httpResponse)
    {
        return httpResponse.json();
    })
    .then(function(results) 
    {
    results.forEach(e => {
        ul.innerHTML += `<li data-id="${e.userId}"> 
        <h2>Titre : ${e.title}</h2>
        <p> Status : ${e.completed ? 'En cour':'Fini'} </p>
                                `
    });
});
let allo = window.fetch('https://jsonplaceholder.typicode.com/users')
    .then(function(httpResponse)
    {
        return httpResponse.json();
    })
    .then(function(results) // results = les données JSON, grâce au httpResponse.
    {
        let li = document.querySelectorAll('li')    // Le tableau des utilisateurs
    li.forEach(lie => {
        let allo = lie
        results.forEach(user => {
            if(user.id== lie.dataset.id){
                let paraUser = document.createElement("p");
                lie.innerHTML += `
                <p>Name : ${user.name}</p>
                <p>Username : ${user.username} </p>
                <p>email : ${user.email} </p>
                </li>
                `
             }
        });
    });
});


// // ------- RE FAIRE AVEC L APERCU DU CORRIGER ---------
// let ul = document.querySelector('#todo-list') ;
// let todos = [];
// let users = [];
// // on fait un apel dans un apel pour etre sur que TOUTES les donnees soit vue dans l'ordre
// window.fetch('https://jsonplaceholder.typicode.com/users')
//     .then(function(httpResponse)
//     {
//         return httpResponse.json();
//     })
//     .then(function(results) // results = les données JSON, grâce au httpResponse.
//     {
//     users = results

//         window.fetch('https://jsonplaceholder.typicode.com/todos')
//         .then(function(httpResponse)
//         {
//             return httpResponse.json();
//         })
//         .then(function(results) // results = les données JSON, grâce au httpResponse.
//         {
//             todos = results
            
//             users.forEach(eUsers => {
//                 ul.innerHTML += '<ul><li>'+eUsers.name
//                 todos.forEach(eTodos=>{
//                     if(eTodos.userId == eUsers.id){
//                         ul.innerHTML += '<ul><li>'+ eTodos.title +'</li>' 
//                     }
//                     ul.innerHTML += '</li></ul>'

//                 });
//             });
//         console.log('PHASE1',users)
//         console.log('PHASE2',todos)
//         });
//     });
//     <ul> 
//         <li>Abdel
//             <ul>
//                 <li>carotte</li>
//                 <li>carotte</li>
//                 <li>carotte</li>
//             </ul>
//         </li>
//         <li>jalim</li>
//         <li>toto</li>
//     </ul>