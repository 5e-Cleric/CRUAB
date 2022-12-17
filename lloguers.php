<?php

require_once(__DIR__."/header.php");

?>

<main class="main-content">

    <article>
        <h1>Els meus lloguers</h1>
        <br>
        <br>
        <h2>Jocs de Taula</h2>
        <br>
        <table>

            <thead>

                <tr>

                    <th>Joc</th>

                    <th>Còpia</th>

                    <th></th>

                    <th></th>

                </tr>

            </thead>

            <tbody>

                <!-- datos opcionales pueden incluirse aquí opcionalmente -->

            </tbody>

        </table>

        <template id="jocsdetaula">

            <tr>

                <td>

                    <img>

                </td>

                <td></td>

                <td>

                    <button></button>

                    <button></button>

                </td>

            </tr>

        </template>

        <br>
        <br>
        <h2>Manuals</h2>
        <br>

        <table>

            <thead>

                <tr>

                    <th>Nom</th>

                    <th>Còpia</th>

                    <th></th>

                    <th></th>

                </tr>

            </thead>

            <tbody>

                <!-- datos opcionales pueden incluirse aquí opcionalmente -->

            </tbody>

        </table>

        <template id="manuals">

            <tr>

                <td>

                    <img>

                </td>

                <td></td>

                <td>

                    <button></button>

                    <button></button>

                </td>

            </tr>

        </template>

    </article>

    <?php

    require_once(__DIR__."/boto_pujar.php");

    ?>

</main>







<?php

require_once(__DIR__."/footer.php");

?>