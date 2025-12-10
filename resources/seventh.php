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
			<div class="title">Rezistența și salvatorii</div>
			<div class="text-container">
				<div class="ftext">În ciuda opresiunii totale, au existat oameni – evrei și neevrei – care au găsit
					resurse de curaj pentru a rezista și a salva vieți în timpul Holocaustului. Rezistența evreiască s-a
					manifestat sub diverse forme, de la lupta armată la refuzul de a renunța la demnitate. Cea mai
					cunoscută este Revolta din Ghetoul Varșoviei (aprilie-mai 1943), prima mare revoltă urbană împotriva
					ocupației naziste din Europa​. Deși slab înarmați, evreii luptători au preferat să moară în luptă
					decât să se lase deportați fără împotrivire. În cele din urmă, revolta a fost înăbușită, dar a avut
					o puternică valoare simbolică, inspirând alte mișcări similare. Au urmat revolte și în alte ghetouri
					(la Białystok, etc.) și chiar în lagăre: la Treblinka și Sobibór prizonierii au organizat răscoale
					în 1943, reușind să evadeze câteva sute de deținuți (deși majoritatea au fost prinși ulterior). La
					Auschwitz, în octombrie 1944, deținuții evrei forțați să lucreze la crematorii (Sonderkommando) au
					aruncat în aer unul din crematorii și au atacat gardienii, într-un act disperat de sfidare. Aceste
					acte de rezistență armată – chiar dacă n-au putut opri genocidul – au demonstrat spiritul neînfrânt
					al unor oameni lipsiți de speranță.</div>
				<div class="stext">Pe lângă rezistența armată, au existat și forme pasive de opoziție: activități
					educative clandestine în ghetouri, păstrarea culturii și religiei (de exemplu, rugăciuni și sederul
					de Pesach ținute în ascuns în lagăre), scrierea de jurnale și cronici (precum celebrul Jurnal al
					Annei Frank ascunsă în Amsterdam). Toate acestea reprezentau încercări de a contracara deznădejdea
					și de a păstra umanitatea în condiții inumane.</div>

				<div class="stext">De asemenea, mii de non-evrei au ajutat victimele – uneori riscându-și propria viață
					– motiv pentru care ulterior au fost onorați cu titlul de „Drepți între Popoare”. Printre salvatori
					se numără oameni simpli, preoți, diplomați sau chiar membri ai Partidului Nazist care au acționat
					din empatie. Un exemplu renumit este industriașul german Oskar Schindler, membru al NSDAP, care a
					reușit să salveze peste 1100 de evrei angajându-i în fabricile sale de la Cracovia și pledând pentru
					ei ca muncitori esențiali​. El și-a riscat viața și și-a cheltuit întreaga avere mituind ofițeri SS
					pentru a-și proteja muncitorii evrei de deportare și gazare, faptele sale fiind ulterior
					popularizate de filmul Lista lui Schindler. Un alt salvator deosebit a fost diplomatul suedez Raoul
					Wallenberg la Budapesta, care în 1944 a distribuit mii de pașapoarte de protecție evreilor unguri și
					a înființat case sigure sub pavilion suedez. Se estimează că zeci de mii de evrei din Ungaria au
					evitat deportarea datorită eforturilor lui Wallenberg​– acesta plătea mită naziștilor și intervenea
					personal la trenurile morții pentru a extrage persoane cu „pașaport” neutru. În Franța ocupată,
					întregul sat Le Chambon-sur-Lignon (protestant) a ascuns și salvat ~5.000 de evrei, organizând
					evadări peste granița spre Elveția. În Danemarca, în octombrie 1943, populația și rezistența daneză
					au orchestrat evacuarea aproape a tuturor evreilor danezi (aprox. 7.000 de persoane) cu bărci de
					pescari peste strâmtoare, până în Suedia neutră – astfel, aproape toți evreii din Danemarca au
					scăpat de Holocaust​. Doar ~120 de evrei danezi (din ~7.000) au pierit, restul supraviețuind
					datorită solidarității civice excepționale​. Acest episod rămâne unic ca operațiune de salvare pe
					scară națională.</div>
				<div class="stext">Și în România au existat salvatori: de pildă, traian Popovici, primarul din Cernăuți,
					a împiedicat deportarea a circa 20.000 de evrei din oraș în 1941 intervenind pe lângă autoritățile
					antonesciene. În Olanda, familia ten Boom a ascuns evrei în casa lor (povestea este relatată în
					cartea Refugiul). În Italia și Bulgaria, biserica și societatea civilă au reușit parțial să salveze
					o parte din evrei.</div>
				<div class="stext">Aceste gesturi de umanitate strălucesc în contrast cu întunericul vremurilor.
					Salvatorii și rezistenții au demonstrat că, chiar și sub amenințarea morții, oamenii pot alege
					compasiunea și onoarea. Mulți nu au fost niciodată cunoscuți public – au acționat fără a aștepta
					recompense. Astăzi, peste 27.000 de persoane au fost recunoscute oficial drept Drepți între Popoare
					de către Yad Vashem (Israel) pentru că au salvat evrei de la moarte. Ei reprezintă speranța că în
					mijlocul celei mai mari crime, au existat și cei care au spus „nu” urii și au întins o mână
					aproapelui.</div>
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
			<div class="sub-section">
				<p style="color: #c67171;">Rezistența și salvatorii</p>
			</div>
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