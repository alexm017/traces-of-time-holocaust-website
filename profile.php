<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>AlphaBit - OpenML</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/alphabit.ico" />
</head>
<body>
	<div class="uni-container">
		<div class="uni-topleft">
			<a href="/">Urmele Timpului</a>
		</div>
		<div class="ai-star-logo">
			<img src="/assets/images/holocaust-logo.png" width=35vw>
		</div>
		<div class="logout"><a href="logout/">Logout</a></div>
		<div class="reviews">Reviews</div>
		<div class="profile-pic"><img src="assets/images/user3.png" width=200></div>
		<div class="profile-name"><?php session_start();
					echo $_SESSION["teamname"];?></div>
		<div class="support">Support</div>
		<div class="privacy">Privacy</div>
	</div>
</body>
</html>
