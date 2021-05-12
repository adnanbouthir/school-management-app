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
    public function getParentByid($id) {
        $this->db->query('SELECT * FROM parents WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function addParents($data) {
        // preparing query 
        $this->db->query('INSERT INTO parents
        (first_name, last_name, gender, job, adress, phone, student_id)
        VALUES(:first_name, :last_name, :gender, :job, :adress, :phone, :student_id)
        ');

        // bind values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':job', $data['job']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':student_id', $data['student_id']);
        
        // executing query 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }

    }
}