<article>
    <div id="presentar-candidatura-form" class="form">
        <form name="form-candidatura" action="javascript:void(0);" id="form-candidatura">
            <div class="form-option">
                <label class="form-input-label" for="nom-llista">Nom de la llista</label>
                <br>
                <input id="nom-llista" name="nom-llista" placeholder="Nom de la llista">
            </div>
            <div class="form-option">
                <label class="form-input-label" for="presidenti">Presidenti</label>
                <br>
                <select name="presidenti" id="presidenti" form="form-candidatura">
                    <?php
                    for($cnt = 0; $cnt < sizeof($actius); $cnt++)
                    {
                    ?>
                        <option value="<?php echo $actius[$cnt];?>"><?php echo getNomUsuari($conn, $actius[$cnt]);?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="vicepresidenti">Vicepresidenti</label>
                <br>
                <select name="vicepresidenti" id="vicepresidenti" form="form-candidatura">
                    <?php
                    for($cnt = 0; $cnt < sizeof($actius); $cnt++)
                    {
                    ?>
                        <option value="<?php echo $actius[$cnt];?>"><?php echo getNomUsuari($conn, $actius[$cnt]);?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="secretari">Secretari</label>
                <br>
                <select name="secretari" id="secretari" form="form-candidatura">
                    <?php
                    for($cnt = 0; $cnt < sizeof($actius); $cnt++)
                    {
                    ?>
                        <option value="<?php echo $actius[$cnt];?>"><?php echo getNomUsuari($conn, $actius[$cnt]);?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="tresoreri">Tresoreri</label>
                <br>
                <select name="tresoreri" id="tresoreri" form="form-candidatura">
                    <?php
                    for($cnt = 0; $cnt < sizeof($actius); $cnt++)
                    {
                    ?>
                        <option value="<?php echo $actius[$cnt];?>"><?php echo getNomUsuari($conn, $actius[$cnt]);?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <button id="afegir-vocal" class="neutre">Afegir vocal</button>

            <div>
                <button id="presentar-candidatura-submit" type="submit" class="neutre" name="submit">Presentar candidatura</button>
            </div>
        </form>
    </div>
</article>