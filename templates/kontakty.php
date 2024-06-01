
<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");

    $kontakty = new Kontakty();
    $zamestnanci = $kontakty->fetchAll();
?>
    
    <body>
<main id="padding"> 
    <!---------------KONTAKT INFORMACIE TABULKA--------------->
    <div class="container">
    <div class="page">
        <div class="riadok">
            <h3>Spoločnosť</h3>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Meno</th>
                            <th>Adresat</th>
                            <th>Email</th>
                            <th>Telefón</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Univerzita Konštantína Filozofa v Nitre</td>
                            <td>Tr. A. Hlinku 1, 949 01 Nitra</td>
                            <td><a href="mailto:ukf@ukf.sk">ukf@ukf.sk</a></td>
                            <td><a href="tel:+421 37 6408 111">+421 37 6408 111</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
        <h3>Zamestnanci</h3>
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Meno</th>
                    <th>Email</th>
                    <th>Telefón</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zamestnanci as $zamestnanci): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($zamestnanci->meno); ?></td>
                        <td><a href="mailto:<?php echo htmlspecialchars($zamestnanci->email); ?>"><?php echo htmlspecialchars($zamestnanci->email); ?></a></td>
                        <td><a href="tel:<?php echo htmlspecialchars($zamestnanci->telefon); ?>"><?php echo htmlspecialchars($zamestnanci->telefon); ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</body>
<div class="footerid">
<?php
    include_once ('partials/footer.php')
    ?>
</div>
<!---------------JS--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>
