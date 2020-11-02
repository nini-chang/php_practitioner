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

unset($person['age']);

$task = [
  'title' => 'practice php',
  'due' => 'next week',
  'assigned_to' => 'Nini',
  'completed' => false
];

// approve(17);

class Task {

  public $description;
  public $completed = false;
  
  public function __construct($description) {
    // automatically trigged on instantiation
    $this->description = $description;
  }

  public function complete() {
    $this->complete = true;
  }

  public function isComplete() {
    return $this->completed;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Finish my screencast'),
  new Task('Clean my room')
];

$tasks[1]->complete();

require 'index.view.php';
