<?php

require_once('Task.php');
$task = new Task('build a sample mvc structure', 1); // priority: 1-Highest(red), 2-(magenta), 3-(violet), 4-lowest(blue)
require_once('todoList.view.php');

?>