<?php
	# LOOPS - Execute code set number of times

	/*
		For
		While
		Do..While
		Foreach
	*/

	#For Loop (knowing time of executing)
	#@params - init (initialisor), condition, inc (increment)	

	/*
	for($i = 0;$i < 10;$i++) {
		echo 'Number'.$i;
		echo '<br>';
	}
	*/

	#While Loop
	#@params - condition
	#use when we don't know the set of number

	/*
	$i =0; //pasizymim outside the loop

	while($i <$10){
		echo $i;
		echo '<br>';
		$i++;
	}
	*/

	#Do...While
	#@params - condition
	/*
	do {
		echo $i;
		echo '<br>';
		$i++;
	}

	while($i <10);
	*/

	#forech Loop - For Arrays
	/*
	$people = array('Brad', 'Jose', 'William');

	foreach ($people as $person) {
		echo $person;
		echo '<br>';
	}
	*/

	//associative array

	$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'William@gmail.com');

	foreach ($people as $person => $email) { //array as key => value
		echo $person.': '.$email;
		echo '<br>';
	}

?>
