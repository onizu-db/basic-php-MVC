<?php

$dataFile = 'dataAccess/tasks.json';
$dataStore = new DataStore($dataFile);

$taskManager = new TaskManager($dataStore);

if($addTask) {
    if($taskDescription == '') {
        echo 'Add task description<br>';
    } else {
        $taskManager->add($taskDescription, $taskPriority);
    }
}

if($taskCompleted) {
    $taskManager->changeStatus($taskID);
}

$taskList = $dataStore->getData() ?? [];

$viewData = ['taskList']; // in an advanced app, $viewData would have a lot more variables

$view = 'taskList';

view($view, compact($viewData));
