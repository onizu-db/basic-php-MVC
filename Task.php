<?php

class Task {

    public $status = 0;
    public $tags = [];
    public $color;
    public $description;

    public function __construct($description, $priority) {
        $this->description = $description;
        $this->priority($priority);
    }

    public function status($x) {
        $this->status = $x; // 0: incomplete, 1: complete
    }

    public function priority($x) {
        $color = ['red', 'magenta', 'violet', 'blue'];
        $this->color = $color[$x];
    }

}

?>