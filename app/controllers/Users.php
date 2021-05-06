<?php 
class Users extends Controller {
    public function __construct()
    {
        $this->adminModel = $this->model("Admins");
    }
    public function login() {
        // check for form submit 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // then process
            // sanitize post form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // init data
            $data = [
                'email' => trim($_POST['email']),
                'password' =>trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''

            ];
                 // username validation 
                 if (empty($data['email'])) {
                    $data['email_err'] = 'please enter your email';
                }
                 // password validation 
                 if (empty($data['password'])) {
                    $data['password_err'] = 'please enter your password';
                }
                // check for email/password 
                if ($this->adminModel->findUser($data['email'])) {
                    // user found
                }else {
                    $data['email_err'] = 'please enter a valid email';
                }
                 // make sure array errors is empty
            if (empty($data['email_err']) && empty($data['password_err'])) {

                // valid 
                // check and set in logged in user 
                $loggedInUser = $this->adminModel->logIn($data['email'], $data['password']);
                if ($loggedInUser) {
                    header('Location:' .URLROOT . '/users/dashboard');
                }else {
                    $data['password_err'] = 'password incorrect';
                }
        }
    }
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