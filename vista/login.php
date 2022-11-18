<article id="loginform" class="form">
  <a href="registre.php">Registrar-se</a>
  <br>

  <form name="formlogin" autocomplete="on" action="login.php" method = post>
    <div>
      <label class="form-input-label" for="email">E-mail</label>
        <br>
      <input id="email" type="email" name="email" placeholder="<?php$ echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </div>
    <div>
      <label class="form-input-label" for="password">Contrassenya</label>
        <br>
      <input id="password" type="password" name="password" placeholder="Contrasenya" autocomplete="current-password" pattern="[A-Za-z0-9.-_ ].{3,}" title="4 caracters minim, siusplau.">
    </div>

    <div>
      <input id="login" type="button" class="neutre" name="submit" value="Entrar">
    </div>
  </form>
  <p id="missatgelogin"><?php echo $missatge_error_login; ?></p>
  <span>No recordes la teva contrassenya? Clica <a href="recuperar_contrassenya.php">Aquí</a></span>
</article>