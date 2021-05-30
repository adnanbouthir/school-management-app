<?php 
class Search extends Controller {
    public function __construct()
    {
        $this->searchModel = $this->model('searchModel');

    }

    public function fetch() {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $data = [
                'firstname' => trim($_POST['search'])
            ];
            
            $result =$this->searchModel->searchByFirstname($data["firstname"]);
            $search_result = [
                'students' => $result
            ];
            $this->view('students/index', $search_result);
        }
        
    }
}