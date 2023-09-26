<?php
  require_once(__DIR__."/header.php");
?>
<main class="main-content">
    <article>
        <?php
        if($_POST and $_POST["correu"])
        {
          echo $_POST["correu"];
          $url = "https://cruab.cat/recuperarcontrassenya.php?email=".$_POST["correu"]."&codi=44444444";
          $msg = "<html><head><title>Recuperacio Contrassenya</title></head><body>";
          $msg .= 'Clica en el següent enllaç <a href="'.$url.'">Recuperar Contrassenya</a> o copia\'l en el teu navegador:<br>'.$url;
          $msg .= "<br><br>".'Clica en el siguiente enlace <a href="'.$url.'">Recuperar Contraseña</a> o copialo en tu navegador:<br>'.$url;
          $msg .= "<br><br>".'Click on the following link <a href="'.$url.'">Restore Password</a> or copy it in your browser:<br>'.$url;
          $msg .= "</body></html>";
          $msg = wordwrap($msg,70);
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: <no_contesteu@cruab.cat>' . "\r\n";
          $headers .= 'Reply-to: <no_contesteu@cruab.cat>' . "\r\n";
          if(mail($_POST["correu"], "Recuperacio contrassenya", $msg, $headers))#, "", "no_contesteu@cruab.cat", "Renunciode-36"))
          {
            echo "The email was successfully sent.";
            #return true;#
          }
          else
          {
            echo "The email was NOT sent.";
            #return false;
          }
          #return true;
        }
      ?>
      <form action="correu_prova.php" method="post">
        <label for="correu">Correu </label>
        <input name="correu" type="email" required>
        <input type=submit class="neutre">
      </form>
    </article>
    
</main>
<?php
  require_once(__DIR__."/footer.php");
?>