<?php 
class Students extends Controller {
    public function index () {
        // init data
        $data =  [];

        $this->view('students/index', $data);
    }
}