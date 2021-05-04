<?php 
class Users extends Controller {
    public function __construct()
    {
        
    }
    public function login() {
        $data = [];
        $this->view("users/login", $data);
    }
}