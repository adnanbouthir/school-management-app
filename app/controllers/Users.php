<?php 
class Users extends Controller {
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }
    // register method handling post request and loading view
    public function register() {
        // check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
            // process form
            // sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'first_name' => trim($_POST['fname']),
                'last_name' => trim($_POST['lname']),
                'email_adress' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_pass' => trim($_POST['confirm_pass']),
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirmp_err' => ''

            ];

            //  validation email

            if (empty($data['email_adress'])) {
                $data['email_err'] = 'please enter email';
            }else {
                //  check email
                if ($this->adminModel->findAdminByEmail($data['email_adress'])) {
                    $data['email_err'] = 'email already taken';

                }
            }

            // validate first name
            if (empty($data['first_name'])) {
                $data['fname_err'] = 'please enter your first name';
            }
            // validate last name

            if (empty($data['last_name'])) {
                $data['lname_err'] = 'please enter your last name';
            }

            // validate password

            if (empty($data['password'])) {
                $data['password_err'] = 'please enter your password';
            }
            // validate confirm password

            if (empty($data['confirm_pass'])) {
                $data['confirmp_err'] = 'please renter your password';
            }else {
                if ($data['password'] != $data['confirm_pass']) {
                    $data['confirmp_err'] = 'please enter a matching password';

            }
            
        }
        //  make sure errors are empty
        if (empty($data['email_err']) && empty($data['confirmp_err']) && empty($data['password_err']) && empty($data['fname_err']) && empty($data['lname_err'])) {
            //  validated
            //  hash password
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

            // register Admin 
            if($this->adminModel->register($data)) {
                // redirect to login after register
                redirect('/users/login');
            }else {
                die('something went wrong');
            }


        }else {
            //  load view with errors
            $this->view('users/register' , $data);
        }
    }
         else {
            // load form 
            // init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email_adress' => '',
                'password' => '',
                'confirm_pass' => '',
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirmp_err' => ''

            ];

            // load view 
            $this->view('users/register', $data);
        }
    
}
    //  login method
    public function login() {
        // check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
            // process form
             // sanitize post data
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             $data = [
                'email_adress' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''

            ];


         
             //  validation email

             if (empty($data['email_adress'])) {
                $data['email_err'] = 'please enter email';
            }
             // validate password

            if (empty($data['password'])) {
                $data['password_err'] = 'please enter your password';
            }
             //  make sure errors are empty
            if (empty($data['email_err'])  && empty($data['password_err']) ) {
            //  validated
            die('success');
            }else {
            //  load view with errors
            $this->view('users/login' , $data);
        }
    }
        else {
            // load form 
            // init data
            $data = [
                'email_adress' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''

            ];

            // load view 
            $this->view('users/login', $data);
        }
    
    } 
    }
