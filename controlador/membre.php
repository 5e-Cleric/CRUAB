<?php
require_once(__DIR__."/../model/membre.php");
require_once(__DIR__."/../model/eleccions.php");
$etapa = getEtapaActualEleccions($conn);
$membre_actiu = getMembreActiu($conn,$_SESSION["user_id"]);
$dades_usuari = getDadesUsuari($conn,$_SESSION["user_id"]);
$editar = false;
if($_GET and $_GET["editar"])
{
    $editar=true;
}

?>
<main class="main-content column center">
    <article class="">
       <?php 
            if($editar)
                require_once(__DIR__."/../vista/membre_editar.php"); 
            else
                require_once(__DIR__."/../vista/membre_base.php");
                ?>
        <section>
            <?php
                
                if(!(comprovaEleccionsActives($conn) and $etapa == 4))
                    require_once(__DIR__."/../vista/eleccions_actiu_inactiu.php");
            ?>
        </section>
            
    </article>
    <article id="prestecsmembre" class="column">
        <h1>Els meus lloguers</h1>
        <button class="neutre">
            <a href="lloguers.php">Els meus lloguers</a>
        </button>
    </article>
</main>