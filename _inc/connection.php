<?php

//konštanta DATABASE obsahujúca asoc pole 
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'slecnasustava',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('Classes/Database.php');
require_once('Classes/User.php');
require_once('Classes/Entity.php');
require_once('Classes/Menu.php');
require_once('Classes/Banner.php');
require_once('Classes/Kontakty.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>