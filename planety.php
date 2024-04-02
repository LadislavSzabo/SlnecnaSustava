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
    <div class="planetyobraz">
        <div class="content">
          <h1>Planéty v našom slnečnom systéme</h1>
          <a href="#planety" class="button-link">Čítať viac</a>
        </div>
      </div>
      <!---------------SLIDE 1--------------->
<div class="riadok" alt="Slide 1" id="planety">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Merkúr</h2>
       
    <p>
        Merkúr je najmenšia planéta v našej slnečnej sústave s priemerom približne 4 880 kilometrov. 
        Je najbližšou planétou k Slnku, obieha v priemernej vzdialenosti približne 57,9 milióna kilometrov.
        Povrch Merkúra je silne zvrásnený a podobá sa povrchu Mesiaca. Má rozsiahle roviny, útesy a hrebene, 
        ako aj impaktné krátery spôsobené zrážkami s asteroidmi a kométami.
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/merkur.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Rok na Merkúre (čas potrebný na obeh okolo Slnka) je relatívne krátky, trvá približne 88 pozemských dní. 
                    Jeho rotácia je však pomerne pomalá, čo spôsobuje dlhý cyklus deň - noc. Jeden deň na Merkúre (jedna rotácia) 
                    trvá približne 59 pozemských dní.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Vzhľadom na blízkosť Slnka a absenciu atmosféry dochádza na Merkúre k extrémnym teplotným výkyvom.
                 Povrchové teploty sa môžu pohybovať od spaľujúcej horúčavy (až do 430 stupňov Celzia) na strane odvrátenej od Slnka 
                 až po extrémne nízke teploty (okolo -180 stupňov Celzia).</p>
        </div>
    </div>
</div>
<!---------------SLIDE 2--------------->
<div class="riadok" alt="Slide 2" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Venuša</h2>
           
        <p>
            Venuša je druhou planétou od Slnka a je takmer rovnako veľká ako Zem, jej priemer je približne 12 104 km.
            Venuša má hustú atmosféru zloženú najmä z oxidu uhličitého so stopami dusíka a iných plynov. 
            Je známa svojím vyčerpávajúcim skleníkovým efektom, ktorý zachytáva teplo a spôsobuje, že teplota na povrchu dosahuje 
            až okolo 470 stupňov Celzia, čo z nej robí najhorúcejšiu planétu v našej slnečnej sústave.
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="img/venus.png" id="Slnko">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Povrch planéty je skalnatý a pokrývajú ho sopečné pláne, pohoria a tisíce sopiek, z ktorých niektoré sú stále 
                        aktívne.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Napriek extrémnym podmienkam niektorí vedci predpokladajú, že Venuša mohla mať pred miliardami rokov na svojom 
                    povrchu kvapalnú vodu, čo viedlo k diskusiám o jej možnej obývateľnosti v dávnej minulosti.</p>
            </div>
        </div>
</div>
<!---------------SLIDE 3--------------->
<div class="riadok" alt="Slide 3" id="riadok2">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Zem</h2>
       
    <p>
        Zem, naša domovská planéta, je rozmanitý a dynamický svet plný zázrakov. Zem je treťou planétou od Slnka a jediným 
        známym nebeským telesom, na ktorom žije život. Oplýva neuveriteľným množstvom ekosystémov, podnebia a geologických prvkov,
         ktoré podporujú ohromujúcu rozmanitosť foriem života.
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/zem.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Na Zemi sa vyskytujú rôzne klimatické a ročné obdobia, čo je spôsobené jej naklonenou osou, ktorá obieha okolo Slnka.
                  Tento osový sklon spôsobuje striedanie ročných období a rôznorodé podnebie v rôznych oblastiach planéty.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Magnetické pole Zeme, ktoré sa často prirovnáva k ochrannému štítu, je dynamické a nie statické. 
                Vzniká pohybom roztaveného železa a niklu vo vonkajšom jadre planéty. V priebehu času sa magnetické pole Zeme 
                viackrát zmenilo na opačnú polaritu. To znamená, že magnetický severný a južný pól si vymenili pozície, 
                pričom magnetický sever sa stal magnetickým juhom a naopak.</p>
        </div>
    </div>
</div>
<!---------------SLIDE 4--------------->
<div class="riadok" alt="Slide 4" id="riadok2">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Mars</h2>
       
    <p>
        Mars, často označovaný ako "červená planéta", je štvrtou planétou od Slnka a druhou najmenšou planétou našej slnečnej sústavy.
         Jeho červenkastý vzhľad je spôsobený oxidom železa (hrdzou) na jeho povrchu, ktorý mu dodáva charakteristickú farbu.
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/mars.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Dôkazy naznačujú, že v minulosti na povrchu Marsu prúdila tekutá voda, ktorá formovala údolia a korytá riek.
                     Okrem toho nedávne objavy naznačujú prítomnosť podpovrchového vodného ľadu a sezónnych tokov na niektorých 
                     marťanských svahoch.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Na Marse sa vyskytujú prachové búrky, ktoré môžu mať rôzny rozsah, od malých, lokálnych udalostí až po obrovské prachové 
                búrky, ktoré pohlcujú planétu. Občas sa tieto búrky rozrastú do globálnych prachových udalostí,
                 ktoré pokryjú celú planétu hmlou jemných častíc.</p>
        </div>
    </div>
</div>
<!---------------SLIDE 5--------------->
<div class="riadok" alt="Slide 5" id="riadok2">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Jupiter</h2>
       
    <p>
        Jupiter je piatou planétou od Slnka a je hmotnejší ako všetky ostatné planéty dohromady. 
        Je to plynný obor zložený prevažne z vodíka a hélia. Jeho priemer je približne 11-krát väčší ako priemer Zeme.
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/jupiter.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Jupiter má slabú sústavu prstencov, hoci nie takú výraznú alebo rozsiahlu ako Saturnove prstence. 
                    Tieto prstence sa skladajú z malých častíc a prachu.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Jupiter zohráva kľúčovú úlohu v dynamike slnečnej sústavy, pretože svojou obrovskou gravitáciou ovplyvňuje 
                dráhy ostatných planét a asteroidov..</p>
        </div>
    </div>
</div>
<!---------------SLIDE 6--------------->
<div class="riadok" alt="Slide 6" id="riadok2">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Saturn</h2>
       
    <p>
        Saturn je rovnako ako Jupiter plynný obor zložený predovšetkým z vodíka a hélia. Jeho priemer je približne deväťkrát väčší 
        ako priemer Zeme a je druhou najväčšou planétou našej slnečnej sústavy.Saturn je najznámejší svojím oslnivým systémom prstencov, 
        ktorý sa skladá z ľadu, prachu a skalnatých úlomkov. 
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/saturn.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Zaujímavým faktom o Saturne je, že je najmenej hustou planétou v našej slnečnej sústave. 
                    Napriek tomu, že je plynným obrom a má obrovský objem, jeho hustota je prekvapivo nízka.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Saturn má zaujímavú vlastnosť, ktorá zahŕňa jeho charakteristické prstence. 
                Napriek ich úchvatnému vzhľadu zo Zeme sú tieto prstence neuveriteľne tenké v porovnaní s ich obrovskou rozlohou. 
                V skutočnosti je hrúbka Saturnových prstencov prekvapivo malá - približne 10 metrov až 1 kilometer.</p>
        </div>
    </div>
</div>
<!---------------SLIDE 7--------------->
<div class="riadok" alt="Slide 7" id="riadok2">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Neptún</h2>
       
    <p>
        Neptún je štvrtá najväčšia planéta v našej slnečnej sústave a vyznačuje sa nápadne modrým odtieňom, ktorý sa pripisuje prítomnosti metánu v jeho atmosfére. 
        Atmosféra planéty je zložená najmä z vodíka, hélia a stopových množstiev metánu, ktoré dávajú Neptúnu jeho žiarivo modrú farbu. 
        Vyznačuje sa silnými vetrami a búrkovými systémami vrátane Veľkej tmavej škvrny, mohutnej búrky podobnej Jupiterovej 
        Veľkej červenej škvrne.
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="img/neptunus.png" id="Slnko">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Na Neptúne panujú jedny z najextrémnejších poveternostných podmienok v slnečnej sústave. 
                    Má neuveriteľne silný vietor, ktorého rýchlosť môže presiahnuť 1 500 míľ za hodinu.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Neptún bol objavený v roku 1846 na základe matematických predpovedí pred priamym pozorovaním. 
                Voyager 2 je jediná sonda, ktorá Neptún navštívila a počas svojho preletu v roku 1989 poskytla cenné údaje a snímky.</p>
        </div>
    </div>
</div>
</div>
</div>
</main>
<?php
    include_once ('partials/footer.php')
    ?>
    <script src="js/slideshow.js"></script>
    <script src="js/accordion.js"></script>
    <script src="js/hamburger.js"></script>
</body>
</html>
