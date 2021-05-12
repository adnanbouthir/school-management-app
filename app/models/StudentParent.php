<?php 
class StudentParent {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getParents() {
        $this->db->query('SELECT * FROM parents');
        $results = $this->db->resultSet();

        return $results;
    }
}