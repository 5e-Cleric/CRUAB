 <section id="user-page" class="column center">
    <h3>Donar-se d'alta com a soci del CRUAB</h3>
    <br>
        <form name="form-registre" action="javascript:void(0);" id="form-registre"  method="post">
            <div class="form-option">
                <label for="correu">Correu electrònic:</label>
                <input id="correu" name="correu" type="email" required>
            </div>
            <div class="form-option">
                <label for="nom">Nom:</label>
                <input id="nom" name="nom"required>
            </div>
            <div class="form-option">
                <label for="cognoms">Cognoms:</label>
                <input id="cognoms" name="cognoms" required>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="genere">Gènere</label>
                <input id="genere" name="genere" type="text" list="generes" />
                <datalist id="generes">
                  <option>No Binari</option>
                  <option>Dona</option>
                  <option>Home</option>
                  <option>Prefereixo no dir-ho</option>
                </datalist>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="pronoms">Pronoms</label>
                <input id="pronoms" name="pronoms" type="text" list="pronoms-list" />
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
                <input id="naixement" name="naixement" type="date" required>
            </div>
            <div class="form-option">
                <label for="telefon">Telèfon:</label>
                <input id="telefon" name="telefon" required>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="facultat">Facultat de la UAB</label>
                <select id="facultat" name="facultat"  required/>
                  <option>Escola de Doctorat</option>
                  <option>Escola d'Enginyeria</option>
                  <option>Escola de Postgrau</option>
                  <option>Facultat d'Economia i Empresa</option>
                  <option>Facultat de Biociències</option>
                  <option>Facultat de Ciències</option>
                  <option>Facultat de Ciències de l'Educació</option>
                  <option>Facultat de Ciències de la Comunicació</option>
                  <option>Facultat de Ciències Polítiques i Sociologia</option>
                  <option>Facultat de Dret</option>
                  <option>Facultat de Filosofia i Lletres</option>
                  <option>Facultat de Medicina</option>
                  <option>Facultat de Psicologia</option>
                  <option>Facultat de Traducció i Interpretació</option>
                  <option>Facultat de Veterinària</option>
                  <option>Cap</option>
                </select>
                
            </div>
            <div class="form-option">
                <label class="form-input-label" for="curs">Curs</label>
                <select id="curs" name="curs" required/>
                  <option>Primer</option>
                  <option>Segon</option>
                  <option>Tercer</option>
                  <option>Quart</option>
                  <option>Cinquè</option>
                  <option>Sisè</option>
                  <option>Setè</option>
                  <option>Vuitè</option>
                  <option>Graduat</option>
                  <option>Màster</option>
                  <option>Doctorat</option>
                  <option>Postgrau</option>
                  <option>Cap</option>
                </select>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="pdipas">PDI/PAS</label>
                <input id="pdipas" name="pdipas" type="checkbox"/>
            </div>
            <br>
            <div class="form-option">
                <label class="form-input-label" for="whatsapp">Vull que se m'afegeixi als grups de Whatsapp del CRUAB</label>
                <input id="whatsapp" name="whatsapp" type="checkbox"/>
            </div>
            <div class="form-option">
                <label class="form-input-label" for="telegram">Vull que se m'afegeixi als grups de Telegram del CRUAB</label>
                <input id="telegram" name="telegram" type="checkbox"/>
            </div>
            <br>
            <p>La sol·licitud per ser afegit a grups de Whatsapp i/o Telegram implica l'acceptació de la política de Protecció de Dades, i atorga el consentiment a la Junta Directiva del CRUAB i als responsables de la Comissió de Treball que regula el funcionament dels grups de missatgeria instantània a tractar aquelles dades personals que siguin necessàries per a la incorporació als respectius grups. S'informa als socis que degut a les característiques de les aplicacions Whatsapp i Telegram, les dades personals necessàries per a la incorporació als grups, com poden ser un número de telèfon mòbil o un nom d'usuari, poden esdevenir públiques per a tots els membres del grup. La sol·licitud d'incorporació als grups de missatgeria implica l'acceptació d'aquestes condicions i el compromís dels socis a no comunicar a tercers les dades personals d'altres membres del grup sense el consentiment previ dels interessats.</p>
            <br>
            <div class="form-option">
                <label class="form-input-label" for="pppd">Accepto la Politica de Privacitat i Protecció de Dades</label>
                <input id="pppd" name="pppd" type="checkbox" required/>
            </div>
            <br>
            <div>
                <button id="registrar-usuari-submit" type="submit" class="neutre" name="submit">Registrar-se</button>
            </div>
        </form>
        <span>Vols iniciar sessió? Clica <a href="login.php">Aquí</a></span>
        </section>