<?php

?>
<form id="form_recuperar_contrassenya_general" name="formlogin" autocomplete="on" action="recuperarcontrassenya.php" method = post>
    <div>
      <label class="form-input-label" for="email">E-mail</label>
        <br>
      <input id="email" type="email" name="email" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </div>
    <div>
      <input id="submit_nova_contrassenya" type="submit" class="neutre" name="submit" value="<?php echo $missatge_recuperar; ?>">
    </div>
</form>
<span hidden><?php echo $missatge_formulari_enviat; ?></span>