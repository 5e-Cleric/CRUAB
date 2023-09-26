<?php
if ($enviat)
{
	echo "<span>".$missatge_formulari_enviat."</span>";
}
else
{
?>
<form id="form_recuperar_contrassenya_usuari" name="formlogin" autocomplete="on" action="recuperarcontrassenya.php?codi=<?php echo $codi; ?>" method = post>
    <div>
      <label class="form-input-label" for="email">E-mail</label>
        <br>
      <input id="email" type="email" name="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </div>
    <div>
      <label class="form-input-label" for="contrasenya">Contrassenya</label>
        <br>
      <input id="contrassenya" type="password" name="contrassenya" placeholder="Contrassenya" pattern="[A-Za-z0-9.-_ ].{5,}" title="6 caracters minim, siusplau.">
    </div>
    <div>
      <label class="form-input-label" for="contrassenya2">Contrassenya</label>
        <br>
      <input id="contrassenya2" type="password" name="contrassenya2" placeholder="Contrassenya">
      <span id = contrassenya2text></span>
    </div>

    <div>
      <input id="login" type="submit" class="neutre" name="submit" value="Entrar">
    </div>
  </form>

<?php 
	}
?>