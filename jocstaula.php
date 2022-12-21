<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content">
  <article class="column center">
    <h1>Jocs de taula</h1>
    <aside id="filterbox" class="filterbox column center">
      <h3>Filtres</h3>
      <div class="around">
        <div class="column center">
          <label class="filterlabel" for="minuts">Filtre de durada del joc:</label>
          <select id="minuts">
            <option selected value></option>
            <option value="-10">Menys de 10 minuts</option>
            <option value="10-30">De 10 a 30 minuts</option>
            <option value="30-60">De 30 minuts a 1 hora</option>
            <option value="60-120">De 1 a 2 hores</option>
            <option value="120-180">De 2 a 3 hores</option>
            <option value="180+">Més de 3 hores</option>
          </select>
        </div>
        <div class="column center">
          <label class="filterlabel" for="jugadors">Filtre de nombre de jugadors:</label>
          <select id="jugadors">
            <option selected value></option>
            <option value="1">Jocs individuals</option>
            <option value="2">Jocs de 2 jugadors/es</option>
            <option value="3">Jocs de 3 jugadors/es</option>
            <option value="4">Jocs de 4 jugadors/es</option>
            <option value="5">Jocs de 5 jugadors/es</option>
            <option value="6">Jocs de 6 jugadors/es</option>
            <option value="7">Jocs de 7 jugadors/es</option>
            <option value="8">Jocs de 8 jugadors/es</option>
            <option value="9">Jocs de 9 jugadors/es</option>
            <option value="10+">Jocs de 10 jugadors/es o més</option>
          </select>
        </div>
        <div class="column center">
          <label class="filterlabel" for="dificultat">Filtre per dificultat:</label>
          <select id="dificultat">
            <option selected value></option>
            <option value="1">Jocs fàcils</option>
            <option value="2">Jocs mitjans</option>
            <option value="3">Jocs difícils</option>
            <option value="4">Jocs molt difícils</option>
          </select>
        </div>
    </aside>
    <button id="boto-afegir" class="constructiu hidden"></button>
    <div id="llistajocs" class="llistaelements">
      <div class="joc element" minjugadors="" maxjugadors="">
        <h3 class="nom"></h3>
        <div class="contingut">
          <div class="image-holder">
            <a><img></a>
          </div>
          <div class="detalls">
            <p class="editorial"></p>
            <p class="tipus"></p>
            <p class="duracio"></p>
            <p class="jugadors"></p>
            <br>
            <span class="dificultat"></span>
            <br>
            <button class="eliminarboto destructiu hidden"></button>
          </div>
        </div>
      </div>
    </div>
  </article>
  
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>