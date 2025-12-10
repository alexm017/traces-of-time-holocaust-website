<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Cărți • Urmele Timpului</title>

  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="/assets/images/holocaust-logo.ico">
  <link rel="stylesheet" href="/assets/css/chat.css">
</head>

<body>
  <!-- ───────── HEADER ───────── -->
  <header class="header">
    <a href="/" class="brand">Urmele&nbsp;Timpului</a>

    <nav class="nav-center">
      <a class="btn" href="holocaust">Holocaust</a>
      <a class="btn" href="filme">Filme</a>
      <a class="btn" href="carti">Cărți</a>
      <a class="btn" href="harta">Hartă</a>
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

  <!-- ───────── BANNER ───────── -->
  <section class="page-banner">
    <h1>Cărți despre Holocaust &amp; Supraviețuire</h1>
  </section>

  <!-- ───────── LAYOUT ───────── -->
  <div class="layout">
    <!-- sidebar -->
    <aside class="sidebar flow" style="--flow-space:.5rem">
      <h2 style="margin:0;font:var(--step-1) var(--ff-base)">Lista cărți</h2>
      <a
        href="https://www.amazon.com/Anne-Frank-Diary-Young-Girl/dp/0553296981">1&nbsp;·&nbsp;Jurnalul&nbsp;Annei&nbsp;Frank</a>
      <a href="https://www.amazon.com/Night-Elie-Wiesel/dp/0374500015">2&nbsp;·&nbsp;Noaptea</a>
      <a href="https://www.amazon.com/If-This-Man-Primo-Levi/dp/0393300183">3&nbsp;·&nbsp;Dacă aceasta e o ființă
        umană</a>
      <a href="https://www.amazon.com/Maus-A-Survival-Story-Art-Spiegelman/dp/0394747235">4&nbsp;·&nbsp;Maus</a>
      <a
        href="https://www.amazon.com/Sunflower-History-Holocaust-Tragedy-Philosophy/dp/0312295330">5&nbsp;·&nbsp;Floarea-soarelui</a>
      <a href="https://www.amazon.com/Holocaust-New-History-Laurence-Rees/dp/071126221X">6&nbsp;·&nbsp;Holocaust: A
        History</a>
      <a href="https://www.amazon.com/Destruction-European-Jews-Raul-Hilberg/dp/0805210688">7&nbsp;·&nbsp;The
        Destruction of the European Jews</a>
      <a href="https://www.amazon.com/Reserve-Police-Battalion-Hitlers-Gas/dp/0674029170">8&nbsp;·&nbsp;Ordinary Men</a>
      <a href="https://www.amazon.com/Escape-Sobibor-Heroic-Story-Escaped/dp/0395318319">9&nbsp;·&nbsp;Escape from
        Sobibor</a>
      <a href="https://www.amazon.com/Schindlers-Ark-Thomas-Keneally/dp/0340936290">10&nbsp;·&nbsp;Schindler's List</a>
      <a href="https://www.goodreads.com/book/show/4069.Man_s_Search_for_Meaning">11&nbsp;·&nbsp;Man's Search for
        Meaning</a>
      <a href="https://www.amazon.com/Hiding-Place-Corrie-Ten-Boom/dp/0800794052">12&nbsp;·&nbsp;The Hiding Place</a>
    </aside>

    <!-- content -->
    <main>
      <div class="card-grid">
        <!-- 1 -->
        <article class="card">
          <img src="assets/images/jurnal.jpg" alt="Jurnalul Annei Frank" loading="lazy">
          <div class="card-content">
            <h3>Jurnalul Annei Frank</h3>
            <p><b>An</b>: 1947 <b>Autor</b>: Anne Frank</p>
            <p>Mărturie emoționantă a unei adolescente evreice ascunse de persecuția nazistă.</p>
            <a class="btn" href="https://www.amazon.com/Anne-Frank-Diary-Young-Girl/dp/0553296981"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 2 -->
        <article class="card">
          <img src="assets/images/night.jpg" alt="Noaptea – Elie Wiesel" loading="lazy">
          <div class="card-content">
            <h3>Noaptea</h3>
            <p><b>An</b>: 1960 <b>Autor</b>: Elie Wiesel</p>
            <p>Relatare intensă a suferinței și supraviețuirii în lagărele de concentrare.</p>
            <a class="btn" href="https://www.amazon.com/Night-Elie-Wiesel/dp/0374500015" target="_blank">Citește</a>
          </div>
        </article>
        <!-- 3 -->
        <article class="card">
          <img src="assets/images/primo.jpg" alt="Dacă aceasta e o ființă umană – Primo Levi" loading="lazy">
          <div class="card-content">
            <h3>Dacă aceasta e o ființă umană</h3>
            <p><b>An</b>: 1947 <b>Autor</b>: Primo Levi</p>
            <p>Document profund al experiențelor din Auschwitz.</p>
            <a class="btn" href="https://www.amazon.com/If-This-Man-Primo-Levi/dp/0393300183"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 4 -->
        <article class="card">
          <img src="assets/images/maus.jpg" alt="Maus – Art Spiegelman" loading="lazy">
          <div class="card-content">
            <h3>Maus</h3>
            <p><b>An</b>: 1991 <b>Autor</b>: Art Spiegelman</p>
            <p>Roman grafic inovator care ilustrează tragedia evreiască.</p>
            <a class="btn" href="https://www.amazon.com/Maus-A-Survival-Story-Art-Spiegelman/dp/0394747235"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 5 -->
        <article class="card">
          <img src="assets/images/sunflower.jpeg" alt="Floarea-soarelui – Simon Wiesenthal" loading="lazy">
          <div class="card-content">
            <h3>Floarea-soarelui</h3>
            <p><b>An</b>: 1998 <b>Autor</b>: Simon Wiesenthal</p>
            <p>Meditație asupra iertării în contextul atrocităților Holocaustului.</p>
            <a class="btn" href="https://www.amazon.com/Sunflower-History-Holocaust-Tragedy-Philosophy/dp/0312295330"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 6 -->
        <article class="card">
          <img src="assets/images/gilbert.jpg" alt="Holocaust: A History – Martin Gilbert" loading="lazy">
          <div class="card-content">
            <h3>Holocaust: A History</h3>
            <p><b>An</b>: 1986 <b>Autor</b>: Martin Gilbert</p>
            <p>Analiză detaliată a evenimentelor și consecințelor Holocaustului.</p>
            <a class="btn" href="https://www.amazon.com/Holocaust-New-History-Laurence-Rees/dp/071126221X"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 7 -->
        <article class="card">
          <img src="assets/images/raul.jpg" alt="The Destruction of the European Jews – Raul Hilberg" loading="lazy">
          <div class="card-content">
            <h3>The Destruction of the European Jews</h3>
            <p><b>An</b>: 1961 <b>Autor</b>: Raul Hilberg</p>
            <p>Analiză academică a politicilor de exterminare a evreilor.</p>
            <a class="btn" href="https://www.amazon.com/Destruction-European-Jews-Raul-Hilberg/dp/0805210688"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 8 -->
        <article class="card">
          <img src="assets/images/ordin.jpg" alt="Ordinary Men – Christopher Browning" loading="lazy">
          <div class="card-content">
            <h3>Ordinary Men</h3>
            <p><b>An</b>: 1992 <b>Autor</b>: Christopher R. Browning</p>
            <p>Studiu asupra rolului unui batalion de polițiști în genocid.</p>
            <a class="btn" href="https://www.amazon.com/Reserve-Police-Battalion-Hitlers-Gas/dp/0674029170"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 9 -->
        <article class="card">
          <img src="assets/images/sobibor.jpeg" alt="Escape from Sobibor – Richard Rashke" loading="lazy">
          <div class="card-content">
            <h3>Escape from Sobibor</h3>
            <p><b>An</b>: 1982 <b>Autor</b>: Richard Rashke</p>
            <p>Povestea evadării din lagărul de exterminare Sobibor.</p>
            <a class="btn" href="https://www.amazon.com/Escape-Sobibor-Heroic-Story-Escaped/dp/0395318319"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 10 -->
        <article class="card">
          <img src="assets/images/lista.webp" alt="Schindler's List – Thomas Keneally" loading="lazy">
          <div class="card-content">
            <h3>Schindler's List</h3>
            <p><b>An</b>: 1982 <b>Autor</b>: Thomas Keneally</p>
            <p>Povestea industrialistului care a salvat sute de vieți evreiești.</p>
            <a class="btn" href="https://www.amazon.com/Schindlers-Ark-Thomas-Keneally/dp/0340936290"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 11 -->
        <article class="card">
          <img src="assets/images/viktor.jpeg" alt="Man's Search for Meaning – Viktor Frankl" loading="lazy">
          <div class="card-content">
            <h3>Man's Search for Meaning</h3>
            <p><b>An</b>: 1946 <b>Autor</b>: Viktor E. Frankl</p>
            <p>Testament al rezilienței umane și găsirii sensului în suferință.</p>
            <a class="btn" href="https://www.goodreads.com/book/show/4069.Man_s_Search_for_Meaning"
              target="_blank">Citește</a>
          </div>
        </article>
        <!-- 12 -->
        <article class="card">
          <img src="assets/images/corrie.jpeg" alt="The Hiding Place – Corrie ten Boom" loading="lazy">
          <div class="card-content">
            <h3>The Hiding Place</h3>
            <p><b>An</b>: 1971 <b>Autor</b>: Corrie ten Boom</p>
            <p>Poveste inspirațională despre curajul de a salva vieți prin ascundere.</p>
            <a class="btn" href="https://www.amazon.com/Hiding-Place-Corrie-Ten-Boom/dp/0800794052"
              target="_blank">Citește</a>
          </div>
        </article>
      </div>
    </main>
  </div>

  <!-- ───────── FOOTER ───────── -->
  <footer class="footer">
    <ul class="social-list">
      <li><a class="fab fa-linkedin" href="#" aria-label="LinkedIn"></a></li>
      <li><a class="fab fa-facebook" href="#" aria-label="Facebook"></a></li>
      <li><a class="fab fa-youtube" href="#" aria-label="YouTube"></a></li>
      <li><a class="fab fa-instagram" href="#" aria-label="Instagram"></a></li>
    </ul>
    <p style="margin:0">&copy; 2025&nbsp;Urmele Timpului – Holocaust. Toate drepturile rezervate.</p>
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
      <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria Holocaustului?</div>
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