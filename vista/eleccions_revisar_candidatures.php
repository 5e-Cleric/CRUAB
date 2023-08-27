<div class="taula-eleccions">
	<h1>Llistes pendents de revisió</h1>
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
		<tr>
		<?php
		}
		for($columna=0; $columna<sizeof($llistes); $columna++)
		{
		?>
			<td>
				<div id="gestio-llista_<?php echo $llistes[$columna]?>">
					<button class="aprovar-llista neutre" id="aprovar-llista_<?php echo $llistes[$columna]?>">Aprovar aquesta llista</button>
					<button class="denegar-llista neutre" id="denegar-llista_<?php echo $llistes[$columna]?>">Denegar aquesta llista</button>
				</div>
			</td>
		<?php
		}	
		?>
		</tr>
	</table>

</div>