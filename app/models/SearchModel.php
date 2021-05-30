<?php 
class searchModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function searchByFirstname($firstname){

        $this->db->query("SELECT * FROM students WHERE first_name LIKE :firstname");
        $this->db->bind(":firstname", $firstname . '%');
        return $this->db->resultSet();
    }
}