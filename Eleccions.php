<?php
  require_once(__DIR__."/header.php");
?>
<main class="main-content">
    <article id="llistes">
        <div class="table-holder">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>President</th>
                        <th>Vicepresident</th>
                        <th>Tresorer</th>
                        <th>Secretari</th>
                        <th>Vocals</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <template id="templatetaula">
                <tr class="llista">
                    <td>
                        <button class="editar round neutre hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800">
                                <path style="transform:translate(20%, 20%)"
                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3
                    0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9
                    8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0
                    107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0
                    17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                        </button>
                    </td>
                    <td class="President"></td>
                    <td class="Vicepresident"></td>
                    <td class="Tresorer"></td>
                    <td class="Secretari"></td>
                    <td class="Vocals"></td>
                    <td>
                        <button class="eliminar destructiu hidden">Eliminar</button>
                        <button class="votar neutre hidden">Voto</button>
                        <button class="guardar constructiu hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 790">
                                <path style="transform:translate(20%, 15%)" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 
                    48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 
                    64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 
                    0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z" />
                            </svg>
                        </button>
                        <button class="cancelar destructiu hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 520 520">
                                <path style="transform:translate(20%, 5%)"
                                    d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5
                     32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </template>
            <template id="templatebutton">
                <div class="botonsvocals row">
                    <input class="afegirvocal round" type="button" class="neutre" value="+">
                    <input class="eliminarvocal round" type="button" class="neutre" value="-">
                </div>
            </template>
        </div>
        <br>
        <button id="afegirllista" class="constructiu hidden">Afegir una llista electoral</button>
        <br>
        <br>
        <form id="formllista" class="pc-row-mobile-column gap hidden">
            <div class="column gap">
                <div>
                    <label for="nom">Nom de la llista:</label>
                    <br>
                    <input id="nom" type="text" placeholder="Llista de Baillo" pattern="[A-Za-z0-9 ].{4,}"
                        name="nom de la llista" title="Escriu el nom de la llista, siusplau" required>
                </div>
                <div>
                    <label for="President">President/a</label>
                    <br>
                    <select id="President" name="President" aria-label="Default select example" required>
                        <option disabled selected value> -- escull un/a president/a --
                        </option>
                    </select>
                </div>
                <div>
                    <label for="Vicepresident">Vicepresident/a</label>
                    <br>
                    <select id="Vicepresident" name="Vicepresident" aria-label="Default select example" required>
                        <option disabled selected value> -- escull un/a vicepresident/a -- </option>
                    </select>
                </div>
            </div>
            <div id="Vocals" class="column gap">
                <div>
                    <label for="Tresorer">Tresorer/a</label>
                    <br>
                    <select id="Tresorer" name="Tresorer" aria-label="Default select example" required>
                        <option disabled selected value> -- escull un/a tresorer/a -- </option>
                    </select>
                </div>
                <div>
                    <label for="Secretari">Secretari/a</label>
                    <br>
                    <select id="Secretari" name="Secretari" aria-label="Default select example" required>
                        <option disabled selected value> -- escull un/a secretari/a -- </option>
                    </select>
                </div>
                <div id="Vocal-1" class="Vocal">
                    <label for="Vocal">Vocal</label>
                    <br>
                    <select name="Vocal" aria-label="Default select example">
                        <option disabled selected value> -- escull un/a vocal -- </option>
                    </select>
                </div>
            </div>
            <div class="column center">
                <button type="button" id="afegirvocal" class="neutre center">Afegir un/a vocal</button>
                <br>
                <input id="crearllista" type="button" class="constructiu" name="submit" value="crear la llista">
            </div>
        </form>
    </article>
    
</main>
<?php
  require_once(__DIR__."/footer.php");
?>