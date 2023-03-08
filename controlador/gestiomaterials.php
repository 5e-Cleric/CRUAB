<main class="main-content">
    
    <article class="center">

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="nom">Catan</td>
                    <td><button class="eliminarboto destructiu"><span
                                class="material-symbols-rounded">delete</span></button></td>
                    <td><a href="">Editar</a></td>
                </tr>
            </tbody>
        </table>
        <form class="column center" name="formafegirjoc" action="/api/JocsTaula.php" method="POST"
            enctype="multipart/form-data">
            <h2>Afegir joc</h2>
            <div class="double-column">
                <div>
                    <div>
                        <label class="form-input-label" title="Aquest camp es obligatori" for="nom">Nom del
                            joc</label>
                        <br>
                        <input type="text" id="nom" name="nom" autocomplete="off" placeholder="Lords Of Waterdeep"
                            pattern="[A-Za-zÀ-ÖØ-öø-ÿ&' 0-9]+" title="Nom del joc de taula" required>
                    </div>
                    <div>
                        <label class="form-input-label sense-asterisc">Jugadors</label>
                        <div class="between">
                            <div>
                                <label class="form-input-label" title="Aquest camp es obligatori"
                                    for="minjugadors">Mínim</label>
                                <br>
                                <input type="number" id="minjugadors" name="minjugadors" min="1" max="10"
                                    placeholder="2" title="Mínim de jugadors" required>
                            </div>
                            <div>
                                <label class=" form-input-label" title="Aquest camp es obligatori"
                                    for="maxjugadors">Màxim</label>
                                <br>
                                <input type="number" id="maxjugadors" name="maxjugadors" min="1" max="20"
                                    placeholder="5" title="Máxim de jugadors" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="form-input-label" title="Aquest camp es obligatori" for="duracio">Duració en
                            minuts</label>
                        <br>
                        <input type="number" id="duracio" name="duracio" min="2" max="360" placeholder="120+"
                            title="Duració del joc promitja" required>
                    </div>
                    <div>
                        <label class="form-input-label" title="Aquest camp es obligatori" for="dificultat">Dificultat
                            del
                            joc</label>
                        <br>
                        <select name="dificultat" id="dificultat" title="Dificultat del joc"
                            aria-label="Default select example" required>
                            <option disabled selected value> -- escull una dificultat --</option>
                            <option value="1"> 1: fàcil</option>
                            <option value="2"> 2: mitjà</option>
                            <option value="3"> 3: difícil</option>
                            <option value="4"> 4: molt difícil</option>
                        </select>
                        <!--<input type="number" id="dificultat" min:="1" max="4" name="dificultat" placeholder="2" title="Dificultat del joc" required>-->
                    </div>
                    <div>
                        <label class="form-input-label" title="Aquest camp es obligatori"
                            for="editorial">Editorial</label>
                        <br>
                        <input type="text" id="editorial" name="editorial" pattern="[A-Za-zÀ-ÖØ-öø-ÿ&' 0-9]+"
                            placeholder="Wizards of the Coast" title="Nom de l'editorial" required>
                    </div>
                </div>
                <div>
                    <label class="form-input-label" title="Aquest camp es obligatori">Tipus de joc:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipus" id="flexRadioDefault2"
                            value="Competitiu" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Competitiu
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipus" id="flexRadioDefault1"
                            value="Cooperatiu">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cooperatiu
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipus" id="flexRadioDefault3"
                            value="Solitari">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Solitari
                        </label>
                    </div>
                    <br>
                    <div>
                        <input type="file" id="img-uploader" name="img-uploader"
                            accept="image/png, image/jpeg, image/jpg"
                            title="Afegeix una imatge del joc, en jpg, jpeg o png" required>
                    </div>
                    <br>
                    <br>
                    <div>
                        <input type="submit" id="afegirjoc" name="submit" class="constructiu" value="Afegir joc">
                    </div>
                </div>
            </div>
        </form>
    </article>
</main>