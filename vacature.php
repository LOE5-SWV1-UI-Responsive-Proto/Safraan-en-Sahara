<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bekijk de beschikbare vacatures bij Saffraan & Sahara in Den Haag." />
  <meta name="keywords" content="vacatures, restaurant, Den Haag, Saffraan & Sahara" />
  <meta name="author" content="Ehsaan Ahmad" />
  <title>Vacatures | Saffraan &amp; Sahara</title>
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
        <h1>Vacatures</h1>
        <p class="reserveren-intro">
          Word onderdeel van ons team, kom werken bij ons!
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


        <p class="formulier-veld">
          <label for="telefoon">Telefoonnummer</label>
          <input type="tel" id="telefoon" name="telefoon" />
        </p>

     

        <p class="formulier-veld formulier-veld-breed">
          <label for="bericht">Bericht en of motivatie</label>
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
