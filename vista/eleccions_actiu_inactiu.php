<div id="estat-cens">
	<h1>Canviar el teu estat al cens</h1>
	<span>Ara mateix constes com a <?php echo $membre_actiu ?  "actiu" : "inactiu"; ?> al cens.</span>
	<?php
	if(!$membre_actiu)
	{
		?>
		<button id="cens-actiu" class="neutre">Constar com a membre actiu al cens</button>
		<?php
	}
	else
	{
		?>
		<button id="cens-inactiu" class="neutre">Constar com a membre inactiu al cens</button>
		<?php
	}
	?>
</div>