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
			<img src="/assets/images/ai_star_alpha.png" width=50>
		</div>
		<div class="docs">Documentation</div>
		<div class="rbox">
			<div class="news">🎉 New features will be added the next few days. Stay tuned for the new updates!</div>
			<div class="temporarynews">For now, only the documentation is accessible.</div>
			<div class="title">Resources</div>
			<div class="text-container">
				<div class="stext">1. If you have <b class="bc">Low Quality Camera</b> and want to test the ML Model in <b class="bc">Python</b> Download This Model:</div>
				<div class="rtext"><div class="stext"><li><b>Machine Learning Model <u>[Low Quality Camera]</b></u> <b class="bc"><u>[For Python Testing]</u></li></b></div>
				<div class="downloadbtn"><a href="/assets/ai/low.pt">Download</a></div></div><br></br>
				<div class="stext">2. If you have <b class="bc">Medium -> High Quality Camera</b> and want to test the ML Model in <b class="bc">Python</b> Download This Model:</div>
				<div class="rtext"><div class="stext"><li><b>Machine Learning Model <u>[Normal Webcams]</u> <b class="bc"><u>[For Python Testing]</u></b></li></div>
				<div class="downloadbtn"><a href="/assets/ai/high.pt">Download</a></div></div>
				<div class="endLinee"></div>
				<br></br>
				<br></br>
				<div class="stext">3. If you have <b class="bc">Low Quality Camera</b> and want to test the ML Model on the <b class="bc">Robot</b> Download This Model:</div>
				<div class="rtext"><div class="ftext"><li><b>Machine Learning <u>[Low Quality Camera]</u> <b class="bc"><u>[Robot (Control Hub)]</u></li></b></div>
				<div class="downloadbtn"><a href="/assets/ai/low.tflite">Download</a></div><br></br></div>
				<div class="stext">4. If you have <b class="bc">Medium -> High Quality Camera</b> and want to test the ML Model on the <b class="bc">Robot</b> Download This Model:</div>
				<div class="rtext"><div class="stext"><li><b>Machine Learning Model <u>[Normal Webcam]</u> <b class="bc"><u>[Robot (Control Hub)]</u></b></li></div>
				<div class="downloadbtn"><a href="/assets/ai/high.tflite">Download</a></div></div>
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/ZB6vQ62KZT">Support -> Discord</a></div>
				<div class="end"></div>
			</div>
		</div>
		<div class="docs-container">
			<div class="setup">Setup</div>
			<div class="sub-section"><a href="/model/overview">Overview</a></div>
			<div class="sub-section"><a href="/model/prerequisites">Getting Started</a></div>
			<div class="sub-section"><p style="color:#c67171;">Resources</p></div>
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
