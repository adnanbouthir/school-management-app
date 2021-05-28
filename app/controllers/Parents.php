<?php
class Parents extends Controller
{

    public function __construct()
    {
        $this->parentModel = $this->model('StudentParent');
        $this->studentModel = $this->model('Student');
    }

    public function index()
    {
        //  fetch for parents 

        $parents = $this->parentModel->getParents();

        // int data

        $data = [
            'parents' => $parents
        ];

        $this->view('parents/index', $data);
    }

    // method to add parents

    public function add()
    {
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
                $data['last_name_err'] = 'please enter a last name';
            }
            if (empty($data['gender'])) {
                $data['gender_err'] = 'please enter a gender';
            }
            if (empty($data['job'])) {
                $data['job_err'] = 'please enter a job';
            }
            if (empty($data['adress'])) {
                $data['adress_err'] = 'please enter an adress';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'please enter a phone';
            }
            if (empty($data['student_id'])) {
                $data['student_id_err'] = 'please select a child';
            }
            // make sure errors are empty 
            if (empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['gender_err']) && empty($data['job_err']) && empty($data['phone_err'])) {
                //  validated
                if ($this->parentModel->addParents($data)) {
                    flash('parent_message', 'Parent added successfully');
                    redirect('/parents');
                } else {
                    die('Something went wrong');
                }
            } else {
                // load view with errors
                $this->view('parents/add', $data);
            }
        } else {
            $childs = $this->studentModel->getStudents();


            // init data
            $data = [
                'childs' => $childs,
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
    public function edit($id)
    {
        //  check if form is submitted

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // init data

            $data = [
                'id' => $id,
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
                $data['last_name_err'] = 'please enter a last name';
            }
            if (empty($data['gender'])) {
                $data['gender_err'] = 'please enter a gender';
            }
            if (empty($data['job'])) {
                $data['job_err'] = 'please enter a job';
            }
            if (empty($data['adress'])) {
                $data['adress_err'] = 'please enter an adress';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'please enter a phone';
            }
            if (empty($data['student_id'])) {
                $data['student_id_err'] = 'please select a child';
            }
            // make sure errors are empty 
            if (empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['gender_err']) && empty($data['job_err']) && empty($data['phone_err'])) {
                //  validated
                if ($this->parentModel->updateParent($data)) {
                    flash('parent_message', 'Parent updated successfully');
                    redirect('/parents');
                } else {
                    die('Something went wrong');
                }
            } else {
                // load view with errors
                $this->view('parents/edit', $data);
            }
        } else {
            //  get parent
            $parent = $this->parentModel->getParentById($id);
            // get students 
            $childs = $this->studentModel->getStudents();
            // init data 
            $data = [
                'childs' => $childs,
                'id' => $parent->id,
                'first_name' => $parent->first_name,
                'last_name' => $parent->last_name,
                'gender' => $parent->gender,
                'job' => $parent->job,
                'adress' => $parent->adress,
                'phone' => $parent->phone,
                'first_name_err' => '',
                'last_name_err' => '',
                'gender_err' => '',
                'job_err' => '',
                'adress_err' => '',
                'phone_err' => '',
                'student_id_err' => ''
            ];
            // load view 
            $this->view('parents/edit', $data);
        }
    }

    public function show($id)
    {
        $parent = $this->parentModel->getParentById($id);

        // init data
        $data = [
            'parents' => $parent
        ];

        $this->view('parents/show', $data);
    }
}
