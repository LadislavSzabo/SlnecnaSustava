<?php

    class Entity extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function uploadDataHviezdy($title, $content, $fact1, $fact2) {
            if ($this->validateData($title, $content, $fact1, $fact2)) {
                try {
                    $query = "INSERT INTO hviezdy (title, content, fact1, fact2) VALUES (:title, :content, :fact1, :fact2)";
                    $stmt = $this->conn->prepare($query);
    
                    // Bind parameters
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':content', $content);
                    $stmt->bindParam(':fact1', $fact1);
                    $stmt->bindParam(':fact2', $fact2);
    
                    if ($stmt->execute()) {
                        return "Data successfully uploaded.";
                    } else {
                        return "Failed to upload data.";
                    }
                } catch(PDOException $e) {
                    return "Error: " . $e->getMessage();
                }
            } else {
                return "Invalid data. Please check your input.";
            }
        }
    
        private function validateData($title, $content, $fact1, $fact2) {
            // Example validation: check if any field is empty
            if (empty($title) || empty($content) || empty($fact1) || empty($fact2)) {
                return false;
            }
            // Add more validation as needed
            return true;
        }
    

        public function getSlidesHviezdy() {
            try {
                $sql = "SELECT * FROM hviezdy ORDER BY id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            } catch (PDOException $e) {
                echo "Chyba pri získavaní snímok: " . $e->getMessage();
                return [];
            }}
            
            
        public function getSlidesPlanety() {
            try {
                $sql = "SELECT * FROM planety ORDER BY id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            } catch (PDOException $e) {
                echo "Chyba pri získavaní snímok: " . $e->getMessage();
                return [];
            }}
        public function getSlidesMesiace() {
            try {
                $sql = "SELECT * FROM mesiace ORDER BY id ASC";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            } catch (PDOException $e) {
                echo "Chyba pri získavaní snímok: " . $e->getMessage();
                return [];
            }}                
                
        
        public function getAllSlidesHviezdy() {
            $sql = "SELECT * FROM hviezdy";
            $query_run = $this->db->prepare($sql);
            $query_run->execute();
            return $query_run->fetchAll();
        }        
        public function updateSlideHviezdy($id, $title, $content, $fakt1, $fakt2) {
            $sql = "UPDATE hviezdy SET title = :title, content = :content, fakt1 = :fakt1, fakt2 = :fakt2 WHERE id = :id";
            $query_run = $this->db->prepare($sql);
            $query_run->bindParam(':title', $title);
            $query_run->bindParam(':content', $content);
            $query_run->bindParam(':fakt1', $fakt1);
            $query_run->bindParam(':fakt2', $fakt2);
            $query_run->bindParam(':id', $id);
            return $query_run->execute();
        }    
        public function getAllSlidesMesiace() {
            $sql = "SELECT * FROM mesiace";
            $query_run = $this->db->prepare($sql);
            $query_run->execute();
            return $query_run->fetchAll();
        }        
        public function updateSlideMesiace($id, $title, $content, $fakt1, $fakt2) {
            $sql = "UPDATE mesiace SET title = :title, content = :content, fakt1 = :fakt1, fakt2 = :fakt2 WHERE id = :id";
            $query_run = $this->db->prepare($sql);
            $query_run->bindParam(':title', $title);
            $query_run->bindParam(':content', $content);
            $query_run->bindParam(':fakt1', $fakt1);
            $query_run->bindParam(':fakt2', $fakt2);
            $query_run->bindParam(':id', $id);
            return $query_run->execute();
        }
        public function getAllSlidesPlanety() {
            $sql = "SELECT * FROM planety";
            $query_run = $this->db->prepare($sql);
            $query_run->execute();
            return $query_run->fetchAll();
        }        
        public function updateSlidePlanety($id, $title, $content, $fakt1, $fakt2) {
            $sql = "UPDATE planety SET title = :title, content = :content, fakt1 = :fakt1, fakt2 = :fakt2 WHERE id = :id";
            $query_run = $this->db->prepare($sql);
            $query_run->bindParam(':title', $title);
            $query_run->bindParam(':content', $content);
            $query_run->bindParam(':fakt1', $fakt1);
            $query_run->bindParam(':fakt2', $fakt2);
            $query_run->bindParam(':id', $id);
            return $query_run->execute();
        }                
    
    }



?>