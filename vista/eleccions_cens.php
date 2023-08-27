<div class="info-general">
	<h1>Cens de Membres Actius per les Eleccions</h1>
	<ul id="llista-cens">
		<?php
		for($cnt = 0; $cnt < sizeof($actius); $cnt++)
		{
		?>
			<li><?php echo getNomUsuari($conn, $actius[$cnt]);?></li>
		<?php
		}
		?>
	</ul>
</div>