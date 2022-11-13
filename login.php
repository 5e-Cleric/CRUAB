<?php
  include "header.php"
?>
  <main class="main-content">
    <article id="loginform" class="form">
      <a rel="stylesheet" href="registre.php">Registrar-se</a>
      <br>

      <form name="formlogin" autocomplete="on">
        <div>
          <label class="form-input-label" for="email">E-mail</label>
            <br>
          <input id="email" type="email" name="email" placeholder="exemple@uab.cat" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </div>
        <div>
          <label class="form-input-label" for="password">Contrasenya</label>
            <br>
          <input id="password" type="password" name="password" placeholder="Contrasenya" autocomplete="current-password" pattern="[A-Za-z0-9.-_ ].{3,}" title="4 caracters minim, siusplau.">
        </div>

        <div>
          <input id="login" type="button" class="neutre" name="submit" value="Entrar">
        </div>
        
      </form>
      <p id="missatgelogin"></p>
    </article>
    <?php
      include "boto_pujar.php"
    ?>
  </main>


<?php
  include "footer.php"
?>