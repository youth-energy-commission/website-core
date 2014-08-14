<?php

$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

	$file = fopen('mailing_list.csv', 'a');

	if(fwrite($file, "$email\n")){

		echo "<p>$email has been added to the mailing list. You will start recieving our newsletter from the next issue.</p>";

	}

	else{

		echo "<p>There was an error on our side. We are probably working furiously to fix it! Please try after some time.";

	}

	fclose($file);
}

else{

	echo "<p>We have detected that this is not a valid Email ID. Please fill in a correct email ID. eg: john.doe@gmail.com<p>";

}

?>