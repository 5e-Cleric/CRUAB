<?php
  include "header.php"
?>
  <main class="main-content">
    <article>
      <div id="missatge"></div>

      <form id="formulari" name="formafegirmanual" action="/api/manuals.php" method="POST"
        enctype="multipart/form-data">
        <div if="primera-columna">
          <div>
            <label for="nom" title="Aquest camp es obligatori" class="form-input-label">Nom</label>
            <br>
            <input id="nom" type="text" name="nom" autocomplete="off" placeholder="Player's Handbook 5e" pattern="[A-Za-zÀ-ÖØ-öø-ÿ&' 0-9]+" title="Nom del manual" required>
            <!--required-->
          </div>
          <div>
            <label for="genere" title="Aquest camp es obligatori" class="form-input-label">Gènere</label>
            <br>
            <input id="genere" type="text" name="genere" placeholder="Alta fantasia" pattern="[A-Za-z ]+" title="Gènere del manual" required>
            <!--required-->
          </div>
          <div>
            <label for="ambientacio" title="Aquest camp es obligatori" class="form-input-label">Ambientació</label>
            <br>
            <input id="ambientacio" type="text" name="ambientacio" placeholder="Medieval" title="Ambientació del joc" pattern="[A-Za-z0-9 ]+" required>
            <!--required-->
          </div>
          <div>
            <label for="editorial" title="Aquest camp es obligatori" class="form-input-label">Editorial</label>
            <br>
            <input id="editorial" type="text" name="editorial" placeholder="Wizards Of The Coast" title="Nom de l'editorial" pattern="[A-Za-zÀ-ÖØ-öø-ÿ&' 0-9]+" required>
            <!--required-->
          </div>
          <div>
            <label for="coleccio" class="form-input-label">Colleció</label>
            <br>
            <input id="coleccio" type="text" name="coleccio" placeholder="Dungeons and Dragons 5e" title="Collecció, si en forma part">
          </div>
        </div>
        <div id="segona-columna">
          <div>
            <label for="adquirit" title="Aquest camp es obligatori" class="form-input-label">Data d'adquisició:</label>
            <br>
            <input id="adquirit" type="date" name="adquirit" min="1960-01-01" title="Data en que es va comprar" required>
            <!--required-->
          </div>
          <br>
          <div>
            <input id="img-uploader" type="file" name="img-uploader" accept="image/png, image/jpeg" required>
          </div>
          <br>
          <div id="previsualitzar"></div>

          <div>
            <input id="afegirmanual" type="submit" name="submit" class="constructiu" value="Afegir Manual">
          </div>
        </div>
      </form>
    </article>
    <?php
      include "boto_pujar.php"
    ?>
  </main>

  

<?php
  include "footer.php"
?>