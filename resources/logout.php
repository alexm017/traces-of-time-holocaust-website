<?php
session_start();
	if(isset($_COOKIE["PHPSESSID"]) == TRUE){
	    $_SESSION["teamname"] = "null";
	    $_SESSION["loggedIn"] = "null";
	    unset($_COOKIE["PHPSESSID"]);
	    header("Location: /");
	}else{
	    header("Location: /login");
	}
?>
