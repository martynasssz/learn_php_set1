<?php
	#Arrays - Variables that hols multiple values
	/*
		- Indexed;
		- Associative
		- Multi-dimensional
	*/

	/* ---- Indexed------*/
	$people = array('Kelvin', 'Jeremy', 'Sara'); //senesnis uzrasymo variantas
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford']; //naujesnis uzrasymo variantas irtrumpesnis
	$cars[3] = 'Chevy'; //masyvo papildymas nauju elementu
	$cars[] = 'BMW'; //kadangi nezinome koks masyvo elementasgeriau nerasome indekso

	/*-----reiksmiu parodymas ekrane------*/
	//echo $people[3]; 
	//echo $ids[2]
	//echo $cars[1];
	//echo $cars[3]; bus Chevis
	//echo $cars[4];

	/*------funkcijos-----*/
	//echo count($cars); //suskaiciuoja kiek masinu, ats: 5
	//print_r($cars); //parodo visa masyva (gerai debuginimui)
	//var_dump($cars); //parodo visa masyva pagal duomenu tipus (naudojama debuginimui)

	/*------Associative arrays------*/ 
	//Allows define key and value
	//Key can asign to any type of data

	$people = array('Brad' => 35, 'Jose' =>32, 'William' => 37);
	//echo $people['Brad']; //pagal key, kuris yra Brad isitraukiame metus, ats 35

	//kitoks masyvo uzrasymas

	$ids = [22=> 'Brad', 44 =>'Jose', 36 =>'William'];
	//echo $ids[22]; //key bus id22, atsakymas bus Brad

	//masyvo papildymas
	$people ['Jill'] =  42;
	//echo $people['Jill']; //ekrane rodys 42
	//print_r($people);
	//var_dump($people);

	/*----------------Multi-Demensional-------*/
	//means array with inner array

	$cars = array (
		array('Honda', 28, 15),
		array('Toyota', 30, 20),
		array('Ford', 23, 10),
	);

	//echo $cars[1][0]; //norime toyotos (pozicija 1 is virsas ir pozicija 0, atsakymas bus toyota
	//echo $cars[1][2]; //norima antro masyvo ir padavimu skaiciaus, atsakymas bus 20;
	echo $cars[2][1];


?>
