<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style>
      header {
         background: #e3e3e3;
         padding: 5px;
         text-align: center;
      }
   </style>
</head>

<body>
   <header>
      <h1>
         <!-- <?= "Hello! " . htmlspecialchars($_GET['name']); ?> -->
         <?= $greeting ?>
      </h1>
   </header>
   <h3>Foreach names</h3>
   <ul>
      <?php foreach ($names as $name) : ?>
         <li><?= $name ?></li>
      <?php endforeach; ?>

      <?php
      foreach ($names as $name) {
         echo "<li>$name</li>";
      }
      ?>
   </ul>

   <h3>Foreach animals</h3>
   <ul>
      <?php foreach ($animals as $animal) : ?>
         <li><?= $animal ?></li>
      <?php endforeach; ?>
   </ul>

   <h3>Practice Person</h3>
   <ul>
      <?php foreach ($person as $key => $feature) : ?>
         <li>
            <b><?= ucwords($key) ?></b> :
            <?= $feature ?>
         </li>
      <?php endforeach; ?>
   </ul>

   <h3>Task To DO</h3>
   <ul>
      <?php foreach ($task as $heading => $value) : ?>
         <li>
            <b><?= ucwords($heading) ?></b> :
            <?= $value ?>
         </li>
      <?php endforeach; ?>
   </ul>

   <h3>Task To DO: Part 2</h3>
   <ul>
      <li>
         <b>Name: </b><?= $task['title']; ?>
      </li>
      <li>
         <b>Due Date: </b><?= $task['due']; ?>
      </li>
      <li>
         <b>Personal Responsible: </b><?= $task['assigned_to']; ?>
      </li>
      <li>
         <b>Status: </b><?= $task['completed'] ? 'Complete' : 'InComplete'; ?>
      </li>
   </ul>
</body>

</html>
