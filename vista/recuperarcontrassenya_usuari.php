<?php

?>
<form id="form_recuperar_contrassenya_usuari" name="formlogin" autocomplete="on" action="recuperarcontrassenya.php" method = post>
    <div>
      <label class="form-input-label" for="email">E-mail</label>
        <br>
      <input id="email" type="email" name="email" placeholder="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </div>
    <div hidden>
      <label hidden class="form-input-label" for="codi">Codi Temporal</label>
        <br>
      <input hidden  id="codi" name="codi" placeholder="<?php echo $codi; ?>">
    </div>
    <div>
      <label class="form-input-label" for="contrasenya">Contrassenya</label>
        <br>
      <input id="contrasenya" type="password" name="contrasenya" placeholder="Contrasenya" pattern="[A-Za-z0-9.-_ ].{6,}" title="6 caracters minim, siusplau.">
    </div>
    <div>
      <label class="form-input-label" for="contrasenya2">Contrassenya</label>
        <br>
      <input id="contrasenya2" type="password" name="contrasenya2" placeholder="Contrasenya">
      <span id = contrasenya2text></span>
    </div>

    <div>
      <input id="login" type="submit" class="neutre" name="submit" value="Entrar">
    </div>
  </form>