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

    // insert query teachers:

    public function addProfs($data) {
        //  preparing query 
        $this->db->query('INSERT INTO 
        professors (first_name, last_name, gender, class, subject, phone) 
        VALUES (:first_name, :last_name, :gender, :class, :subject, :phone)');

        // binding values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':class', $data['class']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':phone', $data['phone']);

        // executing query 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }
}