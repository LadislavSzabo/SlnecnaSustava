<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    
    $entity = new Entity();
    $slides = $entity->getSlidesHviezdy();

?>
<body>
<main> 
     <?php 
     Banner::banner();?>

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
    </div>
</div>
<?php endforeach; ?>


</main>
<!---------------FOOTER--------------->
<?php
    include_once ('partials/footer.php')
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.riadok');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => {
            slide.style.display = 'none';
        });
        slides[index].style.display = 'block';
    }

    function nextSlide() {
        if (slideIndex < totalSlides - 1) {
            slideIndex++;
        } else {
            slideIndex = 0;
        }
        showSlide(slideIndex);
    }

    function prevSlide() {
        if (slideIndex > 0) {
            slideIndex--;
        } else {
            slideIndex = totalSlides - 1;
        }
        showSlide(slideIndex);
    }
    showSlide(slideIndex);

    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
});

</script>
<script src="../assets/js/slideshow.js"></script>
<script src="../assets/js/hamburger.js"></script>
</body>
</html>
