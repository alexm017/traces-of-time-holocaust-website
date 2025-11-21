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
			<div class="title">Lagărele de concentrare și exterminare</div>
			<div class="text-container">
				<div class="ftext">La scurt timp după preluarea puterii, regimul nazist a început să folosească lagăre de concentrare pentru a-și anihila oponenții. Primele astfel de lagăre (Konzentrationslager) au fost înființate în martie 1933, imediat după numirea lui Hitler cancelar​. Inițial, ele serveau la detenția și torturarea opozanților politici – comuniști, social-democrați, sindicaliști – și aveau o capacitate de circa 45.000 de prizonieri​. Un lagăr timpuriu faimos a fost Dachau (lângă München), deschis în 1933 sub conducerea SS. În acești primi ani, lagărele erau menite oficial să „reeduce” prin muncă forțată pe cei considerați periculoși pentru regim. Treptat însă, scopul lor s-a extins. Heinrich Himmler și SS-ul au preluat controlul total al sistemului concentraționar până în 1934-1935, extinzând criteriile de încarcerare​. Au fost internate nu doar figuri politice, ci și „elemente rasiale nedorite” – evrei, romi, persoane cu dizabilități, homosexuali, martori ai lui Iehova, criminali de drept comun etc.​. Astfel, lagărele de concentrare au devenit un instrument central al terorii de stat naziste, în care diverse grupuri erau izolate și supuse unui regim brutal.</div>
				<div class="stext">Începând cu 1938 (după Noaptea de Cristal), tot mai mulți evrei au fost trimiși și ei în lagăre. Pe măsură ce teritoriile cucerite creșteau, germanii au organizat lagăre în toată Europa ocupată – ajungând la un sistem vast de peste 20.000 de asemenea locuri (incluzând lagăre de muncă, de tranzit, sublagăre etc.). Condițiile erau îngrozitoare: prizonierii trăiau în barăci supraaglomerate, subnutriți și exploatați prin munci epuizante 11-12 ore pe zi, adesea în aer liber și în orice condiții meteo​. Hrana era limitată la o fiertură apoasă și o bucată de pâine pe zi – un regim de înfometare lentă. Igiena lipsea aproape complet, favorizând epidemii de boli (dizenterie, tifos etc.). Gardienii SS aplicau pedepse sadice pentru cea mai mică abatere: bătăi, torturi, execuții sumare. Scopul multor lagăre a devenit „exterminarea prin muncă” – prizonierii erau forțați să muncească până la epuizare și moarte. De exemplu, la lagărul Mauthausen (Austria), deținuții erau obligați să care blocuri de piatră urcând „Scara Morții” cu 186 de trepte, până când cedau; la Mittelbau-Dora, erau puși să asambleze rachete V2 în tunele subterane toxice. Viața în lagăr era o luptă continuă pentru supraviețuire, unde speranța de viață se măsura uneori în săptămâni sau luni, mai ales pentru cei slăbiți.</div>
				<div class="stext">Odată cu planul Soluției Finale, naziștii au adăugat un nou tip de facilități: lagărele de exterminare. Acestea au fost complexe construite explicit cu scopul uciderii sistematice în masă a oamenilor, devenind scena Holocaustului propriu-zis​. Primele au apărut în Polonia ocupată: lagărul Chelmno (Kulmhof) a început exterminarea cu gaz în decembrie 1941, urmat în 1942 de lagărele secrete din cadrul Operațiunii Reinhard – Bełzec, Sobibór și Treblinka. Aici, procesul era industrializat: trenurile aduceau transporturi de evrei direct pe rampă, victimele erau dezbrăcate sub pretextul „dușului de dezinsecție” și apoi împinse în camere de gazare camuflate (în care era pompat gaz toxic – monoxid de carbon de la motoare, în cazul Reinhard). Întreg transportul putea fi omorât în câteva ore, iar corpurile incinerate în gropi uriașe. După conferința de la Wannsee (ianuarie 1942), s-a decis extinderea programului: la Auschwitz-Birkenau (în Polonia) și Majdanek (lângă Lublin) au fost instalate camere de gazare cu Zyklon B, un pesticid pe bază de acid cianhidric. Lagăre precum Auschwitz combinau funcția de concentrare/forță de muncă cu cea de exterminare – unii deportați erau selectați pentru muncă, iar majoritatea (bătrâni, femei cu copii, bolnavi) erau trimiși direct la gazare. Astfel de lagăre ale morții au devenit epicentrul genocidului: la Auschwitz-Birkenau, cel mai mare lagăr nazist, se estimează că peste 1,1 milioane de oameni au fost uciși (dintre care peste 90% evrei)​; la Treblinka ~800.000, la Bełzec ~600.000, la Sobibór ~250.000 – aproape întreaga populație evreiască a Poloniei și numeroși deportați din alte țări au pierit în aceste centre ale morții. Cadavrele erau arse în crematorii sau pe ruguri imense sub cerul liber, pentru a șterge urmele​. Naziștii au încercat uneori să păstreze aparențe (la Auschwitz exista orchestra de lagăr care cânta la intrarea muncitorilor, iar inscripția cinică de la poartă spunea „Arbeit macht frei” – „Munca te eliberează”), însă realitatea era infernală.</div>
				<div class="pic-text"><b class="bc">Poarta lagărului Auschwitz I</b> inscripționată cu sloganul nazist „Arbeit macht frei” („Munca te face liber”), un cinism amar având în vedere că prizonierii erau eliberați doar prin moarte​. Auschwitz a devenit simbolul lagărului de exterminare nazist, locul emblematic al implementării Soluției Finale.</div>
				<img class="pic-ntext" src="/assets/images/lagar.png" width=200 height=145>
				<div class="stext">Unele lagăre de concentrare, deși nu aveau camere de gazare, s-au transformat practic în locuri de exterminare prin condiții: la Bergen-Belsen în Germania, spre finalul războiului, mii de deținuți au murit zilnic de tifos și foame (la eliberare, britanicii au găsit acolo 60.000 de supraviețuitori pe jumătate morți în mijlocul a mii de cadavre neîngropate​). Medici SS precum Josef Mengele au efectuat în lagăre experimente medicale îngrozitoare pe deținuți, adăugând un alt capitol de cruzime.</div>
				<div class="stext">Prin urmare, lagărele naziste – fie de concentrare, fie de exterminare – au reprezentat apogeul barbariei: un univers concentraționar în care milioane de oameni au fost supuși unor suferințe de nedescris. Ele aveau rolul de a teroriza, de a exploata economic forța de muncă a prizonierilor, și în final de a extermna popoare întregi. Puținii supraviețuitori ai acestor lagăre au ieșit la lumină ca umbre ale ființelor de odinioară, mărturisind lumii întregi dimensiunea de coșmar a Holocaustului.</div>
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
			<div class="sub-section"><p style="color: #c67171;">Lagărele de concentrare și exterminare</p></div>
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
