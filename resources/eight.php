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
			<div class="title">Marșurile morții și eliberarea</div>
			<div class="text-container">
				<div class="ftext">Pe măsură ce Aliații au început să împingă înapoi Germania nazistă în 1944-1945,
					autoritățile SS au încercat să evacueze prizonierii din lagăre către interiorul Reich-ului, în
					speranța de a ascunde dovezile atrocităților și de a folosi deținuții ca forță de muncă până în
					ultima clipă. Aceste evacuări forțate, făcute pe jos sau în trenuri descoperite, au fost numite
					ulterior „marșurile morții”. Prizonierii – slăbiți, bolnavi și înfometați – au fost obligați să
					mărșăluiască zeci sau sute de kilometri în iarna cumplită a anilor 1944-45, sub pază armată. Cei
					care nu puteau ține pasul erau împușcați pe loc sau lăsați să moară în zăpadă​. La fiecare pas,
					coloanele lăsau în urmă trupuri. De exemplu, în ianuarie 1945, ~56.000 de deținuți au fost scoși din
					complexul Auschwitz într-un astfel de marș; se estimează că aproximativ o cincime dintre ei au murit
					pe drum din cauza frigului, foametei sau execuțiilor​. Similar, de la lagărul Stutthof (Prusia
					Orientală) ~25.000 de oameni au pornit într-un marș iarna, dintre care numai jumătate au
					supraviețuit. Până în aprilie 1945, când războiul se apropia de sfârșit, mii de prizonieri din
					lagărele din Polonia, Baltica și chiar Germania au fost forțați să meargă spre zone precum Austria
					sau Cehoslovacia. Aceste marșuri au continuat până în ultimele zile ale conflictului, soldându-se cu
					mii de victime suplimentare ale Holocaustului în chiar clipele premergătoare eliberării.</div>
				<div class="stext">În haosul retragerii germane, unii prizonieri au reușit totuși să evadeze de pe
					traseu sau au fost eliberați de trupele aliate interceptând marșurile. În multe sate germane,
					localnicii priveau uimiți convoaiele fantomatice de oameni sfârșiți, dar puțini interveneau.
					Termenul de „marș al morții” reflectă bine situația – pentru mulți deținuți, aceste marșuri au fost
					fatalitatea finală după ani de chin.</div>

				<div class="stext">Eliberarea lagărelor de concentrare de către forțele aliate în primăvara anului 1945
					a adus lumii imagini șocante, ce aveau să devină asociate pe veci cu ororile nazismului. Primul
					lagăr major eliberat a fost Majdanek (Polonia), descoperit de sovietici în iulie 1944 – rușii au
					găsit acolo camere de gazare și depozite de obiecte (inclusiv 800.000 de perechi de încălțăminte ale
					victimelor). Pe 27 ianuarie 1945, Armata Roșie a intrat în complexul Auschwitz. Acolo mai rămăseseră
					în viață doar ~7.000 de prizonieri, cei prea slabi ca să fi fost evacuați – stând printre barăci
					pline de cadavre și înconjurați de o tăcere mormântală​. Soldații sovietici, deși căliți de război,
					au fost cutremurați de ceea ce au găsit: mormane de cadavre, magazine pline de efecte personale
					(valize, ochelari, jucării) și camere de gazare cu pereții zgâriați de ultimele gesturi ale
					victimelor. În lunile următoare, trupele americane și britanice au eliberat pe rând lagărele din
					vestul Germaniei: Buchenwald (11 aprilie 1945, de către americani), Bergen-Belsen (15 aprilie, de
					britanici), Dachau (29 aprilie, americani), Mauthausen (5 mai, americani) ș.a. La Bergen-Belsen,
					britanicii au dat peste ~60.000 de supraviețuitori aflați la limita vieții, bolnavi de tifos și
					inaniție, printre mii de cadavre neîngropate împrăștiate prin tabără​. Mirosul morții și imaginea
					scheletelor vii i-au marcat pe militarii eliberatori. La Buchenwald, soldații americani au găsit
					cuptoare pline de cenușă umană și prizonieri cântărind sub 30 de kilograme.</div>
				<div class="stext">Eliberarea a fost, pentru supraviețuitori, un moment de bucurie amestecată cu agonie.
					Mulți nu mai aveau pe nimeni – familiile le fuseseră ucise – și erau prea slăbiți să se bucure pe
					deplin. În primele zile, medicii militari și voluntarii Crucii Roșii au făcut eforturi disperate
					pentru a salva viețile celor găsiți: i-au hrănit treptat (mulți nu mai puteau digera hrana normală),
					i-au tratat de boli și i-au adăpostit. Cu toate acestea, mii de oameni au continuat să moară după
					eliberare din cauza stării critice (la Belsen, ~14.000 au murit în primele săptămâni post-eliberare,
					în ciuda ajutorului). Pentru restul lumii, imaginile filmate și fotografiate în lagăre – fețele
					emaciate ale supraviețuitorilor uitându-se stins prin gardul de sârmă ghimpată, grămezile de trupuri
					– au adus, în sfârșit, conștientizarea dimensiunii reale a crimelor naziste. Jurnalele de știri și
					ziarele au relatat pe larg descoperirea lagărelor, stârnind oroare și indignare globale.</div>
				<div class="stext">În același timp, eliberarea a însemnat și sfârșitul Holocaustului ca proces organizat
					de exterminare. Când războiul s-a terminat în Europa (8 mai 1945), aproximativ 6 milioane de evrei
					fuseseră uciși, alături de alte milioane de victime neevreiești. Cei care au supraviețuit au ieșit
					din lagăre liberi, dar profund marcați fizic și sufletește. Pentru mulți începea o nouă luptă –
					aceea de a-și reclădi viața din ruinele trecutului.</div>

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
			<div class="sub-section">
				<p style="color: #c67171;">Marșurile morții și eliberarea</p>
			</div>
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