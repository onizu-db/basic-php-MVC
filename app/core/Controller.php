<?php

class Controller {
    public function model($model) {
        require_once '../app/models/'. $model .'.php';
        return new $model(); // $model is actually a class in $model.php, so creating a new object of that class
    }
    public function view($view, $data = []) {
        require_once '../app/views/'. $view .'.php';
    }
}
