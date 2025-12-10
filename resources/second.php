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
			<div class="title">Persecuția nazistă a evreilor</div>
			<div class="text-container">
				<div class="ftext">Odată ce Partidul Nazist a ajuns la putere în 1933, persecuția evreilor a devenit o
					politică de stat și a fost implementată treptat, printr-o serie de măsuri care au condus, în final,
					la exterminarea în masă. De la segregare și discriminare legală la deportări și execuții, regimul
					nazist a transformat antisemitismul într-o doctrină oficială, menită să elimine evreii din
					societatea germană și, mai târziu, din întreaga Europă ocupată.</div>

				<div class="stext"><b class="bc">Primele măsuri discriminatorii (1933-1935)</b></div>
				<div class="stext">În primele luni ale regimului nazist, au fost luate măsuri pentru izolarea evreilor
					de restul populației. Acestea au inclus:</div>
				<div class="rtext">
					<li><b class="bc">Boicotul național al afacerilor evreiești (1 aprilie 1933)</b>– Naziștii au
						organizat o campanie de propagandă prin care cetățenii germani au fost îndemnați să nu cumpere
						de la magazinele evreiești. Pe vitrine au fost puse stele galbene și mesaje precum „Nu cumpărați
						de la evrei”.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">Eliminarea evreilor din viața publică</b> – La doar câteva săptămâni după
						preluarea puterii, Hitler a adoptat o lege care interzicea evreilor să ocupe funcții în
						instituțiile statului și să lucreze ca profesori, avocați, judecători sau funcționari publici.
					</li>
				</div>
				<div class="rtext">
					<li><b class="bc">Excluderea din viața culturală</b> – Evreii au fost interziși în industria
						cinematografică, în teatre, muzică și presă. Cărțile scrise de autori evrei au fost arse în
						cadrul unor campanii de „purificare culturală”, cum a fost arderea cărților din 10 mai 1933.
					</li>
				</div>

				<br></br>

				<div class="stext"><b class="bc">Legile de la Nürnberg (1935)</b></div>
				<div class="stext">Cel mai important moment din această fază a persecuției a fost adoptarea Legilor de
					la Nürnberg, în septembrie 1935. Aceste legi au transformat discriminarea antisemită în politică
					oficială de stat, stabilind că:</div>
				<div class="rtext">
					<li>Evreii își <b class="bc">pierdeau cetățenia germană</b>, devenind „subiecți ai statului”.</li>
				</div>
				<div class="rtext">
					<li>Le era <b class="bc">interzis să se căsătorească</b> sau să aibă relații intime cu „arii”.</li>
				</div>
				<div class="rtext">
					<li>Li s-a <b class="bc">interzis să angajeze servitoare germane</b> sub 45 de ani.</li>
				</div>
				<div class="rtext">
					<li>Definiția „evreului” nu mai era bazată pe religie, ci pe <b class="bc">origine biologică –
							oricine avea trei sau patru bunici evrei era considerat evreu.</li>
				</div>
				<div class="stext">Aceste măsuri au fost urmate de o campanie de propagandă intensă, care prezenta
					evreii ca „paraziți” ce amenință societatea germană. Filme, afișe și articole de presă promovau
					ideea că evreii sunt responsabili pentru problemele economice și sociale ale Germaniei.</div>

				<br></br>

				<div class="stext"><b class="bc">Escaladarea violenței – Noaptea de Cristal (1938)</b></div>
				<div class="stext">Cel mai important moment din această fază a persecuției a fost adoptarea Legilor de
					la Nürnberg, în septembrie 1935. Aceste legi au transformat discriminarea antisemită în politică
					oficială de stat, stabilind că:</div>
				<div class="rtext">
					<li><b class="bc">Peste 7.000 de magazine evreiești</b> au fost devastate.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">Peste 250 de sinagogi</b> au fost incendiate.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">Zeci de mii de evrei</b> au fost arestați și trimiși în lagăre de concentrare.
					</li>
				</div>
				<div class="rtext">
					<li>Peste <b class="bc">100 de evrei</b> au fost uciși în acea noapte.</li>
				</div>

				<div class="stext">După acest eveniment, regimul nazist a intensificat excluderea evreilor din economie,
					forțându-i să își vândă afacerile pe sume derizorii („arianizare economică”). Evreilor li s-au
					confiscat bunurile, iar procesul de izolare totală a fost complet.</div>
				<div class="endLine"></div>
				<div class="end"></div>
			</div>
		</div>

		<div class="docs-container">
			<div class="setup">Holocaust</div>
			<div class="sub-section"><a href="/ascensiune">Ascensiunea Partidului Nazist</a></div>
			<div class="sub-section">
				<p style="color: #c67171;">Persecuția nazistă a evreilor</p>
			</div>
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