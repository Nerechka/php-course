<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8" />

  <title>Document</title>
  <style>
      header {
        background: #800;
        padding: 2rem;
        text-align: center;
      }
  </style>
<?php include 'functions.php'; ?>
</head>
<body>
  <header>
  <!-- вывод переменной в строке -->
      <h3><?= $text; ?></h3>
  </header>
  <section>
  <!-- вывод простого массива -->
  <ul>
    <?php foreach ($colors as $color) :?>
        <li><?= $color; ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- вывод ассоциативного массива -->
  <ul>
    <?php foreach ($person as $key => $feature) :?>
        <li><strong><?= $key; ?></strong>: <?= $feature; ?></li>
    <?php endforeach; ?>
  </ul>


  <ul>
    <!-- вывод ассоциативного массива с булевым выражением и условием
    <(?)php if ($task['completed']) {
        echo '&#9989;'';
    } else {
        echo '&#10008;';
    }
    ?>
    равнозначно
    <(?)= $task8['completed']? 'Complete' : '&#10008;'; ?>
    равнозначно
    <(?)php if ($task['completed']) : ?>
      <span>&#9989;</span>
    <(?)php else : ?>
      <span>&#10008;</span>
    <(?)php endif; ?>
   -->
  <li><strong>Goal: </strong><?= $task8['title']; ?></li>
  <li><strong>Due Date: </strong><?= $task8['due']; ?></li>
  <li><strong>Human: </strong><?= $task8['assigned_to']; ?></li>
  <li><strong>Winter? </strong><?= $task8['winter']? '&#9989;' : '&#10008;'; ?></li>
  <li><strong>Status: </strong><?= $task8['completed']? '&#9989;' : '&#10008;'; ?></li>
  </ul>

  <?php
  functionName('hello','world');
  /*выведет:
  arg1: hello
  arg2: world
  */
  functionName();
  /* выведет:
  arg1:
  arg2:
  */
  ageCheck(21, 21); //функция, которая проверяет достаточен ли возраст для какого-либо действия
  ?>


</section>
</body>
</html>
