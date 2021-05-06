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
}