<?php
    require_once(__DIR__."/../model/membre.php");
    require_once(__DIR__."/../utils.php");
    $_SESSION["permisos"] = null;
    $_SESSION["es_junta"] = false;
    if(isset($_SESSION["user_id"]))
    {
        $_SESSION["permisos"] = obtenirPermisos($conn,$_SESSION["user_id"]);
        $_SESSION["es_junta"] = esJunta($conn,$_SESSION["user_id"]);
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName;?></title>
    <link rel="icon" type="image/x-icon" href="/img/logo/dragon.ico">
    <link rel="stylesheet" href="css/general.css">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header id="capçalera" class="navigation">
        <nav id="navbar">
            <button id="nav-button" class="mobile-view hamburger">
                <div></div>
                <div></div>
                <div></div>
            </button>
            <a class="logo nav-link" style="max-width:100px;" href="index.php">
                <img src="img/logo/logo.svg" alt="Logo" title="Logo" />
            </a>
            <div id="nav-dropdown">
                <a id="paginasobrenosaltres" class="nav-link" aria-current="page" href="sobrenosaltres.php">Sobre
                    nosaltres</a>
                <a id="paginaactualitat" class="nav-link" aria-current="page" href="actualitat.php">Actualitat</a>
                <a id="paginaludoteca" class="nav-link" aria-current="page" href="ludoteca.php">Ludoteca</a>
                <a id="paginacomissions" class="nav-link" aria-current="page" href="comissions.php">Comissions</a>
                <?php
                    if(isset($_SESSION["user_id"]))
                    {
                ?>

                        <a id="paginaeleccions" class="nav-link" aria-current="page" href="eleccions.php">Eleccions</a>
                <?php
                    }
                ?>


            </div>
            <div class="float-right">
                <div class="dropdown-parent">
                    <button id="temes" class="nav-button theme-button" type="button" data-target="theme-dropdown">
                        <span class="material-symbols-rounded">palette</span>
                        <span class="material-symbols-rounded">expand_more</span>
                    </button>
                    <dropdown id="theme-dropdown" data-collapsed="yes" class="theme-dropdown">
                        <content>
                            <button id="clar" class="canvi-tema" type="button" data-toggle="theme"
                                data-target="body">Clar</button>
                            <button id="fosc" class="canvi-tema" type="button" data-toggle="theme"
                                data-target="body">Fosc</button>
                            <button id="pergami" class="canvi-tema" type="button" data-toggle="theme"
                                data-target="body">Pergami</button>
                            <button id="lgbt" class="canvi-tema" type="button" data-toggle="theme"
                                data-target="body">Lgbt</button>
                        </content>
                    </dropdown>
                </div>
                <div class="dropdown-parent">
                    <?php
                        if(isset($_SESSION["user_id"]))
                        {
                    ?>
                            <button id="user-dropdown-button" class="nav-button center">
                                <span class="material-symbols-rounded">expand_more</span>
                                <div class="image-holder">
                                    <img id="user-image" src="https://unsplash.it/50/50" alt="Your user image">
                                </div>
                            </button>
                             <dropdown id="user-menu" data-collapsed="yes">
                                <content>
                                    <a href="membre.php">El meu compte</a>
                                    <a href="lloguers.php">Els meus lloguers</a>
                                    <a href="feedback.php">Feedback</a>
                                    <a id="paginalogout" href="logout.php">Tancar sessió</a>
                                </content>
                            </dropdown>
                    <?php
                        }
                        else
                        {
                    ?>
                    <a id="paginalogin" class="nav-link" aria-current="page" href="login.php">Iniciar sessió</a>
                    <?php
                        }
                    ?>




                   

                </div>
            </div>
        </nav>
    </header>
    <?php
        if(isset($_SESSION["user_id"]))
        {
            if($_SESSION["es_junta"] || in_array(true, $_SESSION["permisos"]))
            {
    ?>
    <button class="neutre" id="juntanav-button"><span
            class="material-symbols-rounded">keyboard_double_arrow_up</span></button>
    
    <nav id="juntanavbar" data-collapsed="yes" style="
        --n: 4;
        --radius: 300px;
        --button-diameter: 70px;">
        <?php /*
            if($_SESSION["es_junta"] || $_SESSION["permisos"][2]==true)
            {
        ?>
        <a class="" href="gestiomembres.php" data-title="Gestió membres">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">supervised_user_circle</span>
                <span>membres</span>
            </div>
        </a>
        <?php
            }
            if($_SESSION["es_junta"] || $_SESSION["permisos"][1]==true)
            {
        ?>
        <a class="" href="gestiolloguers.php" data-title="Gestió lloguers">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">casino</span>
                <span>Llog.</span>
            </div>
        </a>
        <?php
            }
            if($_SESSION["es_junta"] || $_SESSION["permisos"][0]==true)
            {
        ?>
        <a class="" href="gestiomaterials.php" data-title="Gestió materials">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">book</span>
                <span>Rol</span>
            </div>
        </a>
        <?php
            }
        ?>
        <?php
            
            if($_SESSION["permisos"][6]==true)
            {
        ?>
        <a class="" href="gestio_eleccions.php" data-title="Gestió Eleccions">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">book</span>
                <span>Eleccions</span>
            </div>
        </a>
        <?php
            }*/
        ?>
    </nav>
    <?php
            }
        }
    ?>