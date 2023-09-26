 <section id="user-page" class="column center">
        <form name="form-usuari" action="javascript:void(0);" id="form-usuari">
            <div class="form-option">
                <label for="nom">Nom:</label>
                <input id="nom" name="nom" value="<?php echo $dades_usuari["Nom"];?>">
            </div>
            <div class="form-option">
                <label for="cognoms">Cognoms:</label>
                <input id="cognoms" name="cognoms" value="<?php echo $dades_usuari["Cognoms"];?>">
            </div>
            <div class="form-option">
                <label for="sobrenom">Sobrenom:</label>
                <input id="sobrenom" name="sobrenom" value="<?php echo $dades_usuari["Pseudonim"];?>">
            </div>
            <div class="form-option">
                <label for="correu">Correu electrònic:</label>
                <input id="correu" name="correu" type="email" value="<?php echo $dades_usuari["Email"];?>">
            </div>
            <div class="form-option">
                <label class="form-input-label" for="genere">Gènere</label>
                <input id="genere" name="genere" type="text" list="generes" value="<?php echo $dades_usuari["Genere"];?>"/>
                <datalist id="generes">
                  <option>No Binari</option>
                  <option>Dona</option>
                  <option>Home</option>
                  <option>Prefereixo no dir-ho</option>
                </datalist>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="pronoms">Pronoms</label>
                <input id="pronoms" name="pronoms" type="text" list="pronoms-list" value="<?php echo $dades_usuari["Pronoms"];?>"/>
                <datalist id="pronoms-list">
                  <option>Neutres</option>
                  <option>Femenins</option>
                  <option>Masculins</option>
                  <option>Qualsevols</option>
                  <option>Neutres/Femenins</option>
                  <option>Neutres/Masculins</option>
                  <option>Femenins/Masculins</option>
                  <option>Prefereixo no dir-ho</option>
                </datalist>
            </div>
            <div class="form-option">
                <label for="naixement">Data de Naixement:</label>
                <input id="naixement" name="naixement" type="date" value="<?php echo $dades_usuari["Data_Naixement"];?>">
            </div>
            <div class="form-option">
                <label for="ingres">Any d'ingrés:</label>
                <input id="ingres" name="ingres" type="number" value="<?php echo $dades_usuari["Any_Ingres"];?>">
            </div>
            <div class="form-option">
                <label for="telefon">Telèfon:</label>
                <input id="telefon" name="telefon" value="<?php echo $dades_usuari["Telefon"];?>">
            </div>
            <div class="form-option">
                <label class="form-input-label" for="facultat">Facultat</label>
                <select id="facultat" name="facultat" value="<?php echo $dades_usuari["Facultat"];?>"/>
                  <option <?php echo $dades_usuari["Facultat"]=="Escola de Doctorat" ? 'selected="selected"':"";?>>Escola de Doctorat</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Escola d Enginyeria" ? 'selected="selected"':"";?>>Escola d'Enginyeria</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Escola de Postgray" ? 'selected="selected"':"";?>>Escola de Postgrau</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat d Economia i Empresa" ? 'selected="selected"':"";?>>Facultat d'Economia i Empresa</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Biociències" ? 'selected="selected"':"";?>>Facultat de Biociències</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Ciències" ? 'selected="selected"':"";?>>Facultat de Ciències</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Ciències de l'Educació" ? 'selected="selected"':"";?>>Facultat de Ciències de l'Educació</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Ciències de la Comunicació" ? 'selected="selected"':"";?>>Facultat de Ciències de la Comunicació</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Ciències Polítiques i Sociologia" ? 'selected="selected"':"";?>>Facultat de Ciències Polítiques i Sociologia</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Dret" ? 'selected="selected"':"";?>>Facultat de Dret</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Filosofia i Lletres" ? 'selected="selected"':"";?>>Facultat de Filosofia i Lletres</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Medicina" ? 'selected="selected"':"";?>>Facultat de Medicina</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Psicologia" ? 'selected="selected"':"";?>>Facultat de Psicologia</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Traducció i Interpretació" ? 'selected="selected"':"";?>>Facultat de Traducció i Interpretació</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Facultat de Veterinària" ? 'selected="selected"':"";?>>Facultat de Veterinària</option>
                  <option <?php echo $dades_usuari["Facultat"]=="Cap" ? 'selected="selected"':"";?>>Cap</option>
                </select>
                
            </div>
            <div class="form-option">
                <label class="form-input-label" for="curs">Curs</label>
                <select id="curs" name="curs" value="<?php echo $dades_usuari["Curs"];?>"/>
                  <option <?php echo $dades_usuari["Curs"]=="Primer" ? 'selected="selected"':"";?>>Primer</option>
                  <option <?php echo $dades_usuari["Curs"]=="Segon" ? 'selected="selected"':"";?>>Segon</option>
                  <option <?php echo $dades_usuari["Curs"]=="Tercer" ? 'selected="selected"':"";?>>Tercer</option>
                  <option <?php echo $dades_usuari["Curs"]=="Quart" ? 'selected="selected"':"";?>>Quart</option>
                  <option <?php echo $dades_usuari["Curs"]=="Cinquè" ? 'selected="selected"':"";?>>Cinquè</option>
                  <option <?php echo $dades_usuari["Curs"]=="Sisè" ? 'selected="selected"':"";?>>Sisè</option>
                  <option <?php echo $dades_usuari["Curs"]=="Setè" ? 'selected="selected"':"";?>>Setè</option>
                  <option <?php echo $dades_usuari["Curs"]=="Vuitè" ? 'selected="selected"':"";?>>Vuitè</option>
                  <option <?php echo $dades_usuari["Curs"]=="Graduat" ? 'selected="selected"':"";?>>Graduat</option>
                  <option <?php echo $dades_usuari["Curs"]=="Màster" ? 'selected="selected"':"";?>>Màster</option>
                  <option <?php echo $dades_usuari["Curs"]=="Doctorat" ? 'selected="selected"':"";?>>Doctorat</option>
                  <option <?php echo $dades_usuari["Curs"]=="Postgrau" ? 'selected="selected"':"";?>>Postgrau</option>
                  <option <?php echo $dades_usuari["Curs"]=="Cap" ? 'selected="selected"':"";?>>Cap</option>
                </select>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="pdipas">PDI/PAS</label>
                <input id="pdipas" name="pdipas" type="checkbox" <?php echo $dades_usuari["PDI_Pas"]==1? "checked": "";?>/>
            </div>
            <div>
                <button id="modificar-usuari-submit" type="submit" class="neutre" name="submit">Modificar dades</button>
            </div>
        </form>
        </section>