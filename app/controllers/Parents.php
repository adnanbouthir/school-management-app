<?php 
class Parents extends Controller {

    public function __construct()
    {
        $this->parentModel = $this->model('StudentParent');
    }

    public function index() {
        //  fetch for parents 

        $parents = $this->parentModel->getParents();

        // int data

        $data = [
            'parents' => $parents
        ];

        $this->view('parents/index', $data);
    }

    // method to add parents

    public function add() {
        //  check if form is submitted

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // init data

            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'gender' => $_POST['gender'],
                'job' => trim($_POST['job']),
                'adress' => trim($_POST['adress']),
                'phone' => trim($_POST['phone']),
                'student_id' => $_POST['child'],
                'first_name_err' => '',
                'last_name_err' => '',
                'gender_err' => '',
                'job_err' => '',
                'adress_err' => '',
                'phone_err' => '',
                'student_id_err' => ''

            ];

            // validation

            if (empty($data['first_name'])) {
                $data['first_name_err'] = 'please enter a name';
            }
            if (empty($data['last_name'])) {
                $data['last_name_err'] = 'please enter a name';
            }
            if (empty($data['gender'])) {
                $data['gender_err'] = 'please enter a name';
            }
            if (empty($data['job'])) {
                $data['job_err'] = 'please enter a name';
            }
            if (empty($data['adress'])) {
                $data['adress_err'] = 'please enter a name';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'please enter a name';
            }
            if (empty($data['student_id'])) {
                $data['student_id_err'] = 'please enter a name';
            }
            // make sure errors are empty 
            if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['gender_err']) && empty($data['job_err']) && empty($data['phone_err'])) {
                //  validated
                if ($this->parentModel->addParents($data)) {
                    flash('parent_message', 'Parent added successfully');
                    redirect('/parents');
                }else {
                    die('Something went wrong');
                }
            }else {
                // load view with errors
                $this->view('parents/add', $data);
            }
            
        }else {
            // init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'gender' => '',
                'job' => '',
                'adress' => '',
                'phone' => '',
                'student_id' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'gender_err' => '',
                'job_err' => '',
                'adress_err' => '',
                'phone_err' => '',
                'student_id_err' => ''

            ];
            $this->view('parents/add', $data);
        }
    }
}