<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; style-src 'self' 'https://fonts.googleapis.com'; font-src 'https://fonts.gstatic.com'; img-src 'self' data:">
    <title>Portfolio de Gabriel Dos Santos</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="Image/Logo.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class=" relative" id="header">
        <nav class="shadow-bandeau">
          <a href="https://gdsnts.ovh/">
            <img class="logo white-filter-logo" src="Image/Logo.png" alt="logo"
          /></a>
          <ul>
            <li><a href="https://gdsnts.ovh/">Accueil</a></li>
            <li><a href="#AboutMe">About Me</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#Contact">Contact</a></li>
          </ul>
        </nav>
        <div class="PhotodeMoi">
          <img
            class="pictureofme"
            src="Image/profil-transformed.png"
            alt="Me"
          />
        </div>
        <div class="TextePresentation">
          <p class="italic">
            Administrateur Système et Réseaux - Cybersécurité
          </p>
          <h1 id="accroche">
            Hey, je suis
            <span
              class="marron hover-3"
              a
              href="https://www.linkedin.com/in/gabriel-dos-santos-59363b224/"
              >Gabriel</span
            >
            <br />
            voici mon portfolio
          </h1>
          <h3>
            Actuellement en Prépa Mastère Cybersécurité et data, je suis un
            passionné par le domaine du numérique que ça soit le jeux vidéos,
            l'industrie du cinéma ou encore les nouvelles technologies. <br />Je
            suis constamment en quête de nouvelles connaissances et de défis
            stimulants
          </h3>
        </div>
      </div>
    </header>
    <main>
      <!-- AboutMe -->
      <section id="AboutMe" class="shadow">
        <div class="row">
          <div class="colonne1">
            <h1 class="AboutMeTitre">About Me</h1>
            <div id="scolarité" class="onglet displayed" data-anim="1">
              <h2>Scorlarité</h2>
            </div>
            <div id="softskills" data-anim="2" class="onglet">
              <h2>Softskills</h2>
            </div>
            <div id="hardskills" class="onglet" data-anim="3">
              <h2>Hardskills</h2>
            </div>

            <div class="contenu displayedContenu" data-anim="1">
              <h2>IPSSI</h2>
              <h3>
                Prepa Mastère cybersécu. & data décembre 2023 - novembre 2024
              </h3>
              <p>
                Cybersécurité - Administrateur Réseaux et Sécurité -
                Développement Web Fullstack - Data Analytics
              </p>

              <h2>Université Paris 1 Panthéon-Sorbonne</h2>
              <h3>
                Licence Sciences de gestion, Parcours Stratégie & Economie
                d’Entreprise
              </h3>
              <p>Gestion d’entreprise - Comptabilité - Statistique - Droit</p>

              <h2>Lycée Dorian</h2>
              <h3>Filière scientifique</h3>
              <p>Mathématique - Physique - Svt</p>

              <h2>Lycée Fénelon Sainte-Marie</h2>
              <h3>Diplôme de portugais</h3>
              <p>Histoire - Portugais</p>
            </div>

            <div class="contenu" data-anim="2">
              <h2>- Discipline</h2>
              <h2>- Rigeur</h2>
              <h2>- Travail d'équipe</h2>
              <h2>- Motiver</h2>
              <h2>- Curieux</h2>
              <h2>- Résilient</h2>
            </div>

            <div class="contenu flex" data-anim="3">
              <div class="secu flex">
                <h2>Sécurité, réseau et télécom 🔒🌐</h2>
                <p>Wireshark</p>
                <p>Cryptographie - Fondamentaux</p>
                <p>Reverse engineering</p>
                <p>OWASP</p>
                <p>reverse engineering</p>
                <p>Cisco</p>
                <p>AWS - Architecture Cloud Computing</p>
                <p>AZURE – Déploiement de service Cloud</p>
                <p>Conteneurisation LXC et Docker</p>
                <p>Windows Server</p>
                <p>Virtualisation</p>
                <p>Virtualisation en cluster avec PROXMOX</p>
                <p>Linux</p>
              </div>
              <div class="secu flex" data-anim="3">
                <h2>Dev Fullstack 🐍💻</h2>
                <p>HTML/CSS</p>
                <p>JavaScript</p>
                <p>Python</p>
                <p>PHP</p>
                <p>SQL</p>
                <p>Node.js</p>
              </div>
            </div>
          </div>
          <div class="colonne2">
            <img id="AboutMePicture" src="Image/AboutMe.jpg" alt="AboutMe" />
          </div>
        </div>
      </section>
      <!-- Fin about me -->
      <!-- Portfolio -->
      <section id="Portfolio" class="shadow">
        <h1 class="Portfolio_titre">Projets</h1>
        <div class="slider-container slider-1">
          <div class="slider">
            <div class="FirstSlide Slide">
              <img class="projet1" src="Image/Projet 1.PNG" alt="" />
              <h2 class="textport">Portfolio</h2>
            </div>
            <div class="SecondSlide Slide">
              <a href="/Projets/Projet_Proxmox.pdf" download=""
                ><img class="projet2" src="Image/Proxmox.jpeg" alt=""
              /></a>
              <h2 class="textport">Infrastructure Proxmox</h2>
            </div>
            <div class="ThirdSlide Slide">
              <a href="/Projets/Projet_API.pdf" download=""
                ><img class="projet3" src="Image/API.png" alt=""
              /></a>
              <h2 class="textport">API sécurisée</h2>
            </div>
            <div class="FirstSlide Slide">
              <img class="projet1" src="Image/Projet 1.PNG" alt="" />
              <h2 class="textport">Portfolio</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Portfolio -->
      <!-- Contact  -->
      <section id="Contact" class="shadow">
        <form class="container shadow" method="post" action=Sender\send-mail.php>
          <div class="row-titre">
            <h1 id="Contact-Titre">Contact</h1>
          </div>
       
          <div class="row">
           
          </div>
          <div class="row input-container">
            <div class="col-xs-12">
              <div class="styled-input wide">
                <input type="text" name="nom" required />
                <label>Votre Nom</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="styled-input">
                <input type="text" name="mail" required />
                <label>Email</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="styled-input" style="float: right">
                <input type="text" name="tel" required />
                <label>Téléphone</label>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="styled-input wide">
                <textarea name="message" required></textarea>
                <label>Votre Message 😁 </label>
              </div>
            </div>
            <button class="custom-btn btn-5" type="submit" id="Send">
              Envoyer <span class="first"></span>
              <span class="second"></span>
              <span class="third"></span>
              <span class="fourth"></span>
            </button>
          </div>
        </form>
        <!-- Social Media Button -->
      </section>
    </main>
    <footer>
      <section id="Medias" >
        <div class="container-medias shadow-bandeau">
          <div class="center" >
            <a  class="center" href="https://www.linkedin.com/in/gabriel-dos-santos-59363b224/"><img  class="media1 white-filter" src="Image/Linkedin.png" alt=""></a>
          </div>
          <div class="center">
            <a  class="center" href="https://github.com/Gabtorinho25"> <img class="media2 white-filter" src="Image/git.png" alt=""></a>
          </div>
          <div class="center">
            <a  class="center" href="https://www.instagram.com/gabtorinhomamn?igsh=MXExemY5amhvMnpnZg%3D%3D&utm_source=qr"><img class="media3 white-filter" src="Image/insta.png" alt=""></a>
          </div></a>
        </div>

      </section>
    </footer>
    <script src="js\script.js"></script>
  </body>
</html>

