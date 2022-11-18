<?php
  require_once(__DIR__."/header.php");
?>
  <main class="main-content">
    <article class="rows center">
      <h1></h1>
      <br>
      <div class="jocmanual-pare columns space-between">
        <div id="imageHolder">
          <img>
        </div>
        <div class="rows center">
          <div id="llistacopies" class="rows">
            <div class="element-copia columns space-around">
              <p class="num-copia"></p>
              <button class="boto-reserva neutre"></button>
              <button class="boto-elimina hidden destructiu"></button>
            </div>
          </div>
          <button id="boto-afegir" class="hidden constructiu"></button>
        </div>
      </div>

    </article>
    <?php
      require_once(__DIR__."/boto_pujar.php");
    ?>
  </main>


<?php
  require_once(__DIR__."/footer.php");
?>