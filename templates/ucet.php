<?php
require_once('../_inc/webpage.php');
            
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['heslo'];
    $user = new User();
    //tu bude vzdy true alebo false
    $login_success = $user->login($email,$password);
    if($login_success == true){
        header('Location: admin.php');
        exit;
    }else{
        echo 'Nesprávne meno alebo heslo';
    }
}

        require_once ("partials/header.php");
    ?>
<main id="padding"> 
    <!---------------FORMULAR--------------->
    <center > <h1> Prihlasenie</h1></center>
    <div id="formular">
        <div class="flexform"> 
            <div id="forma"> 
    <form action="" method="POST"> 
        <p>E-mail</p>
        <input type="email" id="email" name="email" required>
        <p>Heslo</p>
        <input type="password" id="heslo" name="heslo" required>
        <p> Nemate ucet? <a href="register.php"> Tu mozete registrovat </a> </p>
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
