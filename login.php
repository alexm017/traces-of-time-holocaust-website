<?php
$servername = "localhost";
$username = "root";
$password = "72hFig28JGo0K";
$database = "alphabit";

$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "login\n";
fwrite($record_file, $txt);
fclose($record_file);

$conn = new mysqli($servername, $username, $password, $database);
session_start();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $conn -> real_escape_string($_POST["email"]);
$password = $conn -> real_escape_string($_POST["password"]);

$sql = "SELECT * from users where email ='" . $username . "' and password='" . $password . "';";
$get_team_name_sql = "SELECT teamname FROM users where email = '" . $username . "';";
if($username != ""){
	if($password != ""){
		$query_result = $conn -> query($sql);
		if($query_result->num_rows > 0){
			$_SESSION["loggedIn"] = "userLoggedIn";
			$query_result_teamname = $conn -> query($get_team_name_sql);
			if($query_result_teamname -> num_rows > 0){
				$row = $query_result_teamname->fetch_assoc();
				$teamname = $row['teamname'];
				$_SESSION["teamname"] = $teamname;
			}
			setcookie(session_name(),session_id(),time()+86400);
			header("Location: /");
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Urmele Timpului - Intra In Cont</title>
	<link rel="stylesheet" href="assets/css/lstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/holocaust-logo.ico" />
  <link rel="stylesheet" href="/assets/css/chat.css">
</head>
<body>
    <div class="background-container">
	    <section class="container">
		<div class="login-container">
		    <div class="circle circle-one"></div>
		    <div class="form-container">
		    	<div class="center-login">
		        	<h1 class="opacity">Intra In Cont</h1>
		        </div>
		        <form id="login-form" action="login" method="post">
		            <input type="email" name="email" placeholder="ADRESA E-MAIL" required/>
		            <input type="password" name="password" placeholder="PAROLA" required/>
		            <button type="submit" class="opacity">SUBMIT</button>
		        </form>
		        <div class="register-forget opacity">
		            <a href="register">Creeaza cont</a>
		            <a href="forgotpassword">Recupereaza Parola</a>
		        </div>
		    </div>
		    <div class="circle circle-two"></div>
		</div>
		<div class="theme-btn-container"></div>
	    </section>
    </div>

  <!-- Chat Widget -->
  <div id="chat-bubble" class="chat-bubble">
    Psst... vrei să încerci Asistentul AI?
  </div>
  <button id="chat-toggle-btn" class="chat-toggle-btn" aria-label="Deschide Chat AI">
    <i class="fas fa-comment-dots"></i>
  </button>

  <div id="chat-window" class="chat-window">
    <div class="chat-header">
      <h3>Asistent Virtual</h3>
      <button id="chat-close-btn" class="chat-close-btn" aria-label="Închide Chat">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div id="chat-messages" class="chat-messages">
      <div class="message ai">Salut! Sunt asistentul tău virtual. Cu ce te pot ajuta astăzi legat de istoria Holocaustului?</div>
      <div id="typing-indicator" class="typing-indicator">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>
    </div>
    <div class="chat-input-area">
      <input type="text" id="chat-input" placeholder="Scrie un mesaj...">
      <button id="chat-send-btn" class="chat-send-btn" aria-label="Trimite">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
  </div>

  <script src="/assets/js/chat.js"></script>
</body>
</html>
