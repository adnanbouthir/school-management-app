<?php 
class Student {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudents() {
        $this->db->query('SELECT * FROM students');

        $results = $this->db->resultSet();

        return $results;
    }
}