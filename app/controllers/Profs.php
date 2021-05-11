<?php 
class Profs extends Controller {
    public function __construct() {    
        //  if user is logged in redirect to login
        if (!isset($_SESSION['admin_id'])) {
            redirect('/users/login');
        }
        $this->profModel = $this->model('prof');
        $this->userModel = $this->model('admin');

    }
    
    public function index() {
        // fetch for profs 
        $profs = $this->profModel->getProfs();

        // init data
        $data = [
            'profs' => $profs
        ];

        $this->view('profs/index', $data);
    }
}