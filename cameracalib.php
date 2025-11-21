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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/atom-one-dark.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
	<script>
	    document.addEventListener("DOMContentLoaded", () => {
	      hljs.highlightAll();
	    });
	</script>
</head>
<body>
	<div class="background-container">
		<div class="alphabit-topleft">
			<a href="#">AlphaBit OpenML</a>
		</div>
		<div class="ai-star-logo">
			<img src="/assets/images/ai_star_alpha.png" width=50>
		</div>
		<div class="docs">Documentation</div>
		<div class="rbox">
			<div class="news">🎉 New features will be added the next few days. Stay tuned for the new updates!</div>
			<div class="temporarynews">For now, only the documentation is accessible.</div>
			<div class="title">Camera Calibration</div>
			<div class="text-container">
				<div class="stext"><b class="bc">1.</b> Creeaza un script python cu numele <u>camera_calibration.py</u></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python">import cv2
from ultralytics import YOLO
import math

model = YOLO("C:\\Users\\&lt;USER>\\Desktop\\OpenML\\high.pt") #Modifica aici cu Path-ul tau curent si cu modelul OpenML descarcat

cap = cv2.VideoCapture(0) #Daca nu functioneaza, incrementeaza numarul cu 1 pana cand camera functioneaza si apare pe ecran

while True:
    ret, frame = cap.read()
    if not ret:
        break

    results = model.predict(frame, conf=0.5)

    frame_with_results = results[0].plot()
    boxes = results[0].boxes
    if len(boxes) > 0:
        x1, y1, x2, y2 = map(int, boxes.xyxy[0])
        object_width = x2 - x1
        object_height = y2 - y1

        cv2.putText(frame_with_results, f"Obj Width: {object_width:.2f}",
                    (x1, y1 + 40),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.6, (0, 255, 0), 2)
        cv2.putText(frame_with_results, f"Obj Height: {object_height:.2f}",
                    (x1, y1 + 60),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.6, (0, 255, 0), 2)
        
    cv2.imshow('OpenML - Real-time Detection', frame_with_results)

    if cv2.waitKey(1) & 0xFF == ord('q'): # Apasa Q pentru a iesi din cod
        break

cap.release()
cv2.destroyAllWindows()</pre></code>
				</div></div>
				<div class="stext"><b class="bc">2.</b> Pentru a calcula orientarea la care se afla sample-ul trebuie masurat minWidth, maxWidth, minHeight, maxHeight</div>
				<div class="rtext"><b class="bc">1. Pune sample-ul sa fie drept in imagine </b></div>
				<div class="rtext"><b class="bc">2.</b> Asigura-te ca sample-ul se afla in <b class="bc">totalitate</b> in imagine. Este neaparat ca sample-ul sa se incadreze in imagine si sa nu fie jumatate din sample afara din imagine</div>
				<div class="rtext">Exemplu: </div>
				<div class="rtext"><img src="/assets/ai/straight_sample.png" style="border-radius: 10px; width: 37.5vh;"></div>
				<div class="rtext"><li>De aici trebuie notate <u>minWidth</u> care este egal cu <b class="bc">Width</b> si <u>minHeight</u> care este egal cu <b class="bc">Height</b></li></div>
				<div class="rtext">&nbsp;</div>
				<div class="rtext"><b class="bc">3.</b> Acum trebuie rotit sample-ul la unghiul de 90 de grade, iar mai apoi trebuie notat <u>maxWidth</u>, <u>maxWidth</u>. Asigura-te ca sample-ul se afla in totalitate in imagine</div>
				<div class="rtext">Exemplu: </div>
				<div class="rtext"><img src="/assets/ai/90_degree.png" style="border-radius: 10px; width: 37.5vh;"></div>
				<div class="rtext"><li>De aici trebuie notate maxWidth care este egal cu Width si maxWidth care este egal cu Height</li></div>
				<div class="stext"><b class="bc">2.</b>Aplicarea matematica a masuratorilor</div>
				<div class="rtext"><b class="bc">1.</b> Dupa ce minWidth, minHeight, maxWidth, maxHeight au fost masurate trebuie sa le aplicam matematic pentru a afla orientarea sample-ului
					<div class="rtext"><li>Sa ne imaginam ca este o diagonala in acest dreptunghi create de ML. Noi calculam unghiul dintre diagonala si width.</li></div>
					<div class="rtext"><li>De aici putem aplica functia arctg din matematica pentru calcularea unghiului.</li></div>
					<div class="rtext"><li>Impartim width la height => arctg(width/height) din asta rezulta un unghi.</li></div>
					<div class="rtext"><li>Acum facem calculele pentru cand sample-ul era drept (minWidth, minHeight).</li></div>
					<div class="rtext"><li>
						<div class="codee-window">
							<pre><code class="language-python">math.degrees(math.atan(object_width / object_height))</code></pre>
					</li></div>
					<div class="rtext"><li>Unghiul dat de <b class="bc">arctg</b> atunci cand sample-ul este <b class="bc">drept</b> este de <b class="bc">24.79 de grade</b></li></div>
					<div class="rtext"><li>Facem acelasi lucru si pentru cand sample-ul este la 90 de grade. (maxWidth, maxHeight)</li></div>
					<div class="rtext"><li>Unghiul dat de <b class="bc">arctg</b> atunci cand sample-ul este la unghiul de <b class="bc">90 de grade</b> este de <b class="bc">66.32 de grade</b></li></div>
				</div>
				<div class="rtext">&nbsp;</div>
				<div class="rtext"><b class="bc">2.</b> Dupa aflarea unghiului atunci cand sample-ul este drept si la 90 de grade trebuie cu o <b class="bc">formula matematica</b> sa aflam unghiul adevarat al sample-ului
				<div class="rtext"><li>Unghiul dat de arctg il vom scadea cu unghiul initial atunci cand sample-ul era drept (unghiul cel mai mic).</li></div>
				<div class="rtext"><li>orientation_angle = (arctg(object_width/object_height) - 24.79) / y</li></div>
				<div class="rtext"><li>Iar y este unghiul maxim (sample-ul este la 90 de grade) - unghiul minim (sample-ul este drept) / 90 de grade</li></div>
				<div class="rtext"><li>y = (66.32 - 27.79)/90 => y = 0.45955</li></div>
				<div class="rtext"><li>Aplicam la formula finala si iese (In Python): </li></div>
				<div class="rtext">
					<div class="codee-window">
						<pre><code class="language-python">orientation_angle = (math.degrees(math.atan(object_width/object_height))-24.79)/0.45955</code></pre>
				</div></div>
				<div class="rtext"><li>Formula matematica finala: <b class="bc">[arctg(object_width/object_height)-24.79]/0.45955</b></li></div>
				</div>
				<div class="rtext">&nbsp;</div>
				<div class="stext"><b class="bc">3. </b>Calcularea pozitiei Intake-ului bazat pe unghiul sample-ului (<b class="bc">Servo Intake</b>)</div>
				<div class="rtext"><li>Luam exemplul ca Intake-ul la pozitia de 0.5 este perfect drept si poate lua doar sample-uri in pozitie dreapta</li></div>
				<div class="rtext"><li>Trebuie masurata pozitia Intake-ului cand este la 90 de grade in stanga si tot la fel cand este la 90 de grade in dreapta</li></div>
				<div class="rtext"><li>Pozitia de 0.15 este unghiul 90 de grade spre stanga al Intake-ului.</li></div>
				<div class="rtext"><li>Pozitia de 0.85 este unghiul 90 de grade spre dreapta al Intake-ului.</li></div>
				<div class="rtext"><li>Astfel noi stim ca 0.85-0.5 = 0.35 are o rotatie de 90 de grade. Astfel impartim 0.35 la 90 de grade</li></div>
				<div class="rtext"><li>0.35/90 de grade = 0.0038 pozitie Intake/grad. Deci la fiecare 0.0038 pozitie la Intake adaugata Intake-ul se misca cu un 1 grad spre dreapta</li></div>
				<div class="rtext"><li>Formula asta poate fi aplicata si pentru alte Intake-uri cu pozitii de servo diferite.</li></div>
				<div class="stext"><b class="bc">Dupa ce ai terminat calibrarea camerei, intoarce-te inapoi la <u><a href="/model/prerequisites" style="text-decoration: none; color: white;">Getting Started</a></u></b></div>
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
			<div class="sub-section"><p style="color:#c67171;">Camera Calibration</p></div>
			<div class="docsLine"></div>
			
			<br></br>
			<div class="setup">Training ML</div>
			<div class="sub-section"><a href="/model/training">Training Dataset</a></div>
			<div class="sub-section"><a href="/model/training_structure">Training Structure</a></div>
			<div class="sub-section"><a href="/model/label_tool">Label Images Tool</a></div>
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
