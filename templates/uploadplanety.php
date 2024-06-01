<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
$entity = new Entity();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fakt1 = $_POST['fakt1'];
    $fakt2 = $_POST['fakt2'];

    $entity->uploadDataPlanety($title, $content, $fakt1, $fakt2);
}
$slides = $entity->getAllSlidesPlanety();
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
      <h1>Admin Page - nahrať novú entitu do planety.php</h1>
</div>
<body>
    <form method="POST">
        <label for="title">Názov:</label>
        <input type="text" name="title" required>
        
        <label for="content">Popis:</label>
        <textarea name="content" required></textarea>
        
        <label for="fakt1">Fakt 1:</label>
        <textarea name="fakt1" required></textarea>
        
        <label for="fakt2">Fakt 2:</label>
        <textarea name="fakt2" required></textarea>
        
        <button type="submit">Nahrať</button>
    </form>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>