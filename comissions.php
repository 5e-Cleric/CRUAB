<?php
require_once(__DIR__ . "/header.php");
?>
<?php
    if(isset($_SESSION["user_id"]))
        require_once(__DIR__."/controlador/comissions.php");
    else
        require_once(__DIR__."/controlador/index.php");
    ?>
<?php
require_once(__DIR__ . "/footer.php");
?>