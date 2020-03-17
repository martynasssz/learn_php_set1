<?php
	#CONDITIONALS

	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/
	
	/*
	$num = 6;

	if($num == 5){
		echo '5 passed';
	} elseif ($num == 6) {
		echo '6 passed';
	} else {
		echo 'did not pass';
	}

	*/

	# NESTING IF

	$num = 6;

	if($num > 4){   //rekomenduojama nenaudoto daug nesting ifu, bet naudoti loginius operatorius
		if($num <10) {
			echo "$num passed<br>";
		}
	}

	/*
	LOGICAL OPERATORS

	and &&
	or ||
	xor //viena is dvieju turi buti teisingas, bet ne abu

	*/

	if($num >1 && $num < 10) {
		echo "$num passed";
	}

	//PVZ negausime jokios reiksmes nes tik vienas turi buti teisingas (dabar abut teisingi)
	if($num > 4 XOR $num < 10) { 
			echo "$num passed";
		}

	#SWITCH	test for value, testing from different cases and depending which case matches, do something what we want to do

	$favColor = 'yellow';
	
	switch($favColor){
		case'red':
			echo 'Your favorite color is red';
			break;
		case 'blue':
			echo 'Your favorite color os blue';
			break;
		case 'green':
			echo 'Your favorite color is green';
			break;
		default:
			echo 'Your favorite color is something else';			
	}	
?>

