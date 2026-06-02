
(function () {
  const hamburgerKnop  = document.getElementById('hamburgerKnop');
  const hoofdNavigatie = document.getElementById('hoofdNavigatie');

  if (!hamburgerKnop || !hoofdNavigatie) return;

  function toggleMenu() {
    const isOpen = hoofdNavigatie.classList.toggle('open');
    hamburgerKnop.setAttribute('aria-expanded', String(isOpen));
    hoofdNavigatie.setAttribute('aria-hidden',   String(!isOpen));
    hamburgerKnop.classList.toggle('actief', isOpen);
    hamburgerKnop.innerHTML = isOpen ? '&#x2715;' : '&#9776;';
    hamburgerKnop.setAttribute('aria-label', isOpen ? 'Menu sluiten' : 'Menu openen');
  }

  function sluitMenu() {
    hoofdNavigatie.classList.remove('open');
    hamburgerKnop.setAttribute('aria-expanded', 'false');
    hoofdNavigatie.setAttribute('aria-hidden',   'true');
    hamburgerKnop.classList.remove('actief');
    hamburgerKnop.innerHTML = '&#9776;';
    hamburgerKnop.setAttribute('aria-label', 'Menu openen');
  }


  hamburgerKnop.addEventListener('click', toggleMenu);

  hoofdNavigatie.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', sluitMenu);
  });

  document.addEventListener('click', function (event) {
    const isBindenHeader = event.target.closest('.site-header');
    if (!isBindenHeader && hoofdNavigatie.classList.contains('open')) {
      sluitMenu();
    }
  });
//alleen voor het cgi!!!
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && hoofdNavigatie.classList.contains('open')) {
      sluitMenu();
      hamburgerKnop.focus();
    }
  });
  //einde alleen voor cgi
  

})();

// Menu pagina: dropdown openen en sluiten bij klikken op de menu-titels
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".menu-title");

  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      const content = button.nextElementSibling;
      content.classList.toggle("open");
    });
  });
});

// Tekstgrootte widget (menu pagina)
const knopVergroot = document.getElementById('tekstVergroot');
const knopVerklein = document.getElementById('tekstVerklein');

if (knopVergroot && knopVerklein) {
  const MIN_GROOTTE = 12;
  const MAX_GROOTTE = 24;
  const STAP = 2;

  function huidigeGrootte() {
    return parseInt(document.documentElement.style.fontSize) || 16;
  }

  function pasGrootteToe(grootte) {
    document.documentElement.style.fontSize = grootte + 'px';

    knopVergroot.disabled = grootte >= MAX_GROOTTE;
    knopVerklein.disabled = grootte <= MIN_GROOTTE;
  }

  knopVergroot.addEventListener('click', function () {
    pasGrootteToe(Math.min(huidigeGrootte() + STAP, MAX_GROOTTE));
  });

  knopVerklein.addEventListener('click', function () {
    pasGrootteToe(Math.max(huidigeGrootte() - STAP, MIN_GROOTTE));
  });
}

// Slideshow
(function () {

  document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    const stippen = document.querySelectorAll('.stip');
    const vorigKnop = document.querySelector('.slide-knop-vorig');
    const volgendKnop = document.querySelector('.slide-knop-volgend');

    let index = 0;

    if (!slides.length) return;

    function toonSlide(n) {
      slides.forEach(s => s.classList.remove('actief'));
      stippen.forEach(s => s.classList.remove('actief'));

      index = (n + slides.length) % slides.length;

      slides[index].classList.add('actief');
      stippen[index].classList.add('actief');
    }

    volgendKnop.addEventListener('click', () => toonSlide(index + 1));
    vorigKnop.addEventListener('click', () => toonSlide(index - 1));

    stippen.forEach((stip, i) => {
      stip.addEventListener('click', () => toonSlide(i));
    });
  });
})();