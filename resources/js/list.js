// salleLink.addEventListener("click", function() {
//     fetch("sal.html")
//         .then(response => response.text())
//         .then(data => {
           
//             var contentDiv = document.querySelector(".main-content");
            
//             contentDiv.innerHTML = data;
            
//         })
//         .catch(error => {
//             console.error('Erreur ', error);
//         });
//         });

// ensglink.addEventListener("click", function() {
//     fetch("Enseignant.html")
//         .then(response => response.text())
//         .then(data => {
           
//             var contentDiv = document.querySelector(".main-content");
            
//             contentDiv.innerHTML = data;
            
//         })
//         .catch(error => {
//             console.error('Erreur ', error);
//         });
//         });

//  homeLink.addEventListener("click", function() {
//     fetch("home.html")
//         .then(response => response.text())
//         .then(data => {
           
//             var contentDiv = document.querySelector(".main-content");
            
//             contentDiv.innerHTML = data;
            
//         })
//         .catch(error => {
//             console.error('Erreur l', error);
//         });
//         });

//         seclink.addEventListener("click", function() {
//             fetch("secritaire.html")
//                 .then(response => response.text())
//                 .then(data => {
                   
//                     var contentDiv = document.querySelector(".main-content");
                    
//                     contentDiv.innerHTML = data;
                    
//                 })
//                 .catch(error => {
//                     console.error('Erreur ', error);
//                 });
//                 });
    
//         modulelink.addEventListener("click", function() {
//             fetch("module.html")
//                 .then(response => response.text())
//                 .then(data => {
                   
//                     var contentDiv = document.querySelector(".main-content");
                    
//                     contentDiv.innerHTML = data;
                    
//                 })
//                 .catch(error => {
//                     console.error('Erreur ', error);
//                 });
//                 });

//         filierelink.addEventListener("click",function(){
//                     fetch("filiere.html")
//                     .then(response => response.text())
//                     .then(data => {
                       
//                         var contentDiv = document.querySelector(".main-content");
                        
//                         contentDiv.innerHTML = data;
                        
//                     })
//                     .catch(error => {
//                         console.error('Erreur ', error);
//                     });
//                 });
                
//                 dispoLink.addEventListener("click", function() {
//                     fetch("dispo.html")
//                         .then(response => response.text())
//                         .then(data => {
                           
//                             var contentDiv = document.querySelector(".main-content");
                            
//                             contentDiv.innerHTML = data;
                            
//                         })
//                         .catch(error => {
//                             console.error('Erreur ', error);
//                         });
//                         });
                

//  document.addEventListener("DOMContentLoaded", function() {
//             fetch("{{ route('filiere') }}")
//                 .then(response => response.text())
//                 .then(data => {
//                     var contentDiv = document.querySelector(".main-content");
//                     contentDiv.innerHTML = data;
    
//                     // Ajouter le gestionnaire d'événements pour le filtre de cycle
//                     const cycleFilter = document.getElementById('cycleFilter');
//                     const tableRows = document.querySelectorAll('tbody tr');
    
//                     cycleFilter.addEventListener('change', function() {
//                         const filterValue = this.value;
//                         tableRows.forEach(row => {
//                             const cycle = row.children[1].textContent.trim();
//                             if (filterValue === "" || cycle === filterValue) {
//                                 row.style.display = "";
//                             } else {
//                                 row.style.display = "none";
//                             }
//                         });
//                     });
//                 })
//                 .catch(error => {
//                     console.error('Erreur ', error);
//                 });
//         });
// dispoLink.addEventListener("click", function() {
//     fetch("dispo.html")
//         .then(response => response.text())
//         .then(data => {
//             var contentDiv = document.querySelector(".main-content");
//             contentDiv.innerHTML = data;

//             // Ajouter le gestionnaire d'événements pour le filtre de nom d'enseignant
//             const nomFilter = document.getElementById('nomFilter');
//             const tableRows = document.querySelectorAll('tbody tr');

//             nomFilter.addEventListener('change', function() {
//                 const filterValue = this.value;
//                 tableRows.forEach(row => {
//                     const nom = row.children[0].textContent.trim();
//                     if (filterValue === "" || nom === filterValue) {
//                         row.style.display = "";
//                     } else {
//                         row.style.display = "none";
//                     }
//                 });
//             });
//         })
//         .catch(error => {
//             console.error('Erreur ', error);
//         });
// });
