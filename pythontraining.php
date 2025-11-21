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
			<div class="title">Python Code For Training</div>
			<div class="text-container">
				<div class="stext"><b>After you completed the steps before, you can now train the ML model.</b></div>
				<div class="stext">Fișierul <u><b>data.yaml</u></b> reprezintă un element esențial în procesul de configurare a mediului de antrenare pentru modelul de ML. Acesta centralizează informațiile legate de structura setului de date și parametrii necesari pentru ca scriptul de training să ruleze corect. În esență, fișierul definește căile către imaginile de antrenare și validare, numărul de clase și denumirile acestora, facilitând astfel accesul și organizarea datelor într-o manieră standardizată.</div>
				<div class="stext"><u>data.yaml</u>  <b>(Simple) [Recommended For Starting]</b>
				<div class="codee-window">
					<pre><code class="language-python">
path: AI
train: train/images
val: val/images
nc: 3

names: ['YellowSample', 'BlueSample', 'RedSample']
					</pre></code>
				</div></div>
				
				<div class="rtext"><li><b>train și val: </b>Aceste intrări indică calea către folderele care conțin imaginile pentru antrenare și validare. Astfel, scriptul știe exact de unde să preia datele. </li></div>
				<div class="rtext"><li><b>nc: </b>Specifică numărul de clase din setul de date. Această informație este vitală pentru configurarea corectă a ultimului strat al rețelei neuronale. </li></div>
				<div class="rtext"><li><b>names: </b>O listă de etichete (nume de clase) care corespund identificatorilor numerici utilizați în fișierele de etichete generate, de exemplu, cu aplicația labelImg. </li></div>
				<br><div class="stext">Sau versiunea [BETA] \/.</div></br>
				
				<div class="stext"><u>data.yaml</u> <b>(Advanced) [BETA] [Not really stable] [!Use only for large datasets!]</b>
				<div class="codee-window">
					<pre><code class="language-python">
path: AI
train: train/images
val: val/images
nc: 3

lr0: 0.001
lrf: 0.1
warmup_epochs: 5

degrees: 2.5
perspective: 0.0
scale: 0.01
fliplr: 0.05
copy_paste: 0.0

box: 0.07
cls: 0.4
dfl: 1.5

names: ['YellowSample', 'BlueSample', 'RedSample']
					</pre></code>
				</div></div>
				<div class="stext">Fișierul <u><b>ml_training.py</b></u> este componenta centrală care orchestrează întregul proces de antrenare și validare a modelului YOLOv8n, folosind biblioteca Ultralytics și infrastructura PyTorch. Iată o descriere tehnică a fiecărei secțiuni și a parametrilor utilizați:</div>
				<div class="stext"><b>1. Importul modulelor și setările de bază:</b></div>
				<div class="rtext">La început se importă clasa YOLO din biblioteca Ultralytics, esențială pentru manipularea și antrenarea rețelelor YOLO, precum și PyTorch, care gestionează operațiunile tensoriale și execuția pe GPU. Variabila ce indică calea către fișierul de configurare (data.yaml) conține toate detaliile despre dataset (calea către imaginile de antrenare și validare, numărul de clase și denumirile acestora). În plus, setarea dispozitivului la "cuda" asigură faptul că antrenarea se va efectua pe GPU, accelerând semnificativ calculele.</div>
				
				<div class="stext"><b>2. Inițializarea modelului:</b></div>
				<div class="rtext">Modelul este instanțiat folosind un fișier de greutăți preantrenate (yolov8n.pt). Această abordare oferă un punct de plecare robust, deoarece rețeaua beneficiază de cunoștințe pre-extrase, accelerând procesul de convergență și îmbunătățind performanța inițială.</div>
				
				<div class="stext"><b>3. Configurarea antrenării:</b></div>
				<div class="stext">Procesul de training este declanșat cu o serie de hiperparametri critici, fiecare jucând un rol esențial în optimizarea performanței modelului:</div>
				<div class="rtext">
					<div class="stext"><li><b>Dataset-ul: </b>Fișierul data.yaml este folosit pentru a localiza imaginile și etichetele aferente, asigurând coerența între datele de antrenare și validare. </li></div>
					<div class="stext"><li><b>Epocile (epochs): </b>Setate la 150, acestea reprezintă numărul total de cicluri complete prin întregul set de date de antrenare. Fiecare epocă oferă modelului oportunitatea de a ajusta greutățile pe baza tuturor datelor disponibile, contribuind la stabilirea convergenței. </li></div>
					<div class="stext"><li><b>Dimensiunea imaginilor (imgsz): </b>O valoare fixă de 640 indică faptul că toate imaginile vor fi redimensionate la 640x640 pixeli, asigurând uniformitate în procesul de antrenare și facilitând gestionarea inputului rețelei. </li></div>
					<div class="stext"><li><b>Automatic Mixed Precision (amp): </b>Activarea acestei funcționalități permite utilizarea combinată a preciziei de 16 și 32 de biți, reducând consumul de memorie și accelerând antrenarea, fără a compromite semnificativ acuratețea modelului. </li></div>
					<div class="stext"><li><b>Batch size: </b>Cu o valoare de 12, acest parametru definește numărul de imagini procesate simultan înainte de actualizarea parametrilor modelului. Un batch size optim ajută la stabilizarea gradientelor, oferind un echilibru între performanța de calcul și stabilitatea optimizării. </li></div>
					<div class="stext"><li><b>Single Class vs. Multi-Class: </b>Parametrul single_cls este setat la fals, indicând faptul că modelul este pregătit să distingă între mai multe clase de obiecte, ceea ce implică o complexitate mai mare în învățare. </li></div>
					<div class="stext"><li><b>Patience: </b>Valoarea de 100 epoci specifică o strategie de early stopping, întrerupând antrenarea dacă nu se înregistrează îmbunătățiri pe setul de validare pe o perioadă extinsă, contribuind astfel la evitarea overfitting-ului. </li></div>
					<div class="stext"><li><b>Optimizator și hiperparametri aferenți: </b>Alegerea optimizatorului Adam, împreună cu setările pentru momentum (0.9) și weight decay (0.0005), controlează modul în care se ajustează greutățile modelului. Aceste setări sunt esențiale pentru a asigura o convergență eficientă și pentru a preveni acumularea unor valori de greutate excesiv de mari. </li></div>
					<div class="stext"><li><b>Parametrul specific augmentării (close_mosaic): </b>Această setare ajustează modul de aplicare a augmentării de tip mosaic, o tehnică ce combină mai multe imagini pentru a crește diversitatea datelor. Închiderea acestei tehnici după un anumit număr de epoci permite modelului să se concentreze pe învățarea detaliilor fine odată ce a beneficat de un set diversificat de date inițial. </li></div>
				</div>
				<div class="stext"><b><u>ml_training.py</u></b>
				<div class="codee-window">
					<pre><code class="language-python">from ultralytics import YOLO
import torch

data_yaml = 'data.yaml' 

device = 'cuda'

def main():
    model = YOLO("yolov8n.pt")
    model.train(data='data.yaml', epochs=150, imgsz=640,amp=True, device=device, batch=12, single_cls=False,patience=100, optimizer='Adam', momentum=0.9, weight_decay=0.0005, close_mosaic=25)
    model.val(data=data_yaml)
    
if __name__ == '__main__': 
    main()			</pre></code>
    				</div></div>
    				<br></br>
    				<div class="stext"><b>Example</b></div>
    				<div class="stext"><img src="/assets/ai/visual.png" width=750 style="border-radius: 10px;"></div>
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
			<div class="sub-section"><a href="/model/label_tool">Label Images Tool</a></div>
			<div class="sub-section"><p style="color:#c67171;">Python Code For Training</p></div>
			
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
