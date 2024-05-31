<?php

    class User extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function login($email, $password){
            //$username a $password došli z $_POST 
            try{
                $data = array(
                    'user_email'=>$email,
                    'user_password'=>md5($password),
                );
                
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1) {
                    // login je uspesny
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] =  $query_run->fetch()->role;
                    return true;
                    header('Location: admin.php');
                    exit;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }

        public function register($name, $lastname, $email, $password){
            try{
             
                $hashed_password = $password;
        
                // Dáta pre vloženie nového používateľa do databázy
                $data = array(
                    'name' => $name,
                    'lastname' => $lastname,
                    'user_email' => $email,
                    'user_password' => md5($hashed_password),
                    'user_role'=>'0'
                );
        
                // SQL dopyt na vloženie nového používateľa
                $sql = "INSERT INTO user (name,lastname, email, password,role) VALUES (:name, :lastname, :user_email, :user_password,:user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
        
                // Úspešná registrácia
                header("Location: ../templates/thankyou.php");
                return true;
                
            } catch(PDOException $e){
                // Spracovanie chyby, ak nastane
                echo "Chyba pri registrácii: " . $e->getMessage();
                return false;
            }
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