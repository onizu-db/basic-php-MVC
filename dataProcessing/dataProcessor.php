<?php

require_once 'dataAccess/DataStore.php';
require_once 'dataAccess/DataStore.php';
require_once 'dataProcessing/TaskManager.php';

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

require_once 'views/taskList.view.php';
