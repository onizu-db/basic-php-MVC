<!DOCTYPE html>
<html lang="en">

<head>
<title>Task List</title>
<link rel="stylesheet" type="text/css" href="public/basicStyles.css">
</head>

<body>
  <h3>Add new task:</h3>
  <?php
    require_once 'taskAdd.view.php';
  ?>
  <h3><?= empty($taskList) ? 'Task List Empty' : 'Task List:' ?></h3>
  <ul>
    <?php foreach($taskList as $task): ?>
      <li class="priority<?= $task['priority'] ?>">
        <form action="index.php" method="POST" style="display:inline">
          <input type="hidden" name="taskID" value="<?= $task['id'] ?>">
          <input type="checkbox" name="taskCompleted" value="1" onchange="this.form.submit()"> 
        </form>
        <?= $task['complete'] ? "<strike>".$task['description']."</strike>" : $task['description'] ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>