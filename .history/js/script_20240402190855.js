// Animation AboutMe //

// On sélectionne tous les onglets
const onglets = document.querySelectorAll(".onglet");
// On sélectionne tous les contenus
const contenu = document.querySelectorAll(".contenu");

let index = 0;

//On fait une boucle où on parcour tous les éléments du tableau onglets
//chaque élément prenne la variable 'onglet'
onglets.forEach((onglet) => {
    //a chaque fois qu'on clique on vérifie sur l
  onglet.addEventListener("click", () => {
    if (onglet.classList.contains("displayed")) {
      return;
    } else {
      onglet.classList.add("displayed");
    }
    index = onglet.getAttribute("data-anim");
    console.log(index);

    for (i = 0; i < onglets.length; i++) {
      if (onglets[i].getAttribute("data-anim") != index) {
        onglets[i].classList.remove("displayed");
      }
    }

    for (j = 0; j < contenu.length; j++) {
      if (contenu[j].getAttribute("data-anim") == index) {
        contenu[j].classList.add("displayedContenu");
      } else {
        contenu[j].classList.remove("displayedContenu");
      }
    }
  });
});
