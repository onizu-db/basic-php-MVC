<?php

class Home extends Controller {
    public function index($name = '') {
        $user = $this->model('User');
        $user->xyz = $name;
        echo $user->xyz;
    }
}