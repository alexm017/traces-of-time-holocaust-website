<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "prereq\n";
$txtt = "prereq";
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
			<div class="title">Getting Started</div>
			<div class="text-container">
				<div class="stext"><b class="bc">1. Visual Studio Code</b></div>
				<div class="rtext">1. Descarca <b class="bc">Visual Studio Code</b>. (Recomamdat)
				<div class="downloadbtn"><a href="https://code.visualstudio.com/docs/?dv=win64user">Download</a></div>
				</div>
				
				<div class="stext">2.<b class="bc"> Descarca Python sau Python 3.7 sau mai nou </b>(tested on Python 3.8/3.9/3.10/3.11)</div>
				<div class="rtext">
				<div class="downloadbtn"><a href="https://www.python.org/ftp/python/3.12.9/python-3.12.9-amd64.exe">Download</a></div></div>
				<div class="stext"><b class="bc">3. Configureaza Visual Studio Code & Terminalul </b></div>
				<div class="rtext">1. Open Folder (Este folderul unde doresti sa ai proiectul OpenML)</div>
				<div class="rtext">2. Open New Terminal</div>
				<div class="rtext"><img src="/assets/ai/terminal.png" width=500 style="border-radius: 10px;"></div>
				<div class="rtext">3. Install the dependencies</div>
				<div class="stext"><b class="bc">4. Dependencies (foloseste pip3 pentru python3)</b></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >pip install opencv-python ultralytics numpy</code></pre>
				</div></div>
				<div class="stext">Or</div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >pip install opencv-python==4.8.0.76
pip install ultralytics==8.0.196
pip install numpy==1.24.4		</code></pre>
				</div></div>
				<div class="stext"><u>Daca OpenCV nu functioneaza incearca sa il reinstalezi folosind metoda de mai sus (sau reincearca folosind metode de mai jos)</u></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >pip install opencv-python </code></pre>
				</div></div>
				<div class="stext">Example </div>
				<div class="stext"><img src="/assets/ai/show_terminal_2.png" width="600" style="border-radius: 10px;"></div>
				<div class="stext">5.<b class="bc"> Hardware Requirements</b></div>
				<div class="rtext">
				<li>Este nevoie de un Webcam conectat la dispozitiv (codul foloseste cv2.VideoCapture(0), asigură-te că indexul camerei 0 este corect pentru configurația ta.)</li>
				</div>
				<div class="rtext">
				<li>Putere CPU suficientă pentru inferență în timp real (se recomandă o placă grafică cu suport CUDA pentru performanțe mai bune) pentru Testare și Control Hub este, de asemenea, acceptat.
</li>
				</div>
				<div class="stext"><b class="bc">6. Test Camera Python Script</b></div>
				<div class="rtext"><li>Creează un script Python cu numele <u>camera_test.py</u> și adaugă următorul cod în el</li></div>
				<div class="stext"><u>camera_test.py</u></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >import cv2
cap = cv2.VideoCapture(0) #Daca nu functioneaza, incrementeaza numarul cu 1 pana cand camera functioneaza si apare pe ecran
ret, frame = cap.read()
print("Camera working:", ret)
cap.release()</code></pre>
				</div></div>
				<div class="stext">
					Apoi</div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >python camera_test.py</pre></code></div></div>
				
				<div class="stext">7.<b class="bc">Dacă camera funcționează, descarcă modelul ML din <u>Resources</u></b></div>
				<div class="rtext"><li>Daca ai o camera de calitate <b class="bc">Foarte scăzută / Scăzută</b> descarca <u><a href="/model/resources" style="text-decoration: none; color: white;">primul ML</a></u></li></div>
				<div class="rtext"><li>Daca ai o camera de calitate <b class="bc">Medium / Foarte buna </b> descarca <u><a href="/model/resources" style="text-decoration: none; color: white;">al doilea ML</a></u></li></div>
				<div class="rtext"><li><u>Asigura-te ca descarci modelul cu <b class="bc">[Python Testing]</b> pentru calitatea camerei tale [Conteaza foarte mult]</u></li></div>
				
				<div class="stext">8. <b class="bc">Calibrate The Camera</b></div>
				<div class="rtext"><li>Accesează <u><a href="/model/cameracalib" style="text-decoration: none; color: white">Camera Calibration</a></u>, iar apoi intoarce-te dupa ce ai terminat calibrarea camerei.</li></div>

				<div class="stext">9.🎉Daca ai parcurs cu <b class="bc">success</b> toți pașii, poți trece la <b class="bc">Python Code For Detection</b> pentru a testa modelul OpenML 🎉 </div>
				<div class="rtext"><li>Accesează <u><a href="/model/pythonml" style="text-decoration: none; color: white;">Python Code For Detection</a></u></li></li></div>
				
				<div class="stext">10.<b class="bc"> Note suplimentare</b></div>
				<div class="rtext">
				<li>Codul utilizează modulele math și cv2 pentru calcule geometrice și operațiuni cu camera. Acestea sunt incluse în dependențele menționate mai sus.</li>
				</div>
				<div class="rtext">
				<li>Dacă întâmpini erori legate de CUDA, asigură-te că ai drivere GPU compatibile și că PyTorch/CUDA este instalat (Ultralytics YOLO se ocupă, de obicei, de acest aspect automat).</li>
				</div>
				<div class="rtext">
				<li>Ajustează valorile fov_degrees, first_angle si y pe baza calibrării camerei tale.</li>
				</div>
				
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/ZB6vQ62KZT">Support -> Discord</a></div>
				<div class="end"></div>
			</div>
		</div>
		<div class="docs-container">
			<div class="setup">Setup</div>
			<div class="sub-section"><a href="/model/overview">Overview</a></div>
			<div class="sub-section"><p style="color:#c67171;">Getting Started</p></div>
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
			<div class="sub-section"><a href="/model/pythonml">Python Code For Detection</a></div>
			<div class="sub-section"><a href="/model/android_studio">Android Studio Implementation</a></div>
			<div class="sub-section"><a href="/model/robot_control">Control Intake Using The OpenML</a></div>
		</div>
	</div>
</body>
</html>
