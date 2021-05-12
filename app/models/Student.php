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

    //  insert student query
    public function addStudent($data) {
        // preparing query

        $this->db->query('INSERT INTO 
        students (first_name, last_name, gender, class, adress, date_of_birth ,email, teacher) 
        VALUES(:first_name, :last_name, :gender, :class, :adress, :date_of_birth, :email_adress, :teacher)');
        // binding values

        $this->db->bind(':first_name' ,$data['first_name']);
        $this->db->bind(':last_name' ,$data['last_name']);
        $this->db->bind(':gender' ,$data['gender']);
        $this->db->bind(':class' ,$data['class']);
        $this->db->bind(':adress' ,$data['adress']);
        $this->db->bind(':date_of_birth' ,$data['date_of_birth']);
        $this->db->bind(':email_adress' ,$data['email']);
        $this->db->bind(':teacher' ,$data['teacher']);

        // executing query 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    } 

      //  update student query
      public function updateStudent($data) {
        // preparing query

        $this->db->query('UPDATE students SET 
        first_name = :first_name,
        last_name = :last_name,
        gender = :gender,
        class = :class,
        parents = :parents,
        adress = :adress,
        date_of_birth = :date_of_birth,
        email = :email_adress
        WHERE id = :id');
        // binding values
        $this->db->bind(':id' ,$data['id']);
        $this->db->bind(':first_name' ,$data['first_name']);
        $this->db->bind(':last_name' ,$data['last_name']);
        $this->db->bind(':gender' ,$data['gender']);
        $this->db->bind(':class' ,$data['class']);
        $this->db->bind(':parents' ,$data['parent']);
        $this->db->bind(':adress' ,$data['adress']);
        $this->db->bind(':date_of_birth' ,$data['date_of_birth']);
        $this->db->bind(':email_adress' ,$data['email']);
        

        // executing query 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function getStudentById($id) {
        $this->db->query('SELECT * FROM students WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    // delete student query

    public function deleteStudent($id) {

        $this->db->query('DELETE FROM students WHERE id = :id');
        $this->db->bind(':id' , $id);

         // executing query 
         if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }
}