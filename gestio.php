<?php
  include "header.php"
?>
  <main class="main-content gestio">
    <article class="rows space-between">
      <h2>Gestió</h2>
      <hr>
      <section class="rows center">
        <button id="obrireleccions" class="neutre">Obrir eleccions</button>
        <br>
        <button id="obrirllistes" class="neutre">Obrir llistes</button>
        <br>
        <button id="obrirvotacio" class="neutre">Obrir votacio</button>
        <br>
        <button id="obriractivacio" class="neutre">Obrir activacio de membres</button>
        <br>
        <button id="tancareleccions" class="destructiu">Tancar eleccions</button>
        <br>
        <button id="tancarllistes" class="destructiu">Tancar llistes</button>
        <br>
        <button id="tancarvotacio" class="destructiu">Tancar votacio</button>
        <br>
        <button id="tancaractivacio" class="destructiu">Tancar activacio de membres</button>
      </section>

    </article>
    <?php
      include "boto_pujar.php"
    ?>
  </main>

  

<?php
  include "footer.php"
?>