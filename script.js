/**
 * Saffraan & Sahara – script.js
 * Functionaliteit: Hamburger Menu (mobiel & tablet)
 */

(function () {
  'use strict';

  // Elementen van het mobiele menu ophalen
  const hamburgerKnop  = document.getElementById('hamburgerKnop');
  const hoofdNavigatie = document.getElementById('hoofdNavigatie');

  // Stop als de header niet op de pagina staat
  if (!hamburgerKnop || !hoofdNavigatie) return;

  // Menu open- en dichtzetten via de hamburgerknop
  function toggleMenu() {
    const isOpen = hoofdNavigatie.classList.toggle('open');
    hamburgerKnop.setAttribute('aria-expanded', String(isOpen));
    hoofdNavigatie.setAttribute('aria-hidden',   String(!isOpen));
    hamburgerKnop.classList.toggle('actief', isOpen);
    hamburgerKnop.innerHTML = isOpen ? '&#x2715;' : '&#9776;';
    hamburgerKnop.setAttribute('aria-label', isOpen ? 'Menu sluiten' : 'Menu openen');
  }

  // Menu altijd netjes sluiten en resetten
  function sluitMenu() {
    hoofdNavigatie.classList.remove('open');
    hamburgerKnop.setAttribute('aria-expanded', 'false');
    hoofdNavigatie.setAttribute('aria-hidden',   'true');
    hamburgerKnop.classList.remove('actief');
    hamburgerKnop.innerHTML = '&#9776;';
    hamburgerKnop.setAttribute('aria-label', 'Menu openen');
  }

  // Hamburger knop klik
  hamburgerKnop.addEventListener('click', toggleMenu);

  // Menu sluiten bij klik op een link
  hoofdNavigatie.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', sluitMenu);
  });

  // Menu sluiten bij klik buiten de header
  document.addEventListener('click', function (event) {
    const isBindenHeader = event.target.closest('.site-header');
    if (!isBindenHeader && hoofdNavigatie.classList.contains('open')) {
      sluitMenu();
    }
  });

  // Menu sluiten met Escape-toets
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && hoofdNavigatie.classList.contains('open')) {
      sluitMenu();
      hamburgerKnop.focus();
    }
  });

  // Menu sluiten bij resize naar desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1024) {
      sluitMenu();
    }
  });

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
