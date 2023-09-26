 <section id="user-page" class="column">
            <div class="column center">
                <div class="user-image column center">
                    <img src="https://unsplash.it/400" alt="imatge de perfil">
                </div>
                <div id="info-usuari">
                    <label for="nom">Nom:</label>
                    <span id="nom"><?php echo getNomUsuari($conn, $_SESSION['user_id']);?></span>
                    <br>
                    <label for="correu">Correu:</label>
                    <span id="correu"><?php echo $dades_usuari == -1 ? "correu@cruab.cat" : $dades_usuari["Email"];?></span>
                    <br>
                    <label for="genere">Gènere:</label>
                    <span id="genere"><?php echo $dades_usuari == -1 ? "No-Binari" : $dades_usuari["Genere"];?></span>
                    <br>
                    <label for="pronoms">Pronoms:</label>
                    <span id="pronoms"><?php echo $dades_usuari == -1 ? "Neutres" : $dades_usuari["Pronoms"];?></span>
                    <br>
                    <label for="telefon">Telèfon:</label>
                    <span id="telefon"><?php echo $dades_usuari == -1 ? "666 666 666" : $dades_usuari["Telefon"];?></span>
                    <br>
                    <label for="naixement">Data de naixement (Any/Mes/Dia):</label>
                    <span id="naixement"><?php echo $dades_usuari == -1 ? "1900/07/01" : $dades_usuari["Data_Naixement"];?></span>
                    <br>
                    <label for="ingres">Any d'ingrés al CRUAB:</label>
                    <span id="ingres"><?php echo $dades_usuari == -1 ? "1994" : $dades_usuari["Any_Ingres"];?></span>
                    <br>
                    <label for="facultat">Facultat:</label>
                    <span id="facultat"><?php echo $dades_usuari == -1 ? "Ciències" : $dades_usuari["Facultat"]; ?></span>
                    <br>
                    <label for="curs">Curs:</label>
                    <span id="curs"><?php echo $dades_usuari == -1 ? "3r" : $dades_usuari["Curs"];?></span>
                    <br>
                    <label for="pdipas">Formes part del PDI/PAS?:</label>
                    <span id="pdipas"><?php echo $dades_usuari == -1 ? "No" : ($dades_usuari["PDI_Pas"] == 1 ? "Sí" : "No");?></span>
                </div>
                <br>
                <button class="neutre" id="actualitzar-perfil">Editar el meu perfil</button>
            </div>
            <div id="user-info">
                <p id="activitat"></p>
                <br>
                <br>
                </div>
        </section>