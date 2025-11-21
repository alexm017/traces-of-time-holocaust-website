<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "res\n";
$txtt = "res";
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
	<title>AlphaBit - OpenML</title>
	<link rel="stylesheet" href="../assets/css/model_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/alphabit.ico" />
</head>
<body>
	<div class="background-container">
		<div class="alphabit-topleft">
			<a href="#">AlphaBit OpenML</a>
		</div>
		<div class="ai-star-logo">
			<img src="../assets/images/ai_star_alpha.png" width=50>
		</div>
		<div class="docs">Documentation</div>
		<div class="rbox">
			<div class="news">🎉 New features will be added the next few days. Stay tuned for the new updates!</div>
			<div class="temporarynews">For now, only the documentation is accessible.</div>
			<div class="title">Label Image Tool</div>
			<div class="text-container">
				<div class="stext"><li><b>LabelImg Tool <img src="/assets/images/labelimg.png" width=30>   	<a href="https://github.com/HumanSignal/labelImg"><u>Github Repository</u></a></b></li> </div>
				<div class="downloadbtn"><a href="/assets/ai/windows_v1.8.1.zip">Download</a></div>
				<div class = "stext"><b><u>LabelImg</u></b> este o aplicație open-source de etichetare a imaginilor, esențială în pregătirea seturilor de date pentru recunoașterea obiectelor, în special atunci când se utilizează modele de tip YOLO, cum este YOLOv8n. Mai jos găsiți o descriere detaliată a aplicației și modul în care se integrează în procesul de dezvoltare al unui model performant:</div>
				     <div class="rtext"><div class = "stext"><li><b>Interfață Intuitivă și Ușurință în Utilizare</b><br>LabelImg oferă o interfață grafică prietenoasă, care permite utilizatorilor să deschidă imagini, să le vizualizeze și să traseze cutii de delimitare (bounding boxes) în jurul obiectelor de interes. Acest proces manual de etichetare este simplu și rapid, facilitând lucrul chiar și pentru cei care nu sunt familiarizați cu tehnologiile de procesare a imaginilor.</li></div>
					<div class = "stext"><li><b>Compatibilitate cu Formatul YOLO</b></li>Aplicația salvează etichetele într-un format compatibil cu YOLO, ceea ce este deosebit de important atunci când se antrenează modele precum YOLOv8n. Fiecare cutie de delimitare este asociată cu un label corespunzător clasei obiectului (de exemplu, „obiect”, „persoană”, „vehicul”), permițând modelului să învețe recunoașterea corectă a acestora.</div>
					<div class = "stext"><li><b>Flexibilitate și Precizie în Etichetare</b></li>LabelImg suportă o gamă variată de formate de imagine și oferă funcționalități avansate, cum ar fi redimensionarea și ajustarea precisă a cutiilor de delimitare. Acest lucru asigură că etichetările sunt cât mai exacte, un aspect critic în obținerea unor rezultate bune la antrenarea modelului YOLOv8n.</div>
					<div class = "stext"><li><b>Flux de Lucru Eficient</b></li>Prin organizarea sistematică a imaginilor și etichetelor, LabelImg facilitează gestionarea unor seturi de date mari, reducând timpul de pregătire și minimizând erorile umane. Utilizatorii pot naviga ușor între imagini, pot corecta rapid etichetele și pot asigura consistența denumirilor, toate acestea contribuind la un proces de antrenare mai eficient.</div>
					<div class = "stext"><li><b>Integrare Directă în Proiecte de Inteligență Artificială</b></li>În contextul utilizării modelului YOLOv8n, calitatea etichetărilor realizate cu LabelImg are un impact direct asupra performanței modelului. Datele etichetate precis ajută la crearea unui set de date robust, care duce la antrenarea unui model de detecție a obiectelor cu o acuratețe sporită și o eficiență ridicată în medii reale.</div></div>
				<br></br>
				<div class="stext"><b>Example</b></div>
				<div class="stext"><img src="/assets/ai/label.png" style="border-radius: 10px; width: 52vh;"></div>
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/ZB6vQ62KZT">Support -> Discord</a></div>
				<div class="end"></div>
			</div>
		</div>
		<div class="docs-container">
			<div class="setup">Setup</div>
			<div class="sub-section"><a href="/model/overview">Overview</a></div>
			<div class="sub-section"><a href="/model/prerequisites">Getting Started</a></div>
			<div class="sub-section"><a href="/model/resources">Resources</a></div>
			<div class="sub-section"><a href="/model/cameracalib">Camera Calibration</a></div>
			<div class="docsLine"></div>
			
			<br></br>
			<div class="setup">Training ML</div>
			<div class="sub-section"><a href="/model/training">Training Dataset</a></div>
			<div class="sub-section"><a href="/model/training_structure">Training Structure</a></div>
			<div class="sub-section"><p style="color:#c67171;">Label Images Tool</p></div>
			<div class="sub-section"><a href="/model/training_ml">Python Code For Training</a></div>
			
			<div class="docsLine"></div>
			
			<br></br>
			<div class="setup">The Math Behind It</div>
			<div class="sub-section"><a href="/model/sample_math">Sample Math</a></div>
			
			<div class="docsLine"></div>
			
			
			<br></br>
			<div class="setup">Examples</div>
			<div class="sub-section"><a href="/model/pythonml">Python Code For Detection</a></div>
			<div class="sub-section"><a href="/model/android_studio">Android Studio Implementation</a></div>
			<div class="sub-section"><a href="/model/robot_control">Control Intake Using The OpenML</a></div>
		</div>
	</div>
</body>
</html>
