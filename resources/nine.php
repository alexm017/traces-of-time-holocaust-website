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
			<div class="title">Reconstruirea vieților</div>
			<div class="text-container">
				<div class="ftext">După prăbușirea Germaniei naziste, puținii evrei rămași în viață în Europa s-au
					confruntat cu provocarea copleșitoare de a-și reconstrui viețile. Circa 200.000 – 250.000 de
					supraviețuitori evrei (majoritatea din Europa de Est) s-au adunat în ceea ce se numea tabere pentru
					persoane strămutate (DP camps) în Germania, Austria și Italia​. Aceste tabere au fost organizate de
					Aliați și organizații umanitare (precum UNRRA) pe foste baze militare sau chiar pe locul unor foste
					lagăre, pentru a adăposti temporar supraviețuitorii rămași fără adăpost și familie. Condițiile
					inițiale în DP camps nu erau ideale – la început, evreii erau amestecați cu alți refugiați (inclusiv
					foști colaboratori naziști), ceea ce a generat tensiuni. În 1945, generalul american Eisenhower a
					ordonat îmbunătățirea situației și crearea de tabere separate pentru evrei, recunoscând suferința
					lor specială​. Treptat, viața din taberele de strămutați a început să prindă contur: au apărut școli
					improvizate pentru copii, ateliere de calificare profesională, mici teatre și ziare în idiș sau
					ebraică. Supraviețuitorii își căutau rudele prin anunțuri și liste publicate – din păcate, cei mai
					mulți descopereau că și-au pierdut întreaga familie. De pildă, Octavian Fulop, un supraviețuitor din
					Transilvania, mărturisea: „Din familia mea de 50-60 de persoane, nu a mai rămas nimeni. Am
					supraviețuit singur.” Această realitate era comună: nenumărați oameni se întorceau în satele sau
					orașele natale doar pentru a afla că sunt singurii rămași sau, și mai tragic, că nu sunt bineveniți.
				</div>
				<div class="stext">În Europa de Est, revenirea evreilor acasă a fost adesea întâmpinată cu ostilitate și
					violență. Un episod cutremurător a fost pogromul de la Kielce (Polonia) din iulie 1946, când 42 de
					evrei supraviețuitori (întorși din lagăre sau ascunzători) au fost uciși de localnici influențați de
					zvonuri antisemite, iar alți zeci răniți. Asemenea incidente – combinate cu trauma și dorința de
					a-și regăsi o comunitate – i-au împins pe mulți supraviețuitori să părăsească țările natale. S-a
					format o mișcare clandestină numită „Brichah” (Evacuare), care a ajutat evreii din Europa de Est să
					treacă frontiere ilegal spre vest, în speranța emigrării definitive. Până în 1952, peste 250.000 de
					evrei și-au petrecut o vreme în taberele de strămutați din Germania, Austria, Italia – așteptând o
					soluție permanentă.</div>

				<div class="stext">Destinația cea mai dorită de supraviețuitori a devenit Palestina sub mandat britanic,
					unde exista deja un Yishuv (comunitate evreiască) robust. Însă britanicii, temându-se de tensiunile
					cu populația arabă locală, mențineau restricții severe de imigrare. Mii de refugiați evrei au
					încercat să ajungă cu vase nesigure pe coastele Palestinei, sfidând blocada britanică. Cazul navei
					Exodus 1947, plină cu supraviețuitori ai Holocaustului, căreia britanicii i-au interzis debarcarea
					și au returnat-o forțat în Europa, a stârnit revoltă internațională și compasiune pentru cauza
					refugiaților. În cele din urmă, tragedia Holocaustului a contribuit la decizia Națiunilor Unite de a
					vota împărțirea Palestinei și crearea unui stat evreiesc. În mai 1948 s-a născut Statul Israel, iar
					unul dintre primele sale acte a fost să faciliteze imigrația supraviețuitorilor. În anii imediat
					următori, peste 100.000 de evrei din taberele europene au fost transportați în Israel, unde, deși
					i-au așteptat alte dificultăți (războiul arabo-israelian, viața austeră într-o țară nouă), și-au
					putut reclădi un cămin național.</div>
				<div class="stext">Alți supraviețuitori au emigrat în Statele Unite, mai ales după ce Congresul SUA a
					relaxat cotele de imigrare prin DP Act (1948 și 1950), permițând intrarea a aproximativ 80.000 de
					evrei refugiați. Canada, Australia, Africa de Sud, America de Sud și Europa de Vest au primit și ele
					mii de supraviețuitori. În România, o parte din evreii scăpați de deportări (inclusiv orfani ai
					Holocaustului) au emigrat masiv în anii ‘40-‘50 către Israel.</div>
				<div class="stext">Pe plan personal, recuperarea a fost un proces lung și dureros. Supraviețuitorii s-au
					confruntat cu traume psihice profunde – coșmaruri, depresie, sindromul supraviețuitorului
					(sentimentul de vinovăție că ei au trăit când alții au murit). Mulți nu au putut vorbi ani în șir
					despre cele trăite, preferând să își reprime amintirile și să se concentreze pe viitor. Unii și-au
					refăcut familii, căsătorindu-se cu alți supraviețuitori și aducând pe lume copii – așa-numita
					generație a „copiilor Holocaustului”, care a crescut în umbra tăcerii părinților marcati de groază.
					Comunitățile evreiești europene au rămas decimate: orașe cu bogată viață iudaică înainte de război
					(Varșovia, Lvov, Amsterdam, Salonic etc.) ajunseseră să aibă doar câteva procente din populația
					evreiască inițială.</div>
				<div class="stext">Procesul de reconstrucție a inclus și lupta pentru drepturi și recunoaștere. În anii
					’50, Republica Federală Germania a negociat cu noul stat Israel un acord de despăgubiri (Acordul de
					la Luxemburg, 1952) – prin care Germania de Vest s-a angajat să plătească compensații financiare
					supraviețuitorilor și pentru reconstruirea comunităților evreiești (acord controversat, dar care a
					ajutat mulți evrei să-și revină economic). În paralel, organizații evreiești și de supraviețuitori
					(precum Congresul Mondial Evreiesc) au militat pentru aducerea criminalilor naziști în fața
					justiției și pentru păstrarea memoriei celor dispăruți.</div>
				<div class="stext">Pentru supraviețuitori, drumul de la lagăr la o viață normală a fost lung. Însă mulți
					au reușit, cu o reziliență extraordinară, să depășească ororile: au devenit profesori, comercianți,
					artiști, și-au crescut copiii insuflându-le aprecierea pentru libertate și toleranță. Mărturiile lor
					– date adesea abia la decenii după război – au devenit o comoară de învățăminte pentru omenire.
					Reconstruirea vieților după Holocaust a însemnat nu doar refacerea destinelor individuale, ci și
					renașterea speranței că, în pofida răului extrem, viața poate birui.</div>

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
			<div class="sub-section">
				<p style="color: #c67171;">Reconstruirea vieților</p>
			</div>
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