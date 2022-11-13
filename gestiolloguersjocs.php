<?php
  include "header.php"
?>
  <main class="main-content">
    <article>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Cognom</th>
            <th>Joc</th>
            <th>Còpia</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- datos opcionales pueden incluirse aquí opcionalmente -->
        </tbody>
      </table>

      <template id="jocsdetaula">
        <tr>
          <td></td>
          <td></td>
          <td class="tableImageHolder">
            <img>
          </td>
          <td class="copia"></td>
          <td>
            <button class="boto-reserva constructiu"></button>
            <button class="boto-reserva destructiu"></button>
          </td>
        </tr>
      </template>
    </article>
    <?php
      include "boto_pujar.php"
    ?>
  </main>

  

<?php
  include "footer.php"
?>