<?php
	#FUNCTION - Block of code that can be repeatedly called

	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction() //for OOP
	*/	

	// Create Simple Function	
	function simpleFunction() {
		echo 'Hello World';
	}

	// Run Simple Function

	//simpleFunction();

	//Function With Param

	
	//kvieciant funkcija be parametro reikai nurodyti defaul reiksme function sayHello($name = 'World')
	function sayHello($name) {  
		echo "Hello $name<br>";
	}

	sayHello ('Joe');
	//sayHello ('Bob'); //we can call function a lot of time
	//Jei kviesdami nenurodysim parametro sayHello (); ismes klaida, arba turime nurodyti default parametra. Jei nurodysim parametra, kvies funcija su parametru
	
	
	
		// Return Value

	/*	
	
	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	echo addNumbers(2,3); //echo reikalingas, kad isvestumem reiksme i ekrana

	/*	

		//Passing argumens by refence

	/*
	
	$myNum = 10;

	function addFive($num) {
		$num += 5;
	}

	function addTen(&$num) {
		$num += 10;
	}

	addFive($myNum);

	echo "Value: $myNum<br>";

	addTen($myNum);

	echo "Value: $myNum<br>"; //ats:20 kadangi paima papildomai nurodyta kintamaji

	*/











?>

