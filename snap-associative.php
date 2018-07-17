<!DOCTYPE html>
<html>
	<body>
		<?php

		$peopleArray = array(
			"Jude" => array(
				"name" => "Jude Baca-Miller",
				"age" => 32
			),
			"Britt" => array(
				"name" => "Britt Baca-Miller",
				"age" => 36
			),
			"Juan" => array(
				"name" => "Juan Tabo",
				"age" => 97
			),
			"John" => array(
				"name" => "John Doe",
				"age" => 45
			),
			"Jane" => array(
				"name" => "Jane Smith",
				"age" => 12
			),
			"Tom" => array(
				"name" => "Tom Matano",
				"age" => 73
			)
		);

		print_r(array_sort($peopleArray, "name", SORT_ASC));





		?>
	</body>
</html>


