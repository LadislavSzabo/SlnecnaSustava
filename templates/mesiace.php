<?php
    require_once ("partials/header.php");
    require_once ("../_inc/webpage.php");
    
    ?>
    <body>
<main> 
    <!---------------BANNER S TEXTOM--------------->
    <div class="mesiaceobraz">
        <div class="content">
          <h1>Mesiace v slnečnej Sustave</h1>
          <a href="#mesiace" class="button-link">Čítať viac</a>
        </div>
      </div>
    <!---------------SLIDE 1--------------->
<div class="riadok" alt="Slide 1" id="mesiace">
    <div class="flex">     
    <div class="row"> 
        <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
        <h2>Mesiac</h2>
       
    <p>Mesiac je prirodzené vesmírne teleso obiehajúce okolo Zeme. Je jej jediným dlhodobým prirodzeným satelitom.
        Mesiac je približne guľatý a tvorený horninami, pričom obe vlastnosti sú u iných mesiacov v slnečnej sústave pomerne vzácne. 
        Priemerná vzdialenosť medzi Mesiacom a Zemou je 384 403 km, mierne sa však mení v dôsledku jeho eliptickej dráhy.
        
    </p>
   
    </div>
    <div class="row"> 
       <img src="../assets/img/mesiac.png" id="Slnko" alt="mesiac">
       <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
        </div>
        
    </div>
    <div class="citajviac"> 
        <h3>Zaujímavé fakty</h3>
        <button class="accordion">Fakt 1</button>
            <div class="panel">
                <p>Mesiac je voči Zemi vždy otočený tou istou stranou, pretože gravitácia uzamkla jeho rotáciu s planétou. 
                    Výsledkom je, že lunárny deň má 29,5 pozemského dňa a zodpovedá lunárnemu mesiacu. Gravitácia Mesiaca - a v menšej miere aj Slnka - 
                    sú hlavnými faktormi, ktoré ovplyvňujú príliv a odliv.</p>
            </div>
        <button class="accordion">Fakt 2</button>
        <div class="panel">
            <p>Mesiac sa od našej planéty vzďaľuje rýchlosťou približne 1,5 palca (3,8 cm) za rok. Tento pohyb je spôsobený slapovými silami medzi Zemou a Mesiacom.
                 V priebehu miliónov rokov bude toto postupné vzďaľovanie pokračovať, čo ovplyvní dĺžku dní na Zemi a môže zmeniť spôsob, akým budeme v ďalekej budúcnosti 
                 zažívať zatmenia Mesiaca.</p>
        </div>
    </div>
</div>
<!---------------SLIDE 1--------------->
<div class="riadok" alt="Slide 2" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Fobos a Deimos</h2>
           
        <p>
            Fobos a Deimos sú dva malé mesiace Marsu, pomenované podľa gréckych mytologických postáv, 
            ktoré predstavovali strach (Fobos) a paniku (Deimos). Majú nepravidelný tvar a sú oveľa menšie ako Mesiac. 
            Phobos je väčší z nich, má priemer približne 22,2 kilometra, zatiaľ čo Deimos je menší, 
            má priemer približne 12,4 kilometra.
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="../assets/img/Fobos.png" id="Slnko" alt="mesiac">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Fobos obieha okolo Marsu oveľa bližšie ako Deimos. Je to bližší a rýchlejšie sa pohybujúci mesiac, 
                        ktorý obehne okolo Marsu za približne 7 hodín a 39 minút, čo z neho robí jeden z najrýchlejšie sa 
                        pohybujúcich mesiacov v slnečnej sústave.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Fobos sa pomaly približuje k Marsu rýchlosťou približne 1,8 metra za storočie v dôsledku slapových síl. 
                    Ako sa bude približovať k Marsu, nakoniec sa rozpadne a vytvorí okolo Marsu prstenec.</p>
            </div>
        </div>
</div>
<!---------------SLIDE 1--------------->
<div class="riadok" alt="Slide 2" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Ganymede </h2>
           
        <p>
            Je najväčší Jupiterov mesiac a najväčší mesiac v našej slnečnej sústave. Povrch Ganymeda je zmesou dvoch typov terénu: 
            tmavých, silne zvrásnených oblastí a svetlejších, ryhovaných oblastí známych ako sulci.
            
        </p>
       
        </div>
        <div class="row"> 
           <img src="../assets/img/ganyamede.jpg" id="Slnko" alt="mesiac">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Ganymede má vlastné magnetické pole, čo z neho robí jediný známy mesiac s takouto vlastnosťou. 
                        Toto magnetické pole interaguje so silnou magnetosférou Jupitera a vytvára na Ganymede jedinečné javy, 
                        ako sú polárne žiary.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>Objavil ho Galileo Galilei v roku 1610 spolu s ďalšími tromi veľkými Jupiterovými mesiacmi - 
                    dnes známymi ako Galileove mesiace: Io, Europa a Callisto.</p>
            </div>
        </div>
</div>
<!---------------SLIDE 3--------------->
<div class="riadok" alt="Slide 2" id="riadok2">
    <div class="flex">     
        <div class="row"> 
            <h2><span class="arrow" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></span></h2>
            <h2>Titan </h2>
           
        <p>
            Titan je druhý najväčší mesiac v našej slnečnej sústave, dokonca väčší ako planéta Merkúr. 
            Má hustú atmosféru zloženú prevažne z dusíka, podobne ako atmosféra Zeme, ale so značným množstvom metánu a stopami 
            iných uhľovodíkov. Táto hustá atmosféra zahaľuje povrch Titanu, čo sťažuje jeho vizuálne pozorovanie.
        </p>
       
        </div>
        <div class="row"> 
           <img src="../assets/img/titan.png" id="Slnko" alt="mesiac">
           <h2> <span class="arrow" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></span></h2>
            </div>
            
        </div>
        <div class="citajviac"> 
            <h3>Zaujímavé fakty</h3>
            <button class="accordion">Fakt 1</button>
                <div class="panel">
                    <p>Na Titane sa vyskytuje počasie a ročné obdobia s metánovým dažďom a uhľovodíkovými cyklami,
                       ktoré pripomínajú kolobeh vody na Zemi. To vytvára meniace sa vlastnosti povrchu a atmosférické javy, 
                       ako sú oblaky a občasné búrky.</p>
                </div>
            <button class="accordion">Fakt 2</button>
            <div class="panel">
                <p>It was discovered by Galileo Galilei in 1610, along with three other large moons of Jupiter—now known as the 
                    Galilean moons: Io, Europa, and Callisto.</p>
            </div>
        </div>
</div>
</div>
</div>
</main>
<?php
    include_once ('partials/footer.php');
    ?>
    <script src="../assets/js/slideshow.js"></script>
    <script src="../assets/js/accordion.js"></script>
    <script src="../assets/js/hamburger.js"></script>
</body>
</html>
