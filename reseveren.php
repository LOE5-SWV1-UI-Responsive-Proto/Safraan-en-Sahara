<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Reserveer uw tafel bij Saffraan & Sahara in Den Haag." />
  <meta name="keywords" content="reserveren, restaurant, Den Haag, Saffraan & Sahara" />
  <meta name="author" content="Ehsaan Ahmad" />
  <title>Reserveren | Saffraan &amp; Sahara</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap" rel="stylesheet" />
</head>
<body>
  <?php include 'components/header.php'; ?>

  <!-- Hoofdinhoud van de reserverenpagina -->
  <main class="reserveren-pagina">
    <!-- Intro en formulier voor reserveringen -->
    <section class="reserveren-sectie">
      <header class="reserveren-kop">
        <h1>Reserveren</h1>
        <p class="reserveren-intro">
          U bent van harte welkom om bij ons binnen te lopen voor een gezellige maaltijd. Wilt u zeker zijn van een tafel? Reserveer dan vooraf bij ons restaurant.
        </p>
      </header>

      <!-- Reserveringsformulier -->
      <form class="reserveren-formulier" action="#" method="post">
        <!-- Persoonsgegevens -->
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

        <!-- Reserveringsgegevens -->
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

        <!-- Verzenden van het formulier -->
        <button type="submit" class="knop knop-primair reserveren-knop">versturen</button>
      </form>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="script/script.js"></script>
</body>
</html>
