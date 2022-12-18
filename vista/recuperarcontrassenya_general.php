<?php
if ($enviat) {
    echo "<span>" . $missatge_formulari_enviat . "</span>";
} else {
?>
<form id="form_recuperar_contrassenya_general" name="formlogin" autocomplete="on" action="recuperarcontrassenya.php"
    method=post>
    <div>
        <label class="form-input-label" for="email" title="El correu es obligatori" data-error-message="El correu es obligatori">E-mail</label>
        <br>
        <input id="email" type="email" name="email" placeholder=""
            pattern="[A-Za-z%0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    </div>
    <br>
    <div>
        <input id="submit_nova_contrassenya" type="submit" class="neutre" name="submit"
            value="<?php echo $missatge_recuperar; ?>">
    </div>
</form>
<?php
}
?>