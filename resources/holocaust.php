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
			<div class="title">Holocaustul – O Tragedie a Umanității</div>
			<div class="text-container">
				<div class="ftext">Holocaustul reprezintă una dintre cele mai mari tragedii ale istoriei, un genocid
					sistematic și industrializat, orchestrat de regimul nazist între anii 1933 și 1945, având ca
					obiectiv exterminarea evreilor din Europa, alături de alte grupuri considerate „indezirabile” de
					către ideologia nazistă. Sub conducerea lui Adolf Hitler, Germania nazistă a transformat
					antisemitismul într-o politică de stat, punând bazele unui mecanism de persecuție, izolare și, în
					cele din urmă, anihilare a evreilor europeni. Holocaustul a dus la moartea a aproximativ șase
					milioane de evrei, împreună cu milioane de alte victime, printre care romi, prizonieri de război
					sovietici, persoane cu dizabilități, homosexuali și opozanți politici.</div>
				<br></br>
				<div class="stext"><b class="bc">Originea și contextul Holocaustului</b></div>
				<div class="stext">Rădăcinile Holocaustului se regăsesc în ascensiunea Partidului Nazist (NSDAP) în
					Germania anilor 1920-1930. După Primul Război Mondial, Germania a fost afectată de o criză economică
					profundă, de instabilitate politică și de resentimente față de Tratatul de la Versailles, considerat
					umilitor de către poporul german. În acest climat de incertitudine, Adolf Hitler și Partidul Nazist
					au câștigat popularitate promovând un naționalism extremist, bazat pe ideea „superiorității rasei
					ariene” și pe găsirea unor țapi ispășitori pentru problemele țării, în special evreii.</div>
				<div class="stext">În <b class="bc">1933</b>, odată cu venirea lui Hitler la putere și transformarea
					Germaniei într-un stat totalitar, politica antisemită a devenit oficială. Primele măsuri au inclus
					boicotarea afacerilor evreiești, epurarea funcționarilor publici evrei și interzicerea lor în
					diverse profesii. Această politică a culminat în 1935 cu Legile de la Nürnberg, care au exclus
					evreii din societatea germană, le-au retras cetățenia și le-au interzis căsătoriile sau relațiile cu
					„arii”.</div>
				<div class="stext">De-a lungul anilor 1930, măsurile discriminatorii s-au intensificat. În noaptea de
					9-10 noiembrie 1938, a avut loc Kristallnacht („Noaptea de Cristal”), un pogrom național în care
					sute de sinagogi au fost incendiate, mii de afaceri evreiești devastate, iar zeci de mii de evrei
					arestați și trimiși în primele lagăre de concentrare.</div>

				<br></br>

				<div class="stext"><b class="bc">Holocaustul în timpul celui de-Al Doilea Război Mondial</b></div>
				<div class="stext">În 1 septembrie 1939, Germania a invadat Polonia, declanșând Al Doilea Război
					Mondial. În teritoriile ocupate, naziștii au trecut la măsuri și mai radicale împotriva evreilor.
					Sute de mii de evrei au fost îngrămădiți în ghetouri – cartiere izolate, în condiții inumane, fără
					hrană suficientă și supuse bolilor. În același timp, unitățile speciale Einsatzgruppen au început
					execuții în masă pe teritoriile estice, ucigând prin împușcare peste un milion de evrei și alți
					civili.</div>
				<div class="stext">În ianuarie 1942, la Conferința de la Wannsee, liderii naziști au hotărât
					implementarea așa-numitei „Soluții Finale” – exterminarea sistematică a tuturor evreilor europeni.
					Astfel, naziștii au construit lagărele de exterminare, unde milioane de oameni au fost uciși prin
					gazare, muncă forțată, execuții și experimente medicale. Cele mai cunoscute lagăre ale morții au
					fost Auschwitz-Birkenau, Treblinka, Sobibor, Bełżec, Majdanek și Chelmno. Deportările în aceste
					lagăre se făceau cu trenurile morții, în vagoane supraîncărcate, fără apă sau hrană, unde mulți
					prizonieri mureau pe drum.</div>

				<br></br>

				<div class="stext"><b class="bc">Rezistență și salvatori</b></div>
				<div class="stext">Deși în condiții extreme, mulți evrei și alte victime ale naziștilor au încercat să
					reziste. Au existat revolte în ghetouri (cea mai cunoscută fiind Revolta din Ghetoul Varșoviei,
					aprilie-mai 1943), evadări din lagăre (ex. revoltele din Treblinka și Sobibor) și mișcări de
					rezistență armată sau clandestină în Europa ocupată. De asemenea, au existat oameni curajoși care au
					riscat totul pentru a salva evrei, precum Oskar Schindler, Raoul Wallenberg, Irena Sendler și
					familiile ascunzătoare din Țările de Jos și Franța.</div>

				<br></br>

				<div class="stext"><b class="bc">Eliberarea lagărelor și sfârșitul Holocaustului</b></div>
				<div class="stext">În 1944-1945, pe măsură ce armatele aliate au avansat pe teritoriul Germaniei și al
					țărilor ocupate, lagărele de concentrare și exterminare au fost eliberate. Auschwitz a fost eliberat
					pe 27 ianuarie 1945 de către Armata Roșie, iar alte lagăre, precum Buchenwald, Bergen-Belsen sau
					Dachau, au fost eliberate de forțele americane și britanice. Când soldații au intrat în aceste
					locuri, au descoperit scene apocaliptice – mii de prizonieri scheletici, grămezi de cadavre și
					infrastructura ororilor naziste.</div>

				<br></br>

				<div class="stext"><b class="bc">Justiție și memoria Holocaustului</b></div>
				<div class="stext">După război, comunitatea internațională a încercat să facă dreptate
					supraviețuitorilor și să-i judece pe cei vinovați. Procesele de la Nürnberg (1945-1946) au condamnat
					liderii naziști pentru crime împotriva umanității. De asemenea, Holocaustul a dus la crearea
					Declarației Universale a Drepturilor Omului și la înființarea Statului Israel în 1948, ca refugiu
					pentru supraviețuitorii evrei.</div>
				<div class="stext">Astăzi, Holocaustul este <b class="bc">comemorat la nivel mondial</b>, iar educația
					despre această tragedie rămâne esențială pentru a preveni astfel de atrocități în viitor. Muzee,
					memoriale și supraviețuitori luptă pentru ca această pagină întunecată a istoriei să nu fie uitată.
					În fiecare an, pe <b class="bc">27 ianuarie</b>, Ziua Internațională a Holocaustului, lumea își
					amintește de milioanele de victime nevinovate și reafirmă angajamentul „<b class="bc">Never
						Again</b>” – să nu se mai repete niciodată.</div>
				<div class="stext">Holocaustul nu este doar o tragedie evreiască, ci o lecție universală despre
					pericolele urii, extremismului și indiferenței. Studierea sa ne ajută să înțelegem cum un regim
					poate transforma o societate întreagă într-un instrument al genocidului și subliniază importanța <b
						class="bc">vigilenței morale și a apărării drepturilor omului</b>.</div>
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