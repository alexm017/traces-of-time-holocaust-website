<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Urmele Timpului – Holocaust</title>

  <link rel="stylesheet" href="/assets/css/style.css?v=2">
  <link rel="stylesheet" href="/assets/css/chat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/images/holocaust-logo.ico">
</head>

<body>
  <noscript>Trebuie să activați JavaScript pentru a vizualiza acest site.</noscript>

  <!-- ───────── HEADER ───────── -->
  <header class="header">
    <a href="/" class="brand">Urmele&nbsp;Timpului</a>

    <nav class="nav-center">
      <a class="btn" href="holocaust">Holocaust</a>
      <a class="btn" href="filme">Filme&nbsp;</a>
      <a class="btn" href="carti">Cărți&nbsp;</a>
      <a class="btn" href="harta">Hartă&nbsp;</a>
    </nav>

    <div class="nav-right">
      <?php if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== 'userLoggedIn'): ?>
        <a class="btn" href="register">Creează cont</a>
        <a class="btn" href="login">Intră în cont</a>
      <?php else: ?>
        <a class="btn" href="profile">Salutare,&nbsp;<?= htmlspecialchars($_SESSION['teamname']) ?>!</a>
        <img src="/assets/images/user3.png" alt="profil" style="width:2.2rem;border-radius:50%">
      <?php endif; ?>
    </div>
  </header>

  <!-- ───────── HERO ───────── -->
  <section class="hero">
    <div>
      <h1>Urmele Timpului – Călătorie în memoria Holocaustului</h1>
      <p>„Urmele Timpului” este un monument digital dedicat comemorării Holocaustului. Descoperă poveștile de curaj și
        reziliență care ne îndeamnă să nu uităm niciodată.</p>
      <a class="btn" href="holocaust">Citește mai multe</a>
    </div>
    <div class="scroll-indicator" aria-hidden="true"></div>
  </section>

  <!-- ───────── INFO SECTION ───────── -->
  <section class="fpage">
    <div class="fpage-inner info-grid">
      <!-- Row 1: Text Left, Image Right -->
      <div class="info-row">
        <div class="info-text flow">
          <h2>Ce înseamnă Holocaustul?</h2>
          <p>Termenul „Holocaust” provine din grecescul „holokauston”, care înseamnă „ardere completă”. Acesta
            desemnează genocidul sistematic, sponsorizat de stat, al a aproximativ șase milioane de evrei de către
            regimul nazist și colaboratorii săi.</p>
          <p>Persecuția nu s-a oprit doar la evrei; romii, persoanele cu dizabilități, prizonierii de război sovietici
            și alte grupuri au fost, de asemenea, victime ale acestei campanii de ură și exterminare.</p>
        </div>
        <div class="info-image">
          <img src="/assets/images/fimage-holocaust.jpg" alt="Ghetoul din Varșovia" loading="lazy" class="clamp-img">
        </div>
      </div>

      <!-- Row 2: Image Left, Text Right -->
      <div class="info-row reverse">
        <div class="info-image">
          <img src="/assets/images/simage-holocaust.jpeg" alt="Supraviețuitori" loading="lazy" class="clamp-img">
        </div>
        <div class="info-text flow">
          <h2>Știați că?</h2>
          <p>În ciuda ororilor, au existat numeroase acte de rezistență. Nu doar revolte armate, precum cea din Ghetoul
            Varșoviei, ci și rezistență spirituală și culturală: s-au ținut jurnale, s-a creat artă și s-au păstrat
            tradițiile religioase în secret.</p>
          <p>Aceste acte de curaj ne amintesc că demnitatea umană poate supraviețui chiar și în cele mai întunecate
            circumstanțe.</p>
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

        <input type="text" name="name" placeholder="Nume" required>
        <input type="email" name="email" placeholder="Adresa&nbsp;E-mail" required>
        <input type="text" name="subject" placeholder="Subiect" required>
        <textarea name="message" placeholder="Mesaj" required></textarea>

        <button class="btn" style="background-color: white;" type="submit">Trimite</button>
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
      <li><a class="fab fa-linkedin" href="#" aria-label="LinkedIn"></a></li>
      <li><a class="fab fa-facebook" href="#" aria-label="Facebook"></a></li>
      <li><a class="fab fa-youtube" href="#" aria-label="YouTube"></a></li>
      <li><a class="fab fa-instagram" href="#" aria-label="Instagram"></a></li>
    </ul>
    <p style="margin:0; color: #d1d1d1ff;">&copy; 2025 Urmele Timpului – Holocaust. Toate drepturile rezervate.</p>
  </footer>

  <!-- Chat Widget -->
  <div id="chat-bubble" class="chat-bubble">
    Psst... vrei să încerci Asistentul AI?
  </div>
  <button id="chat-toggle-btn" class="chat-toggle-btn" aria-label="Deschide Chat AI">
    <i class="fas fa-comment-dots"></i>
  </button>

  <div id="chat-window" class="chat-window">
    <div class="chat-header">
      <h3>Asistent Virtual</h3>
      <button id="chat-close-btn" class="chat-close-btn" aria-label="Închide Chat">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div id="chat-messages" class="chat-messages">
      <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria
        Holocaustului?</div>
      <div id="typing-indicator" class="typing-indicator">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>
    </div>
    <div class="chat-input-area">
      <input type="text" id="chat-input" placeholder="Scrie un mesaj...">
      <button id="chat-send-btn" class="chat-send-btn" aria-label="Trimite">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
  </div>

  <script src="/assets/js/chat.js"></script>
</body>

</html>