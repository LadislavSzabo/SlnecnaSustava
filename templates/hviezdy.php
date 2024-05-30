<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    
    $user = new User();
    $slides = $user->getSlidesHviezdy();

?>
<body>
<main> 
    <!---------------BANNER S TEXTOM--------------->
    <div class="hviezdyobraz" id="mesiace">
        <div class="content">
          <h1>Najbližšie hviezdy v galaxii</h1>
          <a href="#hviezdy" class="button-link">Čítať viac</a>
        </div>
      </div>

<!---------------SLIDEs--------------->
<?php foreach ($slides as $index => $slide): ?>
    <div class="riadok" alt="Slide <?php echo $slide->id; ?>" id="slide-<?php echo $slide->id; ?>" style="<?php echo $index == 0 ? 'display: block;' : 'display: none;'; ?>">
        <div class="flex" > 
            <div class="row" id="hviezdy"> 
                <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2> 
                <h2><?php echo htmlspecialchars($slide->title); ?></h2>
                <p><?php echo htmlspecialchars($slide->content); ?></p>
            </div>
            <div class="row"> 
                <img src="<?php echo htmlspecialchars($slide->image); ?>" id="Slnko" alt="<?php echo htmlspecialchars($slide->title); ?>"> 
                <h2><span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2> 
            </div>
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p><?php echo htmlspecialchars($slide->fakt1); ?></p>
            </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p><?php echo htmlspecialchars($slide->fakt2); ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>


</div>
</div>
</main>
<!---------------FOOTER--------------->
<?php
    include_once ('partials/footer.php')
    ?>
<script src="../assets/js/slideshow.js"></script>
<script src="../assets/js/accordion.js"></script>
<script src="../assets/js/hamburger.js"></script>
</body>
</html>
