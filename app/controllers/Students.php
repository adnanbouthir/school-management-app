<?php 
class Students extends Controller {

    public function __construct()
    {
        // only direct to this if connected
        if (!isset($_SESSION['admin_id'])) {
            redirect('/users/login');
        }

        $this->studentModel = $this->model('Student');
    }

    public function index () {
        // fetch for students
        $students = $this->studentModel->getstudents();


        // init data
        $data =  [
            'students' => $students
        ];

        $this->view('students/index', $data);
    }

    // method to add students to db

    public function add() {


        $data =  [
            'first_name' => '',
            'last_name' => '',
            'gender' => '',
            'class' => '',
            'parents' =>'',
            'adress' => '',
            'date_of_birth' => '',
            'email' => ''
        ];

        $this->view('students/add', $data);
    }
}