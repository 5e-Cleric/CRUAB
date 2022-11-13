<?php
  include "header.php"
?>
  <main class="main-content">
    <article class="rows center">
      <button id="boto-afegir" class="constructiu hidden"></button>
      <div id="llistamanuals" class="llistaelements">
        <div class="manual element">
          <h3 class="nom"></h3>
          <div class="contingut">
            <div class="image-holder">
              <a><img></a>
            </div>
              <div class="detalls">
                <p class="editorial"></p>
                <p class="ambientacio"></p>
                <p class="coleccio"></p>
                <p class="adquirit"></p>
                <button class="eliminarboto destructiu hidden"></button>
              </div>
          </div>
        </div>
      </div>
    </article>
    <?php
      include "boto_pujar.php"
    ?>
  </main>


<?php
  include "footer.php"
?>