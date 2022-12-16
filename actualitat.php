<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content rows center">
    <article class="rows">
        <h2>Notícies</h2>
        <ol>
            <li>
                <details>
                    <summary>Notícia 1</summary>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </details>
            </li>
            <li>
                <details>
                    <summary>Notícia 2</summary>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </details>
            </li>
            <li>
                <details>
                    <summary>Notícia 3</summary>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </details>
            </li>
            <li>
                <details>
                    <summary>Notícia 4</summary>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </details>
            </li>
        </ol>

    </article>
    <article>
        <h2>Calendari</h2>
        <div class="columns center">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23f2ece4&ctz=Europe%2FAmsterdam&showCalendars=1&showTabs=1&showPrint=1&showDate=1&showNav=1&showTitle=1&showTz=0&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%237986CB"
                style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no">
            </iframe>
        </div>
    </article>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>
