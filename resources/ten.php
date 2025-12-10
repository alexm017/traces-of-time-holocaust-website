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
			<div class="title">Căutarea dreptății</div>
			<div class="text-container">
				<div class="ftext">După capitularea nazistă, lumea liberă a considerat esențial să tragă la răspundere
					pe cei vinovați de atrocitățile Holocaustului și ale războiului. S-a inițiat astfel un proces
					juridic fără precedent la scară internațională. Între 1945 și 1949 au avut loc Procesele de la
					Nürnberg, în orașul simbolic al marilor mitinguri naziste​. Primul și cel mai faimos a fost Procesul
					Principal (1945-1946), organizat de un Tribunal Militar Internațional (format din judecători ai
					celor patru Mari Aliați: SUA, URSS, Marea Britanie și Franța). În boxa acuzaților s-au aflat 24
					dintre cei mai importanți lideri naziști rămași: Hermann Göring, Rudolf Hess, Joachim von
					Ribbentrop, Wilhelm Keitel, Alfred Rosenberg ș.a. Ei au fost inculpați pentru crime contra păcii,
					crime de război și crime împotriva umanității – aceasta din urmă fiind o nouă noțiune juridică,
					introdusă tocmai pentru a descrie exterminarea civililor la scară masivă. Procesul a durat aproape
					un an, adunând mii de documente naziste ca probe (inclusiv filme și fotografii din lagăre) și
					mărturii de la supraviețuitori. Apărarea unora a invocat obediența la ordine („am executat ordinele
					superiorilor”), dar tribunalul a stabilit principiul că „a executa ordine criminale nu te absolvește
					de vină”. La 1 octombrie 1946 s-au pronunțat verdictele: 12 inculpați au fost condamnați la moarte
					(printre care Göring – care s-a sinucis înainte de execuție, Ribbentrop, Keitel, Jodl, Rosenberg)​,
					alții au primit închisoare pe viață (Rudolf Hess, Walter Funk, Erich Raeder) sau pedepse între 10 și
					20 de ani​. Trei acuzați au fost achitați. Execuțiile prin spânzurare au avut loc pe 16 octombrie
					1946, iar cenușa condamnaților a fost aruncată în râu, pentru a nu exista morminte care să devină
					simboluri neonaziste.</div>
				<div class="stext">Procesele de la Nürnberg au continuat într-o serie de procese secundare organizate de
					puterea americană (cunoscute sub numele de „Procesele ulterioare de la Nürnberg”, 1946-1949).
					Printre acestea s-au numărat Procesul Doctorilor (23 medici naziști judecați pentru experimentele
					inumane – 7 condamnați la moarte, restul la închisoare), Procesul Einsatzgruppen (împotriva
					comandanților echipelor mobile de ucidere – 14 condamnări la moarte, dintre care 4 executate
					efectiv), procesul miniștrilor, al judecătorilor nazisti etc. Totodată, în zonele de ocupație
					britanică, franceză și sovietică au avut loc mii de procese ale criminalilor de război de rang
					inferior. Tribunalul Poporului din Polonia l-a judecat și executat în 1947 pe Rudolf Höss, fostul
					comandant de la Auschwitz, iar tribunale din URSS au condamnat și executat personal SS din lagărele
					de pe teritoriul sovietic.</div>

				<div class="stext">Un moment semnificativ în căutarea dreptății a fost capturarea și judecarea Adolf
					Eichmann – arhitectul logistic al Soluției Finale. Eichmann fugise după război în America de Sud,
					trăind sub identitate falsă. În 1960, agenții israelieni ai Mossadului l-au descoperit în Argentina
					și l-au capturat într-o operațiune clandestină. A fost adus la Ierusalim, unde a fost judecat public
					în 1961 de un tribunal israelian pentru crime împotriva umanității și crime de război. Procesul
					Eichmann a avut un ecou imens în lume, fiind prima dată când mulți supraviețuitori au depus mărturie
					în direct despre ororile trăite. Eichmann s-a apărat invocând obediența („nu am făcut decât să urmez
					ordinele”), dar a fost găsit vinovat de toate capetele de acuzare. În 1962 a fost condamnat la
					moarte și executat prin spânzurare – singura execuție civilă din istoria Israelului​. Cenușa sa a
					fost aruncată în mare, în afara apelor teritoriale israeliene.</div>
				<div class="stext">Deși mulți criminali naziști au fost pedepsiți, justiția a fost departe de a fi
					completă. Mii de foști naziști – unii implicați direct în crime – au scăpat fie ascunzându-se sub
					identități false, fie emigrând în țări din Orientul Mijlociu sau America Latină (ex: Josef Mengele,
					„Îngerul morții” de la Auschwitz, a fugit în America de Sud și a evitat capturarea până la moartea
					sa în 1979). Alții, în special membri de rând ai trupelor SS sau funcționari mai mici, au revenit la
					viața normală în Germania postbelică, unde Războiul Rece a deturnat rapid prioritățile către
					confruntarea cu URSS. Abia în anii ’60 și ’70, Germania de Vest a început propria serie de procese
					(precum procesul de la Frankfurt al personalului Auschwitz, 1963-65) pentru a-și confrunta trecutul.
					Un rol important în urmărirea criminalilor rămași l-au avut indivizi precum <b class="bc">Simon
						Wiesenthal</b>, un supraviețuitor care a devenit „vânător de naziști” și a contribuit la
					localizarea a sute de fugari.</div>
				<div class="stext">Căutarea dreptății nu s-a limitat la tribunale. Ea a inclus și recunoaștere morală,
					comemorare și educație. În 1948, Adunarea Generală a ONU a adoptat Convenția asupra Genocidului,
					definind juridic acest concept – o consecință directă a șocului provocat de Holocaust. Germania
					postbelică a trecut prin procesul de Denazificare (epurare a foștilor naziști din funcții) – cu
					rezultate mixte, căci în contextul Războiului Rece prioritatea a devenit refacerea țării și
					integrarea ei în tabăra occidentală. Totuși, Germania și-a asumat responsabilitatea istorică
					treptat: prin despăgubiri, prin memoriale și prin includerea Holocaustului în manuale.</div>
				<div class="stext">Pe scurt, justiția post-Holocaust a fost fragmentară dar importantă. Procesele de la
					Nürnberg au stabilit un precedent pentru pedepsirea crimelor împotriva umanității și au dat
					victimelor un sentiment (fie el și modest) că s-a făcut dreptate​. Ele au scos la iveală lumii
					întregi documente și dovezi inatacabile despre crimele naziștilor. Faptul că un Eichmann a sfârșit
					în ștreang la Ierusalim transmite mesajul că oricât de târziu, vinovații pot fi trași la răspundere.
					În anii recenți, chiar și nonagenari foști gardieni din lagăre au mai fost aduși în fața justiției
					(de exemplu, procesul lui John Demjanjuk în Germania, 2011). Deși niciun proces nu poate aduce
					înapoi milioanele de morți, efortul de a cere socoteală și de a documenta adevărul a fost esențial
					pentru memoria colectivă și pentru afirmarea principiului că asemenea crime nu vor rămâne
					nepedepsite.</div>
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
			<div class="sub-section">
				<p style="color: #c67171;">Căutarea dreptății</p>
			</div>
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