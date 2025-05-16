document.addEventListener("DOMContentLoaded", () => {

  menuGlass();

//   darkMode();

//   ocultarAlertaTemporal();

//   muestraCamposCondicionales();

});

function menuGlass() {
  const navbar = document.querySelector('header');

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (!entry.isIntersecting) {
        navbar.classList.add('header-bg');
      } else {
        navbar.classList.remove('header-bg');
      }
    }
  );

  observer.observe(document.querySelector('.scroll-trigger'));
}