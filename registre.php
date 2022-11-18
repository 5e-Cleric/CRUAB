<?php
  require_once(__DIR__."/header.php");
?>
  <main class="main-content">
    <article>
      <div id="missatge"></div>

      <form id="formulari" name="formregistre">
        <div id="primera-columna">
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El nom és obligatori" for="nom">Nom</label>
            <br>
            <input id="nom" type="text" name="nom" placeholder="David" pattern="[a-zA-ZñÑÁÉÍÓÚÜÏÖáéíóúüïö-çÇ ]+" title="Escriu el teu nom real, siusplau" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El primer cognom és obligatori" for="cognom1">Primer cognom</label>
            <br>
            <input id="cognom1" type="text" name="cognom1" placeholder="Badillo" pattern="[a-zA-ZñÑÁÉÍÓÚÜÏÖáéíóúüïö-çÇ ]+" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El segon cognom és obligatori" for="cognom2">Segon cognom</label>
            <br>
            <input id="cognom2" type="text" name="cognom2" placeholder="Mirete" pattern="[a-zA-ZñÑÁÉÍÓÚÜÏÖáéíóúüïö-çÇ ]+" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El gènere és obligatori" for="genere">Génere</label>
            <br>
            <input id="genere" type="text" name="genere" placeholder="Barba" pattern="[A-Za-z]+" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El email és obligatori" for="email">E-mail</label>
            <br>
            <input name="email" type="email" id="email" placeholder="david@uab.cat" pattern="^[A-Za-z0-9._%+-&]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="La contrasenya és obligatoria" for="password">Contrasenya</label>
            <br>
            <input id="password" type="password" name="password" placeholder="Daeneryseslamillor" pattern="[A-Za-z0-9.-_ /+*&%].{3,}" required>
          </div>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="El telefon és obligatori" for="telefon">Telèfon</label>
            <br>
            <input id="telefon" type="number"  name="telefon" min="0" placeholder="626548325" pattern="[0-9].{9,}"required>
          </div>
        </div>
        <div id="segona-columna">
          <div>
            <label class="form-input-label" for="facultat">Facultat:</label>
            <br>
            <select id="facultat" name="facultat" class="form-select" aria-label="Default select example">
              <option value="Escola Enginyeria">Escola d'Enginyeria</option>
              <option value="Escola de Postgrau">Escola de Postgrau</option>
              <option value="Economia i Empresa">Economia i Empresa</option>
              <option value="Biociències">Biociències</option>
              <option value="Biociències">Ciències</option>
              <option value="Ciències de l'Educació">Ciències de l'Educació</option>
              <option value="Ciències de la Comunicació">Ciències de la Comunicació</option>
              <option value="Ciències Polítiques i de Sociologia">Ciències Polítiques i de Sociologia</option>
              <option value="Dret">Dret</option>
              <option value="Filosofia i Lletres">Filosofia i Lletres</option>
              <option value="Medicina">Medicina</option>
              <option value="Psicologia">Psicologia</option>
              <option value="Traducció i Interpretació">Traducció i Interpretació</option>
              <option value="Veterinària">Veterinària</option>
              <option value="Cap">Cap</option>
            </select>
          </div>
          <br>
          <div>
            <label class="form-input-label" for="curs">Curs:</label>
            <br>
            <select id="curs" name="curs" class="form-select" aria-label="Default select example">
              <option value="Primer">Primer</option>
              <option value="Primer">Segon</option>
              <option value="Primer">Tercer</option>
              <option value="Primer">Quart</option>
              <option value="Primer">Cinquè</option>
              <option value="Intercanvi">Intercanvi</option>
              <option value="Alumni">Antic estudiant</option>
              <option value="Altres">Altres</option>
            </select>
          </div>
          <br>
          <div>
            <label class="form-input-label" title="Aquest camp es obligatori" errormessage="La data de naixement és obligatoria" for="naixement">Data de naixement:</label>
            <br>
            <input id="naixement" type="date" name="naixement" min="1960-01-01" max="2008-01-01" required>
          </div>
          <br>
          <div>
            <label class="form-input-label">Treballes a la universitat?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="treballador" id="flexRadioDefault1" value="si">
              <label class="form-check-label" for="flexRadioDefault1">
                Si
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="treballador" id="flexRadioDefault2" value="no" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>
          <br>
          <div>
            <label class="form-check-label" for="mote">Sobrenom</label>
            <br>
            <input type="text" id="mote" name="mote" placeholder="Baiiillo">
          </div>
  
          <div>
            <input id="registre" type="button" class="constructiu" name="submit" value="Enregistrar-se">
          </div>
        </div>

        

      </form>
    </article>
    <?php
      require_once(__DIR__."/boto_pujar.php");
    ?>
    
  </main>


<?php
  require_once(__DIR__."/footer.php");
?>