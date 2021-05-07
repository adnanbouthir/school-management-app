<?php 
class Users {
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
            echo 'load form';
        }
    }
}