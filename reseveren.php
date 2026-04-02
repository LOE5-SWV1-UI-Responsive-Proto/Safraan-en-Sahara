<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ontdek de authentieke smaken van het Midden-Oosten bij Saffraan & Sahara in Den Haag. Geniet van traditionele gerechten, een warme sfeer en uitstekende service. Reserveer nu!" />
  <meta name="keywords" content="Midden-Oosters restaurant, Den Haag, authentieke gerechten, Saffraan & Sahara, menu, reserveren" />
  <meta name="author" content="Ehsaan Ahmad" />
  <title>Saffraan &amp; Sahara - Den Haag</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap" rel="stylesheet" />
</head>
<body>
  <?php include 'components/header.php'; ?>


  <main class="reserveren-pagina">

    <section class="reserveren-sectie">
      <header class="reserveren-kop">
        <h1>Reserveren</h1>
        <p class="reserveren-intro">
          U bent van harte welkom om bij ons binnen te lopen voor een gezellige maaltijd. Wilt u zeker zijn van een tafel? Reserveer dan vooraf bij ons restaurant.
        </p>
      </header>

      
      <form class="reserveren-formulier" action="#" method="post">
      
        <p class="formulier-veld">
          <label for="voornaam">Voornaam</label>
          <input type="text" id="voornaam" name="voornaam" />
        </p>

        <p class="formulier-veld">
          <label for="achternaam">Achternaam</label>
          <input type="text" id="achternaam" name="achternaam" />
        </p>

        <p class="formulier-veld">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" />
        </p>

       
        <p class="formulier-veld">
          <label for="datum">Datum</label>
          <input type="date" id="datum" name="datum" />
        </p>

        <p class="formulier-veld">
          <label for="telefoon">Telefoonnummer</label>
          <input type="tel" id="telefoon" name="telefoon" />
        </p>

        <p class="formulier-veld">
          <label for="mensen">Mensen</label>
          <select id="mensen" name="mensen">
            <option value="">kies een optie</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </p>

        <p class="formulier-veld formulier-veld-breed">
          <label for="tijd">Tijd</label>
          <input type="time" id="tijd" name="tijd" />
        </p>

        <p class="formulier-veld formulier-veld-breed">
          <label for="bericht">Bericht (allergieën)</label>
          <textarea id="bericht" name="bericht" rows="4"></textarea>
        </p>

        
        <button type="submit" class="knop knop-primair reserveren-knop">versturen</button>
      </form>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="script/script.js"></script>
</body>
</html>
