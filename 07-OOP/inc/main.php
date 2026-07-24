<?php
	require_once __DIR__ . '/point.php';
	require_once __DIR__ . '/inheritance.php';

	/*
	$A = new Point(2, 3);
	$A->info();
	$A->x = 7;
	$A->y = 8;
	echo $A;
	*/

	$human = new Human("Vercetty", "Tommy", 30);
	//$human = new Human(last_name:"Vercetty", first_name:"Tommy", age:30);
	echo $human . '<br>';

	$t_student = new Student($human, "Theft", "Vice", 90, 99);
	//https://stackoverflow.com/questions/4697705/php-function-overloading

	$student = new Student("Pinkman", "Jessie", 20, "Chemistry", "WW_220", 90, 95);
	echo $student . '<br>';

	$graduate = new Graduate
	(
		"Schreder", "Hank", 40,
		"Criminalistic", "OBN", 50, 70,
		"How to catch Hiesenberg"
	);
	echo $graduate . '<br>';
?>