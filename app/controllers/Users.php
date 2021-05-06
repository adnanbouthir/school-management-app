<?php 
class Users extends Controller {
    public function __construct()
    {
        $this->adminModel = $this->model("Admins");
    }
    public function login() {
        $data = [];
        $this->view("users/login", $data);
    }

    public function dashboard() {
        // init data 
        $data = [];
        $result = $this->adminModel->showAdmins();
        foreach ($result as $row) {
            array_push($data, $row);
        }
        $this->view("users/dashboard", $data);
    }
    
}