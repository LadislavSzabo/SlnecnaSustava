
<?php
    require_once ("partials/header.php")
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
            <h3>Zamestnanci</h3>
            <div class="row"> 
                <table>
                    <thead>
                      <tr>
                        <th>Meno</th>
                        <th>Email</th>
                        <th>Telefón</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jan Darlov</td>
                        <td><a href="mailto:jan@gmail.com">jan@gmail.com</a></td>
                        <td><a href="tel:+421 37 6408 111">+421 37 6408 111</a></td>
                      </tr>
                      <tr>
                        <td>Janna Kovacova</td>
                        <td><a href="mailto:janna@gmail.com">janna@gmail.com</a></td>
                        <td><a href="tel:+421 37 6408 111">+421 37 6408 111</a></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </row>
        </div>
    </div>
    </div>
</main>
<div class="footerid">
<?php
    include_once ('partials/footer.php')
    ?>
</div>
<!---------------JS--------------->
    <script src="js/hamburger.js"></script>
</body>
</html>
