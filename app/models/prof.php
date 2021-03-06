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

    public function updateProfs($data) {
        //  preparing query 
        $this->db->query('UPDATE professors SET
        first_name = :first_name,
        last_name = :last_name,
        gender = :gender,
        class = :class,
        subject = :subject,
        phone = :phone
        WHERE id = :id
        ');

        // binding values
        $this->db->bind(':id', $data['id']);
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

    public function deleteProf($id) {
        $this->db->query('DELETE FROM professors WHERE id = :id');
        $this->db->bind(':id' , $id);

         // executing query 
         if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function getProfById($id) {
        $this->db->query('SELECT * FROM professors WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }
}