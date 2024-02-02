<?php
class News {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getEditorPicks() {
        $query = "SELECT * FROM lajmet ORDER BY data_publikimit DESC LIMIT 4";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_all(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
}
?>

