<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    $kontakty = new Kontakty();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $meno = $_POST['meno'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
    
            if ($kontakty->update($id, $meno, $email, $telefon)) {
                $_SESSION['message'] = "Data updated successfully.";
            } else {
                $_SESSION['message'] = "Failed to update data.";
            }
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];
    
            if ($kontakty->delete($id)) {
                $_SESSION['message'] = "Data deleted successfully.";
            } else {
                $_SESSION['message'] = "Failed to delete data.";
            }
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
      <h1>Admin Page - upraviť údaje v kontakty.php</h1>
</div>
</div>
<?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>

        <?php foreach ($zamestnanci as $zamestnanec): ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($zamestnanec->id); ?>">
                <div class="form-group">
                    <label for="meno">Meno:</label>
                    <input type="text" name="meno" value="<?php echo htmlspecialchars($zamestnanec->meno); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($zamestnanec->email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefon">Telefón:</label>
                    <input type="text" name="telefon" value="<?php echo htmlspecialchars($zamestnanec->telefon); ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="update">Aktualizovať</button>
                    <button type="submit" name="delete" onclick="return confirm('Naozaj chcete odstrániť túto položku?')">Odstrániť</button>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    </div>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>