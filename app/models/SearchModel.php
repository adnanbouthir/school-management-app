<?php 
class searchModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function searchByFirstnameStudents($firstname){

        $this->db->query("SELECT * FROM students WHERE first_name LIKE :firstname");
        $this->db->bind(":firstname", $firstname . '%');
        return $this->db->resultSet();
    }
    public function searchByFirstnameProfs($firstname){

        $this->db->query("SELECT * FROM professors WHERE first_name LIKE :firstname");
        $this->db->bind(":firstname", $firstname . '%');
        return $this->db->resultSet();
    }
    public function searchByFirstnameParents($firstname){

        $this->db->query("SELECT * FROM parents WHERE first_name LIKE :firstname");
        $this->db->bind(":firstname", $firstname . '%');
        return $this->db->resultSet();
    }
}