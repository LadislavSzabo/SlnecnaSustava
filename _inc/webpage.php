<?php
require_once('connection.php');
    class Webpage{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            $result =  '<link rel="stylesheet" href="../assets/css/style.css">
                        <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">';
        
        }
        function add_scripts(){
            $result = '<script src="../assets/js/menu.js"></script>';
            $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($this->page_name){
            case 'home':
                $result .= '<script src="../assets/js/slider.js"></script>';
                $result .= '<script src="../assets/js/slideshow.js"></script>';
                $result .= '<script src="../assets/js/hamburger.js"></script>';
                break;
            case 'planety':
                $result .= '<script src="../assets/js/accordion.js"></script>';
                $result .= '<script src="../assets/js/slideshow.js"></script>';
                $result .= '<script src="../assets/js/hamburger.js"></script>';
                break;  
            case 'mesiace':
                $result .= '<script src="../assets/js/accordion.js"></script>';
                $result .= '<script src="../assets/js/slideshow.js"></script>';
                $result .= '<script src="../assets/js/hamburger.js"></script>';
                break;  
            }
            return $result;   
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
        }
        function banner() {
            // Get the current filename
            $filename = basename($_SERVER['PHP_SELF']);
            
            // Extract the filename without extension
            $basename = pathinfo($filename, PATHINFO_FILENAME);
            
            // Generate the class name
            $bannerClass = $basename . 'obraz';
        
            // Output the banner HTML
            echo '
            <div class="' . htmlspecialchars($bannerClass) . '" id="' . htmlspecialchars($basename) . '">
                <div class="content">
                    <h1>Najbližšie hviezdy v galaxii</h1>
                    <a href="#hviezdy" class="button-link">Čítať viac</a>
                </div>
            </div>';
        }        
    }

?>