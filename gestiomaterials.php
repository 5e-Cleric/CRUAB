<?php
require_once(__DIR__ . "/header.php");
?>
<?php
    if($_SESSION["es_junta"] || $_SESSION["permisos"][0]==true)
        require_once(__DIR__."/controlador/gestiomaterials.php");
    else
        require_once(__DIR__."/controlador/index.php");
    ?>

<?php
require_once(__DIR__ . "/footer.php");
?>