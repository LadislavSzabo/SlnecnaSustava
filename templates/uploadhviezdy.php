<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
$entity = new Entity();
$slides = $entity->getAllSlidesHviezdy();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fakt1 = $_POST['fakt1'];
    $fakt2 = $_POST['fakt2'];

    $entity->uploadDataHviezdy($title, $content, $fakt1, $fakt2);
    echo $result; // Display the result of the upload process
}
?>
   
    <head><link rel="stylesheet" href="../assets/css/admin.css"></head>
    <body>
<main>
    <!---------------BANNER S TEXTOM--------------->
    <div class="domovobraz">
        <div class="content">
            <h1>Admin login</h1>
            <p>You can edit this website, because you are logged in as an Admin</p>
        </div>
      </div>
      <div class="content">
      <h1>Admin Page - Upload new Hviezdy.php Slide</h1>
</div>
<body>
    <form method="POST" action="admin.php">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="content">Content:</label>
        <textarea name="content" required></textarea>
        
        <label for="fact1">Fact 1:</label>
        <textarea name="fact1" required></textarea>
        
        <label for="fact2">Fact 2:</label>
        <textarea name="fact2" required></textarea>
        
        <button type="submit">Upload Data</button>
    </form>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>