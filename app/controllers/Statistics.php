<?php
class Statistics extends Controller
{
    public function __construct()
    {
        $this->statisticModel = $this->model('statistic');
    }

    public function index() {

        $data = [];
        $this->view('statistics/index', $data);
    }
}
