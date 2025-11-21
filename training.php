<?php
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "training\n";
$date = date('m/d/Y h:i:s a', time());
$txt2 = "trainingIP: " . $_SERVER["REMOTE_ADDR"] . " date: " . $date . "\n";
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
	<title>AlphaBit Training</title>
	<link rel="stylesheet" href="assets/css/tstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/alphabit.ico" />
</head>
<body>
	<noscript>You need to enable JavaScript to run this website.</noscript>
	<div class="background-container">
		<div class="ai-star-logo">
			<img src="assets/images/ai_star_alpha.png" width=55>
		</div>
		<div class="alphabit-topleft">
			<a href="/">AlphaBit OpenML</a>
		</div>
		<div class="welcome-text">
			Every photo you share sharpens our robot’s vision ✨.
			<p>Let’s dominate the field!</p>
		</div>
		
		<div class="background-button">
			<a href="upload">Upload image</a>
		</div>
		<div class="learn-text">
			Upload images of any objects, room or location.
			<p>Feel free to capture anything you want</p>
		</div>
	</div>
</body>
</html>
