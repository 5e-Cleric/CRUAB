<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content">
  <article class="column center">
    <h1></h1>
    <br>
    <div class="jocmanual-pare between">
      <div id="imageHolder">
        <img>
      </div>
      <div class="column center">
        <div id="llistacopies" class="column">
          <div class="element-copia around">
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
    require_once(__DIR__ . "/boto_pujar.php");
    ?>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>