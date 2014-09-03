<?php

$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

	$file = fopen('mailing_list.csv', 'a');

	if(fwrite($file, "$email\n")){

		echo "0";

	}

	else{

		echo "1";

	}

	fclose($file);
}

else{

	echo "2";

}

?>