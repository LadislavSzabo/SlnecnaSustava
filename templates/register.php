<?php
require_once('../_inc/webpage.php');
    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['register'])){
        $name =$_POST['meno'];
        $lastname =$_POST['priezvisko'];
        $email = $_POST['email'];
        $password = $_POST['heslo'];
        

    
       
            if($user_object->register($name, $lastname, $email, $password)) {
                // Registrácia bola úspešná
                echo "<br>";
                echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
            } else {
                // Registrácia zlyhala
                echo "<br>";
                redirect_homepage();
                echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
            }
        }
        require_once ("partials/header.php");
    ?>
<main id="padding"> 
    <!---------------FORMULAR--------------->
    <center > <h1> Registracia </h1></center>
    <div id="formular">
        <div class="flexform"> 
            <div id="forma"> 
    <form action="" method="POST"> 
        <p>Meno</p>
        <input type="text" id="meno" name="meno" required>
        <p>Priezvisko</p>
        <input type="text" id="priezvisko" name="priezvisko" required>
        <p>E-mail</p>
        <input type="email" id="email" name="email" required>
        <p>Heslo</p>
        <input type="password" id="heslo" name="heslo" required>
        <p>Poznamka</p>
        <textarea></textarea>
        <div id="checkbox"> 
        <p>Súhlasim so spracovanim osobných údajov.</p>
        <input type="checkbox" required>
        </div>
        <button type="submit" name="register"> Odoslať </button>
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
