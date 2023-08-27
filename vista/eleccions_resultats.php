<div class="taula-eleccions">
	<h1>Resultats de les Votacions</h1>
	<table>
		<tr>
			<?php
			for($columna=0; $columna<sizeof($llistes); $columna++)
			{
			?>
				<td>
					<h3><?php echo getNomLlista($conn, $llistes[$columna]);?></h3>
				</td>
			<?php
			}	
			?>
			<?php
			if(sizeof($llistes)==1)
			{
			?>
				<td>
					<h3>En contra</h3>
				</td>
			<?php
			}	
			?>
				<td>
					<h3>En blanc</h3>
				</td>
				<td>
					<h3>La Madre de Perry, Loquendo Vice, 42, Nice Closed Poll, David Bustamante</h3>
				</td>
		</tr>
		<?php
		for($fila=0; $fila<$membres_maxims; $fila++)
		{
		?>
			<tr>
			<?php
			for($columna=0; $columna<sizeof($llistes); $columna++)
			{
			?>
				<td>
					<?php
					if($fila<$numero_membres[$columna])
					{
						?>
						<h5><?php echo getTitol($fila);?></h5>
						<span><?php echo getNomUsuari($conn, explode(",",$membres_llistes[$columna])[$fila]);?></span>
						<?php
					}
					?>
				</td>
			<?php
			}	
			?>
			<?php
			if(sizeof($llistes)==1)
			{
			?>
				<td>
					
				</td>
			<?php
			}	
			?>
				<td>
					
				</td>
			</tr>
			<?php
		}
		?>
		<tr>
		<?php
		for($columna=0; $columna<sizeof($llistes); $columna++)
		{
		?>
			<td>
				<h5>Vots</h5>
				<span><?php 
				if(array_key_exists($llistes[$columna], $vots))
					echo $vots[$llistes[$columna]];
				else
					echo 0;
				?></span>
			</td>
		<?php
		}	
		?>
		<?php
		if(sizeof($llistes)==1)
		{
		?>
			<td>
				<h5>Vots</h5>
				<span><?php 
				if(array_key_exists("contra", $vots))
					echo $vots["contra"];
				else
					echo 0;
				?></span>
			</td>
		<?php
		}	
		?>
			<td>
				<h5>Vots</h5>
				<span><?php 
				if(array_key_exists("blanc", $vots))
					echo $vots["blanc"];
				else
					echo 0;
				?></span>
			</td>
			<td>
				<h5>Vots</h5>
				<span><?php 
				if(array_key_exists("nul", $vots))
					echo $vots["nul"];
				else
					echo 0;
				?></span>
			</td>
		</tr>
		<?php
		if($gestio)
		{
		?>
			<tr>
			<?php
			for($columna=0; $columna<sizeof($llistes); $columna++)
			{
			?>
				<td>
					<div id="div-seleccionar-llista_<?php echo $llistes[$columna]?>">
						<button class="seleccionar-llista neutre" id="seleccionar-llista_<?php echo $llistes[$columna]?>">Seleccionar aquesta llista com a guanyadora</button>
					</div>
				</td>
			<?php
			}	
			?>
			</tr>
		<?php
		}
		?>
	</table>

</div>