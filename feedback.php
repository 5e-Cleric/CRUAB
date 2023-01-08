<?php
require_once(__DIR__ . "/header.php");
?>
<main class="main-content column center">
    <article>
        <section>
            <h2>Preguntes Freqüents</h2>
            <details>
                <summary>Com em faig membre?</summary>
                <p>Per ser membre s'ha de contactar a un membre de la Junta, i pagar-li el preu corresponent de 15€,
                    això et
                    fa automàticament membre vitalici, tot i que l'expulsió es possible.</p>
            </details>
            <details>
                <summary>Puc ser membre sense estudiar a la UAB?</summary>
                <p>Si, estudiar a la UAB no es un requisit per ser membre, tot i que és habitual.</p>
            </details>
            <details>
                <summary>Tinc moltes idees sobre coses que es podrien fer al club, amb qui hauria de contactar?
                </summary>
                <p>El CRUAB funciona amb comissions i grups de treball, cadascuna encarregada d'una feina concreta, si
                    vas
                    a la pàgina de <a href="comissions.php">comissions</a>, podràs veure quines existeixen, que fan i
                    qui en
                    forma part, si no trobes res que t'ajudi, sempre pots demanar la creació d'una nova comissió a
                    qualsevol
                    membre de la Junta.</p>
            </details>
            <details>
                <summary>Vull jugar a rol, però no tinc amics que en sapiguen o puguin jugar, el CRUAB em pot ajudar?
                </summary>
                <p>I tant! El CRUAB té una base de dades de màsters feta per la gent com tú, consulta-la per saber qui
                    esta
                    disponible per ensenyar-te i/o fer de master!</p>
            </details>
            <details>
                <summary>Tinc impediments visuals, puc demanar que es canviin les fonts/els colors de la web per mí?
                </summary>
                <p>La web és per tots els socis, pero l'accessibilitat és molt important, per això tens un botó al teu
                    perfil per accedir a diverses opcions per ajudar-te, si no trobes el que busques, envia-ns una
                    proposta
                    mitjançant la secció anomenada <a href="#feedback">feedback</a>.</p>
            </details>
        </section>


    </article>
    <article>
        <h2 clas="page-title" id="feedback">Feedback o altres preguntes</h2>
        <section class="article">

            <form action="" class="column a-start gap">
                <h5 class="titol">Envia-ns la teva opinió!</h5>
                <textarea name="feedback content" id="feedback-content" cols="30" column="10"></textarea>
                <button class="constructiu" type="submit">Submit</button>
            </form>
            <br>
            <span>DISCLAIMER: La teva opinió serà enviada a un correu brossa que llegeix un neozelandès deprimit els
                dimecres al matí.</span>


        </section>

    </article>
</main>
<?php
require_once(__DIR__ . "/footer.php");
?>