<?php
require_once('connection.php');
    class Webpage{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }
        
        function redirect_homepage(){
            header("Location: templates/home.php");
            die("Nepodarilo sa nájsť Domovskú stránku");
        }
        function db_connection(){
            try{
                
                $connection = new PDO("mysql:host=" . DATABASE['HOST'] . ";dbname=" . DATABASE['DBNAME'] . ";charset=utf8", 
                                      DATABASE['USER_NAME'], 
                                      DATABASE['PASSWORD']);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                return $connection;
                
            }catch(PDOException $e){
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }}

?>