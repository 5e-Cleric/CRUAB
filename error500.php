<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content column center">
  <article class="error">
    <h1>SERVER ERROR</h1>
    <div class="error-message">
      <h2>500 - Internal server error.</h2>
      <br>
      <h3>
        Algú de la comi web la ha liat, refresca la pagina siusplau. <br>
        Si l'error continua, avisa'ns a <a id="email" href="mailto:comiweb@cruab.cat">comiweb@cruab.cat</a>
        .
      </h3>
    </div>
  </article>
  <!--<article>
    <h2>
      Aixó es una prova per veure si podem canviar el css de les pagines d'error
    </h2>
    <h2>Encara així, el servidor ha fallat, sorry</h2>
  </article>-->
  <?php
  require_once(__DIR__ . "/boto_pujar.php");
  ?>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>