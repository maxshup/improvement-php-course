<?php
function sayHelloWorld($count)
{
	$result = '';
	for ($i = 0; $i < $count; $i++) {
		$result .= 'Hello World!<br>';
	}
	return $result;
}
function taskFunction(array $data)
{
	if (!empty($data['hello'])) {
		$count = $data['hello'];
	} else {
		$count = 7;
	}
	return sayHelloWorld($count);
}

// $description = 'Вывести 1 раз Hello World.';
// $inputData = '$count = 1';
// $result = sayHelloWorld(1);
