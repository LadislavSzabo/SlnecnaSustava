<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $kontakty = new Kontakty();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $meno = $_POST['meno'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
    
        if ($kontakty->insert($meno, $email, $telefon)) {
            $_SESSION['message'] = "Data uploaded successfully.";
        } else {
            $_SESSION['message'] = "Failed to upload data.";
        }
    }
    
    $zamestnanci = $kontakty->fetchAll();
    

?>
    
    <head><link rel="stylesheet" href="../assets/css/admin.css"></head>
    <body>
<main>
    <!---------------BANNER S TEXTOM--------------->
    <div class="domovobraz">
        <div class="content">
            <h1>Admin prihlásenie</h1>
            <p>Ste prihlásený ako Admin</p>
        </div>
      </div>
      <div class="content">
      <h1>Admin - nahrať novú entitu do kontakty.php</h1>
</div>
<div class="container">
        <?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="meno">Meno:</label>
            <input type="text" name="meno" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="telefon">Telefón:</label>
            <input type="text" name="telefon" required>
            <button type="submit">Nahrať</button>
        </form>
    </div>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>