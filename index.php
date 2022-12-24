<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content column center">
    <article id="noticies">
        <h1>Les últimes notícies</h1>
        <section class="article">
            <div class="header align">
                <h2 class="titol">Lorem Ipsum</h2>
            </div>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.</p>
            <span class="date">5 d'Octubre de 2022</span>
        </section>

        <section class="article">
            <div class="header align">
                <h2 class="titol">Lorem Ipsum</h2>
            </div>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum.</p>
            <span class="date">4 d'Octubre de 2022</span>
        </section>

    </article>
    <article id="contingut" class="column"></article>
    <article class="pc-row-mobile-column between">
        <div>
            <h2>On estem?</h2>
            <p>El CRUAB no té un edifici propi, pero compartim diverses zones amb la resta d'associacions de la UAB, la
                principal es l'hotel d'entitats, que es troba a l'edifici de la cafeteria de la plaça civica, al segon
                pís.
                Allà tenim tots els jocs de taula i manuals de rol, i sempre hi ha algú!
            </p>
            <br>
            <span>Horaris:10h-20h, dilluns-divendres</span>
        </div>
        <div class="iframe">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.29825383994833!2d2.1039607509874605!3d41.50208493918048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6fe6b1f4bf7cdee3!2zNDHCsDMwJzA3LjYiTiAywrAwNicxNC41IkU!5e0!3m2!1sen!2ses!4v1665258936878!5m2!1sen!2ses"
                width="300px" height="300px" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </article>
</main>
<template id="template">
    <section class="article">
        <div class="header align">
            <h2 class="titol"></h2>
        </div>
        <p class="text"></p>
        <span class="date"></span>
    </section>
    <div class="button-holder start">
        <button class="afegir constructiu hidden">Afegir event</button>
    </div>
    <div class="botons align">
        <button class="editar neutre rodo hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800">
                <path style="transform:translate(20%, 20%)"
                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3
            0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9
            8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0
            107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0
            17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
            </svg>
        </button>
        <button class="guardar constructiu rodo hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 790">
                <path style="transform:translate(20%, 15%)" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 
            48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 
            64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 
            0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z" />
            </svg>
        </button>
        <button class="cancelar destructiu rodo hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 520 520">
                <path style="transform:translate(20%, 5%)"
                    d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5
             32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
            </svg>
        </button>
        <button class="eliminar destructiu hidden">Eliminar</button>
    </div>
    <div class="titol-parent">
        <label errormessage="El títol de l'article es necessari per publicar-lo">Títol de l'article</label>
        <br>
        <input placeholder="Títol de l'article" type="text" title="El títol de l'article es necessari per publicar-lo">
    </div>
    <textarea class="textarea"></textarea>
</template>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>