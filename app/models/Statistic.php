<?php 
class Statistic {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    //  function that counts genders in school and return it
    public function genderCountMale() {
        $this->db->query('SELECT * FROM students WHERE gender = :gender');
        $this->db->bind(':gender', 'male');

        $rows = $this->db->RowCount();

        return $rows;
    }
    public function genderCountFemale() {
        $this->db->query('SELECT * FROM students WHERE gender = :gender');
        $this->db->bind(':gender', 'female');

        $rows = $this->db->RowCount();

        return $rows;
    }
}