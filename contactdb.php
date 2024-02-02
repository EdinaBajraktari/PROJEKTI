<?php
class Contact {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertContact($FirstName, $LastName,$email,$phone, $mesazhi) {
        $stmt = $this->db->prepare("INSERT INTO contact (FirstName, LastName, email,phone,mesazhi) VALUES (?, ?, ?,?,?)");
        $stmt->bind_param("sss", $FirstName, $LastName, $email,$phone,$mesazhi);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
