<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    $user = new User();
$slides = $user->getAllSlidesPlanety();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fakt1 = $_POST['fakt1'];
    $fakt2 = $_POST['fakt2'];

    $user->updateSlide($id, $title, $content, $fakt1, $fakt2);
    header("Location: admin.php");
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
          <h1>Edit the page hviezdy</h1>
          <a href="edithviezdy.php" class="button-link">Edit existing data</a>
          <a href="uploadhviezdy.php" class="button-link">Upload new data</a>
          <h1>Edit the page mesiace</h1>
          <a href="editmesiace.php" class="button-link">Edit existing data</a>
          <a href="uploadmesiace.php" class="button-link">Upload new data</a>    
          <h1>Edit the page planety</h1>
          <a href="editplanety.php" class="button-link">Edit existing data</a>
          <a href="uploadplanety.php" class="button-link">Upload new data</a>
</div>
      <h1>Admin Page - Edit Slides</h1>

<?php foreach ($slides as $slide): ?>
    <form method="POST" action="admin.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($slide->id); ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($slide->title); ?>" required>
        <label for="content">Content:</label>
        <textarea name="content" required><?php echo htmlspecialchars($slide->content); ?></textarea>
        <label for="fakt1">Fakt 1:</label>
        <textarea name="fakt1" required><?php echo htmlspecialchars($slide->fakt1); ?></textarea>
        <label for="fakt2">Fakt 2:</label>
        <textarea name="fakt2" required><?php echo htmlspecialchars($slide->fakt2); ?></textarea>
        <button type="submit">Update</button>
    </form>
    <hr>
<?php endforeach; ?>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>