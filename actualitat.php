<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content column center">
    <article class="column">
        <h2>Totes les notícies</h2>
        <section class="news">
            <div>
                <h4 class="news-title">No et creuràs el que ha passat a les nits lúdiques!</h4>
                <p class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <br>
                <span class="date">24-12-2022</span>
            </div>
            <div class="image-container">
                <img src="https://unsplash.it/500?random=1" alt="Imatge de la noticia">
            </div>
        </section>
        <section class="news">
            <div>
                <h4 class="news-title">No et creuràs el que ha passat a les nits lúdiques!</h4>
                <p class="news-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <br>
                <span class="date">24-12-2022</span>
            </div>
            <div class="image-container">
                <img src="https://unsplash.it/500?random=2" alt="Imatge de la noticia">
            </div>
        </section>
        <section class="center">
            <div class="pagination center">
                <ul class="center">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#" data-active="1">1</a></li>
                    <li><a href="#" data-active="0">2</a></li>
                    <li><a href="#" data-active="0">3</a></li>
                    <li><a href="#" data-active="0">4</a></li>
                    <li><a href="#" data-active="0">5</a></li>
                    <li><a href="#" data-active="0">6</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </section>

    </article>
    <article>
        <h2>Calendari</h2>
        <div class="center">
            <iframe id="calendar"
                src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%237CB342&ctz=Europe%2FAmsterdam&showNav=1&showDate=1&showPrint=0&showTabs=1&showCalendars=0&showTz=0&showTitle=1&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%237986CB"
                style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </article>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>