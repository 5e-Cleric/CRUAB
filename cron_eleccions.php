<?php
  require_once(__DIR__."/header.php");
?>
<main class="main-content">
    <article>
        <?php
        require_once(__DIR__."/model/eleccions.php");
        comprovarContador($conn);
      ?>
    </article>
    
</main>
<?php
  require_once(__DIR__."/footer.php");
?>