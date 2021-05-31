<?php 
class Search extends Controller {
    public function __construct()
    {
        $this->searchModel = $this->model('searchModel');

    }

    public function fetchStudents() {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $data = [
                'firstname' => trim($_POST['search'])
            ];
            
            $result =$this->searchModel->searchByFirstnameStudents($data["firstname"]);
            $search_result = [
                'students' => $result
            ];
            $this->view('students/index', $search_result);
        }
        
    }
    public function fetchProfs() {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $data = [
                'firstname' => trim($_POST['search'])
            ];
            
            $result =$this->searchModel->searchByFirstnameProfs($data["firstname"]);
            $search_result = [
                'profs' => $result
            ];
            $this->view('profs/index', $search_result);
        }
        
    }
    public function fetchParents() {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $data = [
                'firstname' => trim($_POST['search'])
            ];
            
            $result =$this->searchModel->searchByFirstnameParents($data["firstname"]);
            $search_result = [
                'parents' => $result
            ];
            $this->view('parents/index', $search_result);
        }
        
    }
}