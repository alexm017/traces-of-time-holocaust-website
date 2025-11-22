<?php
session_start();

/* log vizită */
$log=fopen('/var/www/html/record_index.txt','a');
fprintf($log,"harta %s %s %s\n",$_SERVER['HTTP_USER_AGENT']??'ua',$_SERVER['REMOTE_ADDR']??'ip',date('m/d/Y h:i:s a'));
fclose($log);
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Hartă • Urmele Timpului</title>

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
  <section class="page-banner"><h1>Hartă interactivă a Holocaustului 📍</h1></section>

  <!-- ───────── LAYOUT (sidebar + map) ───────── -->
  <div class="layout">

    <!-- Sidebar list -->
    <aside class="sidebar flow" style="--flow-space:.5rem">
      <h2 style="margin:0;font:var(--step-1) var(--ff-base)">Locații importante</h2>
      <?php
        $locs=[
          'Auschwitz-Birkenau','Treblinka','Sobibor','Bełżec','Chełmno','Majdanek',
          'Dachau','Buchenwald','Sachsenhausen','Neuengamme','Ravensbrück','Mauthausen-Gusen',
          'Theresienstadt','Kistarcsa','Babi Yar','Ninth Fort','Ponary','Rumbula',
          'Iași','Transnistria','Breendonk','Westerbork','Drancy','Pithiviers',
          'Beaune-la-Rolande','Fossoli di Carpi','Risiera di San Sabba','Salonic'
        ];
        $i=1;
        foreach($locs as $l){
          echo "<a href='#pin$i'>$i.&nbsp;$l</a>";
          $i++;
        }
      ?>
    </aside>

    <!-- Map & description -->
    <main class="flow">
      <div class="map-wrapper">
        <img src="assets/images/harta-europa.png" alt="Hartă Europa Holocaust">

<?php
/* coordonate (top%, left%) preluate din versiunea originală) */
$coords=[
  [54,54],[49,55.5],[51,56.5],[54,56.2],[48,53],[52.4,55.2],
  [58,48.75],[58,48.75],[54.5,46.75],[48,47.75],[47.5,49.5],[58,50.25],
  [53.25,50.45],[59,53.95],[53.25,61.25],[44,56.75],[44.45,57.85],[40,57.1],
  [61,59.25],[60,60.5],[52.25,43.85],[49,45.1],[57.25,42.55],[61,42.75],
  [59,42.25],[64,47.75],[64,50.25],[73,56]
];
for($i=0;$i<count($locs);$i++){
  [$t,$l]=$coords[$i];
  $name=htmlspecialchars($locs[$i]);
  $id="pin".($i+1);
  echo "<button id='$id' class='map-pin' style='top:$t%;left:$l%;' aria-label='$name'>".
       "<span class='tooltip'>$name</span></button>";
}
?>
      </div>

      <section class="flow" style="--flow-space:1rem">
        <p>Pe harta interactivă, fiecare pin marchează o locație-cheie din timpul Holocaustului – lagăre de exterminare, ghetouri, locuri ale masacrelor sau centre de deportare.</p>
        <p>Selectând un pin, poți vedea rapid numele sitului și îl poți găsi în lista din bara laterală pentru detalii suplimentare.</p>
        <p>Explorează pentru a înțelege amplitudinea geografică a tragediei și legăturile dintre aceste puncte ale memoriei colective.</p>
      </section>
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

