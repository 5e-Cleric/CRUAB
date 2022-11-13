<?php
  include "header.php"
?>
  <main class="main-content">
    <article>
      <table>
        <thead>
          <tr>
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
          <td>
            <img>
          </td>
          <td></td>
          <td>
            <button></button>
            <button></button>
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