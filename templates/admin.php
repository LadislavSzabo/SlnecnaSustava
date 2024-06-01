<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
        header('Location: error.php');
    }
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
          <h1>Upraviť stránku kontakty</h1>
          <a href="editkontakty.php" class="button-link">Upraviť existujúce údaje</a>
          <a href="uploadkontakty.php" class="button-link">Nahrať nové údaje</a>
          <h1>Upraviť stránku hviezdy</h1>
          <a href="edithviezdy.php" class="button-link">Upraviť existujúce údaje</a>
          <a href="uploadhviezdy.php" class="button-link">Nahrať nové údaje</a>
          <h1>Upraviť stránku mesiace</h1>
          <a href="editmesiace.php" class="button-link">Upraviť existujúce údaje</a>
          <a href="uploadmesiace.php" class="button-link">Nahrať nové údaje</a>    
          <h1>Upraviť stránku planety</h1>
          <a href="editplanety.php" class="button-link">Upraviť existujúce údaje</a>
          <a href="uploadplanety.php" class="button-link">Nahrať nové údaje</a>
</div>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>