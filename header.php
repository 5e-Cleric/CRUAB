<?php
require_once(__DIR__ . "/connectDB.php");
//require_once(__DIR__."/config.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruab</title>
    <link rel="icon" type="image/x-icon" href="/img/logo/dragon.ico">
    <link rel="stylesheet" href="css/general.css">
</head>

<body>
    <header id="capçalera" class="navigation">
        <nav id="navbar">
            <a class="logo enllaç-navegacio" style="max-width:100px;" href="index.php">
                <img src="img/logo/logo.svg" alt="Logo" title="Logo" />
            </a>
            <a id="paginasobrenosaltres" class="enllaç-navegacio" aria-current="page" href="sobrenosaltres.php">Sobre
                nosaltres</a>
            <a id="paginaactualitat" class="enllaç-navegacio" aria-current="page" href="actualitat.php">Actualitat</a>
            <a id="paginaludoteca" class="enllaç-navegacio" aria-current="page" href="ludoteca.php">Ludoteca</a>
            <a id="paginaeleccions" class="enllaç-navegacio hidden" aria-current="page"
                href="eleccions.php">Eleccions</a>




            </div>
            <div class="float-right">
                <div class="dropdown-parent">
                    <button id="temes" class="nav-button theme-button" type="button" data-target="theme-dropdown">
                        <span class="material-symbols-rounded">palette</span>
                        <span class="material-symbols-rounded">expand_more</span>
                    </button>
                    <dropdown id="theme-dropdown" data-collapsed="yes" class="theme-dropdown">
                        <button id="clar" class="canvi-tema" type="button" data-toggle="theme" data-target="body"
                            disabled>Clar</button>
                        <button id="fosc" class="canvi-tema" type="button" data-toggle="theme" data-target="body"
                            disabled>Fosc</button>
                        <button id="pergami" class="canvi-tema" type="button" data-toggle="theme"
                            data-target="body">Pergami</button>
                        <button id="lgbt" class="canvi-tema" type="button" data-toggle="theme" data-target="body"
                            disabled>Lgbt</button>
                    </dropdown>
                </div>
                <div class="dropdown-parent">
                    <a id="paginalogin" class="enllaç-navegacio hidden" aria-current="page" href="login.php">Iniciar
                        sessió</a>

                    <button id="user-dropdown-button" class="nav-button center hidden">
                        <span class="material-symbols-rounded">expand_more</span>
                        <div class="image-holder">
                            <img id="user-image" src="" alt="Your user image">
                        </div>
                    </button>


                    <dropdown id="user-menu" data-collapsed="yes">
                        <a href="membre.php">El meu compte</a>
                        <a href="lloguers.php">Els meus lloguers</a>
                        <a href="feedback.php">Feedback</a>
                        <a id="paginalogout">Tancar sessió</a>
                    </dropdown>

                </div>
            </div>
        </nav>
    </header>
    <button class="neutre" id="juntanav-button"><span
            class="material-symbols-rounded">keyboard_double_arrow_up</span></button>
    <nav id="juntanavbar" data-collapsed="yes">
        <a class="" href="gestiomembres.php" data-title="Ingresos membres">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">supervised_user_circle</span>
                <span>membres</span>
            </div>
        </a>
        <a class="" href="gestiolloguers.php" data-title="Gestió lloguers">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">casino</span>
                <span>Llog.</span>
            </div>
        </a>
        <a class="" href="gestiojocs.php" data-title="Gestió jocs de taula">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">extension</span>
                <span>Jocs</span>
            </div>
        </a>
        <a class="" href="gestiomanuals.php" data-title="Gestió manuals">
            <div class="anti-rotate column center">
                <span class="material-symbols-rounded">book</span>
                <span>Rol</span>
            </div>
        </a>
    </nav>