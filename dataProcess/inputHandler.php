<?php

//var_dump($_POST);

$addTask = filter_input(INPUT_POST, 'addTask') ?? 0;
$addTask = intval($addTask);
$taskCompleted = filter_input(INPUT_POST, 'taskCompleted') ?? 0;
$taskCompleted = intval($taskCompleted);
$taskID = filter_input(INPUT_POST, 'taskID') ?? 0;
$taskID = intval($taskID);
$taskDescription = filter_input(INPUT_POST, 'taskDescription') ?? '';
$taskPriority = filter_input(INPUT_POST, 'taskPriority') ?? '';

