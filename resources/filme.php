<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Filme • Urmele Timpului</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="assets/images/holocaust-logo.ico">
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
    <h1>Descoperă Holocaustul prin Cinematografie</h1>
  </section>

  <!-- ───────── LAYOUT ───────── -->
  <div class="layout">
    <!-- sidebar -->
    <aside class="sidebar flow" style="--flow-space:.5rem">
      <h2 style="margin:0;font:var(--step-1) var(--ff-base)">Lista filme</h2>
      <a href="https://filmehd.to/filme/operation-finale-2018/">Operation Finale</a>
      <a href="https://www.divxonline.ro/filme/the-boy-in-the-striped-pajamas-7618-851904/">Băiatul în pijamale cu
        dungi</a>
      <a href="https://filmehd.to/filme/my-best-friend-anne-frank-2021/">My Best Friend Anne Frank</a>
      <a href="https://filmehd.to/filme/the-photographer-of-mauthausen-2018/">The Photographer of
        Mauthausen</a>
      <a href="https://www.disneyplus.com/ro-ro/movies/hotul-de-carti/7dJKkukpeNRw">Hoțul de cărți</a>
      <a href="https://www.imdb.com/title/tt0174852/">The Last Days</a>
      <a href="https://filmehd.to/filme/hitler-a-career-1977/">Hitler: A Career</a>
      <a href="https://filmehd.to/filme/schindlers-list-1993/">Schindler's List</a>
      <a href="https://www.divxonline.ro/filme/la-vita-e-bella-1997-viata-e-frumoasa-3043-859150/">Viața e frumoasă</a>
      <a href="https://www.divxonline.ro/filme/the-pianist-2002-pianistul-5390-812856/">Pianistul</a>
      <a href="https://www.youtube.com/watch?v=fmPZnNCTb2k">Evadarea din Sobibor</a>
      <a href="https://filmehd.to/filme/son-of-saul-2015/">Son of Saul</a>
    </aside>

    <!-- content -->
    <main>
      <div class="card-grid">
        <!-- 1 -->
        <article class="card">
          <img src="assets/images/film1.png" alt="Hoțul de cărți" loading="lazy">
          <div class="card-content">
            <h3>Hoțul de cărți</h3>
            <p>Tânără care descoperă puterea cuvintelor în timpul războiului.</p>
            <a class="btn" href="https://www.disneyplus.com/ro-ro/movies/hotul-de-carti/7dJKkukpeNRw"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 2 -->
        <article class="card">
          <img src="assets/images/film2.jpeg" alt="Operation Finale" loading="lazy">
          <div class="card-content">
            <h3>Operation Finale</h3>
            <p>Misiunea agenților israelieni de a-l captura pe Adolf Eichmann.</p>
            <a class="btn" href="https://filmehd.to/filme/operation-finale-2018/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 3 -->
        <article class="card">
          <img src="assets/images/film3.jpg" alt="Băiatul în pijamale cu dungi" loading="lazy">
          <div class="card-content">
            <h3>Băiatul în pijamale cu dungi</h3>
            <p>Prieteniile inocente dezvăluie cruzimea războiului.</p>
            <a class="btn" href="https://www.divxonline.ro/filme/the-boy-in-the-striped-pajamas-7618-851904/"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 4 -->
        <article class="card">
          <img src="assets/images/film4.jpeg" alt="The Last Days" loading="lazy">
          <div class="card-content">
            <h3>The Last Days</h3>
            <p>Documentar despre ultimele clipe ale supraviețuitorilor.</p>
            <a class="btn" href="https://www.imdb.com/title/tt0174852/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 5 -->
        <article class="card">
          <img src="assets/images/film5.jpg" alt="My Best Friend Anne Frank" loading="lazy">
          <div class="card-content">
            <h3>My Best Friend Anne Frank</h3>
            <p>Impactul vieții Annei Frank asupra prietenei ei.</p>
            <a class="btn" href="https://filmehd.to/filme/my-best-friend-anne-frank-2021/"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 6 -->
        <article class="card">
          <img src="assets/images/film6.jpeg" alt="The Photographer of Mauthausen" loading="lazy">
          <div class="card-content">
            <h3>The Photographer of Mauthausen</h3>
            <p>Povestea fotografului care a documentat ororile lagărului.</p>
            <a class="btn" href="https://filmehd.to/filme/the-photographer-of-mauthausen-2018/"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 7 -->
        <article class="card">
          <img src="assets/images/film7.jpeg" alt="Hitler: A Career" loading="lazy">
          <div class="card-content">
            <h3>Hitler: A Career</h3>
            <p>Ascensiunea lui Hitler și tehnicile de manipulare politică.</p>
            <a class="btn" href="https://filmehd.to/filme/hitler-a-career-1977/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 8 -->
        <article class="card">
          <img src="assets/images/film8.jpg" alt="Schindler's List" loading="lazy">
          <div class="card-content">
            <h3>Schindler's List</h3>
            <p>Povestea industrialistului care a salvat sute de vieți evreiești.</p>
            <a class="btn" href="https://filmehd.to/filme/schindlers-list-1993/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 9 -->
        <article class="card">
          <img src="assets/images/film9.jpg" alt="Viața e frumoasă" loading="lazy">
          <div class="card-content">
            <h3>Viața e frumoasă</h3>
            <p>Iubire și imaginație într-un lagăr de concentrare.</p>
            <a class="btn" href="https://www.divxonline.ro/filme/la-vita-e-bella-1997-viata-e-frumoasa-3043-859150/"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 10 -->
        <article class="card">
          <img src="assets/images/film10.jpg" alt="Pianistul" loading="lazy">
          <div class="card-content">
            <h3>Pianistul</h3>
            <p>Supraviețuirea unui pianist evreu în Varșovia.</p>
            <a class="btn" href="https://www.divxonline.ro/filme/the-pianist-2002-pianistul-5390-812856/"
              target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 11 -->
        <article class="card">
          <img src="assets/images/film11.jpg" alt="Evadarea din Sobibor" loading="lazy">
          <div class="card-content">
            <h3>Evadarea din Sobibor</h3>
            <p>Povestea spectaculoasei evadări din Sobibor.</p>
            <a class="btn" href="https://www.youtube.com/watch?v=fmPZnNCTb2k" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 12 -->
        <article class="card">
          <img src="assets/images/film12.png" alt="Son of Saul" loading="lazy">
          <div class="card-content">
            <h3>Son of Saul</h3>
            <p>Perspectivă intensă asupra unui prizonier din Auschwitz.</p>
            <a class="btn" href="https://filmehd.to/filme/son-of-saul-2015/" target="_blank">Vizionează</a>
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