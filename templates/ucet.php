<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okolo našej slnečnej sústavy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

    < <?php
    require_once ("partials/header.php")
    ?>
<main id="padding"> 
    <!---------------FORMULAR--------------->
    <center > <h1> Registracia </h1></center>
    <div id="formular">
        <div class="flexform"> 
            <div id="forma"> 
    <form action="thankyou.html"> 
        <p>Meno</p>
        <input type="text">
        <p>Priezvisko</p>
        <input type="text">
        <p>E-mail</p>
        <input type="email">
        <p>Heslo</p>
        <input type="password">
        <p>Poznamka</p>
        <textarea></textarea>
        <div id="checkbox"> 
        <p>Súhlasim so spracovanim osobných údajov.</p>
        <input type="checkbox" required>
        </div>
        <button type="submit" action="thankyou.html"> Odoslať </button>
    </form>
</div>
</div>
</div>
</main>
<!---------------FOOTER--------------->
    <footer id="footerid">
        <div class="flex">
            <div class="row">
                <a href="kontakty.html">Kontakty</a>
            </div>
    <div class="row">
    <p>@Copyright 2023</p>
    </div>
    <div class="row">
    <p>Táto stránka slúži ako informačná stránka pre tých, ktorí sa zaujímajú o astronómiu,
         ak sa chcete dozvedieť viac o astronómii, navštívte <a href="https://www.nasa.gov"> https://www.nasa.gov</a>
    </p>
    </div>
    
        </div>
        
    </footer>


    <script src="js/hamburger.js"></script>
</body>
</html>