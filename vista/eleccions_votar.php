<div class="taula-eleccions">
	<h1>Candidatures</h1>
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
						<span><?php echo getNomUsuari($conn,explode(",",$membres_llistes[$columna])[$fila]);?></span>
						<?php
					}
					?>
				</td>
			<?php
			}	
			?>
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
				<?php
				if(!$membre_actiu)
				{
				?>
				<p class="info-general">No constes al cens, de manera que no pots votar. Si creus que això és un error, contacta amb la Junta Electoral, si us plau.</p>
				<?php
				}
				else
				{
				?>
					<button class="votar-llista neutre" id="votar-llista_<?php echo $llistes[$columna]?>">Votar aquesta llista</button>
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
				<button class="votar-llista neutre" id="votar-llista_contra">Votar en Contra</button>
			</td>
		<?php
		}	
		?>
			<td>
				<button class="votar-llista neutre" id="votar-llista_blanc">Votar en Blanc</button>
			</td>
			<td>
				<button class="votar-llista neutre" id="votar-llista_nul">Votar Nul</button>
			</td>
		</tr>
	</table>

</div>