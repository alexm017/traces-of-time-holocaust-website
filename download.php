<?php
$download_option = $_GET["option"];
if(isset($_GET["option"])){
	if($download_option == "1"){
		header("Location: trainingData/data/gatherTrainingData.zip");
	}
}
?>
