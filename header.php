<?php
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
      <a class="logo enllaç-navegacio" href="index.php">
        <img src="img/icon/logo.svg" alt="Logo" title="Logo"/>
      </a>

      <div id="botonsnavegacioprincipal" class="collapsed">
        <a id="paginajocs" class="enllaç-navegacio" aria-current="page" href="jocstaula.php">Jocs de taula</a>
        <a id="paginamanuals" class="enllaç-navegacio" aria-current="page" href="manuals.php">Manuals</a>
        <a id="paginagestio" class="enllaç-navegacio hidden" aria-current="page" href="gestio.php">Gestió</a>
        <a id="paginacompte" class="enllaç-navegacio hidden" aria-current="page" href="membre.php">Compte</a>
        <a id="paginalogout" class="enllaç-navegacio hidden" aria-current="page" href="">Tancar sessió</a>
        <a id="paginaeleccions" class="enllaç-navegacio hidden" aria-current="page" href="eleccions.php">Eleccions</a>
        <a id="paginalogin" class="enllaç-navegacio hidden" aria-current="page" href="login.php">Iniciar sessió</a>
      </div>
      <div id="botonsdreta">
        <button id="temes" class="temes-boto" type="button" data-target="espaitemes">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 64V448C362 448 448 362 448 256C448 149.1 362 64 256 64z" />
          </svg>
        </button>
        </button>
        <div id="espaitemes" class="espai-temes">
          <button id="clar" class="canvi-tema" type="button" data-toggle="theme" data-target="body">Clar</button>
          <button id="fosc" class="canvi-tema" type="button" data-toggle="theme" data-target="body">Fosc</button>
          <button id="pergami" class="canvi-tema" type="button" data-toggle="theme" data-target="body">Pergami</button>
          <button id="lgbt" class="canvi-tema" type="button" data-toggle="theme" data-target="body">Lgbt</button>
        </div>
        <div id="boto-navegacio-parent">
          <button id="boto-navegacio" type="button" data-toggle="collapse" data-target="##botonsnavegacioprincipal">
            <div></div>
            <div></div>
            <div></div>
          </button>
        </div>
      </div>
    </nav>
    <nav id="juntanavbar" class="hidden">
      <div id="botonsnavegaciojunta">
        <a class="enllaç-navegacio" href="gestioingresosmembres.php">Ingresos membres</a>
        <a class="enllaç-navegacio" href="gestiolloguersjocs.php">Gestió lloguers jocs</a>
        <a class="enllaç-navegacio" href="gestiolloguersmanuals.php">Gestió lloguers manuals</a>
        <a class="enllaç-navegacio" href="gestiomembres.php">Gestió de membres</a>
      </div>
    </nav>
  </header>
