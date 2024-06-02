<?php
require_once('../_inc/webpage.php');    
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['heslo'];
    $user = new User();
    //tu bude vzdy true alebo false
    $login_success = $user->login($email,$password);
    if($login_success == true){
        if($_SESSION['is_admin'] == 1){
            $_SESSION['logged_in'] = true;
            $_SESSION['is_admin'] = 1;
            header('Location: admin.php');
          }
          else{
            $_SESSION['logged_in'] = true;
            header('Location:../index.php');
          }
            
    }else{
        echo 'Nesprávne meno alebo heslo';
            
        }
       }

        require_once ("partials/header.php");     
    ?>
<main id="padding"> 
    <!---------------FORMULAR--------------->
    <center > <h1> Prihlásenie</h1></center>
    <div id="formular">
        <div class="flexform"> 
            <div id="forma"> 
    <form action="" method="POST"> 
        <p>E-mail</p>
        <input type="email" id="email" name="email" required>
        <p>Heslo</p>
        <input type="password" id="heslo" name="heslo" required>
        <p> Nemate účet? <a href="register.php"> Registrovať sa môžete kliknutím na tento odkaz </a> </p>
        <button type="submit" name="login"> Odoslať </button>
    </form>
</div>
</div>
</div>
</main>
<!---------------FOOTER--------------->
<?php
    include_once ('partials/footer.php')
    ?>


    <script src="../assets/js/hamburger.js"></script>
</body>
</html>
