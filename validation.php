<?php
	$isSubmitted = isset($_POST["submit"]);

	if ($isSubmitted) {
		$username = $_POST["username"];
	}
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$age = $_POST["age"];
		$sports = $_POST["sports"];
		$email = $_POST["email"];
	}

	$min = 2;
	$max = 20;

	if (!isset($username) || $username == "") {
		$usernameMessage = '<div class="formfield form-error">Kasutajanime väli ei tohi olla tühi!</div>';
	} 
	elseif (strlen($username) < $min) {
		$usernameMessage = '<div class="formfield form-error">Kasutajanimi peab olema vähemalt '.$min.'tähemärki</div>';
	}
	elseif (strlen($username) < $max) {
		$usernameMessage = '<div class="formfield form-error">Kasutajanimi ei tohi olla pikem kui '.$max.'tähemärki</div>';
	}
	else {
		$ageMessage= '<div class="formfield form_notice">Vanus sobis</div>';
	}

	 $sports = array("jalgpall", "korvpall", "maadlus");
	 if (isset($sports) and in_array(strtolower($sports), $sports)) {
	 	$sportsMessage = '<div class="formfield form-notice">Spordiala sobis</div>';
	 } else{
	 	$sportsMessage = '<div class="formfield form-error">Seda spordiala ei ole rühmas</div>';
	}

	if (isset($email) and preg_match("/@/", $email)) {
		$emailMessage = '<div class="formfield form-notice">e-mail sobis</div>';
	}  else{
		$emailMessage = '<div class="formfield form-error">e-mail ei sobi</div>';
	}
?>