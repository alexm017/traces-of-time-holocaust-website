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
				echo '<div class="alphabit-profile-teamname-pic"><a href="/profile"><img src="/assets/images/user3.png" width=45></a></div>';
			}
			?>
			<div class="blur-line"></div>
			<div class="title">Interviu Vasile Szekely</div>
			<div class="text-container">
				<div class="ftext"><b class="bc">Vasile Szekely</b> este o personalitate marcantă în domeniul istoriei
					și al cercetării Holocaustului, recunoscut pentru abordarea sa analitică și pasionată în
					documentarea unuia dintre cele mai întunecate capitole ale istoriei umane. Absolvent al unor
					prestigioase instituții academice, Szekely și-a dedicat cariera studierii aprofundate a
					evenimentelor din perioada celui de-Al Doilea Război Mondial, concentrându-se în special pe
					mecanismele ideologice și sociale care au dus la persecuția și exterminarea sistematică a evreilor.
				</div>

				<video width="800" height="480" controls style="border-radius: 20px;">
					<source src="/assets/images/Vasile.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>

				<div class="stext">Pe parcursul anilor, Vasile Szekely a colaborat cu numeroase instituții naționale și
					internaționale, participând la conferințe, seminarii și proiecte de cercetare ce au adus la lumină
					detalii esențiale despre regimul nazist și impactul devastator al Holocaustului asupra societății.
					Cu o abordare riguroasă, el a reușit să ofere publicului larg o perspectivă echilibrată, bazată pe
					documente autentice și mărturii directe, contribuind la educația și conștientizarea importanței
					memoriei istorice.</div>

				<div class="stext">În plus, Vasile Szekely se remarcă ca un comunicator de excepție, capabil să
					transforme faptele istorice în narațiuni captivante și accesibile. Prin interviurile și prelegerile
					sale, el inspiră audiența să reflecteze la lecțiile trecutului, subliniind responsabilitatea
					colectivă de a preveni repetarea atrocităților. Munca sa a devenit o punte de legătură între trecut
					și prezent, arătând cum cunoașterea istoriei poate influența pozitiv societatea de azi.</div>

				<div class="stext">În cadrul acestui interviu, veți avea ocazia să descoperiți detalii inedite despre
					activitatea și perspectivele lui Vasile Szekely, explorând modul în care experiența și cercetările
					sale contribuie la înțelegerea complexității Holocaustului. Pregătiți-vă pentru un dialog profund,
					care nu doar că oferă informații valoroase, dar vă provoacă să vă gândiți la importanța păstrării
					memoriei și la responsabilitatea noastră față de istorie.</div>
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
			<div class="sub-section">
				<p style="color: #c67171;">Vasile Szekely</p>
			</div>
			<div class="sub-section"><a href="/salamongolda">Salamon Golda</a></div>

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