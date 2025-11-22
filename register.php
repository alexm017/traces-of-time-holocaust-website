<?php
$servername = "localhost";
$username = "root";
$password = "72hFig28JGo0K";
$database = "alphabit";

$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "signup\n";
fwrite($record_file, $txt);
fclose($record_file);

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_COOKIE["SESSION"]) == TRUE && $_COOKIE["SESSION"] == "Logged"){
	header("Location: /");
}

$password = $conn -> real_escape_string($_POST["password"]);
$email = $conn -> real_escape_string($_POST["email"]);
$teamname = $conn -> real_escape_string($_POST["teamname"]);

$sql = "INSERT INTO users (password, email, teamname) VALUES ('" . $password . "', '" . $email . "', '" . $teamname . "');";

if($password != "" && $email != "" && $teamname != ""){
	$result_query = $conn -> query($sql);
	if($result_query === TRUE){
		header("Location: login");
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Urmele Timpului - Creeaza Cont</title>
	<link rel="stylesheet" href="assets/css/rstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/holocaust-logo.ico" />
</head>
<body>
    <div class="background-container">
	    <section class="container">
		<div class="login-container">
		    <div class="circle circle-one"></div>
		    <div class="form-container">
		    	<div class="center-login">
		        	<h1 class="opacity">Creeaza Cont</h1>
		        </div>
		        <form id="register-form" action="register" method="post">
		            <input type="email" name="email" placeholder="ADRESA E-MAIL" required/>
		            <input type="text" name="teamname" placeholder="NUME UTILIZATOR" required/>
		            <input type="password" id="passwordn" placeholder="PAROLA" required/>
		            <input type="password" id="confirmPassword" name="password" placeholder="REPETA PAROLA" required/>
		            <span id="message" class="error"></span><br><br>
		            
		            <button type="submit" class="opacity">SUBMIT</button>
		        </form>
		        <div class="register-forget opacity">	
		            <a href="/">Intoarce-te</a>
		            <a href="login">Intra In Cont</a>
		        </div>
		    </div>
		    <div class="circle circle-two"></div>
		</div>
		<div class="theme-btn-container"></div>
	    </section>
     </div>
     <script>
        const password = document.getElementById('passwordn');
        const confirmPassword = document.getElementById('confirmPassword');
        const message = document.getElementById('message');
        const form = document.getElementById('register-form');

        confirmPassword.addEventListener('input', () => {
            if (confirmPassword.value === password.value && password.value != "") {
                message.textContent = "Passwords match!";
                message.className = "success";
            } else {
                message.textContent = "Passwords do not match.";
                message.className = "error";
            }
        });

        form.addEventListener('submit', (event) => {
            if (password.value !== confirmPassword.value) {
                event.preventDefault();
                message.textContent = "Passwords do not match.";
                message.className = "error";
            }
        });
    </script>
</body>
</html>
