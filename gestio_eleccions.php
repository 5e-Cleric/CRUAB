<?php
  require_once(__DIR__."/header.php");
?>
<?php
    if(isset($_SESSION["user_id"]) and $_SESSION["permisos"][6]==true)
        require_once(__DIR__."/controlador/gestio_eleccions.php");
    else
        require_once(__DIR__."/controlador/index.php");
    ?>

<?php
  require_once(__DIR__."/footer.php");
?>