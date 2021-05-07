<?php 
class Users extends Controller {
    public function __construct()
    {
        
    }
    // register method handling post request and loading view
    public function register() {
        // check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
            // process form
        } else {
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
                'password_err' => '',
                'confirmp_err' => ''

            ];

            // load view 
            $this->view('users/register', $data);
        }
    }
}