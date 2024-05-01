
// Animation AboutMe //


// On sélectionne tous les onglets
const onglets = document.querySelectorAll('.onglet'); 
// On sélectionne tous les contenus
const contenu = document.querySelectorAll('.contenu');

let index = 0

onglets.forEach(onglet => {

    onglet.addEventListener('click', () => {

        if(onglet.classList.contains('active')) {
            return
        }
    })

})