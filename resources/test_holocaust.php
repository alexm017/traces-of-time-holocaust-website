<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "test_page_access\n";
$txtt = "test_page_access";
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$date = date('m/d/Y h:i:s a', time());
$txt2 = $txtt . " " . $user_agent . " " . $ip . " " . $date . "\n"; 
fwrite($record_file, $txt);
fwrite($record_file, $txt2);
fclose($record_file);
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Holocaust - Urmele Timpului</title>
    <link rel="stylesheet" href="/assets/css/model_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/holocaust-logo.ico" />
    <style>
        .quiz-container {
            width: 70%;
            margin: 150px auto;
            background-color: #999999;
            padding: 20px;
            border-radius: 10px;
        }
        .question {
            margin-bottom: 20px;
            color: #161616;
        }
        .question h3 {
            margin-bottom: 10px;
        }
        .question label {
            display: block;
            margin-bottom: 5px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2em;
        }
        button {
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="background-container">
    <div class="alphabit-topleft">
        <a href="/">Urmele Timpului</a>
    </div>
    <div class="ai-star-logo">
        <img src="/assets/images/holocaust-logo.png" width="35" alt="Holocaust Logo">
    </div>
    

    
    <div class="rbox">
    	<?php
			session_start();
			if($_SESSION["loggedIn"] == "userLoggedIn"){
				echo '<div class="profile-text"><a href="/profile">Profile</a></div>';
				echo '<div class="alphabit-profile-teamname-pic"><a href="/profile"><img src="assets/images/user3.png" width=45></a></div>';
			}
	?>
        <div class="blur-line"></div>
        <div class="title">Test de cunoștințe despre Holocaust</div>
        <div class="quiz-container">
            <form id="quizForm">

                <div class="question">
		  <h3>1. Care a fost numele legilor antievreiești adoptate în 1935 de către regimul nazist?</h3>
		  <label><input type="radio" name="q1" value="correct"> Legile de la Nürnberg</label>
		  <label><input type="radio" name="q1" value="wrong"> Legile de la Berlin</label>
		  <label><input type="radio" name="q1" value="wrong"> Legile de la Munchen</label>
		</div>

		<div class="question">
		  <h3>2. Ce eveniment a marcat escaladarea violenței împotriva evreilor în noaptea de 9 noiembrie 1938?</h3>
		  <label><input type="radio" name="q2" value="wrong"> Pogromul din Odessa</label>
		  <label><input type="radio" name="q2" value="correct"> Kristallnacht</label>
		  <label><input type="radio" name="q2" value="wrong"> Conferința de la Wannsee</label>
		</div>

		<div class="question">
		  <h3>3. În ce an a început cel de-al Doilea Război Mondial, eveniment care a intensificat persecuția asupra evreilor?</h3>
		  <label><input type="radio" name="q3" value="correct"> 1939</label>
		  <label><input type="radio" name="q3" value="wrong"> 1941</label>
		  <label><input type="radio" name="q3" value="wrong"> 1945</label>
		</div>

		<div class="question">
		  <h3>4. Care a fost cel mai cunoscut lagăr de concentrare și exterminare operat de naziști?</h3>
		  <label><input type="radio" name="q4" value="wrong"> Dachau</label>
		  <label><input type="radio" name="q4" value="correct"> Auschwitz</label>
		  <label><input type="radio" name="q4" value="wrong"> Buchenwald</label>
		</div>

		<div class="question">
		  <h3>5. Ce nume a primit planul nazist de exterminare a evreilor?</h3>
		  <label><input type="radio" name="q5" value="correct"> Soluția Finală</label>
		  <label><input type="radio" name="q5" value="wrong"> Operațiunea Barbarossa</label>
		  <label><input type="radio" name="q5" value="wrong"> Planul de Reeducare</label>
		</div>

		<div class="question">
		  <h3>6. Care a fost scopul principal al lagărelor de muncă forțată din timpul Holocaustului?</h3>
		  <label><input type="radio" name="q6" value="wrong"> Reeducarea deținuților prin muncă</label>
		  <label><input type="radio" name="q6" value="correct"> Exterminarea și exploatarea deținuților</label>
		  <label><input type="radio" name="q6" value="wrong"> Recrearea socială a deținuților</label>
		</div>

		<div class="question">
		  <h3>7. Ce țară a fost invadată de Germania în 1939, declanșând astfel cel de-al Doilea Război Mondial?</h3>
		  <label><input type="radio" name="q7" value="wrong"> Franța</label>
		  <label><input type="radio" name="q7" value="correct"> Polonia</label>
		  <label><input type="radio" name="q7" value="wrong"> Regatul Unit</label>
		</div>

		<div class="question">
		  <h3>8. Cum se numește întâlnirea de la Wannsee, unde s-a discutat implementarea planului de exterminare?</h3>
		  <label><input type="radio" name="q8" value="wrong"> Conferința de la München</label>
		  <label><input type="radio" name="q8" value="wrong"> Conferința de la Berlin</label>
		  <label><input type="radio" name="q8" value="correct"> Conferința de la Wannsee</label>
		</div>

		<div class="question">
		  <h3>9. Cine a fost liderul Germaniei naziste responsabil pentru orchestrarea Holocaustului?</h3>
		  <label><input type="radio" name="q9" value="wrong"> Joseph Goebbels</label>
		  <label><input type="radio" name="q9" value="correct"> Adolf Hitler</label>
		  <label><input type="radio" name="q9" value="wrong"> Heinrich Himmler</label>
		</div>

		<div class="question">
		  <h3>10. Pe lângă evrei, ce alte grupuri au fost persecutate de regimul nazist?</h3>
		  <label><input type="radio" name="q10" value="wrong"> Doar evrei</label>
		  <label><input type="radio" name="q10" value="correct"> Romi, persoane cu dizabilități, homosexuali și opozanți politici</label>
		  <label><input type="radio" name="q10" value="wrong"> Doar opozanți politici</label>
		</div>

		<div class="question">
		  <h3>11. Care a fost unul dintre mijloacele principale de transport utilizate pentru deportarea evreilor către lagăre?</h3>
		  <label><input type="radio" name="q11" value="correct"> Trenurile</label>
		  <label><input type="radio" name="q11" value="wrong"> Avioanele</label>
		  <label><input type="radio" name="q11" value="wrong"> Autobuzele</label>
		</div>

		<div class="question">
		  <h3>12. Care a fost metoda principală de exterminare în lagărele de exterminare?</h3>
		  <label><input type="radio" name="q12" value="wrong"> Executarea prin împușcare</label>
		  <label><input type="radio" name="q12" value="correct"> Camerele de gazare</label>
		  <label><input type="radio" name="q12" value="wrong"> Foametea deliberată</label>
		</div>

		<div class="question">
		  <h3>13. Ce a fost "Operațiunea Reinhard"?</h3>
		  <label><input type="radio" name="q13" value="correct"> Un program de exterminare a evreilor din Polonia ocupată</label>
		  <label><input type="radio" name="q13" value="wrong"> Un plan de evacuare pentru civili</label>
		  <label><input type="radio" name="q13" value="wrong"> Un program de reeducare a prizonierilor</label>
		</div>

		<div class="question">
		  <h3>14. Care dintre următoarele lagăre a fost un lagăr de exterminare operat de naziști în Polonia?</h3>
		  <label><input type="radio" name="q14" value="correct"> Treblinka</label>
		  <label><input type="radio" name="q14" value="wrong"> Dachau</label>
		  <label><input type="radio" name="q14" value="wrong"> Bergen-Belsen</label>
		</div>

		<div class="question">
		  <h3>15. Ce a reprezentat eliberarea lagărelor de către forțele aliate la sfârșitul celui de-al Doilea Război Mondial?</h3>
		  <label><input type="radio" name="q15" value="wrong"> Începerea unui nou regim de opresiune</label>
		  <label><input type="radio" name="q15" value="correct"> Sfârșitul suferinței și începutul reconstrucției pentru supraviețuitori</label>
		  <label><input type="radio" name="q15" value="wrong"> Reintegrarea evreilor în rândul naziștilor</label>
		</div>

                <button type="submit">Verifică răspunsurile</button>
            </form>
            <div id="result" class="result"></div>
        </div>
    </div>

    <div class="docs-container">
        <div class="setup">Holocaust</div>
        <div class="sub-section"><a href="/ascensiune">Ascensiunea Partidului Nazist</a></div>
        <div class="sub-section"><a href="/persecutie">Persecuția nazistă a evreilor</a></div>
        <div class="sub-section"><a href="/kindertransport">Kindertransport și refugiații</a></div>
        <div class="sub-section"><a href="/deportari">Ghetourile și deportările</a></div>
        <div class="sub-section"><a href="/einsatzgruppen">Einsatzgruppen</a></div>
        <div class="sub-section"><a href="/lagare">Lagărele de concentrare și exterminare</a></div>
        <div class="sub-section"><a href="/rezistenta">Rezistența și salvatorii</a></div>
        <div class="sub-section"><a href="/marsuri">Marșurile morții și eliberarea</a></div>
        <div class="sub-section"><a href="/reconstruirea">Reconstruirea vieților</a></div>
        <div class="sub-section"><a href="/dreptatea">Căutarea dreptății</a></div>
        <div class="sub-section"><a href="/holocaustastazi">Holocaustul astăzi</a></div>
        
        <div class="docsLine"></div>
        
        <div class="setup">Interviuri Despre Holocaust</div>
        <div class="sub-section"><a href="/vasileszekely">Vasile Szekely</a></div>
	<div class="sub-section"><a href="/salamongolda">Salamon Golda</a></div>
        
        <div class="docsLine"></div>
	<div class="setup">Test Interactiv</div>
	<div class="sub-section"><p style="color: #c67171;">Test din Holocaust</p></div>
    </div>
</div>
<script>
    document.getElementById("quizForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var total = 15;
        var score = 0;
        

            var total = 15;
	    var score = 0;
	    
	    var q1 = document.querySelector('input[name="q1"]:checked');
	    var q2 = document.querySelector('input[name="q2"]:checked');
	    var q3 = document.querySelector('input[name="q3"]:checked');
	    var q4 = document.querySelector('input[name="q4"]:checked');
	    var q5 = document.querySelector('input[name="q5"]:checked');
	    var q6 = document.querySelector('input[name="q6"]:checked');
	    var q7 = document.querySelector('input[name="q7"]:checked');
	    var q8 = document.querySelector('input[name="q8"]:checked');
	    var q9 = document.querySelector('input[name="q9"]:checked');
	    var q10 = document.querySelector('input[name="q10"]:checked');
	    var q11 = document.querySelector('input[name="q11"]:checked');
	    var q12 = document.querySelector('input[name="q12"]:checked');
	    var q13 = document.querySelector('input[name="q13"]:checked');
	    var q14 = document.querySelector('input[name="q14"]:checked');
	    var q15 = document.querySelector('input[name="q15"]:checked');
	    
	    if(q1 && q1.value === "correct") score++;
	    if(q2 && q2.value === "correct") score++;
	    if(q3 && q3.value === "correct") score++;
	    if(q4 && q4.value === "correct") score++;
	    if(q5 && q5.value === "correct") score++;
	    if(q6 && q6.value === "correct") score++;
	    if(q7 && q7.value === "correct") score++;
	    if(q8 && q8.value === "correct") score++;
	    if(q9 && q9.value === "correct") score++;
	    if(q10 && q10.value === "correct") score++;
	    if(q11 && q11.value === "correct") score++;
	    if(q12 && q12.value === "correct") score++;
	    if(q13 && q13.value === "correct") score++;
	    if(q14 && q14.value === "correct") score++;
	    if(q15 && q15.value === "correct") score++;
    
        var resultDiv = document.getElementById("result");
        resultDiv.textContent = "Ai obținut " + score + " din " + total + " puncte.";
    });
</script>
</body>
</html>

