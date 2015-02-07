<?php
	// require 'index.php';
	echo "<title>Title</title>";
	$word = "      What a funcking day!   \n

	Tomorrow is a nice day!";
	$word = trim($word);
	//$word = nl2br($word);
	echo "<p>".$word."</p>";

	$email = "Zhengshiliang@gmail.com";
	$email_array = explode("@", $email);
	echo (var_dump($email_array));

	for ($i=0; $i < 10; $i++) { 
		# code...
	}
?>