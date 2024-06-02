<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    $entity = new Entity();
    $slides = $entity->getAllSlidesPlanety();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $fakt1 = $_POST['fakt1'];
            $fakt2 = $_POST['fakt2'];
    
            if ($entity->updateSlidePlanety($id, $title, $content, $fakt1, $fakt2)) {
                $_SESSION['message'] = "Data updated successfully.";
            } else {
                $_SESSION['message'] = "Failed to update data.";
            }
            header("Location: editplanety.php");
            exit();
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];
    
            if ($entity->deleteSlidePlanety($id)) {
                $_SESSION['message'] = "Data deleted successfully.";
            } else {
                $_SESSION['message'] = "Failed to delete data.";
            }
            header("Location: editplanety.php");
            exit();
        }
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
      <h1>Admin Page - upraviť údaje v planety.php</h1>
</div>
<div class="container">
        <?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <?php foreach ($slides as $slide): ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($slide->id); ?>">
                <div class="form-group">
                    <label for="title">Názov:</label>
                    <input type="text" name="title" value="<?php echo htmlspecialchars($slide->title); ?>" required>
                </div>
                <div class="form-group">
                    <label for="content">Popis:</label>
                    <textarea name="content" required><?php echo htmlspecialchars($slide->content); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="fakt1">Fakt 1:</label>
                    <textarea name="fakt1" required><?php echo htmlspecialchars($slide->fakt1); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="fakt2">Fakt 2:</label>
                    <textarea name="fakt2" required><?php echo htmlspecialchars($slide->fakt2); ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="update">Aktualizovať</button>
                    <button type="submit" name="delete" onclick="return confirm('Naozaj chcete odstrániť túto položku?')">Odstrániť</button>
                </div>
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