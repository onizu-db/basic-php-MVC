<?php

class Home extends Controller {
    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;  // $name is a public property in $model class
        
        $this->view('home/index', ['name' => $user->name]);
    }
}