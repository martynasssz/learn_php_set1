<?php
	#DATA TYPES
	/*
	Strings
	Integers
	floats
	boolean
	Arrays
	Objects
	NULL
	Resource
	*/

	$output = 'Hello Word!';

	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2; //galime sudeti kintamuosius

	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 .' '.$string2; //stingus jungiame per taska, ne per pliusa kai javascript
	$greeting2 = '$string1 $string2'; //viegubos kabutes parodo kaip stringa, jo neparsina
	$greeting2 = "$string1 $string2"; //dvigubos parsina

	/*escape sequence*/
	$greeting3 = 'They\'ew Here'; //bruksnys i priesinga puse padaro ignora simboliui. Jei naudojam dvigubas kabutes, tada nereikia pasvyro brusknio


	/*constant variables*/
	//sukurimui naudojame define() funkcija

	define('GREETING', 'Hello Everyone'); //funkcija konstanta, naudojam, kai kintamasis nesikeicia
	echo GREETING; //iskvieciame funkcija
	//konstanta yra case sensative. Tam, kad konstanta galetume iskviesti nereaguojant i mazasias ar did=iasias raides prirasome trecia parametra true. Pvz define('GREETING', 'Hello Everyone', true)



	$float1 = 4.4;
	$bool1 = true;

	echo $greeting3;
?>
