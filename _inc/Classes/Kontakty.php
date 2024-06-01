<?php
class Kontakty extends Database {

    private $db;

    public function __construct() {
        $this->db = $this->db_connection();
    }

    public function fetchAll() {
        $query = "SELECT id,meno, email, telefon FROM kontakty";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function fetchById($id) {
        $query = "SELECT id, meno, email, telefon FROM kontakty WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id, $meno, $email, $telefon) {
        $query = "UPDATE kontakty SET meno = :meno, email = :email, telefon = :telefon WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':meno', $meno);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefon', $telefon);
        return $stmt->execute();
    }
    public function insert($meno, $email, $telefon) {
        $query = "INSERT INTO kontakty (meno, email, telefon) VALUES (:meno, :email, :telefon)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':meno', $meno);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefon', $telefon);
        return $stmt->execute();
    }
    public function delete($id) {
        $query = "DELETE FROM kontakty WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }    
    
}
?>