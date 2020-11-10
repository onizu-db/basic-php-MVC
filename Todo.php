<?php

class Task {

    public $status = 0;
    public $tags = [];
    public $priority;
    public $description;

    public function __construct($description, $priority) {
        $this->description = $description;
        $this->priority = $priority;
    }

    public function taskStatus($x) {
        $this->status = $x; // 0: incomplete, 1: complete
    }

}

?>