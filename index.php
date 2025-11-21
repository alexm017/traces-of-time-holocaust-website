<?php
session_start();

/* — simple visitor log — */
$rec = fopen('/var/www/html/record_index.txt','a');
$ua   = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$ip   = $_SERVER['REMOTE_ADDR']     ?? 'unknown';
$time = date('m/d/Y h:i:s a',time());
fwrite($rec,"index\n");
fwrite($rec,"index $ua $ip $time\n");
fclose($rec);
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Urmele Timpului – Holocaust</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/holocaust-logo.ico">
</head>
<body>
  <noscript>Trebuie să activați JavaScript pentru a vizualiza acest site.</noscript>

  <!-- ───────── HEADER ───────── -->
  <header class="header">
    <a href="/" class="brand">Urmele&nbsp;Timpului</a>

    <nav class="nav">
      <?php if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!=='userLoggedIn'): ?>
        <a class="btn" href="register">Creează cont</a>
        <a class="btn" href="login">Intră în cont</a>
      <?php else: ?>
        <a class="btn" href="profile">Salutare,&nbsp;<?= htmlspecialchars($_SESSION['teamname']) ?>!</a>
        <img src="assets/images/user3.png" alt="profil" style="width:2.2rem;border-radius:50%">
      <?php endif; ?>

      <a class="btn" href="holocaust">Holocaust</a>
      <a class="btn" href="filme">Filme&nbsp;🎥</a>
      <a class="btn" href="carti">Cărți&nbsp;📚</a>
      <a class="btn" href="harta">Hartă&nbsp;📍</a>
    </nav>
  </header>

  <!-- ───────── HERO ───────── -->
  <section class="hero">
    <div>
      <h1>Urmele Timpului – Călătorie în memoria Holocaustului</h1>
      <p>„Urmele Timpului” este un monument digital dedicat comemorării Holocaustului. Descoperă poveștile de curaj și reziliență care ne îndeamnă să nu uităm niciodată.</p>
      <a class="btn" href="holocaust">Citește mai multe</a>
    </div>
  </section>
  <div class="scroll-indicator" aria-hidden="true"></div>

  <!-- ───────── INFO SECTION ───────── -->
  <section class="fpage">
    <div class="fpage-inner">
      <div class="flow">
        <p>Holocaustul, cunoscut și sub numele de Shoah, a fost un genocid sistematic comis de regimul nazist între 1941 și 1945. În această perioadă, regimul condus de Adolf Hitler a implementat politici de excludere și exterminare, vizând în special populația evreiască, dar și alte grupuri considerate „inferioare”.</p>

        <p>Inițial, evreii și celelalte grupuri țintă au fost marginalizate și forțate să trăiască în ghetoane. Situația s-a agravat odată cu instaurarea lagărelor de concentrare; ulterior, în lagărele de exterminare, milioane de oameni au fost uciși în mod sistematic.</p>
      </div>

      <div class="flow">
<div class="featured-pair">
  <figure class="featured-img">
    <img src="assets/images/fimage-holocaust.jpg"
         alt="Ghetoul din Varșovia, 1942" loading="lazy">
    <figcaption>
      Ghetoul din Varșovia (1942) – imagine de arhivă care surprinde
      condițiile dure de viață înaintea deportărilor în masă.
    </figcaption>
  </figure>

  <figure class="featured-img">
    <img src="assets/images/simage-holocaust.jpeg"
         alt="Supraviețuitori eliberați, 1945" loading="lazy">
    <figcaption>
      Supraviețuitori eliberați la sfârșitul războiului (1945) –
      chipuri marcate de suferință și speranță.
    </figcaption>
  </figure>
</div>


      </div>
    </div>
  </section>

  <!-- ───────── CONTACT ───────── -->
  <section class="contact" id="contact">
    <div class="contact-wrapper">
      <!-- form -->
      <form class="contact-form" action="index.php" method="post">
        <h2 style="margin:0;font:var(--step-1) var(--ff-base)">Trimite-ne un mesaj</h2>

        <input  type="text"   name="name"     placeholder="Nume"            required>
        <input  type="email"  name="email"    placeholder="Adresa&nbsp;E-mail" required>
        <input  type="text"   name="subject"  placeholder="Subiect"         required>
        <textarea name="message"              placeholder="Mesaj"           required></textarea>

        <button class="btn" type="submit">Trimite</button>
      </form>

      <!-- info & map -->
      <div class="contact-info flow">
        <h3>Detalii de contact</h3>
        <p>E-mail: <a href="mailto:support@urmeletimpului.ro">support@urmeletimpului.ro</a></p>
        <p>Adresă: Petroșani, Str.&nbsp;1&nbsp;Decembrie&nbsp;1918&nbsp;7, Romania</p>

        <div class="mapouter">
          <iframe class="gmap_iframe" frameborder="0"
                  src="https://maps.google.com/maps?hl=ro&amp;q=Strada%201%20Decembrie%201918%207%2C%20Petro%C8%99ani&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                  aria-label="Locația Urmele Timpului"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ───────── FOOTER ───────── -->
  <footer class="footer">
    <ul class="social-list">
      <li><a class="fa fa-linkedin"  href="#" aria-label="LinkedIn"></a></li>
      <li><a class="fa fa-facebook"  href="#" aria-label="Facebook"></a></li>
      <li><a class="fa fa-youtube"   href="#" aria-label="YouTube"></a></li>
      <li><a class="fa fa-instagram" href="#" aria-label="Instagram"></a></li>
    </ul>
    <p style="margin:0">&copy; 2025 Urmele Timpului – Holocaust. Toate drepturile rezervate.</p>
  </footer>
</body>
</html>
