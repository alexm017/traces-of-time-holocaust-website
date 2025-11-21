<?php
session_start();
$log=fopen('/var/www/html/record_index.txt','a');
fprintf($log,"filme %s %s %s\n",$_SERVER['HTTP_USER_AGENT']??'ua',$_SERVER['REMOTE_ADDR']??'ip',date('m/d/Y h:i:s a'));
fclose($log);
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
</head>
<body>
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

  <!-- ───────── BANNER ───────── -->
  <section class="page-banner"><h1>Descoperă Holocaustul prin Cinematografie 🎥</h1></section>

  <!-- ───────── LAYOUT ───────── -->
  <div class="layout">
    <!-- sidebar -->
    <aside class="sidebar flow" style="--flow-space:.5rem">
      <h2 style="margin:0;font:var(--step-1) var(--ff-base)">Lista filme</h2>
      <a href="https://www.imdb.com/title/tt5208252/">Operation Finale</a>
      <a href="https://www.netflix.com/ro/title/70101375">Băiatul în pijamale cu dungi</a>
      <a href="https://www.netflix.com/ro-en/title/81248111">My Best Friend Anne Frank</a>
      <a href="https://www.netflix.com/ro-en/title/80191608">The Photographer of Mauthausen</a>
      <a href="https://www.disneyplus.com/ro-ro/movies/hotul-de-carti/7dJKkukpeNRw">Hoțul de cărți</a>
      <a href="https://www.imdb.com/title/tt0174852/">The Last Days</a>
      <a href="https://www.imdb.com/title/tt0191182/">Hitler: A Career</a>
      <a href="https://www.netflix.com/title/60036359">Schindler's List</a>
      <a href="https://sitefilme.com/online/12918/">Viața e frumoasă</a>
      <a href="https://www.imdb.com/title/tt0253474/">Pianistul</a>
      <a href="https://www.youtube.com/watch?v=fmPZnNCTb2k">Evadarea din Sobibor</a>
      <a href="https://www.imdb.com/title/tt3808342/">Son of Saul</a>
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
            <a class="btn" href="https://www.disneyplus.com/ro-ro/movies/hotul-de-carti/7dJKkukpeNRw" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 2 -->
        <article class="card">
          <img src="assets/images/film2.jpeg" alt="Operation Finale" loading="lazy">
          <div class="card-content">
            <h3>Operation Finale</h3>
            <p>Misiunea agenților israelieni de a-l captura pe Adolf Eichmann.</p>
            <a class="btn" href="https://www.imdb.com/title/tt5208252/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 3 -->
        <article class="card">
          <img src="assets/images/film3.jpg" alt="Băiatul în pijamale cu dungi" loading="lazy">
          <div class="card-content">
            <h3>Băiatul în pijamale cu dungi</h3>
            <p>Prieteniile inocente dezvăluie cruzimea războiului.</p>
            <a class="btn" href="https://www.netflix.com/ro/title/70101375" target="_blank">Vizionează</a>
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
            <a class="btn" href="https://www.netflix.com/ro-en/title/81248111" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 6 -->
        <article class="card">
          <img src="assets/images/film6.jpeg" alt="The Photographer of Mauthausen" loading="lazy">
          <div class="card-content">
            <h3>The Photographer of Mauthausen</h3>
            <p>Povestea fotografului care a documentat ororile lagărului.</p>
            <a class="btn" href="https://www.netflix.com/ro-en/title/80191608" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 7 -->
        <article class="card">
          <img src="assets/images/film7.jpeg" alt="Hitler: A Career" loading="lazy">
          <div class="card-content">
            <h3>Hitler: A Career</h3>
            <p>Ascensiunea lui Hitler și tehnicile de manipulare politică.</p>
            <a class="btn" href="https://www.imdb.com/title/tt0191182/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 8 -->
        <article class="card">
          <img src="assets/images/film8.jpg" alt="Schindler's List" loading="lazy">
          <div class="card-content">
            <h3>Schindler's List</h3>
            <p>Povestea industrialistului care a salvat sute de vieți evreiești.</p>
            <a class="btn" href="https://www.netflix.com/title/60036359" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 9 -->
        <article class="card">
          <img src="assets/images/film9.jpg" alt="Viața e frumoasă" loading="lazy">
          <div class="card-content">
            <h3>Viața e frumoasă</h3>
            <p>Iubire și imaginație într-un lagăr de concentrare.</p>
            <a class="btn" href="https://sitefilme.com/online/12918/" target="_blank">Vizionează</a>
          </div>
        </article>
        <!-- 10 -->
        <article class="card">
          <img src="assets/images/film10.jpg" alt="Pianistul" loading="lazy">
          <div class="card-content">
            <h3>Pianistul</h3>
            <p>Supraviețuirea unui pianist evreu în Varșovia.</p>
            <a class="btn" href="https://www.imdb.com/title/tt0253474/" target="_blank">Vizionează</a>
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
            <a class="btn" href="https://www.imdb.com/title/tt3808342/" target="_blank">Vizionează</a>
          </div>
        </article>
      </div>
    </main>
  </div>

  <!-- ───────── FOOTER ───────── -->
  <footer class="footer">
    <ul class="social-list">
      <li><a class="fa fa-linkedin"  href="#" aria-label="LinkedIn"></a></li>
      <li><a class="fa fa-facebook"  href="#" aria-label="Facebook"></a></li>
      <li><a class="fa fa-youtube"   href="#" aria-label="YouTube"></a></li>
      <li><a class="fa fa-instagram" href="#" aria-label="Instagram"></a></li>
    </ul>
    <p style="margin:0">&copy; 2025&nbsp;Urmele Timpului – Holocaust. Toate drepturile rezervate.</p>
  </footer>
</body>
</html>

