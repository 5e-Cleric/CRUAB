<?php
  require_once(__DIR__."/header.php");
?>
  <main class="main-content">
    <article>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Cognom</th>
            <th>E-mail</th>
            <th>Sobrenom</th>
          </tr>
        </thead>
        <tbody>
          <!-- datos opcionales pueden incluirse aquí opcionalmente -->
        </tbody>
      </table>

      <template id="membres">
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <button class="constructiu"></button>
            <button class="destructiu"></button>
          </td>
        </tr>
      </template>
    </article>
    <?php
      require_once(__DIR__."/boto_pujar.php");
    ?>
  </main>

  

<?php
  require_once(__DIR__."/footer.php");
?>