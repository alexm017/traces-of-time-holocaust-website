<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Urmele Timpului - Holocaust</title>
	<link rel="stylesheet" href="/assets/css/model_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/holocaust-logo.ico" />
  <link rel="stylesheet" href="/assets/css/chat.css">
</head>

<body>
	<div class="background-container">
		<div class="alphabit-topleft">
			<a href="/">Urmele Timpului</a>
		</div>
		<div class="ai-star-logo">
			<img src="/assets/images/holocaust-logo.png" width=35>
		</div>


		<div class="rbox">
			<?php
			session_start();
			if ($_SESSION["loggedIn"] == "userLoggedIn") {
				echo '<div class="profile-text"><a href="/profile">Profile</a></div>';
				echo '<div class="alphabit-profile-teamname-pic"><a href="/profile"><img src="assets/images/user3.png" width=45></a></div>';
			}
			?>
			<div class="blur-line"></div>
			<div class="title">Interviu Salamon Golda</div>
			<div class="text-container">
				<div class="ftext"><b class="bc">Salamon Golda</b> este o personalitate remarcabilă în domeniul istoriei
					și al educației despre Holocaust, dedicându-și viața conservării memoriei victimelor și promovării
					unei înțelegeri profunde a tragediei umane din timpul celui de-Al Doilea Război Mondial. Originar
					dintr-o comunitate cu rădăcini adânci evreiești, Salamon a trăit și a fost martor la efectele
					devastatoare ale persecuției, experiență care l-a motivat să se implice activ în proiecte de
					cercetare și în inițiative educaționale dedicate memoriei Holocaustului.</div>

				<video width="800" height="480" controls style="border-radius: 20px;">
					<source src="/assets/images/salamon.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

				<div class="stext">Cu o vastă experiență în domeniul istoric și o pasiune de neegalat pentru adevăr și
					justiție, Salamon Golda a colaborat cu numeroase instituții academice și organizații internaționale
					pentru a documenta mărturii, a analiza surse istorice și a crea materiale educaționale accesibile
					publicului larg. Prin cercetările sale riguroase și implicarea personală, el a reușit să scoată la
					iveală detalii esențiale despre mecanismele ideologice și sociale care au condus la genocid,
					contribuind la o mai bună înțelegere a fenomenului Holocaustului.</div>

				<div class="stext">Activitatea sa nu se rezumă doar la domeniul academic – Salamon Golda este, de
					asemenea, un comunicator de excepție. Prin prelegeri, interviuri și conferințe, el reușește să
					transforme evenimentele istorice într-o narațiune captivantă, care nu doar informează, ci și
					emoționează și inspiră audiența să reflecteze asupra responsabilității colective în fața
					intoleranței și a urii. Prin munca sa, el subliniază importanța educației despre trecut ca mijloc de
					prevenire a repetării unor asemenea atrocități în viitor.</div>

				<div class="stext">În plus, Salamon Golda se implică activ în proiecte de memorializare, participând la
					organizarea de expoziții, crearea de arhive digitale și colaborarea cu centre de cercetare dedicate
					istoriei evreiești. Totodată, el militează pentru ca mărturiile supraviețuitorilor să nu fie uitate
					și ca lecțiile dureroase ale Holocaustului să rămână un avertisment viu pentru generațiile viitoare.
				</div>
				<div class="stext">În cadrul interviului ce urmează, veți avea ocazia să descoperiți perspective unice
					și detalii inedite despre activitatea și viziunea lui Salamon Golda, o voce autentică care
					transformă cunoașterea istorică într-un instrument esențial pentru construirea unui viitor bazat pe
					toleranță, respect și dreptate.</div>
				<div class="endLine"></div>
				<div class="end"></div>
			</div>
		</div>

		<div class="docs-container">
			<div class="setup">Holocaust</div>
			<div class="sub-section"><a href="/ascensiune">Ascensiunea Partidului Nazist</a></div>
			<div class="sub-section"><a href="/persecutie">Persecuția nazistă a evreilor</a></div>
			<div class="sub-section"><a href="/kindertransport">Kindertransport și refugiații</a></div>
			<div class="sub-section"><a href="/deportari">Ghetourile și deportările</a></div>
			<div class="sub-section"><a href="/einsatzgruppen">Einsatzgruppen</a></div>
			<div class="sub-section"><a href="/lagare">Lagărele de concentrare și exterminare</a></div>
			<div class="sub-section"><a href="/rezistenta">Rezistența și salvatorii</a></div>
			<div class="sub-section"><a href="/marsuri">Marșurile morții și eliberarea</a></div>
			<div class="sub-section"><a href="/reconstruirea">Reconstruirea vieților</a></div>
			<div class="sub-section"><a href="/dreptatea">Căutarea dreptății</a></div>
			<div class="sub-section"><a href="/holocaustastazi">Holocaustul astăzi</a></div>

			<div class="docsLine"></div>

			<div class="setup">Interviuri Despre Holocaust</div>
			<div class="sub-section"><a href="/vasileszekely">Vasile Szekely</a></div>
			<div class="sub-section">
				<p style="color: #c67171;">Salamon Golda</p>
			</div>

			<div class="docsLine"></div>
			<div class="setup">Test Interactiv</div>
			<div class="sub-section"><a href="/test_holocaust">Test din Holocaust</a></div>
		</div>
	</div>

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