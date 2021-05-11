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

    // method to add teachers:

    public function add() {
        //  check if form is submitted 

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                # code...
            

            // init data 
            $data =  [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'gender' =>$_POST['gender'],
                'class' => trim($_POST['class']),
                'subject' => trim($_POST['subject']),
                'phone' => $_POST['phone'],
                'first_name_err' => '',
                'last_name_err' => '',
                'class_err' => '',
                'subject_err' => '',
                'phone_err' => ''
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
                $data['gender_err'] = 'Please enter a gender';
            }
            if (empty($data['class'])) {
                $data['class_err'] = 'Please enter a class';
            }

            // validate email and adress
            if (empty($data['subject'])) {
                $data['subject_err'] = 'Please enter an email';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter an address';
            }

            // make sure there is no more errors

            if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['class_err']) && empty($data['subject_err']) && empty($data['phone_err'])) {
                //  validated
                if ($this->profModel->addProfs($data)) {
                    flash('prof_message', 'Teacher added successfully');
                    redirect('/profs');
                }else {
                    die('Something went wrong');
                }
            }else {
                // load view with errors
                $this->view('profs/add', $data);
            }
       } else {
        // init data
        $data =  [
            'first_name' => '',
            'last_name' => '',
            'gender' =>'',
            'class' => '',
            'subject' => '',
            'phone' => '',
            'first_name_err' => '',
            'last_name_err' => '',
            'class_err' => '',
            'subject_err' => '',
            'phone_err' => ''
        ];

        $this->view('profs/add', $data);
       }
    }

    public function edit($id) {
        //  check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # code...
        

        // init data 
        $data =  [
            'first_name' => trim($_POST['first_name']),
            'last_name' => trim($_POST['last_name']),
            'gender' =>$_POST['gender'],
            'class' => trim($_POST['class']),
            'subject' => trim($_POST['subject']),
            'phone' => $_POST['phone'],
            'first_name_err' => '',
            'last_name_err' => '',
            'class_err' => '',
            'subject_err' => '',
            'phone_err' => ''
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
            $data['gender_err'] = 'Please enter a gender';
        }
        if (empty($data['class'])) {
            $data['class_err'] = 'Please enter a class';
        }

        // validate email and adress
        if (empty($data['subject'])) {
            $data['subject_err'] = 'Please enter an email';
        }
        if (empty($data['phone'])) {
            $data['phone_err'] = 'Please enter an address';
        }

        // make sure there is no more errors

        if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['class_err']) && empty($data['subject_err']) && empty($data['phone_err'])) {
            //  validated
            if ($this->profModel->updateProfs($data)) {
                flash('prof_message', 'Teacher updated successfully');
                redirect('/profs');
            }else {
                die('Something went wrong');
            }
        }else {
            // load view with errors
            $this->view('profs/add', $data);
        }
   } else {
    // init data
    $data =  [
        'first_name' => '',
        'last_name' => '',
        'gender' =>'',
        'class' => '',
        'subject' => '',
        'phone' => '',
        'first_name_err' => '',
        'last_name_err' => '',
        'class_err' => '',
        'subject_err' => '',
        'phone_err' => ''
    ];

    $this->view('profs/add', $data);
   }
        
    }

    public function show($id) {
        $prof = $this->profModel->getProfById($id);

        // init data
        $data = [
            'profs' => $prof 
        ];

        $this->view('profs/show', $data);
    }
}
