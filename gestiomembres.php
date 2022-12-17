<?php
  require_once(__DIR__."/header.php");
?>
  <main class="main-content">
    <article>
      <br>
      <h1>Membres Actius</h1>
      <table id="actius">
        <thead>
          <tr>
            <th>Numero de soci</th>
            <th>Nom</th>
            <th>Primer cognom</th>
            <th>Segon cognom</th>
            <th>E-mail</th>
            <th>Sobrenom</th>
          </tr>
        </thead>
        <tbody>
          <!-- datos opcionales pueden incluirse aquí opcionalmente -->
        </tbody>
      </table>

      <br>
      <br>
    <h1>Membres Inactius</h1>
      <table id="inactius">
        <thead>
          <tr>
            <th>Numero de soci</th>
            <th>Nom</th>
            <th>Primer cognom</th>
            <th>Segon cognom</th>
            <th>E-mail</th>
            <th>Sobrenom</th>
          </tr>
        </thead>
        <tbody>
          <!-- datos opcionales pueden incluirse aquí opcionalmente -->
        </tbody>
      </table>
      <br>
      <br>

      <template id="membres">
        <tr>
          <td class="numsoci"></td>
          <td class="nom"></td>
          <td class="primercognom"></td>
          <td class="segoncognom"></td>
          <td class="email"></td>
          <td class="pseudonim"></td>
          <td class="boto">
            <button class="destructiu">Eliminar membre</button>
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