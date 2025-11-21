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
			<div class="title">Training Dataset</div>
			<div class="text-container">
				<div class="ftext"><li><b>Training Dataset [3 Samples] <u>[Larger dataset]</u> (3671 Labeled Images) (343 Backgrounds)</li></b></div>
				<div class="downloadbtn"><a href="/assets/ai/large_dataset.rar">Download</a></div>
				<div class="stext"><li><b>Training Dataset [3 Samples] <u>[Medium dataset]</u> (2653 Labeled Images) (317 Backgrounds) [Recommended for your first time training]</li></b></div>
				
				<div class="downloadbtn"><a href="/assets/ai/medium_dataset.rar">Download</a></div>
				
				<div class="stext">Acest set de date a fost creat special pentru antrenarea modelelor de învățare automată și este disponibil în mod open-source. Imaginile din set sunt organizate în categorii (clase) bine definite, pentru a asigura o structură clară și ușor de utilizat în procesul de antrenare.></div>
				<div class="stext"><u><b>Puncte cheie:</b></u></li></div>
				<div class="rtext"><li><b>Echilibru între clase</b>: Pentru a preveni instabilitatea în timpul antrenării modelului, este esențial ca diferența în numărul de imagini dintre clase să nu depășească 5%. Un dezechilibru mai mare poate duce la o performanță suboptimală și la probleme de generalizare.</li></div>
				<div class="rtext"><li><b>Verificare și validare</b>: La finalul documentației, este inclus un script Python care parcurge toate imaginile din set și afișează numărul de imagini pentru fiecare clasă. Acest instrument de verificare ajută la menținerea integrității setului de date și asigură respectarea cerinței de echilibru.</li></div>
				<div class="stext"><b>Repartiția datelor și importanța validării în antrenarea unui AI</b></li></div>
				<div class="stext"><u>La antrenarea unui AI este esențială împărțirea setului de date în două părți principale:</u></div>
				<div class="rtext"><li><b>Date de antrenare (training data)</b>: Aceasta reprezintă 80% sau 90% din totalul datelor. Modelul "învață" din aceste date, adică identifică tipare și relații relevante pentru sarcina dată.</li></div>
				<div class="rtext"><li><b>Date de validare (validation data)</b>: Acestea reprezintă restul de 20% sau 10% din date. Ele sunt folosite pentru a evalua performanța modelului pe date pe care acesta nu le-a văzut în timpul antrenării.</li></div>
				
				<div class="stext"><b><u>De ce este importantă validarea?</u></b></li></div>
				<div class="rtext"><li><b>Evitarea overfitting-ului: Validarea permite detectarea situațiilor în care modelul se potrivește prea bine datelor de antrenare, dar nu reușește să generalizeze pe date noi.</li></div>
				<div class="rtext"><li><b>Alegerea parametrilor optimi</b>: Evaluând performanța pe setul de validare, poți ajusta hiperparametrii modelului pentru a îmbunătăți acuratețea și robustețea.</li></div>
				<div class="rtext"><li><b>Evaluare obiectivă</b>: Setul de validare oferă o estimare realistă a performanței modelului în situații reale, pe date necunoscute.</li></div>
				
				<div class="stext"><b><u>Alegerea între 80/20 și 90/10:</u></b></li></div>
				<div class="rtext"><li><b>80% antrenare / 20% validare</b>: Se recomandă atunci când dispui de un set de date suficient de mare. Un set de validare mai mare te ajută să evaluezi mai precis performanța modelului.</li></div>
				<div class="rtext"><li><b>90% antrenare / 10% validare</b>: Este preferabil când setul de date este mai restrâns. Astfel, modelul beneficiază de mai multe exemple pentru învățare, însă evaluarea se face pe un set de validare mai mic, ceea ce poate oferi o imagine puțin mai puțin robustă a performanței.</li></div>
				
				<div class="stext"><b>Python Script Pentru Verificarea Echilibrului Intre Clase</b></div>
				<div class="stext">
				<div class="codee-window">
					<pre><code class="language-python" >import os
import xml.etree.ElementTree as ET
from termcolor import colored

voc_labels_dir = "datasets/AI/train/images"  # Path to your VOC XML label files
yolo_labels_dir = "datasets/AI/train/labels"  # Path to save YOLO format label files
image_dir = "datasets/AI/train/images"  # Path to your images

os.makedirs(yolo_labels_dir, exist_ok=True)

def convert_bbox(size, box):
    dw = 1.0 / size[0]
    dh = 1.0 / size[1]
    x = (box[0] + box[1]) / 2.0
    y = (box[2] + box[3]) / 2.0
    w = box[1] - box[0]
    h = box[3] - box[2]
    return (x * dw, y * dh, w * dw, h * dh)

class_mapping = {
    "YellowSample": 0,
    "BlueSample": 1,
    "RedSample": 2
}

yellow_count = 0
blue_count = 0
red_count = 0
total_labeled_images = 0
duplicates = 0
lastFile = ""
hy = 0
hb = 0
hr = 0
maxl = 0
b_differece = 0
r_differece = 0
y_differece = 0

for file in os.listdir(voc_labels_dir):
    if file.endswith(".xml"):
        xml_path = os.path.join(voc_labels_dir, file)
        tree = ET.parse(xml_path)
        root = tree.getroot()

        yolo_path = os.path.join(yolo_labels_dir, file.replace(".xml", ".txt"))
        with open(yolo_path, "w") as f:
            for obj in root.findall("object"):
                class_name = obj.find("name").text

                if class_name in class_mapping:
                    class_id = class_mapping[class_name]
                    if class_id == 0:
                        yellow_count += 1
                    elif class_id == 1:
                        blue_count += 1
                    elif class_id == 2:
                        red_count += 1
                    
                    total_labeled_images += 1
                    if lastFile == file:
                        duplicates += 1
                else:
                    print(f"Warning: Unknown class '{class_name}' in {file}")
                
                lastFile = file

if yellow_count > blue_count and yellow_count > red_count:
    maxl = yellow_count
elif blue_count > yellow_count and blue_count > red_count:
    maxl = blue_count
elif red_count > yellow_count and red_count > blue_count:
    maxl = red_count

if maxl == yellow_count:
    b_differece = maxl - blue_count
    r_differece = maxl - red_count
elif maxl == blue_count:
    y_differece = maxl - yellow_count
    r_differece = maxl - red_count
elif maxl == red_count:
    y_differece = maxl - yellow_count
    b_differece = maxl - blue_count

if maxl * 0.05 &lt; b_differece or maxl * 0.05 &lt; r_differece or maxl * 0.05 &lt; y_differece:
    print(colored("Warning: There is a difference of more than 5% between the classes.", "red"))
    print(colored("Please check the labeled images and make sure that the classes are balanced.", "red"))
else:
    print(colored("Classes are balanced.", "green"))

print("")
print("Total labeled images: " + colored(str(total_labeled_images-duplicates), "green"))
print(colored("Yellow samples: ", "yellow") + colored(str(yellow_count), "green") + " | [Difference]: " + colored(str(y_differece), "red"))
print(colored("Blue samples: ", "blue") + colored(str(blue_count), "green") + " | [Difference]: " + colored(str(b_differece), "red"))
print(colored("Red samples: ", "red") + colored(str(red_count), "green") + " | [Difference]: " + colored(str(r_differece), "red"))
				</pre></code>
				</div></div>
				<br></br>
				
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/jYR3fyRRjd">Support -> Discord</a></div>
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
			<div class="sub-section"><p style="color:#c67171;">Training Dataset</p></div>
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
