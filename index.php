<?php

require 'function.php';

$greeting = 'Hello world';
$names = [
  'Jeff',
  'John',
  'Peter'
];

$animals = [
  'Lion',
  'Tiger',
  'Giraffe',
  'Deer',
  'Dingo'
];

$animals[] = 'Cat';

$person = [
  'age' => 27,
  'hair' => 'black',
  'career' => 'web developer'
];

$person['name'] = 'Nini';

// echo "<pre>";
// var_dump($person);
// echo "</pre>";

unset($person['age']);

// die('Hello world');

$task = [
  'title' => 'practice php',
  'due' => 'next week',
  'assigned_to' => 'Nini',
  'completed' => false
];

approve(17);


require 'index.view.php';
