<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saffraan &amp; Sahara – Den Haag</title>
  <link rel="stylesheet" href="style.css" />
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
          src="eten1.png"
          alt="Authentiek Midden-Oosters gerecht met rijst en vlees"
        />
      </figure>
      <article class="hero-tekst">
        <h1>Authentieke smaken van het Midden-Oosten, vers geserveerd in Den Haag</h1>
        <nav class="cta-knoppen" aria-label="Actieknoppen">
          <a href="#" class="knop knop-primair">Zie onze menu</a>
          <a href="#" class="knop knop-secundair">Reserveren</a>
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
      <figure class="special-afbeelding">
        <img
          src="mixedgrill.png"
          alt="Mixed Grill – Selectie van gegrild lamsvlees en kipkebab"
        />
      </figure>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="script.js"></script>
</body>
</html>