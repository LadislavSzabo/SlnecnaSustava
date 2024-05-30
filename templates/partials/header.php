<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxia</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">';
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<!---------------NAVIGACIA--------------->
<?php
require_once('../_inc/Classes/Menu.php');
$menu = new Menu();
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['is_admin'] == 1){
    $menu->addItem('admin.php', 'Admin');
  }else{
    $menu->addItem('../index.php', 'Domov');
  }

$menu->addItem('planety.php', 'Planéty');
$menu->addItem('mesiace.php', 'Mesiace', 'dropdown');
$menu->addItem('hviezdy.php', 'Hviezdy');

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $menu->addItem('logout.php', 'Logout');
} else {
    $menu->addItem('ucet.php', 'Účet');
}
// Render the menu
$menu->render();
?>
<img src="../assets/img/menuicon.png" id="menuicon" onclick="mobilmenu()" alt="Hamburger icon">
</div>
