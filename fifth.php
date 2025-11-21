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
			<div class="title">Einsatzgruppen</div>
			<div class="text-container">
				<div class="ftext">În paralel cu ghetoizarea, regimul nazist a desfășurat campanii de exterminare masivă și prin execuții in situ, în special pe teritoriile cucerite în Est. Protagonistele acestei forme de genocid au fost Einsatzgruppen – unități mobile de ucidere, formate din trupe SS și poliție, însărcinate cu eliminarea evreilor și a altor „elemente indezirabile” (romi, comisari sovietici, partizani) în spatele frontului german. După invazia Uniunii Sovietice în iunie 1941, patru Einsatzgruppen principale (A, B, C, D), însumând circa 3.000 de oameni, au pornit la acțiune în teritoriile ocupate​. Metoda lor era terifiant de simplă: intrau în localități imediat după trupele regulate, adunau populația evreiască sub diverse pretexte (de exemplu, pentru „recolonizare” sau verificarea actelor), îi duceau la marginea orașului – în păduri, pe malul râurilor sau la gropi comune săpate forțat – și îi executau prin împușcare în masă​. Întregi comunități evreiești de pe teritoriul Poloniei de est, Ucrainei, Belarusului și Țărilor Baltice au fost șterse în acest mod. Femeile, bătrânii și copiii nu au fost cruțați: Einsatzgruppen ucideau adesea „în unități familiale”, nemaiținând cont de vârstă sau sex​. Un exemplu cutremurător este masacrul de la Babi Yar (lângă Kiev): pe 29-30 septembrie 1941, sub coordonarea Einsatzgruppe C, circa 33.771 de evrei au fost împușcați și aruncați într-o râpă în doar două zile​. Evenimente similare s-au petrecut la Rîbnița, Odessa, în pădurea Rumbula lângă Riga (unde peste 25.000 de evrei letoni au fost uciși în noiembrie 1941) și la fortul IX din Kaunas (Lituania), unde în octombrie 1941 aproximativ 9.000 de evrei – jumătate copii – au fost masacrați într-o singură zi​.</div>
				<div class="stext">Einsatzgruppen au acționat adesea cu sprijinul unor localnici colaboratori sau al unor unități de poliție auxiliare formate din voluntari autohtoni, profitând de antisemitismul existent. Împreună, au creat ceea ce s-a numit ulterior „Holocaustul prin gloanțe”. La finalul războiului, se estimează că aceste echipe mobile au ucis peste 1,4 milioane de oameni, marea lor majoritate evrei, doar prin execuții directe​. Gropile comune presărate pe tot frontul de est – de la Baltica la Marea Neagră – stau mărturie. Metodele Einsatzgruppen erau însă brutale și consumau mult timp și muniție; de asemenea, impactul psihologic asupra călăilor era semnificativ (au fost raportate traume și alcoolism printre trăgători). Din aceste motive, conducerea nazistă a căutat „soluții” mai eficiente de ucidere în masă (precum camerele de gazare). Până atunci, Einsatzgruppen au reprezentat, din vara lui 1941 până în 1943, vârful de lance al exterminării în teritoriile estice, ducând genocidul dincolo de lagăre, direct în satele și orașele unde evreii trăiseră de generații. Impactul acțiunilor lor a fost devastator: comunități întregi din Ucraina, Belarus și statele baltice au dispărut aproape complet. Procesele postbelice au scos la lumină atrocitățile: liderii Einsatzgruppen (precum Otto Ohlendorf) au fost judecați și condamnați, însă cei mai mulți dintre membrii simpli au revenit la viața civilă fără a răspunde pentru crimele comise.</div>
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
			<div class="sub-section"><p style="color: #c67171;">Einsatzgruppen</p></div>
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
