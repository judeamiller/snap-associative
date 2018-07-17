<?php

$paramArray = [
	["name" => "Jude", "age" => 32],
	["name" => "Britt", "age" => 36],
	["name" => "Tom", "age" => 34],
	["name" => "Spam", "age" => 73]
];


/**
 *a function that takes an associativie array of people with names and ages and returns an average age
 * @param array $personsArray an array of people
 * @returnint $averageAge average age of people in the array
 */

function averageAge(array $personsArray) :float {

	$totalAge = 0;

	foreach($personsArray as $person) {

		//php_eol creates a new line when outputting values from the script.
		echo "this person's age is " . $person["age"] . PHP_EOL;
		$totalAge += $person["age"];
	}
		// make sure totalage is the correct number
		echo "total age is  " .$totalAge . PHP_EOL;

	return ($totalAge / count($personsArray));

}

echo "the average age of these people is " .averageAge($paramArray).PHP_EOL;