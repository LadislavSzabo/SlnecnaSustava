<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxia</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>  
    <!---------------NAVIGACIA--------------->
        <div id="menu">
            <a href="index.html" id="logoid">  <img src="img/Logo.PNG" alt="Logo"> </a>
             <nav>
                 <ul id="menuveci" style="max-height: 0px;">  
                     <li> 
                         <a href="index.html">Domov</a>
                     </li>
                     <li> 
                         <a href="planety.html">Planéty</a>
                     </li>      
                     <li class="dropdown"> 
                         <a href="mesiace.html">Mesiace</a>
                     </li>
                     <li> 
                         <a href="hviezdy.html">Hviezdy</a>
                     </li>
                     <li> 
                         <a href="ucet.html">Účet</a>
                     </li>
                 </ul>
                        
             </nav>
             <img src="img/menuicon.png" id="menuicon" onclick="mobilmenu()" alt="Hamburger icon">
           </div>
    </header>
<main>
    <!---------------BANNER S TEXTOM--------------->
    <div class="domovobraz">
        <div class="content">
            <h1>Okolo našej slnečnej sústavy</h1>
            <p>Preskúmajme spolu zázraky našej slnečnej sústavy!</p>
        </div>
      </div>
      <!---------------TEXT 1--------------->
    <div class="container"> 
    <div class="page">
    <div class="riadok">
        <h2>Slnečna sústava</h2>
        <div class="flex"> 
        <div class="row"> 
        <p>Slnečná sústava je planetárna sústava hviezdy Slnko, do ktorej patrí aj Zem. 
            Skladá sa zo Slnka a všetkých telies, ktoré obiehajú okolo neho 
            (planét, trpasličích planét, planétok, komét, mesiacov, meteoroidov, medziplanetárneho plynu a prachu)
            <br>
            <br>
            Naša slnečná sústava je dynamickým a rozľahlým priestorom, neustále odhaľujúc nové objavy a tajomstvá, keď astronomovia preskúmavajú jej hĺbky.
            <br>
            <br>
            Každá planéta a ďalšie teleso v slnečnej sústave má svoje jedinečné charakteristiky a tajomstvá, ktoré vzbudzujú záujem vedcov a vedcov voči ich štúdiu a prieskumu.
             Slnečná sústava je fascinujúcim miestom, ktoré nám otvára okno do širšieho vesmíru a jeho nekonečnej záhadnosti.
        </p>
        </div>
        <div class="row"> 
           <img src="img/sustava.jpg" alt="Slnečná sustava">
            </div>
        </div>
    </div>
</div>
</div>
<!---------------TEXT 2--------------->
<div class="container"> 
    <div class="page">
    <div class="riadok">
        <h2> Mliečna cesta </h2>
        <div class="flex"> 
        <div class="row"> 
        <p>Mliečna cesta je naša domovská galaxia, ktorá je rozľahlým a fascinujúcim miestom v našom vesmíre.
            <br>
            Mliečna cesta je spirálna galaxia, čo znamená, že má tvar veľkého spirálového kotúča s rukoväťou. Z hľadiska štruktúry sa skladá z rozmanitých komponentov, vrátane jadra, hrádze a ramien.
            <br>
            V strede Mliečnej dráhy sa nachádza jadro, ktoré je zložené z veľkého množstva hviezd, prachov a plynu. Toto jadro je obklopené hustejšími oblasťami a predstavuje srdce galaxie.
            <br>
            <br>
            Mliečna cesta má špirálovité ramená, ako napríklad Perseus, Sagittarius alebo Orion.
            <br>
            Galaxia obsahuje miliardy hviezd rôznych veľkostí, farieb a vekov. 
            <br>
            <br>
            Galaktická rotácia: Hviezdy a iné objekty v Mliečnej dráhe sa otáčajú okolo jadra galaxie. Naša slnečná sústava sa otáča okolo jadra jednej otáčky približne raz za 230 miliónov rokov.
            <br>
            <br>
            Naša slnečná sústava je dynamickým a rozľahlým priestorom, neustále odhaľujúc nové objavy a tajomstvá, keď astronomovia preskúmavajú jej hĺbky.
            
            Každá planéta a ďalšie teleso v slnečnej sústave má svoje jedinečné charakteristiky a tajomstvá, ktoré vzbudzujú záujem vedcov a vedcov voči ich štúdiu a prieskumu.
             Slnečná sústava je fascinujúcim miestom, ktoré nám otvára okno do širšieho vesmíru a jeho nekonečnej záhadnosti.
        </p>
        </div>
        <div class="row"> 
           <img src="img/milkyway.jpg" alt="Mliečna cesta">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</main>
<!---------------FOOTER--------------->
    <footer>
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
    <!---------------SCRIPT SOURCE--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>
