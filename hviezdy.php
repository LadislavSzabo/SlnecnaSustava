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
    
<?php
    require_once ("partials/header.php")
    ?>
<main> 
    <!---------------BANNER S TEXTOM--------------->
    <div class="hviezdyobraz" id="mesiace">
        <div class="content">
          <h1>Najbližšie hviezdy v galaxii</h1>
          <a href="#hviezdy" class="button-link">Čítať viac</a>
        </div>
      </div>
<!---------------SLIDE 1--------------->
<div class="riadok" alt="Slide 1" id="hviezdy">
    <div class="flex"> 
        
    <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2> 
         
        <h2>Slnko</h2>
       
    <p>
        Srdce nášho slnečného systému, je svetlú loptou horúceho plynu, hlavne vodíka a hélia, ktorá osvecuje a dodáva energiu planétam, ktoré okolo neho kruzia. 
        S priemerom približne 1,4 milióna kilometrov prevyšuje všetky ostatné nebeské telesá v našom systéme. 
        Jeho ohromujúca gravitácia a jadrová fúzia v jeho jadre vytvárajú nesmierne množstvo energie, ktorá sa šíri do priestoru, 
        poskytujúc teplo a svetlo, umožňujúc rozkvit života na Zemi.
        
    </p>
    
         
    </div>
    <div class="row"> 
       <img src="img/slnko.jpg" id="Slnko" alt="Slnko"> 
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2> 
        </div>
    </div>
    
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Každú sekundu Slnko uvoľňuje energiu, ktorá sa rovná miliónom jadrových bômb vybuchujúcich každú sekundu v dôsledku 
                    jadrových fúznych reakcií prebiehajúcich v jeho jadre.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Slnko má podľa odhadov približne 4,6 miliardy rokov a ako hviezda hlavnej postupnosti je približne v polovici svojho 
                životného cyklu.</p>
        </div>
    </div>
</div>
<!---------------SLIDE 2--------------->
<div class="riadok" alt="Slide 2" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Proxima Centauri</h2>
           
        <p>
            Červený trpaslík nachádzajúci sa vo hviezdnom systéme Alfa Centauri, ktorý je najbližším hviezdnym systémom k Slnku,
             vo vzdialenosti približne 4,24 svetelných rokov od Zeme.Má polomer asi 14 % polomeru Slnka a jej svietivosť je len asi 0,17 % svietivosti Slnka.
              Vzhľadom na svoju menšiu veľkosť a relatívne nízku jasnosť sa na oblohe javí ako veľmi slabá a nevýrazná hviezda.
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="img/proxima.png" id="Slnko" alt="hviezda">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>V roku 2016 astronómovia objavili skalnatú exoplanétu, ktorá obieha v obývateľnej zóne Proximy Centauri. 
                        Táto planéta, pomenovaná Proxima b, má približne veľkosť Zeme a obieha okolo svojej hviezdy vo vzdialenosti, v ktorej by mohli existovať podmienky pre výskyt tekutej vody, čo z nej robí potenciálne obývateľný svet.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Keďže Proxima Centauri je po Slnku najbližšou známou hviezdou k Zemi, je významným bodom záujmu výskumníkov, 
                    ktorí skúmajú exoplanéty, obývateľnosť a medzihviezdny výskum.</p>
            </div>
        </div>
</div>
<!---------------SLIDE 3--------------->
<div class="riadok" alt="Slide 3" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Alpha Centauri A</h2>
           
        <p>
            Alfa Centauri A je žltá hviezda podobná Slnku, klasifikovaná ako hviezda typu G2V, ktorá je v mnohých ohľadoch podobná nášmu Slnku, 
            napríklad veľkosťou, teplotou a zložením. Je o niečo väčšia a jasnejšia ako Slnko a jej priemer je približne 1,2-krát väčší ako priemer nášho Slnka.
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="img/alphacentauri.jpg" id="Slnko" alt="hviezda">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Podľa odhadov je Alfa Centauri A stará približne 6 až 7 miliárd rokov, takže je o niečo staršia ako Slnko, ktoré má približne 4,6 miliardy rokov.
                         Tento malý vekový rozdiel by mohol poskytnúť cenné poznatky o vývoji a životnom cykle hviezd podobných Slnku.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Alfa Centauri A a Alfa Centauri B obiehajú tesne okolo seba, sú spojené gravitačnými silami v dvojhviezdnom systéme. 
                    Ich vzájomné pôsobenie formuje ich dráhy a ovplyvňuje ich pohyb v priestore.</p>
            </div>
        </div>
</div>
<!---------------SLIDE 4--------------->
<div class="riadok" alt="Slide 4" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Alpha Centauri B</h2>
           
        <p>
            Alfa Centauri B je jednou z troch hviezd v sústave Alfa Centauri, ktorá sa nachádza približne 4,37 svetelných rokov od Zeme.
            Alfa Centauri B obieha okolo spoločného centra hmotnosti so svojou sprievodnou hviezdou Alfa Centauri A, čím vytvára dvojhviezdny systém. 
            Sú súčasťou trojitého hviezdneho systému, vrátane Proximy Centauri, ktorá je gravitačne viazaná na systém Alfa Centauri
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="img/alphacentauri.jpg" id="Slnko" alt="hviezda">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Alfa Centauri B je oranžový trpaslík, 
                    o niečo menší a chladnejší ako naše Slnko. Je klasifikovaná ako hviezda typu K, čím sa líši od Alfa Centauri A, ktorá je hviezdou typu G ako naše Slnko.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Alfa Centauri A a Alfa Centauri B tvoria dvojhviezdny systém, ktorý obieha okolo spoločného centra hmotnosti. 
                    Ich gravitačné interakcie spôsobujú, že obe hviezdy obiehajú okolo seba. Napriek ich relatívnej blízkosti nemajú dokonale kruhovú dráhu. 
                    Namiesto toho sa pohybujú po eliptickej dráhe okolo svojho spoločného centra hmotnosti.</p>
            </div>
        </div>
</div>
</div>
</div>
</main>
<!---------------FOOTER--------------->
<?php
    include_once ('partials/footer.php')
    ?>
    <script src="js/slideshow.js"></script>
    <script src="js/accordion.js"></script>
    <script src="js/hamburger.js"></script>
</body>
</html>
