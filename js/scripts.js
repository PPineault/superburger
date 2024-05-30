document.addEventListener("DOMContentLoaded", function () {
  // Gestion du menu de navigation
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  const closeMenu = () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  };

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    });

    // Gérer l'ouverture et la fermeture des sous-menus au clic
    const navItems = document.querySelectorAll(".nav-item");

    navItems.forEach((navItem) => {
      const subMenu = navItem.querySelector(".sub-menu");

      if (subMenu) {
        navItem.addEventListener("click", (event) => {
          event.stopPropagation();

          subMenu.classList.toggle("active");
        });
      }
    });

    // Fermer le menu lorsque vous cliquez sur un lien
    const links = document.querySelectorAll(".nav-menu a");
    links.forEach((link) => {
      link.addEventListener("click", closeMenu);
    });

    // Gérer les changements d'orientation de l'appareil
    window.addEventListener("orientationchange", closeMenu);

    // Gérer l'ouverture et la fermeture des sous-menus au clic sur le bouton
    const subMenuButtons = document.querySelectorAll(".sub-menu-toggle");
    subMenuButtons.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.stopPropagation();
        const subMenu = button.nextElementSibling;
        subMenu.classList.toggle("active");
      });
    });

    var mainLink = document.querySelector(".nav-link");
    var subMenu = document.querySelector(".sub-menu");

    mainLink.addEventListener("click", function (event) {
      subMenu.classList.toggle("active");
    });

    // Fermer le menu lorsque l'utilisateur fait défiler la page
    window.addEventListener("scroll", closeMenu);
  }
});

window.onload = function () {
  if (window.location.href.endsWith("info.php")) {
    var map = L.map("map").setView([45.53477882050772, -73.90141410137653], 13);
    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
      maxZoom: 19,
      attribution:
        '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);
    var marker = L.marker([45.53477882050772, -73.90141410137653]).addTo(map);

    // Fonctionnalité du bouton plein écran de la carte
    var fsControl = L.control.fullscreen();
    map.addControl(fsControl);

    map.on("enterFullscreen", function () {
      if (window.console) window.console.log("enterFullscreen");
    });
    map.on("exitFullscreen", function () {
      if (window.console) window.console.log("exitFullscreen");
    });
  }
  //le slider
  if (window.location.href.endsWith("galerie.php")) {
    const carouselContainer = document.getElementById("imageCarousel");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const slides = carouselContainer.querySelectorAll(".slide");

    // Choix d'un index aléatoire au chargement de la page
    let currentIndex = Math.floor(Math.random() * slides.length);

    function displayCurrentSlide() {
      slides.forEach((slide, index) => {
        slide.classList.remove("active");
        slide.classList.remove("fade-in");
      });
      slides[currentIndex].classList.add("active");
      slides[currentIndex].classList.add("fade-in");
    }

    let autoScroll; // Variable pour stocker l'ID de l'intervalle de défilement automatique

    function startAutoScroll() {
      // Arrête le défilement automatique actuel, s'il existe
      if (autoScroll) {
        clearInterval(autoScroll);
      }

      // Démarre un nouveau défilement automatique
      autoScroll = setInterval(() => {
        slides[currentIndex].classList.add("fade-out");
        currentIndex = Math.floor(Math.random() * slides.length); // Choix d'un index aléatoire
        displayCurrentSlide();
      }, 5000); // défilement automatique à 5 secondes
    }

    prevBtn.addEventListener("click", () => {
      slides[currentIndex].classList.add("fade-out");
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      displayCurrentSlide();
      startAutoScroll(); // Redémarre le défilement automatique
    });

    nextBtn.addEventListener("click", () => {
      slides[currentIndex].classList.add("fade-out");
      currentIndex = (currentIndex + 1) % slides.length;
      displayCurrentSlide();
      startAutoScroll(); // Redémarre le défilement automatique
    });

    // Ajout de la transition automatique
    startAutoScroll(); // Démarre le défilement automatique

    displayCurrentSlide();
  }
};

// Bouton remonter en haut
var backToTopBtn = document.getElementById("backToTopBtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

backToTopBtn.addEventListener("click", function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

//gestion du smooth et faire fonctionner lien avec id surtout pour mobile
window.addEventListener("load", function () {
  function scrollToAnchor(aid) {
    var aTag = document.querySelector(aid);
    if (aTag) {
      var yCoordinate = aTag.getBoundingClientRect().top + window.scrollY;
      var yOffset = -20;
      window.scrollTo({
        top: yCoordinate + yOffset,
        behavior: "smooth",
      });
    }
  }

  if (location.hash) {
    setTimeout(function () {
      scrollToAnchor(location.hash);
    }, 100);
  }
});
