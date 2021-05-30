<?php 
class Pages extends Controller {
    public function __construct()
    {
        //  if user is logged in direct to dashboard
        if (isset($_SESSION['admin_id'])) {
            redirect('/students');
        }
    }
    public function index() {
        
        $data = ['title' => 'welcome'];
        $this->view('pages/index',$data);
    }
    public function about() {
        $data = ['title' => 'about us'];
        $this->view('pages/about', $data); 
    }
    
}