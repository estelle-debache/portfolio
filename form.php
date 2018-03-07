<?php

	if (isset($_POST['g-recaptcha-response']))
	{

		$post = array(
			'secret' => '6Lfw0kcUAAAAAFf9bI0xP-IJJKvfJpu57Q5pzVpN',
			'response' => $_POST['g-recaptcha-response']
		);

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	    curl_setopt($ch, CURLOPT_HEADER, false);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	    $result = curl_exec($ch);
	    curl_close($ch);

	    $result = json_decode($result);

	    if ($result>success === true) {
	    	echo "envoi d'un email";
	    }
	}

?>
