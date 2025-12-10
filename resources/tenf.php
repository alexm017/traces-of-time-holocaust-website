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
			<div class="title">Holocaustul astăzi</div>
			<div class="text-container">
				<div class="ftext">La peste 75 de ani de la încheierea celui de-Al Doilea Război Mondial, Holocaustul
					continuă să aibă un impact profund asupra conștiinței umanității, servind atât ca avertisment
					istoric, cât și ca subiect de reflecție morală. Lecțiile sale rămân relevante în prezent, într-o
					lume în care încă există antisemitism, rasism și tendințe totalitare. Societatea globală a
					considerat Holocaustul un eveniment unic prin amploare și atrocitate, ce trebuie amintit pentru a
					preveni repetarea. În acest sens, s-au întreprins numeroase eforturi de educație și comemorare. În
					multe țări, istoria Holocaustului este inclusă în programa școlară, elevii învățând despre
					pericolele urii și intoleranței. Muzee și memoriale impresionante au fost ridicate: de la Yad Vashem
					la Ierusalim și Muzeul Memorial al Holocaustului din Washington, până la Memorialul Holocaustului
					din Berlin sau Casa Anne Frank din Amsterdam. Aceste locuri păstrează vie memoria victimelor și
					oferă generațiilor tinere ocazia să înțeleagă ororile trecutului.</div>
				<div class="stext">Comemorarea oficială are loc anual pe 27 ianuarie, declarată de ONU Ziua
					Internațională de Comemorare a Victimelor Holocaustului (marchează data eliberării Auschwitz-ului).
					Cu acest prilej, supraviețuitori (tot mai puțini, dată fiind vârsta înaintată) își împărtășesc
					mărturiile, iar liderii mondiali reafirmă angajamentul „Never Again” – ca un asemenea genocid să nu
					se mai repete. De asemenea, numeroase țări au propriile zile de comemorare (în Israel, Yom HaShoah
					este ținut în luna aprilie, când timp de două minute întreaga țară păstrează reculegere în sunetul
					sirenelor).</div>

				<div class="stext">În timpul regimului condus de Ion Antonescu, între 1941 și 1944, incepand cu 9
					octombrie s-au organizat deportări masive ale evreilor din teritoriile aflate sub controlul
					României, în special către regiunea Transnistriei. Aceste deportări au fost parte a politicilor
					antisemite severe implementate de regim, care au dus la condiții inumane pe parcursul
					transporturilor și în lagărele de detenție, contribuind la un număr mare de victime.</div>

				<div class="stext">În plan cultural, Holocaustul a generat o vastă literatură, filmografie și artă care
					continuă să apară și astăzi. Cărți memorialistice precum Jurnalul Annei Frank, Noaptea de Elie
					Wiesel sau Am fost la Auschwitz de Primo Levi sunt citite de milioane de oameni, menținând vie
					legătura emoțională cu acele întâmplări. Filme ca Lista lui Schindler, Pianistul sau documentarul
					Shoah au adus povestea Holocaustului în atenția publicului larg. Prin intermediul acestor opere, se
					pun întrebări etice universale despre natura umană, obediență, rău și compasiune.</div>
				<div class="stext">Un aspect îngrijorător al prezentului este fenomenul de negare și distorsionare a
					Holocaustului. Negarea Holocaustului reprezintă orice tentativă de a susține că Holocaustul nu a
					avut loc – de la minimalizarea numărului victimelor la contestarea existenței camerelor de gazare​.
					Aceasta este adesea motivată de antisemitism sau agende politice extremiste. Negationiștii pretind,
					în ciuda probelor copleșitoare, că genocidul evreilor ar fi fost „exagerat” sau o „invenție”. În
					multe țări, negarea explicită a Holocaustului este considerată infracțiune (Germania, Austria,
					Franța, România etc. au legislații ce sancționează acest fapt), tocmai pentru că asemenea afirmații
					reprezintă nu doar o falsificare a istoriei, ci și o formă de discurs al urii. Comunitatea
					internațională, alături de istorici, supraviețuitori și muzee, depun eforturi pentru a combate
					negarea și trivializarea Holocaustului prin informare corectă, reacții publice și, unde e cazul,
					măsuri legale. Organizații precum Alianța Internațională pentru Memoria Holocaustului (IHRA) au
					definit clar termenii negării și distorsionării, oferind ghidaje guvernelor despre cum să
					reacționeze​.</div>
				<div class="stext">Holocaustul astăzi servește și ca reper în discuțiile despre drepturile omului și
					prevenirea genocidurilor. Prin conștientizarea sa, lumea a spus „niciodată din nou” – cu toate
					acestea, genociduri sau masacre (în Cambodgia, Rwanda, fosta Iugoslavie) au mai avut loc. Lecția
					Holocaustului este invocată pentru a sublinia necesitatea acțiunii timpurii împotriva urii de orice
					fel. Memoria Shoah a fost un catalizator pentru elaborarea Declarației Universale a Drepturilor
					Omului (1948) și a Convenției ONU împotriva Genocidului. Totodată, experiența evreilor europeni
					persecutați a stat la baza fondării statului Israel, ca refugiu național în care evreii să se poată
					autoapăra – ceea ce influențează geopolitica până azi.</div>
				<div class="stext">Astăzi, când ultimii martori oculari încă trăiesc, e o cursă contra-cronometru de a
					le consemna mărturiile și a le păstra pentru posteritate (prin arhive video, proiecte ca Shoah
					Foundation inițiată de Spielberg etc.). Memoria Holocaustului nu aparține doar evreilor, ci întregii
					omeniri, ca avertisment. De aceea, pe lângă muzeele fizice, există numeroase inițiative online,
					documentare și cursuri menite să transmită povestea noilor generații într-un mod relevant.
					Provocarea este ca tinerii de azi, la decenii distanță, să se poată conecta empatic la suferința
					victimelor și să înțeleagă pericolul ideologiilor extremist-naționaliste.</div>
				<div class="pic-text">Un morman de pantofi aparținând victimelor expus la Muzeul Auschwitz – o imagine
					simbolică ce evocă numărul imens de vieți pierdute și servește ca mărturie palpabilă a ororilor​.
					Astfel de exponate – pantofi, valize, ochelari, păr uman – îi confruntă pe vizitatori cu realitatea
					concretă a genocidului, contracarând orice tentativă de negare.</div>
				<img class="pic-ntext" src="/assets/images/pantofi.png" width=200 height=145>
				<div class="stext">Holocaustul astăzi este, așadar, un subiect viu: comemorat în ceremonii solemne,
					studiat de istorici, discutat de filosofi și integrat în conștiința publică drept etalon al răului
					radical. Mesajul esențial pe care lumea încearcă să-l transmită este că memoria trebuie păstrată: nu
					din dorința de răzbunare, ci pentru a onora victimele și a învăța din trecut. „Cine uită istoria
					este condamnat să o repete” – această maximă se aplică în primul rând Holocaustului. Educația despre
					Holocaust este folosită pentru a cultiva empatia și toleranța, arătând unde pot duce prejudecățile
					și ura necontrolată. De asemenea, subliniază importanța de a reacționa din timp la semnele
					discriminării și autoritarismului.</div>
				<div class="stext">În concluzie, Holocaustul rămâne un reper moral și un subiect de actualitate.
					Impactul său se vede în numeroasele programe de combatere a antisemitismului și rasismului, în
					jurămintele liderilor de „Never Again”, dar și în vigilenta societății civile atunci când drepturile
					omului sunt amenințate. Amintirea celor șase milioane de evrei și a celorlalte milioane de victime
					inocente este astăzi un îndemn la vigilență morală. În mod ideal, conștientizarea ororilor Shoah ar
					trebui să servească drept vaccin împotriva urii – o lecție dureroasă din istorie care să ne facă mai
					umani, mai solidari și determinați să prevenim pe viitor asemenea tragedii.</div>
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
			<div class="sub-section">
				<p style="color: #c67171;">Holocaustul astăzi</p>
			</div>

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