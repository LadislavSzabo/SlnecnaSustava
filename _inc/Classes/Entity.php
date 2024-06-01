<?php

    class Entity extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }
//UPLOAD HVIEZDY//

        public function uploadDataHviezdy($title, $content, $fakt1, $fakt2) {
            if ($this->validateData($title, $content, $fakt1, $fakt2)) {
                try {
                    $query = "INSERT INTO hviezdy (title, content, fakt1, fakt2) VALUES (:title, :content, :fakt1, :fakt2)";
                    $stmt = $this->db->prepare($query);
    
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':content', $content);
                    $stmt->bindParam(':fakt1', $fakt1);
                    $stmt->bindParam(':fakt2', $fakt2);
    
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
    
        private function validateData($title, $content, $fakt1, $fakt2) {
            if (empty($title) || empty($content) || empty($fakt1) || empty($fakt2)) {
                return false;
            }
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
                
        //UPDATE Hviezdy//
        public function getAllSlidesHviezdy() {
            $query = "SELECT id, title, content, fakt1, fakt2 FROM hviezdy";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
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
        public function deleteSlideHviezdy($id) {
            $query = "DELETE FROM hviezdy WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
        //UPLOAD MESIACE//

        public function getAllSlidesMesiace() {
            $query = "SELECT id, title, content, fakt1, fakt2 FROM mesiace";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
            public function uploadDataMesiace($title, $content, $fakt1, $fakt2) {
                if ($this->validateData($title, $content, $fakt1, $fakt2)) {
                    try {
                        $query = "INSERT INTO mesiace (title, content, fakt1, fakt2) VALUES (:title, :content, :fakt1, :fakt2)";
                        $stmt = $this->db->prepare($query);
        
                        $stmt->bindParam(':title', $title);
                        $stmt->bindParam(':content', $content);
                        $stmt->bindParam(':fakt1', $fakt1);
                        $stmt->bindParam(':fakt2', $fakt2);
        
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
                     //UPDATE MESIACE//          
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
        //DELETE MESIACE//  
        public function deleteSlideMesiace($id) {
            $query = "DELETE FROM mesiace WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }        
        //UPLOAD planety//

        public function getAllSlidesPlanety() {
            $query = "SELECT id, title, content, fakt1, fakt2 FROM planety";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
            public function uploadDataPlanety($title, $content, $fakt1, $fakt2) {
                if ($this->validateData($title, $content, $fakt1, $fakt2)) {
                    try {
                        $query = "INSERT INTO planety(title, content, fakt1, fakt2) VALUES (:title, :content, :fakt1, :fakt2)";
                        $stmt = $this->db->prepare($query);
        
                        $stmt->bindParam(':title', $title);
                        $stmt->bindParam(':content', $content);
                        $stmt->bindParam(':fakt1', $fakt1);
                        $stmt->bindParam(':fakt2', $fakt2);
        
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
            //UPDATE Planety//      
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
        //DELETE PLANETY//  
        public function deleteSlidePlanety($id) {
            $query = "DELETE FROM planety WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }                        
    
    }



?>