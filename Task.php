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
        $color = [1 => 'red', 2 => 'magenta', 3 => 'violet', 4 => 'blue'];
        $this->color = $color[$x];
    }

}

?>