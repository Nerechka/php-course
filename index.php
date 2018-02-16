<?php

//задание переменной
$text = 'Hello everybody!';

//простой массив
$colors = [
'blue',
'white',
'yellow'
];

//ассоциативный массив
$person = [
  'age' => 21,
  'hair' => 'brown',
  'eyes' => 'green'
];

//ассоциативный массив с логическим значением (булевым)
$task8 = [
  'title' => 'Go to sea',
  'due' => 'Someday',
  'assigned_to' => 'Alina',
  'winter' => true,
  'completed' => false
];

require 'index.view.php';
