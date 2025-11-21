<?php
session_start();
$PASS_KEY = $_POST["password"];
$stored_password = "test"; #$8}Ni(doqM5+jhq(&%CE>U*8
if(isset($_POST["password"])){
	if($PASS_KEY===$stored_password){
		$_SESSION["loggedIn"] = "DeveloperLogin";
	}
}

if(isset($_FILES["file"])) {
    $file = $_FILES["file"];
    
    if($file['error'] !== UPLOAD_ERR_OK) {
        die("Error code: " . $file['error']);
    }

    $save_directory = '/var/www/html/saved_data/';
    
    if(!file_exists($save_directory)) {
        mkdir($save_directory, 0777, true);
    }

    $tmp_name = $file['tmp_name'];
    $target_file = $save_directory . basename($file['name']);

    if(move_uploaded_file($tmp_name, $target_file)) {
        echo "File uploaded to: " . htmlspecialchars($target_file);
    } else {
        echo "Upload failed! Check directory permissions.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AlphaBit Training-Developer</title>
	<link rel="stylesheet" href="assets/css/upload_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/alphabit.ico" />
</head>
<body>
	<noscript>You need to enable JavaScript to run this website.</noscript>
	<div class="background-container">
		<div class="welcome-logo">
			<a href="/trainingData/index.php"><img src="assets/images/image-removebg-preview.png" width=110 height=55></a>
		</div>
		<?php
		if($_SESSION["loggedIn"] != "DeveloperLogin"){
			echo '
			<div class="passkey-text">
				Enter password
			</div>
			 <form action="/trainingData/developer.php" method="post">
			  		<input type="password" id="password" name="password" placeholder="PASSWORD" class="passbox" required>
			  		<input type="submit" value="Submit" class="submitbox">
			 </form>';
		}else{
			echo '
			<div class="logout-button">
				<a href="/trainingData/logout.php">Logout</a>
			</div>
			<div class="availableKits">
				Available kits to download
			</div>
			<div class="gatherTrainingData-button">
				- Gather Training Data Kit
			</div>
			<div class="gatherTrainingData-download">
				<a href="data/gatherTrainingData.zip">Download</a>
			</div>
			<div class="alpha-button">
				- AlphaBit IntoTheDeep (2024-2025) Code
			</div>
			<div class="alpha-download">
				Download
			</div>
			<div class="trainingStats">
				Training Stats
			</div>
			<div class="redSampleStats">
				<font color="red">Red</font> Samples: N/A images
			</div>
			<div class="blueSampleStats">
				<font color="#0070ff">Blue</font> Samples: N/A images
			</div>
			<div class="yellowSampleStats">
				<font color="yellow">Yellow</font> Samples: N/A images
			</div>
			<div class="totalSampleStats">
				Total Samples: N/A images
			</div>
			<div class="tasksText">
				Tasks list
			</div>
			<div class="imageTransfer">
				Transfer training data
			</div>
			<div class="uploadData">Upload Data</div>
			<div class="uploadForm">
			    <form method="post" action="developer.php" enctype="multipart/form-data">
				<input type="file" name="file"/> <!-- Changed name to "file" -->
				<input type="submit" value="Upload" class="uploadButton">
			    </form>
			</div>
			<div class="downloadData">Download Data</div>

			';
		}?>
	</div>
</body>
</html>
