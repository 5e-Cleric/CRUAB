<?php
require_once(__DIR__ . "/../model/recuperarcontrassenya.php");
$correu_especificat = false;
$actualitzacio_interna = false;
if ($_GET and $_GET["email"]) {
    $correu_especificat = true;
}
if ($_POST and $_POST["email"]) {
    $actualitzacio_interna = true;
}
if ($actualitzacio_interna) {
    $email = assegurarInputs($_POST["email"]);
    if ($_POST["contrassenya"]) {
        $codi = "";
        if ($_POST["codi"]) {
            $codi = $_POST["codi"];
        }
        if ($_GET["codi"]) {
            $codi = $_GET["codi"];
        }
        $codi = assegurarInputs($codi);
        $codi_correcte = comprovarCodiValid($conn, $email, $codi);
        if ($codi_correcte) {
            $missatge_formulari_enviat = "";
            if (setContrassenya($conn, $email, hash("sha256", assegurarInputs($_POST["contrassenya"])))) {
                $missatge_formulari_enviat = "Canvi especificat. Prova a fer login amb la nova contrassenya.";
            } else {
                $missatge_formulari_enviat = "Error configurant la nova contrassenya";
            }
            $enviat = true;
            require_once(__DIR__ . "/../vista/recuperarcontrassenya_usuari.php");
        }
    } else {
        $missatge_formulari_enviat = "";
        if (checkCorreuEnviar($conn, $email)) {
            $missatge_formulari_enviat = "Petició rebuda. Si el correu està registrat, hi enviarem un enllaç per restablir la contrassenya.";
        } else {
            $missatge_formulari_enviat = "Error en l'enviament del correu. Prova-ho en una estona o contacta amb un administrador.";
        }
        $enviat = true;
        require_once(__DIR__ . "/../vista/recuperarcontrassenya_general.php");
    }
} else if ($correu_especificat) {
    $email = assegurarInputs($_GET["email"]);
    $codi = assegurarInputs($_GET["codi"]);
    $codi_correcte = comprovarCodiValid($conn, $email, $codi);
    $missatge_recuperar = "Recuperar Contrassenya";
    $enviat = false;
    require_once(__DIR__ . "/../vista/recuperarcontrassenya_usuari.php");
} else {
    $missatge_recuperar = "Recuperar Contrassenya";
    $enviat = false;
    require_once(__DIR__ . "/../vista/recuperarcontrassenya_general.php");
}
?>