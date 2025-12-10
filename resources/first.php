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
			<div class="title">Ascensiunea Partidului Nazist</div>
			<div class="text-container">
				<div class="ftext">Partidul Nazist (NSDAP) a apărut în Germania postbelică pe fondul nemulțumirilor față
					de Tratatul de la Versailles și al crizei economice. Ascensiunea nazismului a fost un proces
					complex, influențat de instabilitatea politică și economică a Germaniei, resentimentele față de
					tratatul de pace, propaganda eficientă a NSDAP și exploatarea temerilor populației de către Hitler​.
					Adolf Hitler – un orator carismatic și demagog abil – a canalizat frustrările germanilor promițând
					revenirea la putere, mândrie națională și o „nouă ordine” dominată de Germania​. Partidul său a
					câștigat rapid popularitate prin exploatarea antisemitismului, naționalismului extrem și promisiunea
					de a rezolva criza economică​.</div>
				<div class="stext">În anii 1920, naziștii au încercat inițial o lovitură de forță (Puciul eșuat din
					1923), apoi au schimbat tactica participând la alegeri. Marea Criză Economică din 1929 a mărit
					șomajul și a radicalizat electoratul, sporind voturile pentru extremiști. Până la începutul anilor
					1930, NSDAP a devenit cel mai mare partid din Reichstag, deși fără majoritate​. Prin manevre
					politice, Hitler a fost numit cancelar la 30 ianuarie 1933 de președintele Hindenburg​. Odată
					preluată funcția, Hitler a consolidat rapid puterea: a eliminat opoziția și, în martie 1933, a
					obținut Actul de Împuternicire (Ermächtigungsgesetz) prin care guvernul putea legifera fără
					Parlament​. Acest act i-a conferit practic puteri dictatoriale, marcând finalul „ascensiunii” sale
					la putere. Germania democratică a devenit astfel un stat totalitar nazist, în care toate
					instituțiile erau sub controlul Partidului Nazist, pregătind terenul pentru politicile radicale ce
					aveau să urmeze.</div>

				<br></br>

				<div class="stext"><b class="bc">Cronologie – Ascensiunea Partidului Nazist</b></div>
				<div class="rtext">
					<li><b class="bc">1918</b> – Sfârșitul Primului Război Mondial. Se formează Republica de la Weimar,
						un guvern democratic nou pentru Germania.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1919</b> – Este semnat Tratatul de la Versailles. Germania este obligată să își
						asume întreaga responsabilitate pentru război și să plătească reparații pentru toate pagubele
						civile cauzate, valoarea totală ridicându-se la 33 de miliarde de dolari americani.</li>
				</div>
				<div class="rtext">Tot în 1919 se înființează Partidul Național-Socialist al Muncitorilor Germani (NSDAP
					– prescurtat ca „nazist”). Ideologia sa îmbina naționalismul de extremă dreaptă cu idei economice
					socialiste, având teme dominante precum naționalismul rasist și antisemit, opoziția față de
					comunism, respingerea democrației liberale și adversitatea față de marile afaceri.</div>

				<div class="rtext">
					<li><b class="bc">1921</b> – Adolf Hitler devine președintele partidului.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1921-1922</b> – Sprijinul pentru naziști crește, întrucât aceștia atrag tineri
						șomeri afectați de criza economică din timpul Republicii de la Weimar.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1922</b> – Inspirat de Partidul Fascist din Italia, Hitler introduce salutul cu
						brațul drept întins, care devine un simbol al Partidului Nazist și continuă să fie folosit și în
						prezent de grupurile neo-naziste și fasciste.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1923</b> – Partidul Nazist încearcă o lovitură de stat eșuată împotriva
						guvernului, ceea ce duce la arestarea lui Hitler. Acesta folosește procesul ca o platformă de
						propagandă, obținând notorietate. În timp ce se afla în închisoare, scrie „Mein Kampf” („Lupta
						mea”), în care își expune ideologia și antisemitismul violent.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1925-1929</b> – După eliberarea sa în 1924, Hitler anunță că Partidul Nazist va
						ajunge la putere pe cale legală. Deși nu obține rezultate bune în alegeri, partidul își dezvoltă
						baza de susținători. În 1925, este publicată cartea Mein Kampf.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1929</b> – În ajunul Marii Crize Economice, Partidul Nazist avea aproximativ
						130.000 de membri. Pe fondul crizei economice, naziștii își consolidează sprijinul prin
						promovarea teoriei că problemele Germaniei sunt cauzate de bancherii evrei, exploatând
						antisemitismul deja existent.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1930</b> – Sprijinul electoral pentru naziști crește brusc la 18%, în timp ce
						partidele de dreapta și de centru nu reușesc să gestioneze criza economică și creșterea
						șomajului.</li>
				</div>
				<div class="rtext">
					<li><b class="bc">1932</b> – Partidul Nazist devine cel mai mare partid din parlamentul german,
						obținând peste 37% din voturi. Guvernul devine instabil, deoarece atât naziștii, cât și
						comuniștii se opun democrației și controlează împreună peste jumătate din locurile din
						parlament. Se organizează alegeri suplimentare, dar situația rămâne nerezolvată, iar majoritatea
						nazistă este redusă.</li>
				</div>

				<div class="rtext">
					<li><b class="bc">1934</b> – În iunie, Hitler ordonă epurarea sângeroasă a rivalilor săi politici,
						un eveniment cunoscut sub numele de „Noaptea Cuțitelor Lungi”. Peste 80 de persoane sunt
						asasinate, majoritatea fiind membri ai SA (Sturmabteilung) – aripa paramilitară nazistă, care
						reprezenta o amenințare pentru armata tradițională germană și pentru puterea lui Hitler.</li>
				</div>
				<div class="rtext">Această epurare elimină opoziția internă și consolidează autoritatea lui Hitler. În
					urma acestui eveniment, unitatea SS (Schutzstaffel), condusă de Heinrich Himmler, devine cea mai
					puternică organizație paramilitară din Germania nazistă.</div>
				<div class="rtext">Câteva luni mai târziu, moartea președintelui Paul von Hindenburg îi permite lui
					Hitler să își asume titlul de „Führer”, devenind astfel lider suprem al Germaniei.</div>

				<br></br>

				<div class="stext">După înfrângerea Germaniei în 1918, țara s-a confruntat cu tulburări politice,
					economice și sociale severe. Sistemul democratic impus de Republica de la Weimar era slab, iar multe
					grupuri politice – inclusiv naziștii – îi contestau legitimitatea. Tratatul de la Versailles, semnat
					în 1919, a impus condiții dure Germaniei, inclusiv plăți uriașe de reparații de război și pierderi
					teritoriale semnificative. Aceste măsuri au creat resentimente puternice în rândul populației, ceea
					ce a permis Partidului Nazist să promoveze un mesaj naționalist extrem, bazat pe refacerea
					„măreției” Germaniei.</div>
				<div class="stext">În anii '20, Partidul Nazist a crescut treptat în popularitate, folosind propaganda
					eficientă, mitingurile de masă și simbolismul pentru a atrage sprijinul populației. Hitler, un
					orator carismatic, a prezentat partidul drept singura soluție pentru redresarea țării. El a învinuit
					evreii, comuniștii și democrații pentru declinul Germaniei, promovând ideea că „trădătorii interni”
					au dus la pierderea războiului și la umilirea națională.</div>
				<div class="stext">Lovitura de stat eșuată din 1923 (Puciul de la München) a fost un punct de cotitură.
					Deși Hitler a fost arestat, el și-a folosit procesul pentru a câștiga notorietate. În închisoare, a
					scris Mein Kampf, în care și-a prezentat viziunea despre un stat german pur rasial, bazat pe
					dominația rasei „ariene” și eliminarea „elementelor inferioare”.</div>
				<div class="stext">În anii următori, criza economică a jucat un rol crucial în ascensiunea naziștilor.
					Marea Criză din 1929 a provocat o explozie a șomajului și o prăbușire economică, iar populația a
					început să caute alternative la democrația de la Weimar. Partidul Nazist a exploatat aceste
					nemulțumiri, prezentându-se ca un salvator național.</div>
				<div class="stext">Până în 1933, Hitler a reușit să obțină puterea printr-o combinație de alegeri,
					intimidare și manipulare politică. Odată ajuns cancelar, a eliminat rapid toate partidele rivale, a
					dizolvat democrația și a instaurat o dictatură brutală, transformând Germania într-un stat totalitar
					care avea să ducă lumea în cel de-Al Doilea Război Mondial.</div>

				<div class="endLine"></div>
				<div class="end"></div>
			</div>
		</div>

		<div class="docs-container">
			<div class="setup">Holocaust</div>
			<div class="sub-section">
				<p style="color: #c67171;">Ascensiunea Partidului Nazist</p>
			</div>
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