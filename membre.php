<?php
include "header.php"
    ?>
<main class="main-content column center">
    <article class="">
        <section id="user-page" class="column">
            <div class="column center">
                <div class="user-image column center">
                    <img src="https://unsplash.it/400" alt="imatge de perfil">
                </div>
                <div>
                    <label for="nom">Nom:</label>
                    <span id="nom">Nom cognom1 cognom2</span>
                    <br>
                    <label for="correu">Correu:</label>
                    <span id="correu">correu@gmail.com</span>
                </div>
                <br>
                <button class="neutre" title="Això encara no està disponible" disabled>Editar el meu perfil</button>
                <button class="destructiu" title="Això encara no està disponible" disabled>Deixar de ser membre</button>
            </div>
            <div id="user-info">
                <p id="activitat"></p>
                <br>
                <br>
                <button id="activarmembre" class="constructiu hidden">Vull ser soci actiu</button>
                <button id="desactivarmembre" class="destructiu hidden">Vull ser soci inactiu</button>
            </div>
        </section>
    </article>
    <article id="prestecsmembre" class="column">
        <h1>Els meus lloguers</h1>
        <button class="neutre">
            <a href="lloguers.php">Els meus lloguers</a>
        </button>
    </article>
</main>
<?php
include "footer.php"
    ?>