<?php

class TaskManager {

    protected $dataStore;

    public function __construct($dataStore) {
        $this->dataStore = $dataStore;
    }

    public function add(string $taskDescription, int $taskPriority) {
        $newTask = [];
        $id = $this->assignID();
        $newTask['id'] = $id;
        $newTask['description'] = $taskDescription;
        $newTask['priority'] = $taskPriority;
        $newTask['complete'] = 0;
        $this->dataStore->updateData($id, $newTask);
    }

    protected function assignID() {
        $taskIDs = [];
        $lastID = 0;
        $taskList = $this->dataStore->getData();
        if(!empty($taskList)) {
            foreach($taskList as $task) {
                $taskIDs[] = $task['id']; 
            }
            $lastID = max($taskIDs);
        }
        $newID = $lastID + 1; 
        return $newID;
    }

    public function changeStatus($taskID) {
        $updatedTask = [];
        $dataArray = $this->dataStore->getData();
        if(key_exists($taskID, $dataArray)) {
            $updatedTask['id'] = $taskID;
            $updatedTask['complete'] = 1;
            $updatedTask['description'] = $dataArray[$taskID]['description'];
            $updatedTask['priority'] = $dataArray[$taskID]['priority']; 
        }
        $this->dataStore->updateData($taskID, $updatedTask);
    }

}

?>