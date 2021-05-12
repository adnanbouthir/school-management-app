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
}