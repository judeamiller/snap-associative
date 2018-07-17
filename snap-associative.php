<?php

$paramArray = [
	["name" => "Jude", "age" => 32],
	["name" => "Britt", "age" => 36],
	["name" => "Bat", "age" => 34],
	["name" => "Rat", "age" => 3],
	["name" => "Cat", "age" => 7],
	["name" => "Apple", "age" => 9],
	["name" => "Chocolate", "age" => 55],
	["name" => "Spaniel", "age" => 98],
	["name" => "Maine-Coon", "age" => 13]
];


/**
 *a function that takes an associativie array of people with names and ages and returns an average age
 * @param array $personsArray an array of people
 * @returnint $averageAge average age of people in the array
 */

function averageAge(array $personsArray) : float {

	$totalAge = 0;

	foreach($personsArray as $person) {

		//php_eol creates a new line when outputting values from the script.
		echo $person["name"] . " is " . $person["age"] . PHP_EOL;
		$totalAge += $person["age"];
	}
		// make sure $totalage is the correct number
		echo "total age is  " .$totalAge . PHP_EOL;

	return ($totalAge / count($personsArray));

}
//this is where the original $paramArray is passed into the function above.
echo "the average age of these people is " .averageAge($paramArray).PHP_EOL;