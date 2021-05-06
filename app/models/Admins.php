<?php 
class Admins {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    // show admins
    public function showAdmins() {
        $this->db->query("SELECT * FROM admins");
        return $this->db->resultSet();
    }
    // login as an admin
    public function LogIn($email, $password) {
        $this->db->query('SELECT * FROM admins WHERE email_adress = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        $dbpass = $row->password;
        if ($dbpass == $password) {
            return $row;
    
    }else {
        return false;
    }
}
    public function findUser($email) {
        $this->db->query('SELECT * FROM admins WHERE email_adress = :email');
        $this->db->bind(':email', $email);
        $row =$this->db->single();
            // check row 

        if ($this->db->RowCount() > 0) {
            return true;
        }else {
            return false;
        }
    }
}