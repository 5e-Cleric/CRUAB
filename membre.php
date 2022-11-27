<?php

include "header.php"

?>

<main class="main-content">

    <article class="columns center stretch threegap">

        <section id="prestecsmembre" class="rows">

            <button class="neutre">

                <a href="lloguers.php">Els meus prestecs de jocs</a>

            </button>



        </section>

        <section id="user-page" class="rows">

            <div id="user-info">

                <a class="hidden">editar el meu perfil</a>

                <button class="hidden" disabled>deixar de ser membre</button>

                <p id="activitat"></p>

                <br>

                <br>

                <button id="activarmembre" class="constructiu hidden">Vull ser soci actiu</button>

                <button id="desactivarmembre" class="destructiu hidden">Vull ser soci inactiu</button>

            </div>

        </section>

    </article>

    <?php

    include "boto_pujar.php"

    ?>

</main>





<?php

include "footer.php"

?>