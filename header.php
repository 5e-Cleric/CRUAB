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
    <link rel="icon" type="image/x-icon" href="/img/icon/dragon.ico">
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
            <!--
            <div class="dropdown-parent">
				
				
                <label class="dropdown-button" for="quisom">Qui sóm?</label>
                <dropdown id=quisom data-collapsed="yes">
                    <a id="paginasobrenosaltres" class="enllaç-navegacio" aria-current="page"
                        href="sobrenosaltres.php">Sobre nosaltres</a>
                    <a id="paginajunta" class="enllaç-navegacio" aria-current="page" href="junta.php">La junta
                        actual</a>
                    <a id="paginacontacte" class="enllaç-navegacio" aria-current="page" href="contacte.php">Contacta amb
                        nosaltres</a>
                    <a id="paginagaleria" class="enllaç-navegacio" aria-current="page" href="galeria.php">Galeria de
                        fotos</a>
                </dropdown>
            </div>


            <div class="dropdown-parent">
                <label for="ludoteca" class="dropdown-button">Ludoteca</label>
                <dropdown id="ludoteca" data-collapsed="yes">
                    <a id="paginajocs" class="enllaç-navegacio" aria-current="page" href="jocstaula.php">Jocs de
                        taula</a>
                    <a id="paginamanuals" class="enllaç-navegacio" aria-current="page" href="manuals.php">Manuals de
                        rol</a>
                </dropdown>
            </div>


            <div class="dropdown-parent">
                <label class="dropdown-button" for="activitats">Activitats</label>
                <dropdown id="activitats" data-collapsed="yes">
                    <a id="paginacalendari" class="enllaç-navegacio" aria-current="page" href="calendari.php">Calendari
                        d'activitats</a>
                    <a id="paginanoticies" class="enllaç-navegacio" aria-current="page" href="noticies.php">Notícies</a>
                </dropdown>
            </div>

            <div id="dropdownmembre" class="dropdown-parent hidden">
                <label class="dropdown-button" for="usuari">Usuari</label>
                <dropdown id="usuari" data-collapsed="yes">
                    <a id="paginamembre" class="enllaç-navegacio" aria-current="page" href="membre.php">El meu
                        perfil</a>
                    <a id="paginalogout" class="enllaç-navegacio" aria-current="page" href="">Tancar sessió</a>
                </dropdown>
            </div> 
			-->


            <a id="paginaeleccions" class="enllaç-navegacio hidden" aria-current="page"
                href="eleccions.php">Eleccions</a>
            <a id="paginalogin" class="enllaç-navegacio hidden" aria-current="page" href="login.php">Iniciar sessió</a>



            </div>
            <div id="float-right">
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

                    <button id="user-dropdown-button" class="nav-button columns center">
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
            <div class="anti-rotate rows center">
                <span class="material-symbols-rounded">supervised_user_circle</span>
                <span>Usuari</span>
            </div>
        </a>
        <a class="" href="gestiolloguers.php" data-title="Gestió lloguers">
            <div class="anti-rotate rows center">
                <span class="material-symbols-rounded">casino</span>
                <span>Llog.</span>
            </div>
        </a>
        <a class="" href="gestiolloguersmanuals.php" data-title="Gestió lloguers manuals">
            <div class="anti-rotate rows center">
                <span class="material-symbols-rounded">extension</span>
                <span>Rol</span>
            </div>
        </a>
    </nav>
