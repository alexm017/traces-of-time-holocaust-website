<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "python\n";
$txtt = "python";
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
	<!-- Highlight.js CSS Theme -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/atom-one-dark.min.css">
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
			<div class="title">Python Code For Detection</div>
			<div class="text-container">
				<div class="stext"><b class="bc">[!]</b> Camera trebuie sa fie neaparat <u>perpendiculara</u> cu terenul. <b class="bc">[!]</b></div>
				<div class="stext"><b class="bc">[!]</b> Camera trebuie sa ofere o vedere in 2D (Exemplu in <u><a href="/model/cameracalib" style="text-decoration:none; color: white;">Camera Calibration</a></u>). <b class="bc">[!]</b></div>
				<div class="stext"><b class="bc">[!]</b> Camera trebuie sa fie deasupra sample-ului pentru a calcula orientarea sample-ului. <b class="bc">[!]</b></div>
				<div class="stext"><b><u>ml_testing.py</u></b></div>
				<div class="code-window">
					<pre><code class="language-python" >#Pentru a opri codul trebuie apasata tasta Q
import cv2
from ultralytics import YOLO
import math

model = YOLO("C:\\Users\\&lt;USER>\\Desktop\\OpenML\\high.pt") #Modifica aici cu Path-ul tau curent si cu modelul OpenML descarcat

focal_length_pixels = 600
object_real_width = 3.8
camera_angle_from_object = 0
fov_degrees = 60 #Aici se pune FOV-ul camerei. Uita-te pe Camera Calibration pe a afla cum se calculeaza
object_width = 0
object_height = 0

maxWidth = 0
minWidth = 3000

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

        middle_of_the_object_pos = (x2 + x1) / 2
        middle_of_the_screen = 640 / 2 #640x480 640 Este distanta orizontala si masoara mijlocul imaginii orizontal. Daca testati pe o rezolutie de 320x240, schimbati in 320 de la 640
        offset = middle_of_the_object_pos - middle_of_the_screen
        camera_angle_from_object = (offset / 640) * fov_degrees #Aici masoara unghiul sample-ului fata de camera orizontal. (Se poate si vertical, acelasi lucru, dar daca rezolutia este 640x480, in loc de 640 este 480

        first_angle = 0.00 #Aici pune cel mai mic unghi calculat matematic cand ai urmati pasii de pe pagina Camera Calibration. Sample-ul este drept arctg(width/height) => unghi
        y = 0.00 #Aici calculezi (max angle - min angle)/90 de grade. Exemplu: (66.32-24.79)/90 => 0.459555
        raw_angle = math.degrees(math.atan(object_width / object_height))
        object_angle = (raw_angle - first_angle) / y
        servo_position = 0.5 + (object_angle * 0.0038) #Calcularea Servo_Pos la fel ca pe pagina Camera Calibration
        
        cv2.putText(frame_with_results, f"Sample Angle: {object_angle:.2f}",
                    (x1, y1 + 80),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.6, (0, 255, 0), 2)
        
        cv2.putText(frame_with_results, f"Servo Pos: {servo_position:.2f}",
                    (x1, y1 + 100),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.6, (0, 255, 0), 2)
        
    cv2.imshow('OpenML - Real-time Detection', frame_with_results)

    if cv2.waitKey(1) &amp; 0xFF == ord('q'): # Apasa Q pentru a iesi din cod
        break

cap.release()
cv2.destroyAllWindows()
					</code></pre>
				</div>
				<div class="stext">
					Acest cod folosește YOLO pentru a detecta un obiect în timp real folosind o cameră și calculează poziția acestuia față de centru, determinând astfel unghiul său și poziția unui servomotor pentru urmărire.
				</div>
				<div class="stext">
					<b>Cum funcționează?</b>
				</div>
				<div class="stext">
					<b>1. Inițializare</b>
				</div>
				<div class="rtext">
					<li>Se încarcă modelul YOLO antrenat pentru recunoașterea obiectului dorit.</li>
				</div>
				<div class="rtext">
					<li>Se definește câmpul vizual al camerei și alte variabile necesare pentru calcule.</li>
				</div>
				<div class="rtext">
					<li>Se deschide camera pentru capturarea imaginilor în timp real.</li>
				</div>
				<div class="stext">
					<b>2. Procesare continuă</b>
				</div>
				<div class="rtext">
					<li>Se preia fiecare cadru video și se trimite la modelul YOLO pentru detectarea obiectului.</li>
				</div>
				<div class="rtext">
					<li>Dacă obiectul este găsit, se obține un „bounding box” (coordonatele care încadrează obiectul).</li>
				</div>
				<div class="rtext">
					<li>Se calculează lățimea și înălțimea obiectului în pixeli.</li>
				</div>
				<div class="stext">
					<b>3. Calcularea unghiului și a poziției</b>
				</div>
				<div class="rtext">
					<li>Se compară poziția obiectului cu centrul ecranului pentru a determina cât de departe este de axa centrală.</li>
				</div>
				<div class="rtext">
					<li>Pe baza dimensiunilor obiectului detectat, se calculează unghiul său real.</li>
				</div>
				<div class="rtext">
					<li>Se ajustează unghiul calculat pentru a obține o valoare corectă a poziției servomotorului.</li>
				</div>
				<div class="stext">
					<b>4. Afișarea rezultatelor</b>
				</div>
				<div class="rtext">
					<li>Se desenează informațiile pe imagine, cum ar fi lățimea, înălțimea și unghiul obiectului.</li>
				</div>
				<div class="rtext">
					<li>Se afișează imaginea procesată într-o fereastră.</li>
				</div>
				<div class="stext">
					<b>5. Ieșire și oprire</b>
				</div>
				<div class="rtext">
					<li>Programul rulează continuu până când utilizatorul apasă tasta 'q'.</li>
				</div>
				<div class="rtext">
					<li>Se închide camera și se eliberează resursele.</li>
				</div>
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/ZB6vQ62KZT">Support -> Discord</a></div>
				<div class="end"></div>
			</div>
		</div>
		<div class="docs-container">
			<div class="setup">Setup</div>
			<div class="sub-section" ><a href="/model/overview">Overview</a></div>
			<div class="sub-section"><a href="/model/prerequisites">Getting Started</a></div>
			<div class="sub-section"><a href="/model/resources">Resources</a></div>
			<div class="sub-section"><a href="/model/cameracalib">Camera Calibration</a></div>
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
			<div class="sub-section"><p style="color:#c67171;">Python Code For Detection</p></div>
			<div class="sub-section"><a href="/model/android_studio">Android Studio Implementation</a></div>
			<div class="sub-section"><a href="/model/robot_control">Control Intake Using The OpenML</a></div>
		</div>
	</div>
	<!-- Include Highlight.js library -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
</body>
</html>

