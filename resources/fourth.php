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
			<div class="title">Ghetourile și deportările</div>
			<div class="text-container">
				<div class="ftext">După ocuparea Poloniei în 1939, politica nazistă anti-evreiască a intrat într-o nouă fază – aceea a ghetoizării. Autoritățile germane au început să îngrămădească populația evreiască locală în zone urbane închise, separându-i de restul locuitorilor​. În orașe precum Varșovia, Lodz, Cracovia și altele, au fost create ghetouri – cartiere supraaglomerate destinate evreilor, înconjurate de ziduri sau garduri de sârmă ghimpată păzite de soldați. Scopul declarat era izolarea temporară a evreilor, însă în realitate ghetoizarea a facilitat exploatarea lor prin muncă forțată și a reprezentat o etapă intermediară spre exterminare. Condițiile de trai din ghetouri erau, în general, inumane și brutale​. De pildă, în Ghetoul Varșoviei, unde evreii constituiau ~30% din populația orașului, aceștia au fost înghesuiți pe numai 2,4% din suprafața urbană – ajungând la o densitate uluitoare de ~7 persoane pe cameră​. Rațiile oficiale de hrană erau derizorii: un evreu primea doar ~253 de calorii pe zi în Varșovia, față de 669 pentru un polonez și peste 2.600 pentru un neamț​. Lipsa cronică de alimente, aglomerația și condițiile insalubre au dus la epidemii de tifos și alte boli, care, alături de foame, au ucis zeci de mii de oameni (ex.: ~76.000 de evrei au murit în Ghetoul Varșovia până la mijlocul lui 1942 doar din aceste cauze​). În gheto-ul Lodz, bilanțul deceselor „naturale” a fost de ~43.000. Pentru a supraviețui, locuitorii recurgeau la contrabandă cu alimente prin crăpăturile zidurilor și organizau spitale și cantine clandestine. Cu toate acestea, fiecare zi în ghetou era o luptă pentru viață, sub amenințarea foametei, a bolii sau a gloanțelor paznicilor.</div>
				<div class="stext">Între 1940 și 1942, naziștii au înființat sute de ghetouri în Polonia ocupată și în teritoriile URSS cucerite (Lituania, Ucraina etc.). La început, unii evrei credeau că ghetoul ar putea oferi măcar un refugiu temporar; însă speranțele au fost spulberate când regimul nazist a trecut la implementarea „Soluției Finale” – planul de exterminare fizică a evreilor europeni. În 1942, a început Operațiunea Reinhard, adică deportarea sistematică a evreilor din ghetourile poloneze către lagărele de exterminare recent construite​. Ghetoul din Varșovia a suferit o deportare masivă în vara lui 1942: în doar 52 de zile, aproximativ 300.000 de evrei au fost trimiși cu trenurile morții direct la lagărul Treblinka, unde majoritatea au fost gazați imediat​. Scene similare s-au petrecut în toate marile ghetouri: la Lublin, Białystok, Czernăuți ș.a., trenurile încărcate cu bărbați, femei și copii plecau spre destinații ca Bełzec, Sobibor, Auschwitz. De obicei, naziștii foloseau înșelăciunea pentru a evita revoltele: anunțau o „relocare către est pentru muncă” și cereau evreilor să se prezinte „cu bagaje de maxim 15 kg”. În realitate, destinația era moartea, iar bagajele erau confiscate.</div>
				<div class="stext">Confruntați cu perspectiva exterminării, unii evrei din ghetouri au ales să reziste cu arma în mână. În aprilie 1943, în timp ce germanii încercau lichidarea Ghetoului Varșovia, grupurile de rezistență evreiești (precum organizația ŻOB condusă de Mordechai Anielewicz) au declanșat o revoltă armată. Timp de aproape o lună, insurgenții – înarmați doar cu pistoale, cocktailuri Molotov și mult curaj – au ținut piept trupelor germane mult mai numeroase și mai bine înarmate​. Revolta ghetoului din Varșovia, deși înăbușită brutal pe 16 mai 1943, a devenit simbolul rezistenței evreiești și a fost cea mai mare mișcare de acest fel din Europa ocupată​. Germanii au incendiat sistematic ghetoul stradă cu stradă, reducându-l la ruine, iar supraviețuitorii ascunși au fost exterminați sau trimiși la Treblinka. Revolte mai mici au avut loc și în alte ghetouri (la Białystok, Minsk, Târnogrod etc.), însă niciuna nu a putut opri mașinăria genocidară nazistă​.</div>
				<div class="stext">În final, planul naziștilor a fost de a șterge orice urmă a acestor enclave. La 21 iunie 1943, Heinrich Himmler a ordonat dizolvarea tuturor ghetourilor rămase și transferarea evreilor rămași în lagăre de concentrare​. Câteva ghetouri au fost transformate provizoriu în lagăre de muncă (de exemplu, ghetoul Lodz a continuat să existe până în august 1944, când și ultimii săi locuitori au fost deportați la Auschwitz). Astfel s-a încheiat capitolul ghetourilor – locuri ale suferinței extreme și ale disperării, dar și ale demnității (prin formele de ajutor reciproc și rezistență) în fața unui regim genocidar.</div>
				<div class="endLine"></div>
				<div class="end"></div>
			</div>
		</div>

		<div class="docs-container">
			<div class="setup">Holocaust</div>
			<div class="sub-section"><a href="/ascensiune">Ascensiunea Partidului Nazist</a></div>
			<div class="sub-section"><a href="/persecutie">Persecuția nazistă a evreilor</a></div>
			<div class="sub-section"><a href="/kindertransport">Kindertransport și refugiații</a></div>
			<div class="sub-section"><p style="color: #c67171;">Ghetourile și deportările</p></div>
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
