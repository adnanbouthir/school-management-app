<?php 
class Students extends Controller {

    public function __construct()
    {
        // only direct to this if connected
        if (!isset($_SESSION['admin_id'])) {
            redirect('/users/login');
        }

        $this->studentModel = $this->model('Student');
        $this->userModel = $this->model('admin');
    }

    public function index () {
        // fetch for students
        $students = $this->studentModel->getStudents();


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
            if (empty($data['adress'])) {
                $data['adress_err'] = 'Please enter an address';
            }

            // make sure there is no more errors

            if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['class_err']) && empty($data['email_err']) && empty($data['adress_error'])) {
                //  validated

                if ($this->studentModel->addStudent($data)) {
                    flash('student_message', 'Student Added successfully');
                    redirect('/students');
                }else {
                    die('something went wrong');
                }
            }else {
                // load view with errors

                $this->view('students/add', $data);
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
    public function edit($id) {

        //  check if form submitted 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            

            // init data 
            $data =  [
                'id' => $id,
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
            if (empty($data['adress'])) {
                $data['adress_err'] = 'Please enter an address';
            }

            // make sure there is no more errors

            if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['class_err']) && empty($data['email_err']) && empty($data['adress_error'])) {
                //  validated

                if ($this->studentModel->updateStudent($data)) {
                    flash('student_message', 'Student Updated');
                    redirect('/students');
                }else {
                    die('something went wrong');
                }
            }else {
                // load view with errors

                $this->view('students/edit', $data);
            }


        }else {
            //  get student 
            $student = $this->studentModel->getStudentById($id);
            $data =  [
                'id' => $id,
                'first_name' => $student->first_name,
                'last_name' => $student->last_name,
                'gender' => $student->gender,
                'class' => $student->class,
                'parents' =>$student->parents,
                'adress' => $student->adress,
                'date_of_birth' => $student->date_of_birth,
                'email' => $student->email,
                'first_name_err' => '',
                'last_name_err' => '',
                'class_err' => '',
                'adress_err' => '',
                'email_err' => '',
                'birth_err' => '',
                'parents_err' => ''
            ];
    
            $this->view('students/edit', $data);
        }
    }

    public function show($id) {

        $student = $this->studentModel->getStudentById($id);

        // init data
        $data = [
            'students' => $student 
        ];

        $this->view('students/show', $data);
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->studentModel->deleteStudent($id)) {
                flash('student_message' , 'Student REMOVED');
                redirect('/students');
            }else {
                die('Something went wrong');
            }
            
        }else {
            redirect('/students');
        }
    }

}