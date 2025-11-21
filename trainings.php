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
			<div class="title">Training Structure</div>
			<div class="text-container">
				<div class="stext"><b>Directory Structure For Machine Learning Training</b></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >OpenML/ #Folderul principal pentru proiectul OpenML
└── datasets/ #Folderul ce contine training & validation datasets
    └── AI/
        ├── train/
        │   ├── images/  #Imagini pentru antrenare ML
        │   └── labels/  #Fiecare imagine este etichetata pentru ML
        └── val/
            ├── images/  #Imaginile din val sunt folosite pentru validare
            └── labels/  #Fiecare imagine din val este etichetata pentru ML</code></pre>
				</div></div>
				<div class="stext"><b class="bc">Explicații detaliate:</b></div>
				<div class="rtext"><li><b class="bc">Folderul principal "OpenML":</b> Acesta este directorul rădăcină care conține toate datele și subfolderele necesare.</li></b></div>
				<div class="rtext"><li><b class="bc">"datasets/AI":</b> În acest director se află dataset-ul folosit pentru antrenarea modelului AI.</li></div>
				<div class="rtext"><li><b class="bc">Subfolderele "train" și "val":</b></li>
					<div class="rtext"><b class="bc"><li>train: </b>Conține datele pe care modelul le folosește pentru a învăța (ex. imagini și etichete).</li></div>
					<div class="rtext"><b class="bc"><li>val: </b>Conține datele utilizate pentru validarea modelului, adică pentru a evalua performanța acestuia pe date noi, pe care nu le-a văzut în timpul antrenării.</li></div>
				</div>
				
				<div class="rtext"><li><b class="bc">În fiecare folder "train" și "val":</b></li>
					<div class="rtext"><b class="bc"><li>images: </b>Aici se găsesc imaginile reale training/validare.</li></div>
					<div class="rtext"><b class="bc"><li>labels: </b>Aici se află fișierele de etichete (annotation files) care descriu obiectele din imagini.</li></div>
				</div>
				
				<div class="stext"><b class="bc">Etichete pentru YOLOv8n</b></div>
				<div class="rtext">Pentru a antrena un model de tip YOLOv8n, fișierele din folderul labels trebuie să conțină etichetele în formatul corespunzător:</div>
				<div class="rtext"><li><b class="bc">Formatul etichetelor (YOLO format):</b></li>
					<div class="rtext"><li>Fiecare linie dintr-un fișier de etichetă reprezintă un obiect detectat.</li></div>
					<div class="rtext"><li>Formatul este:</li>
						<div class="stext">
							<div class="codee-window">
								<pre><code class="language-python" >&lt;id_clasa> &lt;x_centru> &lt;y_centru> &lt;lățime> &lt;înălțime></code></pre>
							</div>
						</div>
					</div>
					<div class="rtext"><li>Valorile pentru coordonate (x_centru, y_centru, lățime, înălțime) sunt normalizate (împărțite la dimensiunile imaginii).</li></div>
					<div class="rtext"><li>&lt;id_clasa> este un număr întreg care reprezintă clasa obiectului.</li></div>
				</div>
				
				
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
			<div class="sub-section"><p style="color:#c67171;">Training Structure</p></div>
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
