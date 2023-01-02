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
                <a id="paginaeleccions" class="nav-link hidden" aria-current="page" href="eleccions.php">Eleccions</a>
            </div>

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
                    <a id="paginalogin" class="nav-link hidden" aria-current="page" href="login.php">Iniciar
                        sessió</a>

                    <button id="user-dropdown-button" class="nav-button center hidden">
                        <span class="material-symbols-rounded">expand_more</span>
                        <div class="image-container">
                            <img id="user-image" src="https://unsplash.it/50" alt="Your user image">
                        </div>
                    </button>


                    <dropdown id="user-menu" data-collapsed="yes">
                        <content>
                            <a href="membre.php">El meu compte</a>
                            <a href="lloguers.php">Els meus lloguers</a>
                            <a href="feedback.php">Feedback</a>
                            <a id="paginalogout">Tancar sessió</a>
                        </content>
                    </dropdown>

                </div>
            </div>
        </nav>
    </header>
    <button id="gestio-button">
        <div class="center column">
            <span class="material-symbols-rounded">settings</span>
            <span>Gestió</span>
        </div>

    </button>
    <nav id="gestio-nav" data-collapsed="yes" style="
        --n: 4;
        --radius: clamp(200px, 50vw, 400px);
        --button-diameter: 8ch;">

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