<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "modelo\n";
$txtt = "modelo";
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$date = date('m/d/Y h:i:s a', time());
$txt2 = $txtt . " " . $user_agent . " " . $ip . " " . $date . "\n"; 
fwrite($record_file, $txt);
fwrite($record_file, $txt2);
fclose($record_file);
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
			if($_SESSION["loggedIn"] == "userLoggedIn"){
				echo '<div class="profile-text"><a href="/profile">Profile</a></div>';
				echo '<div class="alphabit-profile-teamname-pic"><a href="/profile"><img src="assets/images/user3.png" width=45></a></div>';
			}
			?>
			<div class="blur-line"></div>
			<div class="title">Kindertransport și refugiații</div>
			<div class="text-container">
				<div class="ftext">În anii premergători Holocaustului, pe măsură ce persecuțiile din Germania și Austria se agravau, mii de evrei au încercat să fugă în străinătate. Un efort notabil de salvare a fost programul Kindertransport, inițiat în Marea Britanie după pogromul din 1938. Între decembrie 1938 și septembrie 1939, aproximativ 10.000 de copii evrei neînsoțiți au fost evacuați din Germania, Austria și Cehoslovacia către Regatul Unit​. Familii britanice sau organizații evreiești i-au preluat pe acești copii, oferindu-le adăpost și șansa la viață. Deși și-au salvat viețile, mulți dintre copii nu și-au mai revăzut niciodată părinții, care au rămas în urmă și adesea au pierit în Holocaust. Kindertransport-ul rămâne un exemplu emoționant de altruism: oameni care, într-o Europă ostilă, au deschis ușile propriilor case unor copii străini, numai pentru a-i scăpa de persecuțiile naziste.

</div>
				<div class="stext">În general, problema refugiaților evrei a devenit acută în anii ’30. Aproximativ jumătate din evreii Germaniei (circa 250.000 de persoane) și peste două treimi din evreii Austriei au reușit să emigreze între 1933 și 1939 pentru a scăpa de nazism​. Ei s-au refugiat spre Statele Unite, Palestina (sub mandat britanic), America Latină, Asia (inclusiv în Shanghai, care nu cerea vize) sau în alte țări europene​. Cu toate acestea, emigrația era îngreunată de politicile restrictive ale multor state. Conferința de la Évian din 1938, convocată pentru a găsi soluții, a evidențiat reticența majorității țărilor de a primi un număr mare de evrei refugiați. Un incident celebru ilustrativ este cel al vaporului St. Louis (mai-iunie 1939): peste 900 de evrei germani au plecat cu acest vas către Cuba și SUA, dar li s-a refuzat debarcarea atât în Havana, cât și în porturile americane. În cele din urmă, nava s-a întors în Europa, unde Marea Britanie, Franța, Belgia și Olanda au acceptat câte o parte dintre pasageri – însă mulți dintre acești refugiați au sfârșit tot în Holocaust după ce țările vestice au fost invadate de naziști.​</div>
				<div class="stext">Odată cu izbucnirea războiului în septembrie 1939, posibilitățile de refugiu s-au redus drastic. Frontierele s-au închis, iar după ce Germania a ocupat aproape toată Europa, evreii au rămas captivi sub dominație nazistă. Doar câțiva au mai scăpat – de pildă, prin fuga în Uniunea Sovietică sau ascunzându-se. Soarta refugiaților evrei în timpul Holocaustului a fost adesea tragică: lumea liberă a oferit prea puține locuri de adăpost, iar cei rămași sub jugul nazist au fost treptat concentrați, deportați și exterminați. Drama acelor ani evidențiază atât curajul celor ce au salvat vieți (precum în Kindertransport), cât și consecințele tragice ale indiferenței internaționale în fața unei crize umanitare majore.</div>
				<div class="endLine"></div>
				<div class="end"></div>
			</div>
		</div>

		<div class="docs-container">
			<div class="setup">Holocaust</div>
			<div class="sub-section"><a href="/ascensiune">Ascensiunea Partidului Nazist</a></div>
			<div class="sub-section"><a href="/persecutie">Persecuția nazistă a evreilor</a></div>
			<div class="sub-section"><p style="color: #c67171;">Kindertransport și refugiații</p></div>
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
</body>
</html>
