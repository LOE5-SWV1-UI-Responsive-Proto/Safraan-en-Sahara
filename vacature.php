<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bekijk de vacatures van Saffraan & Sahara in Den Haag en solliciteer direct. Word onderdeel van ons team in de keuken, bediening of afwas." />
  <meta name="keywords" content="vacatures restaurant Den Haag, werken horeca, Saffraan & Sahara, bediening, keuken, solliciteren" />
  <meta name="author" content="Ehsaan Ahmad" />
  <title>Vacatures | Saffraan &amp; Sahara - Den Haag</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap" rel="stylesheet" />
</head>
<body>
  <?php include 'components/header.php'; ?>

  <section class="vacature-video-hero" aria-label="Vacature video">
    <video autoplay muted loop playsinline>
      <source src="pictures/Vacaturevideo_Saffraan_Sahara.mp4" type="video/mp4" />
      Je browser ondersteunt geen video.
    </video>
  </section>

  <main class="vacature-pagina vacature-content">
    <section class="vacature-sectie">
      <header class="vacature-kop">
        <h1>Vacatures</h1>
        <p class="vacature-intro">
          Lijkt het je leuk om in een warm en gastvrij restaurant te werken? Wij zoeken enthousiaste collega's voor de bediening, keuken en afwas.
        </p>
      </header>

      <section class="vacature-informatie" aria-label="Waarom werken bij ons">
        <article class="vacature-punt">
          <h2>Wat wij bieden</h2>
          <p>Een fijne werksfeer, afwisselend werk en een team waarin samenwerken centraal staat.</p>
        </article>

        <article class="vacature-punt">
          <h2>Wie wij zoeken</h2>
          <p>Iemand die gemotiveerd is, netjes werkt en vriendelijk omgaat met gasten en collega's.</p>
        </article>

        <article class="vacature-punt">
          <h2>Beschikbare rollen</h2>
          <p>Bediening, keukenhulp, afwas of allround horeca medewerker.</p>
        </article>
      </section>

      <!-- Sollicitatieformulier -->
      <form class="vacature-formulier" action="#" method="post">
        <p class="formulier-veld">
          <label for="voornaam">Voornaam</label>
          <input type="text" id="voornaam" name="voornaam" autocomplete="given-name" required />
        </p>

        <p class="formulier-veld">
          <label for="achternaam">Achternaam</label>
          <input type="text" id="achternaam" name="achternaam" autocomplete="family-name" required />
        </p>

        <p class="formulier-veld">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" autocomplete="email" required />
        </p>

        <p class="formulier-veld">
          <label for="telefoon">Telefoonnummer</label>
          <input type="tel" id="telefoon" name="telefoon" autocomplete="tel" required />
        </p>

        <p class="formulier-veld">
          <label for="functie">Functie</label>
          <select id="functie" name="functie" required>
            <option value="">kies een functie</option>
            <option value="bediening">Bediening</option>
            <option value="keukenhulp">Keukenhulp</option>
            <option value="afwas">Afwas</option>
            <option value="allround">Allround horeca medewerker</option>
          </select>
        </p>

        <p class="formulier-veld">
          <label for="beschikbaar">Beschikbaar vanaf</label>
          <input type="date" id="beschikbaar" name="beschikbaar" required />
        </p>

        <p class="formulier-veld formulier-veld-breed">
          <label for="motivatie">Motivatie</label>
          <textarea id="motivatie" name="motivatie" rows="4" placeholder="Vertel kort waarom je bij ons wilt werken." required></textarea>
        </p>

        <button type="submit" class="knop knop-primair vacature-knop">Solliciteren</button>
      </form>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="script/script.js"></script>
</body>
</html>
