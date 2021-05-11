<?php 
class prof {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfs() {
        $this->db->query('SELECT * FROM professors');
        $results = $this->db->resultSet();

        return $results;
    }
}