<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content crearcomissio">
    <article class="">
        <h1>Crear una nova comissió:</h1>
        <form class="column center" action="crearcomissió" method="post">
            <label for="nomcomi">Nom de la comissió</label>
            <br>
            <input type="text" autocomplete="off" placeholder="Comissió de web" pattern="[A-Za-zÀ-ÖØ-öø-ÿ&' 0-9]+"
                id="nomcomi" required>
            <h3>Permissos</h3>
            <div class="double-column">
                <div>
                    <input type="checkbox" id="afegirjocs">
                    <label for="afegirjocs">Afegir jocs de taula</label>
                    <br>
                    <br>
                    <input type="checkbox" id="esborrarjocs">
                    <label for="esborrarjocs">Esborrar jocs de taula</label>
                    <br>
                    <br>
                    <input type="checkbox" id="afegirmanuals">
                    <label for="afegirmanuals">Afegir manuals de rol</label>
                    <br>
                    <br>
                    <input type="checkbox" id="esborrarrol">
                    <label for="esborrarrol">Esborrar manuals de rol</label>
                    <br>
                    <br>
                    <input type="checkbox" id="membres">
                    <label for="membres">Gestió de membres</label>
                    <br>
                </div>
                <div>
                    <input type="checkbox" id="editarweb">
                    <label for="editarweb">Editar el contingut de la web</label>
                    <br>
                    <br>
                    <input type="checkbox" id="eleccions">
                    <label for="eleccions">Administrar les eleccions</label>
                    <br>
                    <br>
                    <input type="checkbox" id="autoritzarreserves">
                    <label for="autoritzarreserves">Autoritzar reserves</label>
                    <br>
                    <br>
                    <input type="checkbox" id="crearcomissions">
                    <label for="crearcomissions">Crear comissions</label>
                    <br>
                </div>
            </div>
            <button class="constructiu" type="submit">Crear comissió</button>
        </form>
    </article>
    
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>