<?php 
// class Admins {
//     private $db;

//     public function __construct()
//     {
//         $this->db = new Database;
//     }
//     // show admins
//     public function showAdmins() {
//         $this->db->query("SELECT * FROM admins");
//         return $this->db->resultSet();
//     }
//     public function showStudents() {
//         $this->db->query("SELECT students.id, students.first_name AS student, students.last_name AS student_last, students.gender, students.class, parents.first_name, parents.last_name FROM `students` LEFT JOIN `parents` ON students.id = parents.student_id");
//         return $this->db->resultSet();
//     }
//     public function showProfessors() {
//         $this->db->query("SELECT * FROM professors");
//         return $this->db->resultSet();
//     }
//     public function showParents() {
//         $this->db->query("SELECT * FROM parents");
//         return $this->db->resultSet();
//     }

//     // login as an admin
//     public function LogIn($email, $password) {
//         $this->db->query('SELECT * FROM admins WHERE email_adress = :email');
//         $this->db->bind(':email', $email);

//         $row = $this->db->single();
//         $dbpass = $row->password;
//         if ($dbpass == $password) {
//             return $row;
    
//     }else {
//         return false;
//     }
// }
//     public function findUser($email) {
//         $this->db->query('SELECT * FROM admins WHERE email_adress = :email');
//         $this->db->bind(':email', $email);
//         $row =$this->db->single();
//             // check row 

//         if ($this->db->RowCount() > 0) {
//             return true;
//         }else {
//             return false;
//         }
//     }
// }