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

        //  check if form submitted 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            
            var_dump($_POST);

            // init data 
            $data =  [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'gender' =>$_POST['gender'],
                'class' => trim($_POST['class']),
                'adress' => trim($_POST['adress']),
                'date_of_birth' => $_POST['date_of_birth'],
                'email' => trim($_POST['email']),
                'first_name_err' => '',
                'last_name_err' => '',
                'class_err' => '',
                'adress_err' => '',
                'email_err' => '',
                'birth_err' => ''
            ];

            // validate name

            if (empty($data['first_name'])) {
                $data['first_name_err'] = 'Please enter a name';
            }
            if (empty($data['last_name'])) {
                $data['last_name_err'] = 'Please enter a name';
            }

            // validate gender/class
            if (empty($data['gender'])) {
                $data['class_err'] = 'Please enter a gender';
            }
            if (empty($data['class'])) {
                $data['class_err'] = 'Please enter a class';
            }

            // validate email and adress
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter an email';
            }


        }else {
            $data =  [
                'first_name' => '',
                'last_name' => '',
                'gender' => '',
                'class' => '',
                'parents' =>'',
                'adress' => '',
                'date_of_birth' => '',
                'email' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'class_err' => '',
                'adress_err' => '',
                'email_err' => '',
                'birth_err' => ''
            ];
    
            $this->view('students/add', $data);
        }

        
    }
}