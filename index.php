<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saffraan &amp; Sahara - Den Haag</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap" rel="stylesheet" />
</head>
<body>
  <?php include 'components/header.php'; ?>

  <main>
    <section class="hero-sectie volledig-scherm" id="sectie-hero">
      <figure class="achtergrond-afbeelding">
        <img
          src="pictures/eten1.png"
          alt="Authentiek Midden-Oosters gerecht met rijst en vlees"
        />
      </figure>
      <article class="hero-tekst">
        <h1>Authentieke smaken van het Midden-Oosten, vers geserveerd in Den Haag</h1>
        <nav class="cta-knoppen" aria-label="Actieknoppen">
          <a href="menu.php" class="knop knop-primair">Zie onze menu</a>
          <a href="reseveren.php" class="knop knop-secundair">Reserveren</a>
        </nav>
      </article>
    </section>

    <section class="sfeer-sectie volledig-scherm" id="sectie-sfeer">
      <figure class="achtergrond-afbeelding">
        <img
          src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&q=80"
          alt="Sfeervol restaurant interieur met Midden-Oosterse decoratie"
        />
      </figure>
      <article class="sfeer-tekst">
        <h2>Beleef de sfeer van<br />het Midden-Oosten<br />in ons restaurant</h2>
      </article>
    </section>

    <section class="special-sectie" id="sectie-special">
      <header class="special-header">
        <p class="special-label">Chef's Special</p>
        <h2 class="mixed-grill-titel"><em>Mixed Grill</em></h2>
        <p class="special-beschrijving">
          Selectie van gegrild <em>lamsvlees</em>, <em>kipkebab</em>,<br />
          geserveerd met rijst en gegrilde groenten
        </p>
      </header>
      <div class="slideshow" role="region" aria-label="Gerechten diavoorstelling">
        <ul class="slideshow-lijst">
          <li class="slide actief">
            <figure>
              <img src="pictures/cous-cous.png" alt="Couscous met groenten en gekruid vlees" />
              <figcaption>Couscous</figcaption>
            </figure>
          </li>
          <li class="slide">
            <figure>
              <img src="pictures/kofte.png" alt="Köfte – gekruide gehaktballetjes van lam" />
              <figcaption>Köfte</figcaption>
            </figure>
          </li>
          <li class="slide">
            <figure>
              <img src="pictures/Mansaf.png" alt="Mansaf – Jordaans feestgerecht van lam met rijst en yoghurtsaus" />
              <figcaption>Mansaf</figcaption>
            </figure>
          </li>
          <li class="slide">
            <figure>
              <img src="pictures/mezzel-star.png" alt="Mezzel Star – selectie van mezze-hapjes" />
              <figcaption>Mezzel Star</figcaption>
            </figure>
          </li>
        </ul>
        <button class="slide-knop slide-knop-vorig" aria-label="Vorig gerecht">&#8249;</button>
        <button class="slide-knop slide-knop-volgend" aria-label="Volgend gerecht">&#8250;</button>
        <ol class="slide-stippen" aria-label="Gerecht navigatie">
          <li><button class="stip actief" aria-label="Dia 1" aria-current="true"></button></li>
          <li><button class="stip" aria-label="Dia 2"></button></li>
          <li><button class="stip" aria-label="Dia 3"></button></li>
          <li><button class="stip" aria-label="Dia 4"></button></li>
        </ol>
      </div>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="script/script.js"></script>
</body>
</html>
